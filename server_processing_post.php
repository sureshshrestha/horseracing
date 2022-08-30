<?php
require_once('db.php');
 
$query = $conn->query("SELECT count(rows_id) FROM DatabaseHorsesUK2021");
$totalRecords = $query->fetch_row()[0];
 
$length = $_POST['length'];
$start = $_POST['start'];
 
$sql = "SELECT 
    `rows_id`,`date_race`,`time_race`,`tag_race`,`track`,`distance`,`type_race`,`code_race`,`horse_name`,`jockey`,`trainer`,`fav_order`,`position`,`tips`,`tips_rating`,`high`,`low`,`bsp`,`bpsp`,`winner_high`,`winner_sp`,`runners`,`available_place`,`placed_horses`,`b2l`,`nb_of_races`,`fav1c`,`fav2c`,`fav3c`,`fav4c`,`fav5c`,`fav6c`,`fav7c`,`fav8c`,`fav9c`,`fav10c`,`fav11c`,`fav12c`,`fav13c`,`fav14c`,`runnerb1`,`win_back1`,`win_layb1`,`lay_fav1c`,`runnerb2`,`win_back2`,`win_lay_2fav`,`lay_fav2c`,`runnerb3`,`win_back3`,`win_lay_3fav`,`lay_fav3c`,`runnerb4`,`win_back4`,`win_lay_4fav`,`lay_fav4c`,`runnerb5`,`win_back5`,`win_lay_5fav`,`lay_fav5c`,`runnerb6`,`win_back6`,`win_lay_6fav`,`lay_fav6c`,`runnerb7`,`win_back7`,`win_lay_7fav`,`lay_fav7c`,`runnerb8`,`win_back8`,`win_lay_8fav`,`lay_fav8c`,`runnerb9`,`win_back9`,`win_lay_9fav`,`lay_fav9c`,`runnerb10`,`win_back10`,`win_lay_10fav`,`lay_fav10c`,`runnerb11`,`win_back11`,`win_lay_11fav`,`lay_fav11c`,`runnerb12`,`win_back12`,`win_lay_12fav`,`lay_fav12c`,`runner13`,`win_back13`,`win_lay_13fav`,`lay_fav13c`,`runnerb14`,`win_back14`,`win_lay_14fav`,`lay_fav14c`,`lwl1c`,`lwl2c`,`lwl3c`,`lwl4c`,`lwl5c`,`lwl6c`,`lwl7c`,`lwl8c`,`lwl9c`,`lwl10c`,`lwl11c`,`lwl12c`,`lwl13c`,`lwl14c`,`bp_fav1c`,`bp_fav2c`,`bp_fav3c`,`bp_fav4c`,`bp_fav5c`,`bp_fav6c`,`bp_fav7c`,`bp_fav8c`,`bp_fav9c`,`bp_fav10c`,`bp_fav11c`,`bp_fav12c`,`bp_fav13c`,`bp_fav14c`,`winner_bp1`,`winner_lbp1`,`lbp_fav1c`,`winner_bp2`,`winner_lbp2`,`lbp_fav2c`,`winner_bp3`,`winner_lbp3`,`lbp_fav3c`,`winner_bp4`,`winner_lbp4`,`lbp_fav4c`,`winner_bp5`,`winner_lbp5`,`lbp_fav5c`,`winner_bp6`,`winner_lbp6`,`lbp_fav6c`,`winner_bp7`,`winner_lbp7`,`lbp_fav7c`,`winner_bp8`,`winner_lbp8`,`lbp_fav8c`,`winner_bp9`,`winner_lbp9`,`lbp_fav9c`,`winner_bp10`,`winner_lbp10`,`lbp_fav10c`,`winner_bp11`,`winner_lbp11`,`lbp_fav11c`,`winner_bp12`,`winner_lbp12`,`lbp_fav12c`,`winner_bp13`,`winner_lbp13`,`lbp_fav13c`,`winner_bp14`,`winner_lbp14`,`lbp_fav14c`,`fav1c_tip`,`winner_tip1`,`winner_laytip1`,`fav2c_tip`,`winner_tip2`,`winner_laytip2`,`fav3c_tip`,`winner_tip3`,`winner_laytip3`,`fav4c_tip`,`winner_tip4`,`winner_laytip4`,`fav5c_tip`,`winner_tip5`,`winner_laytip5`,`fav6c_tip`,`winner_tip6`,`winner_laytip6`,`fav7c_tip`,`winner_tip7`,`winner_laytip7`,`fav8c_tip`,`winner_tip8`,`winner_laytip8`,`fav9c_tip`,`winner_tip9`,`winner_laytip9`,`fav10c_tip`,`winner_tip10`,`winner_laytip10`,`fav11c_tip`,`winner_tip11`,`winner_laytip11`,`fav12c_tip`,`winner_tip12`,`winner_laytip12`,`fav13c_tip`,`winner_tip13`,`winner_laytip13`,`fav14ctip`,`winner_tip14`,`winner_laytip14`,`layfav1ctip`,`layfav2ctip`,`layfav3ctip`,`layfav4ctip`,`layfav5ctip`,`layfav6ctip`,`layfav7ctip`,`layfav8ctip`,`layfav9ctip`,`layfav10ctip`,`layfav11ctip`,`layfav12ctip`,`layfav13ctip`,`layfav14ctip`
    FROM DatabaseHorsesUK2021";
 
