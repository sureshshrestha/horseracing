<!DOCTYPE html>
<!-- saved from url=(0054)https://sporttradingblog.com/databasehorseuk/ViewRaces -->
<html style="height: auto; min-height: 100%;">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Data Horses</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="./reference Data Horses_files/bootstrap.min.css">

  <link rel="stylesheet" href="./reference Data Horses_files/font-awesome.min.css">

  <link rel="stylesheet" href="./reference Data Horses_files/ionicons.min.css">

  <link rel="stylesheet" href="./reference Data Horses_files/AdminLTE.min.css">

  <link rel="stylesheet" href="./reference Data Horses_files/_all-skins.min.css">

  <link rel="stylesheet" href="./reference Data Horses_files/bootstrap-datepicker.min.css">

  <link rel="stylesheet" href="./reference Data Horses_files/daterangepicker.css">

  <link rel="stylesheet" href="./reference Data Horses_files/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="./reference Data Horses_files/bootstrap3-wysihtml5.css">


  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="./reference Data Horses_files/jquery.min.js"></script>

  <link rel="stylesheet" href="./reference Data Horses_files/css">
  <style>
    .cke {
      visibility: hidden;
    }
  </style>
  <style type="text/css">
    .jqstooltip {
      position: absolute;
      left: 0px;
      top: 0px;
      visibility: hidden;
      background: rgb(0, 0, 0) transparent;
      background-color: rgba(0, 0, 0, 0.6);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
      -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
      color: white;
      font: 10px arial, san serif;
      text-align: left;
      white-space: nowrap;
      padding: 5px;
      border: 1px solid white;
      box-sizing: content-box;
      z-index: 10000;
    }

    .jqsfield {
      color: white;
      font: 10px arial, san serif;
      text-align: left;
    }
  </style>
</head>

