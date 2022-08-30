<?php
require_once('db.php');
 
$query = $conn->query("SELECT count(rows_id) FROM DatabaseHorsesUK2021");
$totalRecords = $query->fetch_row()[0];
 
$length = $_GET['length'];
$start = $_GET['start'];
 
$sql = "SELECT 
    `rows_id`,`date_race`,`time_race`,`tag_race`,`track`,`distance`,`type_race`,`code_race`,`horse_name`,`jockey`,`trainer`,`fav_order`,`position`,`tips`,`tips_rating`,`high`,`low`,`bsp`,`bpsp`,`winner_high`,`winner_sp`,`runners`,`available_place`,`placed_horses`,`b2l`,`nb_of_races`,`fav1c`,`fav2c`,`fav3c`,`fav4c`,`fav5c`,`fav6c`,`fav7c`,`fav8c`,`fav9c`,`fav10c`,`fav11c`,`fav12c`,`fav13c`,`fav14c`,`runnerb1`,`win_back1`,`win_layb1`,`lay_fav1c`,`runnerb2`,`win_back2`,`win_lay_2fav`,`lay_fav2c`,`runnerb3`,`win_back3`,`win_lay_3fav`,`lay_fav3c`,`runnerb4`,`win_back4`,`win_lay_4fav`,`lay_fav4c`,`runnerb5`,`win_back5`,`win_lay_5fav`,`lay_fav5c`,`runnerb6`,`win_back6`,`win_lay_6fav`,`lay_fav6c`,`runnerb7`,`win_back7`,`win_lay_7fav`,`lay_fav7c`,`runnerb8`,`win_back8`,`win_lay_8fav`,`lay_fav8c`,`runnerb9`,`win_back9`,`win_lay_9fav`,`lay_fav9c`,`runnerb10`,`win_back10`,`win_lay_10fav`,`lay_fav10c`,`runnerb11`,`win_back11`,`win_lay_11fav`,`lay_fav11c`,`runnerb12`,`win_back12`,`win_lay_12fav`,`lay_fav12c`,`runner13`,`win_back13`,`win_lay_13fav`,`lay_fav13c`,`runnerb14`,`win_back14`,`win_lay_14fav`,`lay_fav14c`,`lwl1c`,`lwl2c`,`lwl3c`,`lwl4c`,`lwl5c`,`lwl6c`,`lwl7c`,`lwl8c`,`lwl9c`,`lwl10c`,`lwl11c`,`lwl12c`,`lwl13c`,`lwl14c`,`bp_fav1c`,`bp_fav2c`,`bp_fav3c`,`bp_fav4c`,`bp_fav5c`,`bp_fav6c`,`bp_fav7c`,`bp_fav8c`,`bp_fav9c`,`bp_fav10c`,`bp_fav11c`,`bp_fav12c`,`bp_fav13c`,`bp_fav14c`,`winner_bp1`,`winner_lbp1`,`lbp_fav1c`,`winner_bp2`,`winner_lbp2`,`lbp_fav2c`,`winner_bp3`,`winner_lbp3`,`lbp_fav3c`,`winner_bp4`,`winner_lbp4`,`lbp_fav4c`,`winner_bp5`,`winner_lbp5`,`lbp_fav5c`,`winner_bp6`,`winner_lbp6`,`lbp_fav6c`,`winner_bp7`,`winner_lbp7`,`lbp_fav7c`,`winner_bp8`,`winner_lbp8`,`lbp_fav8c`,`winner_bp9`,`winner_lbp9`,`lbp_fav9c`,`winner_bp10`,`winner_lbp10`,`lbp_fav10c`,`winner_bp11`,`winner_lbp11`,`lbp_fav11c`,`winner_bp12`,`winner_lbp12`,`lbp_fav12c`,`winner_bp13`,`winner_lbp13`,`lbp_fav13c`,`winner_bp14`,`winner_lbp14`,`lbp_fav14c`,`fav1c_tip`,`winner_tip1`,`winner_laytip1`,`fav2c_tip`,`winner_tip2`,`winner_laytip2`,`fav3c_tip`,`winner_tip3`,`winner_laytip3`,`fav4c_tip`,`winner_tip4`,`winner_laytip4`,`fav5c_tip`,`winner_tip5`,`winner_laytip5`,`fav6c_tip`,`winner_tip6`,`winner_laytip6`,`fav7c_tip`,`winner_tip7`,`winner_laytip7`,`fav8c_tip`,`winner_tip8`,`winner_laytip8`,`fav9c_tip`,`winner_tip9`,`winner_laytip9`,`fav10c_tip`,`winner_tip10`,`winner_laytip10`,`fav11c_tip`,`winner_tip11`,`winner_laytip11`,`fav12c_tip`,`winner_tip12`,`winner_laytip12`,`fav13c_tip`,`winner_tip13`,`winner_laytip13`,`fav14ctip`,`winner_tip14`,`winner_laytip14`,`layfav1ctip`,`layfav2ctip`,`layfav3ctip`,`layfav4ctip`,`layfav5ctip`,`layfav6ctip`,`layfav7ctip`,`layfav8ctip`,`layfav9ctip`,`layfav10ctip`,`layfav11ctip`,`layfav12ctip`,`layfav13ctip`,`layfav14ctip`
    FROM DatabaseHorsesUK2021";
 
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