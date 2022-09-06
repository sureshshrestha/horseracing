<!DOCTYPE html>
<head>
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>

    <link rel="stylesheet"  href="vendor/DataTables/jquery.datatables.min.css">	
    <script src="vendor/DataTables/jquery.dataTables.min.js" type="text/javascript"></script> 

    <link href="style.css" rel="stylesheet" type="text/css" />

    <title>Column Search in DataTables using Server-side Processing</title>
    
    

    
</head>

<body>
    <div class="datatable-container">
        <h2>Column Search in DataTables using Server-side Processing</h2>

        <table id="table2" class="table table-bordered">
            <tbody>
                <tr>
                    <th>Item #</th>
                    <th>Type</th>
                    <th>In Stock</th>
                </tr>
                <tr>
                    <td>Item 1</td>
                    <td>Special</td>
                    <td>Y</td>
                </tr>
                <tr>
                    <td>Item 2</td>
                    <td>Not Special</td>
                    <td>N</td>
                </tr>
                <tr>
                    <td>Item 3</td>
                    <td>Special</td>
                    <td>N</td>
                </tr>
            </tbody>
        </table>

        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="vendor/ddtf.js"></script>
        <script>
            jQuery('#table2').ddTableFilter();
        </script>

    </div>
</body>
</html>