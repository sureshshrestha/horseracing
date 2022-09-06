<?php
 
/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simply to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
 
// DB table to use
$table = 'DatabaseHorsesUK2021';
 
// Table's primary key
$primaryKey = 'rows_id';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'rows_id', 'dt' => 0 ),
    array( 'db' => 'date_race', 'dt' => 1 ),
    array( 'db' => 'time_race', 'dt' => 2 ),
    array( 'db' => 'tag_race', 'dt' => 3 ),
    array( 'db' => 'track', 'dt' => 4 ),
    array( 'db' => 'distance', 'dt' => 5 ),
    array( 'db' => 'type_race', 'dt' => 6 ),
    array( 'db' => 'code_race', 'dt' => 7 ),
    array( 'db' => 'horse_name', 'dt' => 8 ),
    array( 'db' => 'jockey', 'dt' => 9 ),
    array( 'db' => 'trainer', 'dt' => 10 ),
    array( 'db' => 'fav_order', 'dt' => 11 ),
    array( 'db' => 'position', 'dt' => 12 ),
    array( 'db' => 'tips', 'dt' => 13 ),
    array( 'db' => 'tips_rating', 'dt' => 14 ),
    array( 'db' => 'high', 'dt' => 15 ),
    array( 'db' => 'low', 'dt' => 16 ),
    array( 'db' => 'bsp', 'dt' => 17 ),
    array( 'db' => 'bpsp', 'dt' => 18 ),
    array( 'db' => 'winner_high', 'dt' => 19 ),
    array( 'db' => 'winner_sp', 'dt' => 20 ),
    array( 'db' => 'runners', 'dt' => 21 ),
    array( 'db' => 'available_place', 'dt' => 22 ),
    array( 'db' => 'placed_horses', 'dt' => 23 ),
    array( 'db' => 'b2l', 'dt' => 24 ),
    array( 'db' => 'nb_of_races', 'dt' => 25),
    array( 'db' => 'fav1c', 'dt' => 26 ),
    array( 'db' => 'fav2c', 'dt' => 27 ),
    array( 'db' => 'fav3c', 'dt' => 28 ),
    array( 'db' => 'fav4c', 'dt' => 29 ),
    array( 'db' => 'fav5c', 'dt' => 30 ),
    array( 'db' => 'fav6c', 'dt' => 31 ),

    array( 'db' => 'fav7c', 'dt' => 32 ),
    array( 'db' => 'fav8c', 'dt' => 33 ),
    array( 'db' => 'fav9c', 'dt' => 34 ),
    array( 'db' => 'fav10c', 'dt' => 35 ),
    array( 'db' => 'fav11c', 'dt' => 36 ),

    // array( 'db' => 'fav12c', 'dt' => 37 ),
    // array( 'db' => 'fav13c', 'dt' => 38 ),
    // array( 'db' => 'fav14c', 'dt' => 39 ),
    // array( 'db' => 'runnerb1', 'dt' => 40 )
    // array( 'db' => 'win_back1', 'dt' => 41 ),
    // array( 'db' => 'win_layb1', 'dt' => 42 ),
    // array( 'db' => 'lay_fav1c', 'dt' => 43 ),
    // array( 'db' => 'runnerb2', 'dt' => 44 ),
    // array( 'db' => 'win_back2', 'dt' => 45 ),
    // array( 'db' => 'win_lay_2fav', 'dt' => 46 ),
    // array( 'db' => 'lay_fav2c', 'dt' => 47 ),
    // array( 'db' => 'runnerb3', 'dt' => 48 ),
    // array( 'db' => 'win_back3', 'dt' => 49 ),
    // array( 'db' => 'win_lay_3fav', 'dt' => 50 ),
    // array( 'db' => 'lay_fav3c', 'dt' => 51 ),
    // array( 'db' => 'runnerb4', 'dt' => 52 ),
    // array( 'db' => 'win_back4', 'dt' => 53 ),
    // array( 'db' => 'win_lay_4fav', 'dt' => 54 ),
    // array( 'db' => 'lay_fav4c', 'dt' => 55 ),

    // array( 'db' => 'runnerb5', 'dt' => 56 ),
    // array( 'db' => 'win_back5', 'dt' => 57 ),
    // array( 'db' => 'win_lay_5fav', 'dt' => 58 ),
    // array( 'db' => 'lay_fav5c', 'dt' => 59 ),
    // array( 'db' => 'runnerb6', 'dt' => 60 ),
    // array( 'db' => 'win_back6', 'dt' => 61 ),
    // array( 'db' => 'win_lay_6fav', 'dt' => 62 ),
    // array( 'db' => 'lay_fav6c', 'dt' => 63 ),
    // array( 'db' => 'runnerb7', 'dt' => 64 ),
    // array( 'db' => 'win_back7', 'dt' => 65 ),
    // array( 'db' => 'win_lay_7fav', 'dt' => 66 ),
    // array( 'db' => 'lay_fav7c', 'dt' => 67 ),
    // array( 'db' => 'runnerb8', 'dt' => 68 ),
    // array( 'db' => 'win_back8', 'dt' => 69 ),
    // array( 'db' => 'win_lay_8fav', 'dt' => 70 ),
    // array( 'db' => 'lay_fav8c', 'dt' => 71 ),
    // array( 'db' => 'runnerb9', 'dt' => 72 ),
    // array( 'db' => 'win_back9', 'dt' => 73 ),
    // array( 'db' => 'win_lay_9fav', 'dt' => 74 ),
    // array( 'db' => 'lay_fav9c', 'dt' => 75 ),
    // array( 'db' => 'runnerb10', 'dt' => 76 ),
    // array( 'db' => 'win_back10', 'dt' => 77 ),
    // array( 'db' => 'win_lay_10fav', 'dt' => 78 ),
    // array( 'db' => 'lay_fav10c', 'dt' => 79 ),
    // array( 'db' => 'runnerb11', 'dt' => 80 ),
    // array( 'db' => 'win_back11', 'dt' => 81 ),
    // array( 'db' => 'win_lay_11fav', 'dt' => 82 ),
    // array( 'db' => 'lay_fav11c', 'dt' => 83 ),
    // array( 'db' => 'runnerb12', 'dt' => 84 ),
    // array( 'db' => 'win_back12', 'dt' => 85 ),
    // array( 'db' => 'win_lay_12fav', 'dt' => 86 ),
    // array( 'db' => 'lay_fav12c', 'dt' => 87 ),
    // array( 'db' => 'runner13', 'dt' => 88 ),
    // array( 'db' => 'win_back13', 'dt' => 89 ),
    // array( 'db' => 'win_lay_13fav', 'dt' => 90 ),
    // array( 'db' => 'lay_fav13c', 'dt' => 91 ),
    // array( 'db' => 'runnerb14', 'dt' => 92 ),
    // array( 'db' => 'win_back14', 'dt' => 93 ),
    // array( 'db' => 'win_lay_14fav', 'dt' => 94 ),
    // array( 'db' => 'lay_fav14c', 'dt' => 95 ),
    // array( 'db' => 'lwl1c', 'dt' => 96 ),
    // array( 'db' => 'lwl2c', 'dt' => 97 ),
    // array( 'db' => 'lwl3c', 'dt' => 98 ),
    // array( 'db' => 'lwl4c', 'dt' => 99 ),
    // array( 'db' => 'lwl5c', 'dt' => 100 ),
    // array( 'db' => 'lwl6c', 'dt' => 101 ),
    // array( 'db' => 'lwl7c', 'dt' => 102 ),
    // array( 'db' => 'lwl8c', 'dt' => 103 ),
    // array( 'db' => 'lwl9c', 'dt' => 104 ),
    // array( 'db' => 'lwl10c', 'dt' => 105 ),
    // array( 'db' => 'lwl11c', 'dt' => 106 ),
    // array( 'db' => 'lwl12c', 'dt' => 107 ),
    // array( 'db' => 'lwl13c', 'dt' => 108 ),
    // array( 'db' => 'lwl14c', 'dt' => 109 ),
    // array( 'db' => 'bp_fav1c', 'dt' => 110 ),
    // array( 'db' => 'bp_fav2c', 'dt' => 111 ),
    // array( 'db' => 'bp_fav3c', 'dt' => 112 ),
    // array( 'db' => 'bp_fav4c', 'dt' => 113 ),
    // array( 'db' => 'bp_fav5c', 'dt' => 114 ),
    // array( 'db' => 'bp_fav6c', 'dt' => 115 ),
    // array( 'db' => 'bp_fav7c', 'dt' => 116 ),
    // array( 'db' => 'bp_fav8c', 'dt' => 117 ),
    // array( 'db' => 'bp_fav9c', 'dt' => 118 ),
    // array( 'db' => 'bp_fav10c', 'dt' => 119 ),
    // array( 'db' => 'bp_fav11c', 'dt' => 120 ),
    // array( 'db' => 'bp_fav12c', 'dt' => 121 ),
    // array( 'db' => 'bp_fav13c', 'dt' => 122 ),
    // array( 'db' => 'bp_fav14c', 'dt' => 123 ),
    // array( 'db' => 'winner_bp1', 'dt' => 124 ),
    // array( 'db' => 'winner_lbp1', 'dt' => 125 ),
    // array( 'db' => 'lbp_fav1c', 'dt' => 126 ),
    // array( 'db' => 'winner_bp2', 'dt' => 127 ),
    // array( 'db' => 'winner_lbp2', 'dt' => 128 ),
    // array( 'db' => 'lbp_fav2c', 'dt' => 129 ),
    // array( 'db' => 'winner_bp3', 'dt' => 130 ),
    // array( 'db' => 'winner_lbp3', 'dt' => 131 ),
    // array( 'db' => 'lbp_fav3c', 'dt' => 132 ),
    // array( 'db' => 'winner_bp4', 'dt' => 133 ),
    // array( 'db' => 'winner_lbp4', 'dt' => 134 ),
    // array( 'db' => 'lbp_fav4c', 'dt' => 135 ),
    // array( 'db' => 'winner_bp5', 'dt' => 136 ),
    // array( 'db' => 'winner_lbp5', 'dt' => 137 ),
    // array( 'db' => 'lbp_fav5c', 'dt' => 138 ),
    // array( 'db' => 'winner_bp6', 'dt' => 139 ),
    // array( 'db' => 'winner_lbp6', 'dt' => 140 ),
    // array( 'db' => 'lbp_fav6c', 'dt' => 141 ),
    // array( 'db' => 'winner_bp7', 'dt' => 142 ),
    // array( 'db' => 'winner_lbp7', 'dt' => 143 ),
    // array( 'db' => 'lbp_fav7c', 'dt' => 144 ),
    // array( 'db' => 'winner_bp8', 'dt' => 145 ),
    // array( 'db' => 'winner_lbp8', 'dt' => 146 ),
    // array( 'db' => 'lbp_fav8c', 'dt' => 147 ),
    // array( 'db' => 'winner_bp9', 'dt' => 148 ),
    // array( 'db' => 'winner_lbp9', 'dt' => 149 ),
    // array( 'db' => 'lbp_fav9c', 'dt' => 150 ),
    // array( 'db' => 'winner_bp10', 'dt' => 151 ),
    // array( 'db' => 'winner_lbp10', 'dt' => 152 ),
    // array( 'db' => 'lbp_fav10c', 'dt' => 153 ),
    // array( 'db' => 'winner_bp11', 'dt' => 154 ),
    // array( 'db' => 'winner_lbp11', 'dt' => 155 ),
    // array( 'db' => 'lbp_fav11c', 'dt' => 156 ),
    // array( 'db' => 'winner_bp12', 'dt' => 157 ),
    // array( 'db' => 'winner_lbp12', 'dt' => 158 ),
    // array( 'db' => 'lbp_fav12c', 'dt' => 159 ),
    // array( 'db' => 'winner_bp13', 'dt' => 160 ),


    // array( 'db' => 'winner_lbp13', 'dt' => ),
    // array( 'db' => 'lbp_fav13c', 'dt' => ),
    // array( 'db' => 'winner_bp14', 'dt' => ),
    // array( 'db' => 'winner_lbp14', 'dt' => ),
    // array( 'db' => 'lbp_fav14c', 'dt' => ),
    // array( 'db' => 'fav1c_tip', 'dt' => ),
    // array( 'db' => 'winner_tip1', 'dt' => ),
    // array( 'db' => 'winner_laytip1', 'dt' => ),
    // array( 'db' => 'fav2c_tip', 'dt' => ),
    // array( 'db' => 'winner_tip2', 'dt' => ),
    // array( 'db' => 'winner_laytip2', 'dt' => ),
    // array( 'db' => 'fav3c_tip', 'dt' => ),
    // array( 'db' => 'winner_tip3', 'dt' => ),
    // array( 'db' => 'winner_laytip3', 'dt' => ),
    // array( 'db' => 'fav4c_tip', 'dt' => ),
    // array( 'db' => 'winner_tip4', 'dt' => ),
    // array( 'db' => 'winner_laytip4', 'dt' => ),
    // array( 'db' => 'fav5c_tip', 'dt' => ),
    // array( 'db' => 'winner_tip5', 'dt' => ),
    // array( 'db' => 'winner_laytip5', 'dt' => ),
    // array( 'db' => 'fav6c_tip', 'dt' => ),
    // array( 'db' => 'winner_tip6', 'dt' => ),
    // array( 'db' => 'winner_laytip6', 'dt' => ),
    // array( 'db' => 'fav7c_tip', 'dt' => ),
    // array( 'db' => 'winner_tip7', 'dt' => ),
    // array( 'db' => 'winner_laytip7', 'dt' => ),
    // array( 'db' => 'fav8c_tip', 'dt' => ),
    // array( 'db' => 'winner_tip8', 'dt' => ),
    // array( 'db' => 'winner_laytip8', 'dt' => ),
    // array( 'db' => 'fav9c_tip', 'dt' => ),
    // array( 'db' => 'winner_tip9', 'dt' => ),
    // array( 'db' => 'winner_laytip9', 'dt' => ),
    // array( 'db' => 'fav10c_tip', 'dt' => ),
    // array( 'db' => 'winner_tip10', 'dt' => ),
    // array( 'db' => 'winner_laytip10', 'dt' => ),
    // array( 'db' => 'fav11c_tip', 'dt' => ),
    // array( 'db' => 'winner_tip11', 'dt' => ),
    // array( 'db' => 'winner_laytip11', 'dt' => ),
    // array( 'db' => 'fav12c_tip', 'dt' => ),
    // array( 'db' => 'winner_tip12', 'dt' => ),
    // array( 'db' => 'winner_laytip12', 'dt' => ),
    // array( 'db' => 'fav13c_tip', 'dt' => ),
    // array( 'db' => 'winner_tip13', 'dt' => ),
    // array( 'db' => 'winner_laytip13', 'dt' => ),
    // array( 'db' => 'fav14ctip', 'dt' => ),
    // array( 'db' => 'winner_tip14', 'dt' => ),
    // array( 'db' => 'winner_laytip14', 'dt' => ),
    // array( 'db' => 'layfav1ctip', 'dt' => ),
    // array( 'db' => 'layfav2ctip', 'dt' => ),
    // array( 'db' => 'layfav3ctip', 'dt' => ),
    // array( 'db' => 'layfav4ctip', 'dt' => ),
    // array( 'db' => 'layfav5ctip', 'dt' => ),
    // array( 'db' => 'layfav6ctip', 'dt' => ),
    // array( 'db' => 'layfav7ctip', 'dt' => ),
    // array( 'db' => 'layfav8ctip', 'dt' => ),
    // array( 'db' => 'layfav9ctip', 'dt' => ),
    // array( 'db' => 'layfav10ctip', 'dt' => ),
    // array( 'db' => 'layfav11ctip', 'dt' => ),
    // array( 'db' => 'layfav12ctip', 'dt' => ),
    // array( 'db' => 'layfav13ctip', 'dt' => ),
    // array( 'db' => 'layfav14ctip', 'dt' => ),
   
);
 
// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => 'Admin@123',
    'db'   => 'horses',
    'host' => 'localhost'
);
 
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
require( 'vendor/DataTables/server-side/scripts/ssp.class.php' );
 
echo json_encode(
    SSP::simple( $_POST, $sql_details, $table, $primaryKey, $columns )
);