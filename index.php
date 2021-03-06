<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        
        <script src="../sr-basic-feature/node_modules/jquery/dist/jquery.min.js" type="text/javascript"></script>
        
        
        <link href="../sr-basic-feature/node_modules/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">
        <script src="../sr-basic-feature/node_modules/jquery-toast-plugin/dist/jquery.toast.min.js" type="text/javascript"></script>
        
        <link href="../sr-basic-feature/dist/sr-basic-feature.css" rel="stylesheet" type="text/css">
        <script src="../sr-basic-feature/dist/sr-basic-functions.js" type="text/javascript"></script>
        <script src="../sr-basic-feature/dist/sr-basic-feature.js" type="text/javascript"></script>
        
        <link href="../sr-bootstrap-components/dist/sr-ajax-file-upload.css?1" rel="stylesheet" type="text/css">
        <script src="../sr-bootstrap-components/dist/sr-ajax-file-upload.js?1" type="text/javascript"></script>
        
        <link href="../sr-basic-feature/node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="src/others/highlight/styles/default.css" rel="stylesheet" type="text/css">
        
        <link href="src/others/bootstrap-4.0.0/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <style>
            table
            {
                width : 100%;
                border-collapse: collapse;
                font-family: sans-serif;
            }

            table th
            {
                text-align: left;
            }

            table th,table td
            {
                border : 1px solid #CCC;
                padding : 5px 10px;
            }

            .code-block
            {
                padding: 10px;                
                background-color: #ffcccc;
            }

            .box
            {
                border : 1px solid #6666ff;
            }

            .box .box-header
            {
                background-color: #6666cc;
                color : #FFF;
                padding: 5px 10px;
            }

            .box .box-body
            {
                padding: 5px;
            }
        </style>
        
        
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th style="width : 5%">#</th>
                    <th style="width : 30%">Functionality</th>
                    <th style="width : 60%">Usage</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Children checkbox checked on parent checkbox check </td>
                    <td>
                        <?php include_once './src/elements/chk-select-all/index.php'; ?>
                    </td>
                </tr>
                
                <tr>
                    <td>2</td>
                    <td>toggle class on click, change </td>
                    <td>
                        <?php include_once './src/elements/css-class-toggle/index.php'; ?>
                    </td>
                </tr>
                
                <tr>
                    <td>3</td>
                    <td>Copy Text </td>
                    <td>
                        <?php include_once './src/elements/copy-text/index.php'; ?>
                    </td>
                </tr>
                
                <tr>
                    <td>4</td>
                    <td>SR Paragraph </td>
                    <td>
                        <?php include_once './src/elements/sr-paragraph/index.php'; ?>
                    </td>
                </tr>
                
                <tr>
                    <td>5</td>
                    <td>SR Textarea </td>
                    <td>
                        <?php include_once './src/elements/sr-textarea/index.php'; ?>
                    </td>
                </tr>
                
                <tr>
                    <td>6</td>
                    <td>Table Template </td>
                    <td>
                        <?php include_once './src/elements/sr-table-template/index.php'; ?>
                    </td>
                </tr>
                
                <tr>
                    <td>7</td>
                    <td>Cascade </td>
                    <td>
                        <?php include_once './src/elements/sr-cascade/index.php'; ?>
                    </td>
                </tr>
                
                <tr>
                    <td>8</td>
                    <td>Loader </td>
                    <td>
                        <?php include_once './src/elements/sr-loader/index.php'; ?>
                    </td>
                </tr>
                
                <tr>
                    <td>9</td>
                    <td>Table Export CSV </td>
                    <td>
                        <?php include_once './src/elements/sr-table-csv/index.php'; ?>
                    </td>
                </tr>
                
                <tr>
                    <td>10</td>
                    <td>Read File </td>
                    <td>
                        <?php include_once './src/elements/sr-read-csv/index.php'; ?>
                    </td>
                </tr>
                
                <tr>
                    <td>11</td>
                    <td>Ajax File Upload </td>
                    <td>
                        <?php include_once './src/elements/sr-ajax-file-upload/index.php'; ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>

    <script src="src/others/highlight/highlight.pack.js"></script>
    <script src="src/others/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
</html>
