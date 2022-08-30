<?php
require_once('db.php');
 
$query = $conn->query("SELECT count(rows_id) FROM DatabaseHorsesUK2021");
$totalRecords = $query->fetch_row()[0];
 
$length = $_GET['length'];
$start = $_GET['start'];
 
$sql = "SELECT rows_id, date_race, time_race FROM DatabaseHorsesUK2021";
 
if (isset($_GET['search']) && !empty($_GET['search']['value'])) {
    $search = $_GET['search']['value'];
    $sql .= " WHERE date_race like '%$search%' OR time_race like '%$search%'";
}
 
$sql .= " LIMIT $start, $length";
 
$query = $conn->query($sql);
$result = [];
while ($row = $query->fetch_assoc()) {
    $result[] = [
        $row['rows_id'],
        $row['date_race'],
        $row['time_race'],
    ];
}
 
echo json_encode([
    'draw' => $_GET['draw'],
    'recordsTotal' => $totalRecords,
    'recordsFiltered' => $totalRecords,
    'data' => $result,
]);