<body class="skin-blue sidebar-mini" style="height: auto; min-height: 100%;">
  <div class="wrapper" style="height: auto; min-height: 100%;">
    <header class="main-header">

      <a href="http://localhost/projecthorse/test7/index3.php" class="logo" style="background-color: #A9A9A9;">

        <span class="logo-mini"><b>H</b>R</span>

        <span class="logo-lg"><b>Horse Races Data</b></span>
      </a>

      <nav class="navbar navbar-static-top" style="background-color: #062F4F;">

        <a href="http://localhost/projecthorse/test7/index3.php" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <li class="dropdown user user-menu">
              <a href="http://localhost/projecthorse/test7/index3.php" class="dropdown-toggle" data-toggle="dropdown">
                <img src="./reference Data Horses_files/user.png" class="user-image" alt="User Image">
                <span class="hidden-xs">User</span>
              </a>
              <ul class="dropdown-menu">

                <li class="user-header">
                  <img src="./reference Data Horses_files/user.png" class="img-circle" alt="User Image">
                  <p>User</p>
                </li>

                <li class="user-footer">
                  <div class="pull-left">

                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>

          </ul>
        </div>
      </nav>
    </header>

    <aside class="main-sidebar" style="background-color: #565656;">

      <section class="sidebar" style="height: auto;">

        <ul class="sidebar-menu tree" data-widget="tree">
          <li class="header">PAGES</li>
          <li><a href="http://localhost/projecthorse/test7/index3.php"><i class="fa fa-signal"></i> <span>List of Races</span></a></li>
        </ul>
      </section>

    </aside>
    <div class="content-wrapper" style="min-height: 663px;">


      <section class="content">


        <div class="row">
          <form action="http://localhost/projecthorse/test7/index3.php" class="form-horizontal" method="post" accept-charset="utf-8">
            <section class="col-lg-12 connectedSortable ui-sortable">
              <div class="box">
                <div class="box-body" style="overflow-x: auto">
                  <div class="box-header ui-sortable-handle">
                    <h3 class="box-title">List of Horse Races</h3>
                  </div>

                  <div class="box-body">
                    <!-- <div class="col-md-12 col-xs-12">
                      <div class="col-md-2 col-xs-12" style="padding-left: 1px;width: 11.66666667%;">
                        <div class="form-group">
                          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-success">
                            Add New Race
                          </button>
                        </div>
                      </div>
                      <div class="col-md-2 col-xs-12" style="padding-left: 1px;">
                        <div class="form-group">
                          <a href="https://sporttradingblog.com/databasehorseuk/PhpspreadsheetController/index" type="button" class="btn btn-primary">
                            Import From Excel
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="modal" id="deleteApplicationt">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h3 class="text-dark">Delete Race</h3>
                          </div>
                          <div class="modal-body">
                            <p> Do You Want to Delete the Record ?</p>
                            <button type="button" class="btn btn-success" id="btn_delete_application">Delete Now</button>
                            <button type="button" class="btn btn-danger" style="float: right;" data-dismiss="modal" id="btn_close">Close</button>
                          </div>
                        </div>
                      </div>
                    </div> -->
                    <table id="favTable">
                      <thead>
                        <tr>
                          <th>Rows ID</th>
                          <th>Date</th>
                          <th>Time</th>
                          <th>#</th>
                          <th>Track</th>
                          <th>Distance</th>
                          <th>Type</th>
                          <th>Code</th>
                          <th>Horse Name</th>
                          <th>Jockey</th>
                          <th>Trainer</th>
                          <th>Fav Order</th>
                          <th>Position</th>
                          <th>Tips</th>
                          <th>Tips Rating</th>
                          <th>High</th>
                          <th>Low</th>
                          <th>BSP</th>
                          <th>BPSP</th>
                          <th>Winner High</th>
                          <th>Winner SP</th>
                          <th>Runner</th>
                          <th>Places</th>
                          <th>Placed Horses</th>
                          <th>B2L</th>
                          <th>Nb of Races</th>
                          <th>FAV1c</th>
                          <th>FAV2c</th>
                          <th>FAV3c</th>
                          <th>FAV4c</th>
                          <th>FAV5c</th>
                          <th>FAV6c</th>

                          <th>FAV7c</th>
                          <th>FAV8c</th>
                          <th>FAV9c</th>
                          <th>FAV10c</th>
                          <th>FAV11c</th>
                          <th>FAV12c</th>

                          <th>FAV13c</th>
                          <th>FAV14c</th>
                          <th>Runner B1</th>
                          <th>Win Back1</th>
                          <th>Win Lay FAV1</th>
                          <th>Lay FAV1c</th>
                          <th>Runner B2</th>
                          <th>Win Back2</th>
                          <th>Win Lay 2FAV</th>
                          <th>Lay 2FAVc</th>
                          <th>Runner B3</th>
                          <th>Win Back3</th>
                          <th>Win Lay 3FAV</th>
                          <th>Lay 3FAVc</th>
                          <th>Runner B4</th>
                          <th>Win Back4</th>
                          <th>Win Lay 4FAV</th>
                          <th>Lay 4FAVc</th>

                          <th>Runner B5</th>
                          <th>Win Back5</th>
                          <th>Win Lay 5FAV</th>
                          <th>Lay 5FAVc</th>
                          <th>Runner B6</th>
                          <th>Win Back6</th>
                          <th>Win Lay 6FAV</th>
                          <th>Lay 6FAVc</th>
                          <th>Runner B7</th>
                          <th>Win Back7</th>
                          <th>Win Lay 7FAV</th>
                          <th>Lay 7FAVc</th>
                          <th>Runner B8</th>
                          <th>Win Back8</th>
                          <th>Win Lay 8FAV</th>
                          <th>Lay 8FAVc</th>
                          <th>Runner B9</th>
                          <th>Win Back9</th>
                          <th>Win Lay 9FAV</th>
                          <th>Lay 9FAVc</th>
                          <th>Runner B10</th>
                          <th>Win Back10</th>
                          <th>Win Lay 10FAV</th>
                          <th>Lay 10FAVc</th>
                          <th>Runner B11</th>
                          <th>Win Back11</th>
                          <th>Win Lay 11FAV</th>
                          <th>Lay 11FAVc</th>
                          <th>Runner B12</th>
                          <th>Win Back12</th>
                          <th>Win Lay 12FAV</th>
                          <th>Lay 12FAVc</th>
                          <th>Runner 13</th>
                          <th>Win Back13</th>
                          <th>Win Lay 13FAV</th>
                          <th>Lay 13FAVc</th>
                          <th>Runner B14</th>
                          <th>Win Back 14</th>
                          <th>Win Lay 14FAV</th>
                          <th>Lay 14FAVc</th>

                          <th>LWL1c</th>
                          <th>LWL2c</th>
                          <th>LWL3c</th>
                          <th>LWL4c</th>
                          <th>LWL5c</th>
                          <th>LWL6c</th>
                          <th>LWL7c</th>
                          <th>LWL8c</th>
                          <th>LWL9c</th>
                          <th>LWL10c</th>
                          <th>LWL11c</th>
                          <th>LWL12c</th>
                          <th>LWL13c</th>
                          <th>LWL14c</th>
                          <th>BP FAV1c</th>
                          <th>BP FAV2c</th>
                          <th>BP FAV3c</th>
                          <th>BP FAV4c</th>
                          <th>BP FAV5c</th>
                          <th>BP FAV6c</th>
                          <th>BP FAV7c</th>
                          <th>BP FAV8c</th>
                          <th>BP FAV9c</th>
                          <th>BP FAV10c</th>
                          <th>BP FAV11c</th>
                          <th>BP FAV12c</th>
                          <th>BP FAV13c</th>
                          <th>BP FAV14c</th>
                          <th>Win BP1</th>
                          <th>Win LBP1</th>
                          <th>LBP FAV1c</th>
                          <th>Win BP2</th>
                          <th>Win LBP2</th>
                          <th>LBP FAV2c</th>
                          <th>Win BP22</th>
                          <th>Win LBP22</th>
                          <th>LBP FAV3c</th>
                          <th>Win BP4</th>
                          <th>Win LBP4</th>
                          <th>LBP FAV4c</th>
                          <th>Win BP5</th>
                          <th>Win LBP5</th>
                          <th>LBP FAV5c</th>
                          <th>Win BP6</th>
                          <th>Win LBP6</th>
                          <th>LBP FAV6c</th>
                          <th>Win BP7</th>
                          <th>Win LBP7</th>
                          <th>LBP FAV7c</th>
                          <th>Win BP8</th>
                          <th>Win LBP8</th>
                          <th>LBP FAV8c</th>
                          <th>Win BP9</th>
                          <th>Win LBP9</th>
                          <th>LBP FAV9c</th>
                          <th>Win BP10</th>
                          <th>Win LBP10</th>
                          <th>LBP FAV10c</th>
                          <th>Win BP11</th>
                          <th>Win LBP11</th>
                          <th>LBP FAV11c</th>
                          <th>Win BP12</th>
                          <th>Win LBP12</th>
                          <th>LBP FAV12c</th>
                          <th>Win BP13</th>


                          <th>Win LBP13</th>
                          <th>LBP FAV13c</th>
                          <th>Win BP14</th>
                          <th>Win LBP14</th>
                          <th>LBP FAV14c</th>
                          <th>FAV1c Tip</th>
                          <th>Winner Tip1</th>
                          <th>Winner LayTip1</th>
                          <th>FAV2c Tip</th>
                          <th>Winner Tip2</th>
                          <th>Winner LayTip2</th>
                          <th>FAV3c Tip</th>
                          <th>Win Tip3</th>
                          <th>Win LayTip3</th>
                          <th>FAV4c Tip</th>
                          <th>Win Tip4</th>
                          <th>Win LayTip4</th>
                          <th>FAV5c Tip</th>
                          <th>Win Tip5</th>
                          <th>Win LayTip5</th>
                          <th>FAV6c Tip</th>
                          <th>Win Tip6</th>
                          <th>Win LayTip6</th>
                          <th>FAV7c Tip</th>
                          <th>Win Tip7</th>
                          <th>Win LayTip7</th>
                          <th>FAV8c Tip</th>
                          <th>Win Tip8</th>
                          <th>Win LayTip8</th>
                          <th>FAV9c Tip</th>
                          <th>Win Tip9</th>
                          <th>Win LayTip9</th>
                          <th>FAV10c Tip</th>
                          <th>Win Tip10</th>
                          <th>Win LayTip10</th>
                          <th>FAV11c Tip</th>
                          <th>Win Tip11</th>
                          <th>Win LayTip11</th>
                          <th>FAV12c Tip</th>
                          <th>Win Tip12</th>
                          <th>Win LayTip12</th>
                          <th>FAV13c Tip</th>
                          <th>Win Tip13</th>
                          <th>Win LayTip13</th>
                          <th>FAV14c Tip</th>
                          <th>Win Tip14</th>
                          <th>Win LayTip14</th>
                          <th>Lay FAV1c Tip</th>
                          <th>Lay FAV2c Tip</th>
                          <th>Lay FAV3c Tip</th>
                          <th>Lay FAV4c Tip</th>
                          <th>Lay FAV5c Tip</th>
                          <th>Lay FAV6c Tip</th>
                          <th>Lay FAV7c Tip</th>
                          <th>Lay FAV8c Tip</th>
                          <th>Lay FAV9c Tip</th>
                          <th>Lay FAV10c Tip</th>
                          <th>Lay FAV11c Tip</th>
                          <th>Lay FAV12c Tip</th>
                          <th>Lay FAV13c Tip</th>
                          <th>Lay FAV14c Tip</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        include_once '../db.php';
                        $result = mysqli_query($conn, "
                            SELECT 
                              `rows_id`,`date_race`,`time_race`,`tag_race`,`track`,`distance`,`type_race`,`code_race`,`horse_name`,`jockey`,`trainer`,`fav_order`,`position`,`tips`,`tips_rating`,`high`,`low`,`bsp`,`bpsp`,`winner_high`,`winner_sp`,`runners`,`available_place`,`placed_horses`,`b2l`,`nb_of_races`,`fav1c`,`fav2c`,`fav3c`,`fav4c`,`fav5c`,`fav6c`,`fav7c`,`fav8c`,`fav9c`,`fav10c`,`fav11c`,`fav12c`,`fav13c`,`fav14c`,`runnerb1`,`win_back1`,`win_layb1`,`lay_fav1c`,`runnerb2`,`win_back2`,`win_lay_2fav`,`lay_fav2c`,`runnerb3`,`win_back3`,`win_lay_3fav`,`lay_fav3c`,`runnerb4`,`win_back4`,`win_lay_4fav`,`lay_fav4c`,`runnerb5`,`win_back5`,`win_lay_5fav`,`lay_fav5c`,`runnerb6`,`win_back6`,`win_lay_6fav`,`lay_fav6c`,`runnerb7`,`win_back7`,`win_lay_7fav`,`lay_fav7c`,`runnerb8`,`win_back8`,`win_lay_8fav`,`lay_fav8c`,`runnerb9`,`win_back9`,`win_lay_9fav`,`lay_fav9c`,`runnerb10`,`win_back10`,`win_lay_10fav`,`lay_fav10c`,`runnerb11`,`win_back11`,`win_lay_11fav`,`lay_fav11c`,`runnerb12`,`win_back12`,`win_lay_12fav`,`lay_fav12c`,`runner13`,`win_back13`,`win_lay_13fav`,`lay_fav13c`,`runnerb14`,`win_back14`,`win_lay_14fav`,`lay_fav14c`,`lwl1c`,`lwl2c`,`lwl3c`,`lwl4c`,`lwl5c`,`lwl6c`,`lwl7c`,`lwl8c`,`lwl9c`,`lwl10c`,`lwl11c`,`lwl12c`,`lwl13c`,`lwl14c`,`bp_fav1c`,`bp_fav2c`,`bp_fav3c`,`bp_fav4c`,`bp_fav5c`,`bp_fav6c`,`bp_fav7c`,`bp_fav8c`,`bp_fav9c`,`bp_fav10c`,`bp_fav11c`,`bp_fav12c`,`bp_fav13c`,`bp_fav14c`,`winner_bp1`,`winner_lbp1`,`lbp_fav1c`,`winner_bp2`,`winner_lbp2`,`lbp_fav2c`,`winner_bp3`,`winner_lbp3`,`lbp_fav3c`,`winner_bp4`,`winner_lbp4`,`lbp_fav4c`,`winner_bp5`,`winner_lbp5`,`lbp_fav5c`,`winner_bp6`,`winner_lbp6`,`lbp_fav6c`,`winner_bp7`,`winner_lbp7`,`lbp_fav7c`,`winner_bp8`,`winner_lbp8`,`lbp_fav8c`,`winner_bp9`,`winner_lbp9`,`lbp_fav9c`,`winner_bp10`,`winner_lbp10`,`lbp_fav10c`,`winner_bp11`,`winner_lbp11`,`lbp_fav11c`,`winner_bp12`,`winner_lbp12`,`lbp_fav12c`,`winner_bp13`,`winner_lbp13`,`lbp_fav13c`,`winner_bp14`,`winner_lbp14`,`lbp_fav14c`,`fav1c_tip`,`winner_tip1`,`winner_laytip1`,`fav2c_tip`,`winner_tip2`,`winner_laytip2`,`fav3c_tip`,`winner_tip3`,`winner_laytip3`,`fav4c_tip`,`winner_tip4`,`winner_laytip4`,`fav5c_tip`,`winner_tip5`,`winner_laytip5`,`fav6c_tip`,`winner_tip6`,`winner_laytip6`,`fav7c_tip`,`winner_tip7`,`winner_laytip7`,`fav8c_tip`,`winner_tip8`,`winner_laytip8`,`fav9c_tip`,`winner_tip9`,`winner_laytip9`,`fav10c_tip`,`winner_tip10`,`winner_laytip10`,`fav11c_tip`,`winner_tip11`,`winner_laytip11`,`fav12c_tip`,`winner_tip12`,`winner_laytip12`,`fav13c_tip`,`winner_tip13`,`winner_laytip13`,`fav14ctip`,`winner_tip14`,`winner_laytip14`,`layfav1ctip`,`layfav2ctip`,`layfav3ctip`,`layfav4ctip`,`layfav5ctip`,`layfav6ctip`,`layfav7ctip`,`layfav8ctip`,`layfav9ctip`,`layfav10ctip`,`layfav11ctip`,`layfav12ctip`,`layfav13ctip`,`layfav14ctip`
                            FROM DatabaseHorsesUK2021
                          ");

                        if (mysqli_num_rows($result) > 0) {
                          while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <tr>
                              <td><?php echo $row["rows_id"]; ?></td>
                              <td><?php echo $row["date_race"]; ?></td>
                              <td><?php echo $row["time_race"]; ?></td>
                              <td><?php echo $row["tag_race"]; ?></td>
                              <td><?php echo $row["track"]; ?></td>
                              <td><?php echo $row["distance"]; ?></td>
                              <td><?php echo $row["type_race"]; ?></td>
                              <td><?php echo $row["code_race"]; ?></td>
                              <td><?php echo $row["horse_name"]; ?></td>
                              <td><?php echo $row["jockey"]; ?></td>
                              <td><?php echo $row["trainer"]; ?></td>
                              <td><?php echo $row["fav_order"]; ?></td>
                              <td><?php echo $row["position"]; ?></td>
                              <td><?php echo $row["tips"]; ?></td>
                              <td><?php echo $row["tips_rating"]; ?></td>
                              <td><?php echo $row["high"]; ?></td>
                              <td><?php echo $row["low"]; ?></td>
                              <td><?php echo $row["bsp"]; ?></td>
                              <td><?php echo $row["bpsp"]; ?></td>
                              <td><?php echo $row["winner_high"]; ?></td>
                              <td><?php echo $row["winner_sp"]; ?></td>
                              <td><?php echo $row["runners"]; ?></td>
                              <td><?php echo $row["available_place"]; ?></td>
                              <td><?php echo $row["placed_horses"]; ?></td>
                              <td><?php echo $row["b2l"]; ?></td>
                              <td><?php echo $row["nb_of_races"]; ?></td>
                              <td><?php echo $row["fav1c"]; ?></td>
                              <td><?php echo $row["fav2c"]; ?></td>
                              <td><?php echo $row["fav3c"]; ?></td>
                              <td><?php echo $row["fav4c"]; ?></td>
                              <td><?php echo $row["fav5c"]; ?></td>
                              <td><?php echo $row["fav6c"]; ?></td>
                              <td><?php echo $row["fav7c"]; ?></td>
                              <td><?php echo $row["fav8c"]; ?></td>
                              <td><?php echo $row["fav9c"]; ?></td>
                              <td><?php echo $row["fav10c"]; ?></td>
                              <td><?php echo $row["fav11c"]; ?></td>
                              <td><?php echo $row["fav12c"]; ?></td>
                              <td><?php echo $row["fav13c"]; ?></td>
                              <td><?php echo $row["fav14c"]; ?></td>
                              <td><?php echo $row["runnerb1"]; ?></td>
                              <td><?php echo $row["win_back1"]; ?></td>
                              <td><?php echo $row["win_layb1"]; ?></td>
                              <td><?php echo $row["lay_fav1c"]; ?></td>
                              <td><?php echo $row["runnerb2"]; ?></td>
                              <td><?php echo $row["win_back2"]; ?></td>
                              <td><?php echo $row["win_lay_2fav"]; ?></td>
                              <td><?php echo $row["lay_fav2c"]; ?></td>
                              <td><?php echo $row["runnerb3"]; ?></td>
                              <td><?php echo $row["win_back3"]; ?></td>
                              <td><?php echo $row["win_lay_3fav"]; ?></td>
                              <td><?php echo $row["lay_fav3c"]; ?></td>
                              <td><?php echo $row["runnerb4"]; ?></td>
                              <td><?php echo $row["win_back4"]; ?></td>
                              <td><?php echo $row["win_lay_4fav"]; ?></td>
                              <td><?php echo $row["lay_fav4c"]; ?></td>
                              <td><?php echo $row["runnerb5"]; ?></td>
                              <td><?php echo $row["win_back5"]; ?></td>
                              <td><?php echo $row["win_lay_5fav"]; ?></td>
                              <td><?php echo $row["lay_fav5c"]; ?></td>
                              <td><?php echo $row["runnerb6"]; ?></td>
                              <td><?php echo $row["win_back6"]; ?></td>
                              <td><?php echo $row["win_lay_6fav"]; ?></td>
                              <td><?php echo $row["lay_fav6c"]; ?></td>
                              <td><?php echo $row["runnerb7"]; ?></td>
                              <td><?php echo $row["win_back7"]; ?></td>
                              <td><?php echo $row["win_lay_7fav"]; ?></td>
                              <td><?php echo $row["lay_fav7c"]; ?></td>
                              <td><?php echo $row["runnerb8"]; ?></td>
                              <td><?php echo $row["win_back8"]; ?></td>
                              <td><?php echo $row["win_lay_8fav"]; ?></td>
                              <td><?php echo $row["lay_fav8c"]; ?></td>
                              <td><?php echo $row["runnerb9"]; ?></td>
                              <td><?php echo $row["win_back9"]; ?></td>
                              <td><?php echo $row["win_lay_9fav"]; ?></td>
                              <td><?php echo $row["lay_fav9c"]; ?></td>
                              <td><?php echo $row["runnerb10"]; ?></td>
                              <td><?php echo $row["win_back10"]; ?></td>
                              <td><?php echo $row["win_lay_10fav"]; ?></td>
                              <td><?php echo $row["lay_fav10c"]; ?></td>
                              <td><?php echo $row["runnerb11"]; ?></td>
                              <td><?php echo $row["win_back11"]; ?></td>
                              <td><?php echo $row["win_lay_11fav"]; ?></td>
                              <td><?php echo $row["lay_fav11c"]; ?></td>
                              <td><?php echo $row["runnerb12"]; ?></td>
                              <td><?php echo $row["win_back12"]; ?></td>
                              <td><?php echo $row["win_lay_12fav"]; ?></td>
                              <td><?php echo $row["lay_fav12c"]; ?></td>
                              <td><?php echo $row["runner13"]; ?></td>
                              <td><?php echo $row["win_back13"]; ?></td>
                              <td><?php echo $row["win_lay_13fav"]; ?></td>
                              <td><?php echo $row["lay_fav13c"]; ?></td>
                              <td><?php echo $row["runnerb14"]; ?></td>
                              <td><?php echo $row["win_back14"]; ?></td>
                              <td><?php echo $row["win_lay_14fav"]; ?></td>
                              <td><?php echo $row["lay_fav14c"]; ?></td>
                              <td><?php echo $row["lwl1c"]; ?></td>
                              <td><?php echo $row["lwl2c"]; ?></td>
                              <td><?php echo $row["lwl3c"]; ?></td>
                              <td><?php echo $row["lwl4c"]; ?></td>
                              <td><?php echo $row["lwl5c"]; ?></td>
                              <td><?php echo $row["lwl6c"]; ?></td>
                              <td><?php echo $row["lwl7c"]; ?></td>
                              <td><?php echo $row["lwl8c"]; ?></td>
                              <td><?php echo $row["lwl9c"]; ?></td>
                              <td><?php echo $row["lwl10c"]; ?></td>
                              <td><?php echo $row["lwl11c"]; ?></td>
                              <td><?php echo $row["lwl12c"]; ?></td>
                              <td><?php echo $row["lwl13c"]; ?></td>
                              <td><?php echo $row["lwl14c"]; ?></td>
                              <td><?php echo $row["bp_fav1c"]; ?></td>
                              <td><?php echo $row["bp_fav2c"]; ?></td>
                              <td><?php echo $row["bp_fav3c"]; ?></td>
                              <td><?php echo $row["bp_fav4c"]; ?></td>
                              <td><?php echo $row["bp_fav5c"]; ?></td>
                              <td><?php echo $row["bp_fav6c"]; ?></td>
                              <td><?php echo $row["bp_fav7c"]; ?></td>
                              <td><?php echo $row["bp_fav8c"]; ?></td>
                              <td><?php echo $row["bp_fav9c"]; ?></td>
                              <td><?php echo $row["bp_fav10c"]; ?></td>
                              <td><?php echo $row["bp_fav11c"]; ?></td>
                              <td><?php echo $row["bp_fav12c"]; ?></td>
                              <td><?php echo $row["bp_fav13c"]; ?></td>
                              <td><?php echo $row["bp_fav14c"]; ?></td>
                              <td><?php echo $row["winner_bp1"]; ?></td>
                              <td><?php echo $row["winner_lbp1"]; ?></td>
                              <td><?php echo $row["lbp_fav1c"]; ?></td>
                              <td><?php echo $row["winner_bp2"]; ?></td>
                              <td><?php echo $row["winner_lbp2"]; ?></td>
                              <td><?php echo $row["lbp_fav2c"]; ?></td>
                              <td><?php echo $row["winner_bp3"]; ?></td>
                              <td><?php echo $row["winner_lbp3"]; ?></td>
                              <td><?php echo $row["lbp_fav3c"]; ?></td>
                              <td><?php echo $row["winner_bp4"]; ?></td>
                              <td><?php echo $row["winner_lbp4"]; ?></td>
                              <td><?php echo $row["lbp_fav4c"]; ?></td>
                              <td><?php echo $row["winner_bp5"]; ?></td>
                              <td><?php echo $row["winner_lbp5"]; ?></td>
                              <td><?php echo $row["lbp_fav5c"]; ?></td>
                              <td><?php echo $row["winner_bp6"]; ?></td>
                              <td><?php echo $row["winner_lbp6"]; ?></td>
                              <td><?php echo $row["lbp_fav6c"]; ?></td>
                              <td><?php echo $row["winner_bp7"]; ?></td>
                              <td><?php echo $row["winner_lbp7"]; ?></td>
                              <td><?php echo $row["lbp_fav7c"]; ?></td>
                              <td><?php echo $row["winner_bp8"]; ?></td>
                              <td><?php echo $row["winner_lbp8"]; ?></td>
                              <td><?php echo $row["lbp_fav8c"]; ?></td>
                              <td><?php echo $row["winner_bp9"]; ?></td>
                              <td><?php echo $row["winner_lbp9"]; ?></td>
                              <td><?php echo $row["lbp_fav9c"]; ?></td>
                              <td><?php echo $row["winner_bp10"]; ?></td>
                              <td><?php echo $row["winner_lbp10"]; ?></td>
                              <td><?php echo $row["lbp_fav10c"]; ?></td>
                              <td><?php echo $row["winner_bp11"]; ?></td>
                              <td><?php echo $row["winner_lbp11"]; ?></td>
                              <td><?php echo $row["lbp_fav11c"]; ?></td>
                              <td><?php echo $row["winner_bp12"]; ?></td>
                              <td><?php echo $row["winner_lbp12"]; ?></td>
                              <td><?php echo $row["lbp_fav12c"]; ?></td>
                              <td><?php echo $row["winner_bp13"]; ?></td>
                              <td><?php echo $row["winner_lbp13"]; ?></td>
                              <td><?php echo $row["lbp_fav13c"]; ?></td>
                              <td><?php echo $row["winner_bp14"]; ?></td>
                              <td><?php echo $row["winner_lbp14"]; ?></td>
                              <td><?php echo $row["lbp_fav14c"]; ?></td>
                              <td><?php echo $row["fav1c_tip"]; ?></td>
                              <td><?php echo $row["winner_tip1"]; ?></td>
                              <td><?php echo $row["winner_laytip1"]; ?></td>
                              <td><?php echo $row["fav2c_tip"]; ?></td>
                              <td><?php echo $row["winner_tip2"]; ?></td>
                              <td><?php echo $row["winner_laytip2"]; ?></td>
                              <td><?php echo $row["fav3c_tip"]; ?></td>
                              <td><?php echo $row["winner_tip3"]; ?></td>
                              <td><?php echo $row["winner_laytip3"]; ?></td>
                              <td><?php echo $row["fav4c_tip"]; ?></td>
                              <td><?php echo $row["winner_tip4"]; ?></td>
                              <td><?php echo $row["winner_laytip4"]; ?></td>
                              <td><?php echo $row["fav5c_tip"]; ?></td>
                              <td><?php echo $row["winner_tip5"]; ?></td>
                              <td><?php echo $row["winner_laytip5"]; ?></td>
                              <td><?php echo $row["fav6c_tip"]; ?></td>
                              <td><?php echo $row["winner_tip6"]; ?></td>
                              <td><?php echo $row["winner_laytip6"]; ?></td>
                              <td><?php echo $row["fav7c_tip"]; ?></td>
                              <td><?php echo $row["winner_tip7"]; ?></td>
                              <td><?php echo $row["winner_laytip7"]; ?></td>
                              <td><?php echo $row["fav8c_tip"]; ?></td>
                              <td><?php echo $row["winner_tip8"]; ?></td>
                              <td><?php echo $row["winner_laytip8"]; ?></td>
                              <td><?php echo $row["fav9c_tip"]; ?></td>
                              <td><?php echo $row["winner_tip9"]; ?></td>
                              <td><?php echo $row["winner_laytip9"]; ?></td>
                              <td><?php echo $row["fav10c_tip"]; ?></td>
                              <td><?php echo $row["winner_tip10"]; ?></td>
                              <td><?php echo $row["winner_laytip10"]; ?></td>
                              <td><?php echo $row["fav11c_tip"]; ?></td>
                              <td><?php echo $row["winner_tip11"]; ?></td>
                              <td><?php echo $row["winner_laytip11"]; ?></td>
                              <td><?php echo $row["fav12c_tip"]; ?></td>
                              <td><?php echo $row["winner_tip12"]; ?></td>
                              <td><?php echo $row["winner_laytip12"]; ?></td>
                              <td><?php echo $row["fav13c_tip"]; ?></td>
                              <td><?php echo $row["winner_tip13"]; ?></td>
                              <td><?php echo $row["winner_laytip13"]; ?></td>
                              <td><?php echo $row["fav14ctip"]; ?></td>
                              <td><?php echo $row["winner_tip14"]; ?></td>
                              <td><?php echo $row["winner_laytip14"]; ?></td>
                              <td><?php echo $row["layfav1ctip"]; ?></td>
                              <td><?php echo $row["layfav2ctip"]; ?></td>
                              <td><?php echo $row["layfav3ctip"]; ?></td>
                              <td><?php echo $row["layfav4ctip"]; ?></td>
                              <td><?php echo $row["layfav5ctip"]; ?></td>
                              <td><?php echo $row["layfav6ctip"]; ?></td>
                              <td><?php echo $row["layfav7ctip"]; ?></td>
                              <td><?php echo $row["layfav8ctip"]; ?></td>
                              <td><?php echo $row["layfav9ctip"]; ?></td>
                              <td><?php echo $row["layfav10ctip"]; ?></td>
                              <td><?php echo $row["layfav11ctip"]; ?></td>
                              <td><?php echo $row["layfav12ctip"]; ?></td>
                              <td><?php echo $row["layfav13ctip"]; ?></td>
                              <td><?php echo $row["layfav14ctip"]; ?></td>
                          <?php }
                        } ?>

                      </tbody>
                    </table>
                  </div>

                </div>

              </div>
            </section>
          </form>
        </div>

      </section>





      <!-- <div class=" row">
                      <form action="https://sporttradingblog.com/databasehorseuk/PagesData/Update" class="form-horizontal" method="post" accept-charset="utf-8">
                        <div class="modal modal-success fade" id="divEditRace">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">×</span></button>
                                <h4 class="modal-title">Edit Race Details</h4>
                              </div>
                              <div class="modal-body">
                                <div class="col-md-12 col-xs-12">
                                  <div class="col-md-12 col-xs-12" style="padding-left: 1px;visibility: hidden;height: 0px;">
                                    <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                      <div class="form-group">
                                        <label for="txtHorse_nameEdit">ID:</label>
                                        <input type="text" hidden="true" readonly="true" id="txtRecId" name="txtRecId" class="form-control" required="">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group">
                                      <label for="dt_date">Date:</label>
                                      <input type="text" name="dt_dateE" value="" placeholder="Date" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="dt_dateE">
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group">
                                      <label for="dt_time">Time:</label>
                                      <input type="text" name="dt_timeE" value="" placeholder="Time" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="dt_timeE">
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group">
                                      <label for="tag_no">#:</label>
                                      <input type="text" name="tag_noE" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="tag_noE">
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group">
                                      <label for="fname">Track:</label>
                                      <input type="text" name="trackE" value="" placeholder="Track" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="trackE">
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group">
                                      <label for="distance">Distance:</label>
                                      <input type="text" name="distanceE" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="distanceE">

                                    </div>
                                  </div>
                                  <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group">
                                      <label for="txtType">Type:</label>
                                      <input type="text" name="typeE" value="" placeholder="Type" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="typeE">
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group">
                                      <label for="code">Code:</label>
                                      <input type="text" name="codeE" value="" placeholder="Code" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="codeE">
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group">
                                      <label for="horse_id">Horse Name:</label>
                                      <select style="width: 90%; border-radius: 4px;" name="horse_idE" id="horse_idE" class="form-control select2">
                                        <option value="1">Zubedi</option>
                                        <option value="3">Mozeri</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group">
                                      <label for="bname">Jockey:</label>
                                      <select style="width: 90%; border-radius: 4px;" name="jockey_idE" id="jockey_idE" class="form-control select2">
                                        <option value="1">peter1</option>
                                        <option value="2">Test jockey</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group">
                                      <label for="trainer_id">Trainer:</label>
                                      <select style="width: 90%; border-radius: 4px;" name="trainer_idE" id="trainer_idE" class="form-control select2">
                                        <option value="1">Mr. Jame</option>
                                        <option value="3">Peter</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group">
                                      <label for="fav_order">Fav Order:</label>
                                      <input type="text" name="fav_orderE" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="fav_orderE">
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group">
                                      <label for="position">Position:</label>
                                      <input type="number" name="positionE" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="positionE">
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group">
                                      <label for="tips">Tips:</label>
                                      <input type="text" name="tipsE" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="tipsE">
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group">
                                      <label for="tips_rating">Tips Rating:</label>
                                      <input type="text" name="tips_ratingE" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="tips_ratingE">
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group">
                                      <label for="high">High:</label>
                                      <input type="text" name="highE" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="highE">
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group">
                                      <label for="low">Low:</label>
                                      <input type="text" name="lowE" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="lowE">
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group">
                                      <label for="bsp">BSP:</label>
                                      <input type="text" name="bspE" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="bspE">
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group">
                                      <label for="bpsp">BPSP:</label>
                                      <input type="text" name="bpspE" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="bpspE">
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group">
                                      <label for="winner_high">Winner High:</label>
                                      <input type="text" name="winner_highE" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="winner_highE">
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group">
                                      <label for="winner_sp">Winner SP:</label>
                                      <input type="text" name="winner_spE" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="winner_spE">
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group">
                                      <label for="runner">Runner:</label>
                                      <input type="text" name="runnerE" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="runnerE">
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group">
                                      <label for="placed">Placed:</label>
                                      <input type="text" name="placedE" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="placedE">
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group">
                                      <label for="horse_place">Horse Place:</label>
                                      <input type="text" name="horse_placeE" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="horse_placeE">
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group">
                                      <label for="b2l">B2L:</label>
                                      <input type="text" name="b2lE" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="b2lE">
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group">
                                      <label for="sel_row_fav">Sel Row Fav:</label>
                                      <input type="text" name="sel_row_favE" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="sel_row_favE">
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group">
                                      <label for="fav1_tips">FAV1 TIPS:</label>
                                      <input type="text" name="fav1_tipsE" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="fav1_tipsE">
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group">
                                      <label for="com1">Com1:</label>
                                      <input type="text" name="com1E" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="com1E">
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group">
                                      <label for="fav1_tip1c">FAV1 TIP1c:</label>
                                      <input type="text" name="fav1_tip1cE" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="fav1_tip1cE">
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group">
                                      <label for="fav2_tip">FAV2 Tip:</label>
                                      <input type="text" name="fav2_tipE" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="fav2_tipE">
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group">
                                      <label for="com2">Com2:</label>
                                      <input type="text" name="com2E" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="com2E">
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group">
                                      <label for="fav2_tipc">FAV2 Tipc:</label>
                                      <input type="text" name="fav2_tipcE" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="fav2_tipcE">
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group">
                                      <label for="fav3_tip">FAV3 TIP:</label>
                                      <input type="text" name="fav3_tipE" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="fav3_tipE">
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group">
                                      <label for="com3">Com3:</label>
                                      <input type="text" name="com3E" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="com3E">
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group">
                                      <label for="fav3_tipc">FAV3 TIPc:</label>
                                      <input type="text" name="fav3_tipcE" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="fav3_tipcE">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline pull-right" data-dismiss="modal">Close</button>
                                <input type="submit" name="Submit" value="Submit" id="Submit" class="btn btn-outline  pull-left">
                              </div>
                            </div>

                          </div>

                        </div>
                      </form>
                      <form action="https://sporttradingblog.com/databasehorseuk/PagesData/addRace" class="form-horizontal" method="post" accept-charset="utf-8">
                        <section class="col-lg-12 connectedSortable ui-sortable">
                          <div class="box">
                            <div class="box-body">

                              <div class="box-header ui-sortable-handle" style="background: rgb(255, 194, 79) none repeat scroll 0% 0%; color: rgb(47, 22, 22); cursor: move;">
                                <h3 class="box-title">FAV Tipc Summary</h3>
                              </div>
                              <div class="box-body">
                                <div class="modal modal-success fade" id="modal-success" style="display: none;">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">×</span></button>
                                        <h4 class="modal-title">Add New Race</h4>
                                      </div>
                                      <div class="modal-body">
                                        <div class="col-md-12 col-xs-12">
                                          <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                            <div class="form-group">
                                              <label for="dt_date">Date:</label>
                                              <input type="text" name="dt_date" value="" placeholder="Date" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="dt_date">
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                            <div class="form-group">
                                              <label for="dt_time">Time:</label>
                                              <input type="text" name="dt_time" value="" placeholder="Time" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="dt_time">
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                            <div class="form-group">
                                              <label for="tag_no">#:</label>
                                              <input type="text" name="tag_no" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="tag_no">
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                            <div class="form-group">
                                              <label for="fname">Track:</label>
                                              <input type="text" name="track" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="track">
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                            <div class="form-group">
                                              <label for="distance">Distance:</label>
                                              <input type="text" name="distance" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="distance">

                                            </div>
                                          </div>
                                          <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                            <div class="form-group">
                                              <label for="txtType">Type:</label>
                                              <input type="text" name="Type" value="" placeholder="Type" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="Type">
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                            <div class="form-group">
                                              <label for="code">Code:</label>
                                              <input type="text" name="code" value="" placeholder="Code" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="code">
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                            <div class="form-group">
                                              <label for="horse_id">Horse Name:</label>
                                              <select style="width: 90%; border-radius: 4px;" name="horse_id" id="horse_id" class="form-control select2">
                                                <option value="1">Zubedi</option>
                                                <option value="3">Mozeri</option>
                                              </select>
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                            <div class="form-group">
                                              <label for="bname">Jockey:</label>
                                              <select style="width: 90%; border-radius: 4px;" name="jockey_id" id="jockey_id" class="form-control select2">
                                                <option value="1">peter1</option>
                                                <option value="2">Test jockey</option>
                                              </select>
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                            <div class="form-group">
                                              <label for="trainer_id">Trainer:</label>
                                              <select style="width: 90%; border-radius: 4px;" name="trainer_id" id="trainer_id" class="form-control select2">
                                                <option value="1">Mr. Jame</option>
                                                <option value="3">Peter</option>
                                              </select>
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                            <div class="form-group">
                                              <label for="fav_order">Fav Order:</label>
                                              <input type="text" name="fav_order" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="fav_order">
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                            <div class="form-group">
                                              <label for="position">Position:</label>
                                              <input type="text" name="position" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="position">
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                            <div class="form-group">
                                              <label for="tips">Tips:</label>
                                              <input type="text" name="tips" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="tips">
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                            <div class="form-group">
                                              <label for="tips_rating">Tips Rating:</label>
                                              <input type="text" name="tips_rating" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="tips_rating">
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                            <div class="form-group">
                                              <label for="high">High:</label>
                                              <input type="text" name="high" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="high">
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                            <div class="form-group">
                                              <label for="low">Low:</label>
                                              <input type="text" name="low" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="low">
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                            <div class="form-group">
                                              <label for="bsp">BSP:</label>
                                              <input type="text" name="bsp" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="bsp">
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                            <div class="form-group">
                                              <label for="bpsp">BPSP:</label>
                                              <input type="text" name="bpsp" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="bpsp">
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                            <div class="form-group">
                                              <label for="winner_high">Winner High:</label>
                                              <input type="text" name="winner_high" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="winner_high">
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                            <div class="form-group">
                                              <label for="winner_sp">Winner SP:</label>
                                              <input type="text" name="winner_sp" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="winner_sp">
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                            <div class="form-group">
                                              <label for="runner">Runner:</label>
                                              <input type="text" name="runner" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="runner">
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                            <div class="form-group">
                                              <label for="placed">Placed:</label>
                                              <input type="text" name="placed" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="placed">
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                            <div class="form-group">
                                              <label for="horse_place">Horse Place:</label>
                                              <input type="text" name="horse_place" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="horse_place">
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                            <div class="form-group">
                                              <label for="b2l">B2L:</label>
                                              <input type="text" name="b2l" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="b2l">
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                            <div class="form-group">
                                              <label for="sel_row_fav">Sel Row Fav:</label>
                                              <input type="text" name="sel_row_fav" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="sel_row_fav">
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                            <div class="form-group">
                                              <label for="fav1_tips">FAV1 TIPS:</label>
                                              <input type="text" name="fav1_tips" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="fav1_tips">
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                            <div class="form-group">
                                              <label for="com1">Com1:</label>
                                              <input type="text" name="com1" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="com1">
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                            <div class="form-group">
                                              <label for="fav1_tip1c">FAV1 TIP1c:</label>
                                              <input type="text" name="fav1_tip1c" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="fav1_tip1c">
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                            <div class="form-group">
                                              <label for="fav2_tip">FAV2 Tip:</label>
                                              <input type="text" name="fav2_tip" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="fav2_tip">
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                            <div class="form-group">
                                              <label for="com2">Com2:</label>
                                              <input type="text" name="com2" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="com2">
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                            <div class="form-group">
                                              <label for="fav2_tipc">FAV2 Tipc:</label>
                                              <input type="text" name="fav2_tipc" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="fav2_tipc">
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                            <div class="form-group">
                                              <label for="fav3_tip">FAV3 TIP:</label>
                                              <input type="text" name="fav3_tip" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="fav3_tip">
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                            <div class="form-group">
                                              <label for="com3">Com3:</label>
                                              <input type="text" name="com3" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="com3">
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-xs-12" style="padding-left: 1px;">
                                            <div class="form-group">
                                              <label for="fav3_tipc">FAV3 TIPc:</label>
                                              <input type="text" name="fav3_tipc" value="" placeholder="" class="form-control" style="width: 90%; border-radius: 4px;" required="TRUE" id="fav3_tipc">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-outline pull-right" data-dismiss="modal">Close</button>
                                        <input type="submit" name="Save" value="Save" class="btn btn-outline pull-left">
                                      </div>
                                    </div>

                                  </div>

                                </div>

                                <div class="col-md-7 col-xs-12">
                                  <div class="col-md-3 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group" style="margin-right: 0px;">
                                      <label for="txtsumValfav1Desc">Betfair SP Order:</label>
                                      <input type="text" name="txtsumValfav1Desc" value="FAV" id="txtsumValfav1Desc" class="form-control" style="border-radius: 0px; background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAfBJREFUWAntVk1OwkAUZkoDKza4Utm61iP0AqyIDXahN2BjwiHYGU+gizap4QDuegWN7lyCbMSlCQjU7yO0TOlAi6GwgJc0fT/fzPfmzet0crmD7HsFBAvQbrcrw+Gw5fu+AfOYvgylJ4TwCoVCs1ardYTruqfj8fgV5OUMSVVT93VdP9dAzpVvm5wJHZFbg2LQ2pEYOlZ/oiDvwNcsFoseY4PBwMCrhaeCJyKWZU37KOJcYdi27QdhcuuBIb073BvTNL8ln4NeeR6NRi/wxZKQcGurQs5oNhqLshzVTMBewW/LMU3TTNlO0ieTiStjYhUIyi6DAp0xbEdgTt+LE0aCKQw24U4llsCs4ZRJrYopB6RwqnpA1YQ5NGFZ1YQ41Z5S8IQQdP5laEBRJcD4Vj5DEsW2gE6s6g3d/YP/g+BDnT7GNi2qCjTwGd6riBzHaaCEd3Js01vwCPIbmWBRx1nwAN/1ov+/drgFWIlfKpVukyYihtgkXNp4mABK+1GtVr+SBhJDbBIubVw+Cd/TDgKO2DPiN3YUo6y/nDCNEIsqTKH1en2tcwA9FKEItyDi3aIh8Gl1sRrVnSDzNFDJT1bAy5xpOYGn5fP5JuL95ZjMIn1ya7j5dPGfv0A5eAnpZUY3n5jXcoec5J67D9q+VuAPM47D3XaSeL4AAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                                    </div>
                                  </div>
                                  <div class="col-md-4 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group" style="margin-right: 0px;">
                                      <label for="txtsumValfav1_tip1c">Back:</label>
                                      <input type="text" name="txtsumValfav1_tip1c" value="" id="txtsumValfav1_tip1c" placeholder="0.00" class="form-control" style="border-radius: 0px;background-color: #fda9d8;">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-7 col-xs-12">
                                  <div class="col-md-3 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group" style="margin-right: 0px;">
                                      <input type="text" name="txtsumValfav2Desc" value="2FAV" id="txtsumValfav2Desc" class="form-control" style="border-radius: 0px;">
                                    </div>
                                  </div>
                                  <div class="col-md-4 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group" style="margin-right: 0px;">
                                      <input type="text" name="txtsumValfav2_tipc" value="" id="txtsumValfav2_tipc" placeholder="0.00" class="form-control" style="border-radius: 0px;background-color: #fda9d8;">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-7 col-xs-12">
                                  <div class="col-md-3 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group" style="margin-right: 0px;">
                                      <input type="text" name="txtsumValfav3Desc" value="3FAV" id="txtsumValfav3Desc" class="form-control" style="border-radius: 0px;">
                                    </div>
                                  </div>
                                  <div class="col-md-4 col-xs-12" style="padding-left: 1px;">
                                    <div class="form-group" style="margin-right: 0px;">
                                      <input type="text" name="sumValfav3_tipc" value="" id="sumValfav3_tipc" placeholder="0.00" class="form-control" style="border-radius: 0px;background-color: #fda9d8;">
                                    </div>
                                  </div>
                                </div>

                              </div>
                            </div>

                          </div>

                        </section>
                      </form>
                  </div> -->


    </div>


    <footer class="main-footer">
      <strong>Powered By © 2021 <a href="https://sporttradingblog.com/databasehorseuk/ViewRaces#">Data Horses</a>.</strong> All rights
      reserved.
    </footer>


    <div class="control-sidebar-bg"></div>
  </div>


  <script src="./reference Data Horses_files/jquery.min(1).js"></script>

  <script src="./reference Data Horses_files/jquery-ui.min.js"></script>

  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>

  <script src="./reference Data Horses_files/bootstrap.min.js"></script>

  <script src="./reference Data Horses_files/jquery.sparkline.min.js"></script>

  <script src="./reference Data Horses_files/moment.min.js"></script>
  <script src="./reference Data Horses_files/daterangepicker.js"></script>

  <script src="./reference Data Horses_files/jquery.knob.min.js"></script>

  <script src="./reference Data Horses_files/bootstrap-datepicker.min.js"></script>

  <script src="./reference Data Horses_files/bootstrap3-wysihtml5.all.min.js"></script>

  <script src="./reference Data Horses_files/jquery.slimscroll.min.js"></script>

  <script src="./reference Data Horses_files/fastclick.js"></script>

  <script src="./reference Data Horses_files/adminlte.min.js"></script>

  <script src="./reference Data Horses_files/dashboard.js"></script>

  <script src="./reference Data Horses_files/demo.js"></script>

  <script src="./reference Data Horses_files/ckeditor.js"></script>

  <script src="./reference Data Horses_files/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- <script>
    function sortTable(n) {
      var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
      table = document.getElementById("favTable");
      switching = true;
      //Set the sorting direction to ascending:
      //console.log(n);
      dir = "asc";
      if (n == 0) {
        dir = "asc";
      } else {
        dir = "desc";
      }

      /*Make a loop that will continue until
      no switching has been done:*/
      while (switching) {
        //start by saying: no switching is done:
        switching = false;
        rows = table.rows;
        /*Loop through all table rows (except the
        first, which contains table headers):*/
        for (i = 1; i < (rows.length - 1); i++) {
          //start by saying there should be no switching:
          shouldSwitch = false;
          /*Get the two elements you want to compare,
          one from current row and one from the next:*/
          x = rows[i].getElementsByTagName("TD")[n];
          y = rows[i + 1].getElementsByTagName("TD")[n];
          /*check if the two rows should switch place,
          based on the direction, asc or desc:*/
          if (dir == "asc") {
            if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
              //if so, mark as a switch and break the loop:
              shouldSwitch = true;
              break;
            }
          } else if (dir == "desc") {
            if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
              //if so, mark as a switch and break the loop:
              shouldSwitch = true;
              break;
            }
          }
        }
        if (shouldSwitch) {
          /*If a switch has been marked, make the switch
          and mark that a switch has been done:*/
          rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
          switching = true;
          //Each time a switch is done, increase this count by 1:
          switchcount++;
        } else {
          /*If no switching has been done AND the direction is "asc",
          set the direction to "desc" and run the while loop again.*/
          if (switchcount == 0 && dir == "asc") {
            //  if (n==0) {
            //     dir = "asc";
            //   }else{
            //     dir = "desc";
            //   }
            // switching = true;
          }
        }

      }
    }
  </script> -->
  <script type="text/javascript">
    (function($) {

      $.fn.ddTableFilter = function(options) {
        options = $.extend(true, $.fn.ddTableFilter.defaultOptions, options);

        return this.each(function() {
          if ($(this).hasClass('ddtf-processed')) {
            refreshFilters(this);
            return;
          }
          var table = $(this);
          var start = new Date();

          $('th:visible', table).each(function(index) {
            if ($(this).hasClass('skip-filter')) return;
            var selectbox = $('<select>');
            var values = [];
            var opts = [];
            selectbox.append('<option value="--all--">' + $(this).text() + '</option>');

            var col = $('tr:not(.skip-filter) td:nth-child(' + (index + 1) + ')', table).each(function() {
              var cellVal = options.valueCallback.apply(this);
              if (cellVal.length == 0) {
                cellVal = '--empty--';
              }
              $(this).attr('ddtf-value', cellVal);

              if ($.inArray(cellVal, values) === -1) {
                var cellText = options.textCallback.apply(this);
                if (cellText.length == 0) {
                  cellText = options.emptyText;
                }
                values.push(cellVal);
                opts.push({
                  val: cellVal,
                  text: cellText
                });
              }
            });
            if (opts.length < options.minOptions) {
              return;
            }
            if (options.sortOpt) {
              opts.sort(options.sortOptCallback);
            }
            $.each(opts, function() {
              $(selectbox).append('<option value="' + this.val + '">' + this.text + '</option>')
            });

            $(this).wrapInner('<div style="display:none">');
            $(this).append(selectbox);

            selectbox.bind('change', {
              column: col
            }, function(event) {
              var changeStart = new Date();
              var value = $(this).val();

              event.data.column.each(function() {
                if ($(this).attr('ddtf-value') === value || value == '--all--') {
                  $(this).removeClass('ddtf-filtered');
                } else {
                  $(this).addClass('ddtf-filtered');
                }
              });
              var changeStop = new Date();
              if (options.debug) {
                console.log('Search: ' + (changeStop.getTime() - changeStart.getTime()) + 'ms');
              }
              refreshFilters(table);

            });
            table.addClass('ddtf-processed');
            if ($.isFunction(options.afterBuild)) {
              options.afterBuild.apply(table);
            }
          });

          function refreshFilters(table) {
            var refreshStart = new Date();
            $('tr', table).each(function() {
              var row = $(this);
              if ($('td.ddtf-filtered', row).length > 0) {
                options.transition.hide.apply(row, options.transition.options);
              } else {
                options.transition.show.apply(row, options.transition.options);
              }
            });

            if ($.isFunction(options.afterFilter)) {
              options.afterFilter.apply(table);
            }

            if (options.debug) {
              var refreshEnd = new Date();
              console.log('Refresh: ' + (refreshEnd.getTime() - refreshStart.getTime()) + 'ms');
            }
          }

          if (options.debug) {
            var stop = new Date();
            console.log('Build: ' + (stop.getTime() - start.getTime()) + 'ms');
          }
        });
      };

      $.fn.ddTableFilter.defaultOptions = {
        valueCallback: function() {
          return encodeURIComponent($.trim($(this).text()));
        },
        textCallback: function() {
          return $.trim($(this).text());
        },
        sortOptCallback: function(a, b) {
          return a.text.toLowerCase() > b.text.toLowerCase();
        },
        afterFilter: null,
        afterBuild: null,
        transition: {
          hide: $.fn.hide,
          show: $.fn.show,
          options: []
        },
        emptyText: '--Empty--',
        sortOpt: true,
        debug: false,
        minOptions: 2
      }

    })(jQuery);

    $('#favTable').ddTableFilter()
  </script>
  <!-- <script type="text/javascript">
    //on edit
    $(document).ready(function() {

      $("#runner").keyup(function() {
        doCalculation();
      });
      $("#position").keyup(function() {
        doCalculation();
      });
      $("#fav_order").keyup(function() {
        doCalculation();
      });
      $("#tips").keyup(function() {
        doCalculation();
      });
      $("#low").keyup(function() {
        doCalculation();
      });
      $("#bsp").keyup(function() {
        doCalculation();
      });

      function doCalculation() {
        var table = document.getElementById("favTable");
        if (typeof(table) != 'undefined' && table != null) {
          let fav_orderVal = Number($('#fav_order').val());
          let positionVal = Number($('#position').val());
          let tipsVal = Number($('#tips').val());
          let tips_ratingVal = Number($('#tips_rating').val());
          let highVal = Number($('#high').val());
          let lowVal = Number($('#low').val());
          let bspVal = Number($('#bsp').val());
          let bpspVal = Number($('#bpsp').val());
          let winner_highVal = Number($('#winner_high').val());
          let winner_spVal = Number($('#winner_sp').val());
          let runnerVal = Number($('#runner').val());

          let placedVal = 0;
          let horse_placeVal = 0;

          if (runnerVal <= 4) {
            $('#placed').val(1);
            placedVal = 1;
          } else if ((runnerVal >= 5) && (runnerVal <= 7)) {
            $('#placed').val(2);
            placedVal = 2;
          } else if (runnerVal >= 8) {
            $('#placed').val(3);
            placedVal = 3;
          } else {
            $('#placed').val(0);
            placedVal = 0;
          }

          placedVal = Number($('#placed').val());
          if (placedVal == 0) {
            $('#horse_place').val(0);
          } else if ((placedVal == 1) && (positionVal == 1)) {
            $('#horse_place').val(1);
          } else if (placedVal == 2) {
            if (((positionVal == 1) || (positionVal == 2))) {
              $('#horse_place').val(1);
            } else {
              $('#horse_place').val(0);
            }
          } else if (placedVal == 3) {
            if ((positionVal == 1) || (positionVal == 2) || (positionVal == 3)) {
              $('#horse_place').val(1);
            } else {
              $('#horse_place').val(0);
            }
          } else {
            $('#horse_place').val(0);
          }
          horse_placeVal = Number($('#horse_place').val());

          var b2lVal = bspVal - lowVal;
          $('#bsp').val(b2lVal);
          var sel_row_favVal = 0;
          if (positionVal == 1) {
            $('#sel_row_fav').val(1);
            sel_row_favVal = 1;
          } else {
            $('#sel_row_fav').val(0);
            sel_row_favVal = 0;
          }

          var fav1_tipsVal = 0;
          if (tipsVal !== null) {
            if (fav_orderVal == 1) {
              if ((tipsVal == 1) || (tipsVal == 2) || (tipsVal == 3)) {
                if (positionVal == 1) {
                  $('#fav1_tips').val(bspVal);
                  fav1_tipsVal = bspVal;
                } else {
                  $('#fav1_tips').val(-1);
                  fav1_tipsVal = -1;
                }
              } else {
                $('#fav1_tips').val(-1);
                fav1_tipsVal = -1;
              }
            } else {
              $('#fav1_tips').val(-1);
              fav1_tipsVal = -1;
            }

          } else {
            $('#fav1_tips').val(null);
            fav1_tipsVal = null;
          }
          var com1Val = 0;
          if (fav1_tipsVal !== null) {
            if (fav1_tipsVal > 0) {
              com1Val = fav1_tipsVal * -0.07;
              $('#com1').val(com1Val);
            } else {
              $('#com1').val(0);
              com1Val = 0;
            }
          } else {
            $('#com1').val(null);
            com1Val = null;
          }

          var fav1_tip1cVal = 0;
          if (fav1_tipsVal !== null) {
            fav1_tip1cVal = com1Val + fav1_tipsVal;
            $('#fav1_tip1c').val(fav1_tip1cVal);
          } else {
            $('#fav1_tip1c').val(null);
            fav1_tip1cVal = null;
          }
          var fav2_tipVal = 0;
          if (tipsVal !== null) {
            if (fav_orderVal == 2) {
              if ((tipsVal == 1) || (tipsVal == 2) || (tipsVal == 3)) {
                if (positionVal == 1) {
                  $('#fav2_tip').val(bspVal);
                  fav2_tipVal = bspVal;
                } else {
                  $('#fav2_tip').val(-1);
                  fav2_tipVal = -1;
                }
              } else {
                $('#fav2_tip').val(-1);
                fav2_tipVal = -1;
              }
            } else {
              $('#fav2_tip').val(-1);
              fav2_tipVal = -1;
            }

          } else {
            $('#fav2_tip').val(null);
            fav2_tipVal = null;
          }

          var com2Val = 0;
          if (fav2_tipVal !== null) {
            if (fav2_tipVal > 0) {
              com2Val = fav2_tipVal * -0.07;
              $('#com2').val(com2Val);
            } else {
              $('#com2').val(0);
              com2Val = 0;
            }
          } else {
            $('#com2').val(null);
            com2Val = null;
          }
          var fav2_tipcVal = 0;
          if (fav2_tipVal !== null) {
            fav2_tipcVal = com2Val + fav2_tipVal;
            $('#fav2_tipc').val(fav2_tipcVal);
          } else {
            $('#fav2_tipc').val(null);
            fav2_tipcVal = null;
          }

          var fav3_tipVal = 0;
          if (tipsVal !== null) {
            if (fav_orderVal == 3) {
              if ((tipsVal == 1) || (tipsVal == 2) || (tipsVal == 3)) {
                if (positionVal == 1) {
                  $('#fav3_tip').val(bspVal);
                  fav3_tipVal = bspVal;
                } else {
                  $('#fav3_tip').val(-1);
                  fav3_tipVal = -1;
                }
              } else {
                $('#fav3_tip').val(-1);
                fav3_tipVal = -1;
              }
            } else {
              $('#fav3_tip').val(-1);
              fav3_tipVal = -1;
            }

          } else {
            $('#fav3_tip').val(null);
            fav3_tipVal = null;
          }

          var com3Val = 0;
          if (fav3_tipVal !== null) {
            if (fav3_tipVal > 0) {
              com3Val = fav3_tipVal * -0.07;
              $('#com3').val(com3Val);
            } else {
              $('#com3').val(0);
              com3Val = 0;
            }
          } else {
            $('#com3').val(null);
            com3Val = null;
          }
          var fav3_tipcVal = 0;
          if (fav3_tipVal !== null) {
            fav3_tipcVal = com3Val + fav3_tipVal;
            $('#fav3_tipc').val(fav3_tipcVal);
          } else {
            $('#fav3_tipc').val(null);
            fav3_tipcVal = null;
          }
          getSummaryTotals2();
        }

      }


      function getSummaryTotals2() {
        var table = document.getElementById("favTable");
        if (typeof(table) != 'undefined' && table != null) {

          sumValfav1_tip1c = 0;
          sumValfav2_tipc = 0;
          sumValfav3_tipc = 0;

          for (var i = 1; i < table.rows.length; i++) {
            sumValfav1_tip1c = sumValfav1_tip1c + parseFloat(table.rows[i].cells[29].innerHTML);
            sumValfav2_tipc = sumValfav2_tipc + parseFloat(table.rows[i].cells[32].innerHTML);
            sumValfav3_tipc = sumValfav3_tipc + parseFloat(table.rows[i].cells[35].innerHTML);
          }

          $('#txtsumValfav1_tip1c').val(sumValfav1_tip1c);
          $('#txtsumValfav2_tipc').val(sumValfav2_tipc);
          $('#sumValfav3_tipc').val(sumValfav3_tipc);
        }
      }

    });
  </script>
  <script type="text/javascript">
    //on edit
    $(document).ready(function() {
      doCalculation();
      $("#runnerE").keyup(function() {
        doCalculation();
      });
      $("#positionE").keyup(function() {
        doCalculation();
      });
      $("#fav_orderE").keyup(function() {
        doCalculation();
      });
      $("#tipsE").keyup(function() {
        doCalculation();
      });
      $("#lowE").keyup(function() {
        doCalculation();
      });
      $("#bspE").keyup(function() {
        doCalculation();
      });

      function doCalculation() {
        var table = document.getElementById("favTable");
        if (typeof(table) != 'undefined' && table != null) {
          let fav_orderVal = Number($('#fav_orderE').val());
          let positionVal = Number($('#positionE').val());
          let tipsVal = Number($('#tipsE').val());
          let tips_ratingVal = Number($('#tips_ratingE').val());
          let highVal = Number($('#highE').val());
          let lowVal = Number($('#lowE').val());
          let bspVal = Number($('#bspE').val());
          let bpspVal = Number($('#bpspE').val());
          let winner_highVal = Number($('#winner_highE').val());
          let winner_spVal = Number($('#winner_spE').val());
          let runnerVal = Number($('#runnerE').val());

          let placedVal = 0;
          let horse_placeVal = 0;

          //=IF(U3<5,1,IF(AND(U3>4,U3<8),2,IF(U3>7,3,0)))

          if (runnerVal <= 4) {
            $('#placedE').val(1);
            placedVal = 1;
          } else if ((runnerVal >= 5) && (runnerVal <= 7)) {
            $('#placedE').val(2);
            placedVal = 2;
          } else if (runnerVal >= 8) {
            $('#placedE').val(3);
            placedVal = 3;
          } else {
            $('#placedE').val(0);
            placedVal = 0;
          }

          placedVal = Number($('#placedE').val());
          if (placedVal == 0) {
            $('#horse_placeE').val(0);
          } else if ((placedVal == 1) && (positionVal == 1)) {
            $('#horse_placeE').val(1);
          } else if (placedVal == 2) {
            if (((positionVal == 1) || (positionVal == 2))) {
              $('#horse_placeE').val(1);
            } else {
              $('#horse_placeE').val(0);
            }
          } else if (placedVal == 3) {
            if ((positionVal == 1) || (positionVal == 2) || (positionVal == 3)) {
              $('#horse_placeE').val(1);
            } else {
              $('#horse_placeE').val(0);
            }
          } else {
            $('#horse_placeE').val(0);
          }
          horse_placeVal = Number($('#horse_placeE').val());

          var b2lVal = bspVal - lowVal;
          $('#bspE').val(b2lVal);
          var sel_row_favVal = 0;
          if (positionVal == 1) {
            $('#sel_row_favE').val(1);
            sel_row_favVal = 1;
          } else {
            $('#sel_row_favE').val(0);
            sel_row_favVal = 0;
          }

          var fav1_tipsVal = 0;
          if (tipsVal !== null) {
            if (fav_orderVal == 1) {
              if ((tipsVal == 1) || (tipsVal == 2) || (tipsVal == 3)) {
                if (positionVal == 1) {
                  $('#fav1_tipsE').val(bspVal);
                  fav1_tipsVal = bspVal;
                } else {
                  $('#fav1_tipsE').val(-1);
                  fav1_tipsVal = -1;
                }
              } else {
                $('#fav1_tipsE').val(-1);
                fav1_tipsVal = -1;
              }
            } else {
              $('#fav1_tipsE').val(-1);
              fav1_tipsVal = -1;
            }

          } else {
            $('#fav1_tipsE').val(null);
            fav1_tipsVal = null;
          }
          var com1Val = 0;
          if (fav1_tipsVal !== null) {
            if (fav1_tipsVal > 0) {
              com1Val = fav1_tipsVal * -0.07;
              $('#com1E').val(com1Val);
            } else {
              $('#com1E').val(0);
              com1Val = 0;
            }
          } else {
            $('#com1E').val(null);
            com1Val = null;
          }

          var fav1_tip1cVal = 0;
          if (fav1_tipsVal !== null) {
            fav1_tip1cVal = com1Val + fav1_tipsVal;
            $('#fav1_tip1cE').val(fav1_tip1cVal);
          } else {
            $('#fav1_tip1cE').val(null);
            fav1_tip1cVal = null;
          }
          var fav2_tipVal = 0;
          if (tipsVal !== null) {
            if (fav_orderVal == 2) {
              if ((tipsVal == 1) || (tipsVal == 2) || (tipsVal == 3)) {
                if (positionVal == 1) {
                  $('#fav2_tipE').val(bspVal);
                  fav2_tipVal = bspVal;
                } else {
                  $('#fav2_tipE').val(-1);
                  fav2_tipVal = -1;
                }
              } else {
                $('#fav2_tipE').val(-1);
                fav2_tipVal = -1;
              }
            } else {
              $('#fav2_tipE').val(-1);
              fav2_tipVal = -1;
            }

          } else {
            $('#fav2_tipE').val(null);
            fav2_tipVal = null;
          }

          var com2Val = 0;
          if (fav2_tipVal !== null) {
            if (fav2_tipVal > 0) {
              com2Val = fav2_tipVal * -0.07;
              $('#com2E').val(com2Val);
            } else {
              $('#com2E').val(0);
              com2Val = 0;
            }
          } else {
            $('#com2E').val(null);
            com2Val = null;
          }
          var fav2_tipcVal = 0;
          if (fav2_tipVal !== null) {
            fav2_tipcVal = com2Val + fav2_tipVal;
            $('#fav2_tipcE').val(fav2_tipcVal);
          } else {
            $('#fav2_tipcE').val(null);
            fav2_tipcVal = null;
          }

          var fav3_tipVal = 0;
          if (tipsVal !== null) {
            if (fav_orderVal == 3) {
              if ((tipsVal == 1) || (tipsVal == 2) || (tipsVal == 3)) {
                if (positionVal == 1) {
                  $('#fav3_tipE').val(bspVal);
                  fav3_tipVal = bspVal;
                } else {
                  $('#fav3_tipE').val(-1);
                  fav3_tipVal = -1;
                }
              } else {
                $('#fav3_tipE').val(-1);
                fav3_tipVal = -1;
              }
            } else {
              $('#fav3_tipE').val(-1);
              fav3_tipVal = -1;
            }

          } else {
            $('#fav3_tipE').val(null);
            fav3_tipVal = null;
          }

          var com3Val = 0;
          if (fav3_tipVal !== null) {
            if (fav3_tipVal > 0) {
              com3Val = fav3_tipVal * -0.07;
              $('#com3E').val(com3Val);
            } else {
              $('#com3E').val(0);
              com3Val = 0;
            }
          } else {
            $('#com3E').val(null);
            com3Val = null;
          }
          var fav3_tipcVal = 0;
          if (fav3_tipVal !== null) {
            fav3_tipcVal = com3Val + fav3_tipVal;
            $('#fav3_tipcE').val(fav3_tipcVal);
          } else {
            $('#fav3_tipcE').val(null);
            fav3_tipcVal = null;
          }
          getSummaryTotals();
          //get favSummary
        }
      }

      function getSummaryTotals() {
        var table = document.getElementById("favTable");
        if (typeof(table) != 'undefined' && table != null) {
          sumValfav1_tip1c = 0;
          sumValfav2_tipc = 0;
          sumValfav3_tipc = 0;

          for (var i = 1; i < table.rows.length; i++) {
            sumValfav1_tip1c = sumValfav1_tip1c + parseFloat(table.rows[i].cells[29].innerHTML);
            sumValfav2_tipc = sumValfav2_tipc + parseFloat(table.rows[i].cells[32].innerHTML);
            sumValfav3_tipc = sumValfav3_tipc + parseFloat(table.rows[i].cells[35].innerHTML);
          }

          $('#txtsumValfav1_tip1c').val(sumValfav1_tip1c);
          $('#txtsumValfav2_tipc').val(sumValfav2_tipc);
          $('#sumValfav3_tipc').val(sumValfav3_tipc);
        }
      }


    });
  </script>
  <script type="text/javascript">
    $(document).on('click', '#btnDeleteApplications', function() {
      var Delete_ID = $(this).attr('data-id_recordForms');
      $('#deleteApplicationt').modal('show');

      $(document).on('click', '#btn_delete_application', function() {
        $.ajax({
          url: 'https://sporttradingblog.com/databasehorseuk/PagesData/deleteRecApplication',
          method: 'post',
          data: {
            Del_ID: Delete_ID
          },
          success: function(data) {
            $('#deleteApplicationt').modal('hide');
            location.reload();
          }
        })
      })
    })
  </script>
  <script type="text/javascript">
    $(document).on('click', '#btnDelete', function() {
      var Delete_ID = $(this).attr('data-id_record');
      $('#deleteRecord').modal('show');

      $(document).on('click', '#btn_delete_Record', function() {
        $.ajax({
          url: 'https://sporttradingblog.com/databasehorseuk/horses/deleteRec',
          method: 'post',
          data: {
            Del_ID: Delete_ID
          },
          success: function(data) {
            $('#deleteMessage').html(data);
            $('#deleteRecord').modal('hide');
            location.reload();
          }
        })
      })
    })

    $(document).on('click', '#btnDeleteUser', function() {
      var Delete_ID = $(this).attr('data-id_recordUser');
      $('#deleteRecordUser').modal('show');

      $(document).on('click', '#btn_delete_RecordUser', function() {
        $.ajax({
          url: 'https://sporttradingblog.com/databasehorseuk/register/deleteRec',
          method: 'post',
          data: {
            Del_ID: Delete_ID
          },
          success: function(data) {
            $('#deleteMessageUser').html(data);
            $('#deleteRecordUser').modal('hide');
            location.reload();
          }
        })
      })
    })

    $(document).on('click', '#btnEditRace', function() {
      var Delete_ID = $(this).attr('data-id_recordRace');
      $.ajax({
        url: 'https://sporttradingblog.com/databasehorseuk/PagesData/getRecName',
        method: 'post',
        data: {
          Del_ID: Delete_ID
        },
        success: function(data) {

          data = JSON.parse(data);

          $('#txtRecId').val(data.recId);
          $('#dt_dateE').val(data.dt_dateE);
          $('#dt_timeE').val(data.dt_timeE);
          $('#tag_noE').val(data.tag_noE);
          $('#trackE').val(data.trackE);
          $('#distanceE').val(data.distanceE);
          $('#typeE').val(data.TypeE);
          $('#codeE').val(data.codeE);
          $('#horse_idE').val(data.horse_idE);
          $('#jockey_idE').val(data.jockey_idE);
          $('#trainer_idE').val(data.trainer_idE);
          $('#fav_orderE').val(data.fav_orderE);
          $('#positionE').val(data.positionE);
          $('#tipsE').val(data.tipsE);
          $('#tips_ratingE').val(data.tips_ratingE);
          $('#highE').val(data.highE);
          $('#lowE').val(data.lowE);
          $('#bspE').val(data.bspE);
          $('#bpspE').val(data.bpspE);
          $('#winner_highE').val(data.winner_highE);
          $('#winner_spE').val(data.winner_spE);
          $('#runnerE').val(data.runnerE);
          $('#placedE').val(data.placedE);
          $('#horse_placeE').val(data.horse_placeE);
          $('#b2lE').val(data.b2lE);
          $('#sel_row_favE').val(data.sel_row_favE);
          $('#fav1_tipsE').val(data.fav1_tipsE);
          $('#com1E').val(data.com1E);
          $('#fav1_tip1cE').val(data.fav1_tip1cE);
          $('#fav2_tipE').val(data.fav2_tipE);
          $('#com2E').val(data.com2E);
          $('#fav2_tipcE').val(data.fav2_tipcE);
          $('#fav3_tipE').val(data.fav3_tipE);
          $('#com3E').val(data.com3E);
          $('#fav3_tipcE').val(data.fav3_tipcE);
          $('#divEditRace').modal('show');

        }
      })

    })

    $(document).on('click', '#btnEdit', function() {
      var Delete_ID = $(this).attr('data-id_record');
      $.ajax({
        url: 'https://sporttradingblog.com/databasehorseuk/horses/getRecName',
        method: 'post',
        data: {
          Del_ID: Delete_ID
        },
        success: function(data) {
          data = JSON.parse(data);
          $('#txtRecId').val(Delete_ID);
          $('#txtHorse_nameEdit').val(data.horse_name);
          $('#txtHorse_ageEdit').val(data.age);
          $('#divEdit').modal('show');

        }
      })

    })

    $(document).on('click', '#btnEditUser', function() {
      var Delete_ID = $(this).attr('data-id_recordUser');
      $.ajax({
        url: 'https://sporttradingblog.com/databasehorseuk/register/getSingleUserView',
        method: 'post',
        data: {
          Del_ID: Delete_ID
        },
        success: function(data) {
          data = JSON.parse(data);
          $('#txtRecIdUser').val(Delete_ID);
          //alert(data.manageRaces);
          if (data.manageHorses == 1) {
            $('#rdmanageHorses').prop("checked", true);
            $('#rdmanageHorses').attr('value', 1);
          } else {
            $('#rdmanageHorses').prop("checked", false);
            $('#rdmanageHorses').attr('value', 0);
          }
          if (data.manageRaces == 1) {
            $('#rdmanageRaces').prop("checked", true);
            $('#rdmanageRaces').attr('value', 1);
          } else {
            $('#rdmanageRaces').prop("checked", false);
            $('#rdmanageRaces').attr('value', 0);
          }
          if (data.manageTrainers == 1) {
            $('#rdmanageTrainers').prop("checked", true);
            $('#rdmanageTrainers').attr('value', 1);
          } else {
            $('#rdmanageTrainers').prop("checked", false);
            $('#rdmanageTrainers').attr('value', 0);
          }
          if (data.manageJocky == 1) {
            $('#rdmanageJocky').prop("checked", true);
            $('#rdmanageJocky').attr('value', 1);
          } else {
            $('#rdmanageJocky').prop("checked", false);
            $('#rdmanageJocky').attr('value', 0);
          }
          if (data.manageUsers == 1) {
            $('#rdmanageUsers').prop("checked", true);
            $('#rdmanageUsers').attr('value', 1);
          } else {
            $('#rdmanageUsers').prop("checked", false);
            $('#rdmanageUsers').attr('value', 0);
          }

          $('#divEditUser').modal('show');

        }
      })

    })

    $(document).on('click', '#btnDeleteSubCounty', function() {
      var Delete_ID = $(this).attr('data-id_record');
      $('#deleteRecord').modal('show');

      $(document).on('click', '#btn_delete_Record', function() {
        $.ajax({
          url: 'https://sporttradingblog.com/databasehorseuk/subcounties/deleteRec',
          method: 'post',
          data: {
            Del_ID: Delete_ID
          },
          success: function(data) {
            $('#deleteMessage').html(data);
            $('#deleteRecord').modal('hide');
            location.reload();
          }
        })
      })
    })


    $('input[type="checkbox"]').change(function() {

      if ($(this).is(':checked')) {
        $(this).attr('value', 1);
      } else {
        $(this).attr('value', 0);
      }
    });

    $(document).on('click', '#btnEditSubCounty', function() {
      var Delete_ID = $(this).attr('data-id_record');
      $.ajax({
        url: 'https://sporttradingblog.com/databasehorseuk/subcounties/getRecName',
        method: 'post',
        data: {
          Del_ID: Delete_ID
        },
        success: function(data) {
          data = JSON.parse(data);
          $('#txtRecId').val(Delete_ID);
          $('#txtDescriptionEdit').val(data.Description);
          $('#divEdit').modal('show');

        }
      })

    })

    $(document).on('click', '#btnDeleteTrainers', function() {
      var Delete_ID = $(this).attr('data-id_record');
      $('#deleteRecord').modal('show');

      $(document).on('click', '#btn_delete_Record', function() {
        $.ajax({
          url: 'https://sporttradingblog.com/databasehorseuk/Trainers/deleteRec',
          method: 'post',
          data: {
            Del_ID: Delete_ID
          },
          success: function(data) {
            $('#deleteMessage').html(data);
            $('#deleteRecord').modal('hide');
            location.reload();
          }
        })
      })
    })

    $(document).on('click', '#btnEditTrainers', function() {
      var Delete_ID = $(this).attr('data-id_record');
      $.ajax({
        url: 'https://sporttradingblog.com/databasehorseuk/Trainers/getRecName',
        method: 'post',
        data: {
          Del_ID: Delete_ID
        },
        success: function(data) {
          data = JSON.parse(data);
          $('#txtRecId').val(Delete_ID);
          $('#txtDescriptionEdit').val(data.trainer_name);
          $('#divEdit').modal('show');

        }
      })

    })


    $(document).on('click', '#btnDeleteJocky', function() {
      var Delete_ID = $(this).attr('data-id_record');
      $('#deleteRecord').modal('show');

      $(document).on('click', '#btn_delete_Record', function() {
        $.ajax({
          url: 'https://sporttradingblog.com/databasehorseuk/Jocky/deleteRec',
          method: 'post',
          data: {
            Del_ID: Delete_ID
          },
          success: function(data) {
            $('#deleteMessage').html(data);
            $('#deleteRecord').modal('hide');
            location.reload();
          }
        })
      })
    })

    $(document).on('click', '#btnEditJocky', function() {
      var Delete_ID = $(this).attr('data-id_record');
      $.ajax({
        url: 'https://sporttradingblog.com/databasehorseuk/Jocky/getRecName',
        method: 'post',
        data: {
          Del_ID: Delete_ID
        },
        success: function(data) {
          data = JSON.parse(data);
          $('#txtRecId').val(Delete_ID);
          $('#txtDescriptionEdit').val(data.j_name);
          $('#divEdit').modal('show');

        }
      })

    })


    $(document).on('click', '#btnDeleteConstituency', function() {
      var Delete_ID = $(this).attr('data-id_record');
      $('#deleteRecord').modal('show');

      $(document).on('click', '#btn_delete_Record', function() {
        $.ajax({
          url: 'https://sporttradingblog.com/databasehorseuk/constituency/deleteRec',
          method: 'post',
          data: {
            Del_ID: Delete_ID
          },
          success: function(data) {
            $('#deleteMessage').html(data);
            $('#deleteRecord').modal('hide');
            location.reload();
          }
        })
      })
    })

    $(document).on('click', '#btnEditConstituency', function() {
      var Delete_ID = $(this).attr('data-id_record');
      $.ajax({
        url: 'https://sporttradingblog.com/databasehorseuk/constituency/getRecName',
        method: 'post',
        data: {
          Del_ID: Delete_ID
        },
        success: function(data) {
          data = JSON.parse(data);
          $('#txtRecId').val(Delete_ID);
          $('#txtDescriptionEdit').val(data.Description);
          $('#divEdit').modal('show');

        }
      })

    })
  </script> -->

  <div style="position: static !important;"></div>
</body>

</html>