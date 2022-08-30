<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css" />

    </head>

    <body>
        <h2 class="pull-left">Users List</h2>
        <?php
            include_once 'db.php';
            $result = mysqli_query($conn,"SELECT * FROM DatabaseHorsesUK2021");
        
            if (mysqli_num_rows($result) > 0) {
        ?>
        <table id="tblUser">
            <thead>
                <tr>
                    <th>Rows id</th>
                    <th>Date</th>
                    <th>Time</th>
                    <!-- <th>#</th>
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
                    <th>Lay FAV14c Tip</th> -->
                </tr>
            </thead>
        <?php
            // while($row = mysqli_fetch_array($result)) {      
        ?>
        <tr>
            <?php //echo $i; ?>
            <!-- <td><?php echo $row["rows_id"]; ?></td> -->
            <!-- <td><?php echo $row["date_race"]; ?></td> -->
            <!-- <td><?php echo $row["time_race"]; ?></td> -->
        </tr>
        <?php
            // $i++;
        }
        ?>
        </table>

        <?php
            // }
            // else{
            // echo "No result found";
            // }
        ?>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
        <script>
        jQuery(document).ready(function($) {
            $('#tblUser').DataTable( {
                "processing": true,
                "serverSide": true,
                "ajax": "server_processing.php"
            } );
        } );
        </script>
    </body>
</html>

<!-- https://artisansweb.net/how-to-use-datatable-in-php/ -->