if (isset($POST['search']) && !empty($POST['search']['value'])) {
    $search = $POST['search']['value'];
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
        $row['tag_race'],
        $row['track'],
        $row['distance'],
        $row['type_race'],
        $row['code_race'],
        $row['horse_name'],
        $row['jockey'],
        $row['trainer'],
        $row['fav_order'],
        $row['position'],
        $row['tips'],
        $row['tips_rating'],
        $row['high'],
        $row['low'],
        $row['bsp'],
        $row['bpsp'],
        $row['winner_high'],
        $row['winner_sp'],
        $row['runners'],
        $row['available_place'],
        $row['placed_horses'],
        $row['b2l'],
        $row['nb_of_races'],
        $row['fav1c'],
        $row['fav2c'],
        $row['fav3c'],
        $row['fav4c'],
        $row['fav5c'],
        $row['fav6c'],
        $row['fav7c'],
        $row['fav8c'],
        $row['fav9c'],
        $row['fav10c'],
        $row['fav11c'],
        $row['fav12c'],
        $row['fav13c'],
        $row['fav14c'],
        $row['runnerb1'],
        $row['win_back1'],
        $row['win_layb1'],
        $row['lay_fav1c'],
        $row['runnerb2'],
        $row['win_back2'],
        $row['win_lay_2fav'],
        $row['lay_fav2c'],
        $row['runnerb3'],
        $row['win_back3'],
        $row['win_lay_3fav'],
        $row['lay_fav3c'],
        $row['runnerb4'],
        $row['win_back4'],
        $row['win_lay_4fav'],
        $row['lay_fav4c'],
        $row['runnerb5'],
        $row['win_back5'],
        $row['win_lay_5fav'],
        $row['lay_fav5c'],
        $row['runnerb6'],
        $row['win_back6'],
        $row['win_lay_6fav'],
        $row['lay_fav6c'],
        $row['runnerb7'],
        $row['win_back7'],
        $row['win_lay_7fav'],
        $row['lay_fav7c'],
        $row['runnerb8'],
        $row['win_back8'],
        $row['win_lay_8fav'],
        $row['lay_fav8c'],
        $row['runnerb9'],
        $row['win_back9'],
        $row['win_lay_9fav'],
        $row['lay_fav9c'],
        $row['runnerb10'],
        $row['win_back10'],
        $row['win_lay_10fav'],
        $row['lay_fav10c'],
        $row['runnerb11'],
        $row['win_back11'],
        $row['win_lay_11fav'],
        $row['lay_fav11c'],
        $row['runnerb12'],
        $row['win_back12'],
        $row['win_lay_12fav'],
        $row['lay_fav12c'],
        $row['runner13'],
        $row['win_back13'],
        $row['win_lay_13fav'],
        $row['lay_fav13c'],
        $row['runnerb14'],
        $row['win_back14'],
        $row['win_lay_14fav'],
        $row['lay_fav14c'],
        $row['lwl1c'],
        $row['lwl2c'],
        $row['lwl3c'],
        $row['lwl4c'],
        $row['lwl5c'],
        $row['lwl6c'],
        $row['lwl7c'],
        $row['lwl8c'],
        $row['lwl9c'],
        $row['lwl10c'],
        $row['lwl11c'],
        $row['lwl12c'],
        $row['lwl13c'],
        $row['lwl14c'],
        $row['bp_fav1c'],
        $row['bp_fav2c'],
        $row['bp_fav3c'],
        $row['bp_fav4c'],
        $row['bp_fav5c'],
        $row['bp_fav6c'],
        $row['bp_fav7c'],
        $row['bp_fav8c'],
        $row['bp_fav9c'],
        $row['bp_fav10c'],
        $row['bp_fav11c'],
        $row['bp_fav12c'],
        $row['bp_fav13c'],
        $row['bp_fav14c'],
        $row['winner_bp1'],
        $row['winner_lbp1'],
        $row['lbp_fav1c'],
        $row['winner_bp2'],
        $row['winner_lbp2'],
        $row['lbp_fav2c'],
        $row['winner_bp3'],
        $row['winner_lbp3'],
        $row['lbp_fav3c'],
        $row['winner_bp4'],
        $row['winner_lbp4'],
        $row['lbp_fav4c'],
        $row['winner_bp5'],
        $row['winner_lbp5'],
        $row['lbp_fav5c'],
        $row['winner_bp6'],
        $row['winner_lbp6'],
        $row['lbp_fav6c'],
        $row['winner_bp7'],
        $row['winner_lbp7'],
        $row['lbp_fav7c'],
        $row['winner_bp8'],
        $row['winner_lbp8'],
        $row['lbp_fav8c'],
        $row['winner_bp9'],
        $row['winner_lbp9'],
        $row['lbp_fav9c'],
        $row['winner_bp10'],
        $row['winner_lbp10'],
        $row['lbp_fav10c'],
        $row['winner_bp11'],
        $row['winner_lbp11'],
        $row['lbp_fav11c'],
        $row['winner_bp12'],
        $row['winner_lbp12'],
        $row['lbp_fav12c'],
        $row['winner_bp13'],
        $row['winner_lbp13'],
        $row['lbp_fav13c'],
        $row['winner_bp14'],
        $row['winner_lbp14'],
        $row['lbp_fav14c'],
        $row['fav1c_tip'],
        $row['winner_tip1'],
        $row['winner_laytip1'],
        $row['fav2c_tip'],
        $row['winner_tip2'],
        $row['winner_laytip2'],
        $row['fav3c_tip'],
        $row['winner_tip3'],
        $row['winner_laytip3'],
        $row['fav4c_tip'],
        $row['winner_tip4'],
        $row['winner_laytip4'],
        $row['fav5c_tip'],
        $row['winner_tip5'],
        $row['winner_laytip5'],
        $row['fav6c_tip'],
        $row['winner_tip6'],
        $row['winner_laytip6'],
        $row['fav7c_tip'],
        $row['winner_tip7'],
        $row['winner_laytip7'],
        $row['fav8c_tip'],
        $row['winner_tip8'],
        $row['winner_laytip8'],
        $row['fav9c_tip'],
        $row['winner_tip9'],
        $row['winner_laytip9'],
        $row['fav10c_tip'],
        $row['winner_tip10'],
        $row['winner_laytip10'],
        $row['fav11c_tip'],
        $row['winner_tip11'],
        $row['winner_laytip11'],
        $row['fav12c_tip'],
        $row['winner_tip12'],
        $row['winner_laytip12'],
        $row['fav13c_tip'],
        $row['winner_tip13'],
        $row['winner_laytip13'],
        $row['fav14ctip'],
        $row['winner_tip14'],
        $row['winner_laytip14'],
        $row['layfav1ctip'],
        $row['layfav2ctip'],
        $row['layfav3ctip'],
        $row['layfav4ctip'],
        $row['layfav5ctip'],
        $row['layfav6ctip'],
        $row['layfav7ctip'],
        $row['layfav8ctip'],
        $row['layfav9ctip'],
        $row['layfav10ctip'],
        $row['layfav11ctip'],
        $row['layfav12ctip'],
        $row['layfav13ctip'],
        $row['layfav14ctip'],
    ];
}
 
echo json_encode([
    // 'draw' => $_GET['draw'],
    'recordsTotal' => $totalRecords,
    'recordsFiltered' => $totalRecords,
    'data' => $result,
]);

/*

// DB table to use
$table = 'DatabaseHorsesUK2021';
 
// Table's primary key
$primaryKey = 'rows_id';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case object
// parameter names
$columns = array(
    array( 'db' => 'first_name', 'dt' => 'first_name' ),
    array( 'db' => 'last_name',  'dt' => 'last_name' ),
    array( 'db' => 'position',   'dt' => 'position' ),
    array( 'db' => 'office',     'dt' => 'office' ),
    array(
        'db'        => 'start_date',
        'dt'        => 'start_date',
        'formatter' => function( $d, $row ) {
            return date( 'jS M y', strtotime($d));
        }
    ),
    array(
        'db'        => 'salary',
        'dt'        => 'salary',
        'formatter' => function( $d, $row ) {
            return '$'.number_format($d);
        }
    )
);
 
// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => 'Admin@123',
    'db'   => 'horses',
    'host' => 'localhost'
);
 
 ***/
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
// require( 'ssp.class.php' );
 
// echo json_encode(
//     SSP::simple( $_POST, $sql_details, $table, $primaryKey, $columns )
// );