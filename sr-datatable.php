<?php
function randomName() {
    $firstname = array(
        'Johnathon',
        'Anthony',
        'Erasmo',
        'Raleigh',
        'Nancie',
        'Tama',
        'Camellia',
        'Augustine',
        'Christeen',
        'Luz',
        'Diego',
        'Lyndia',
        'Thomas',
        'Georgianna',
        'Leigha',
        'Alejandro',
        'Marquis',
        'Joan',
        'Stephania',
        'Elroy',
        'Zonia',
        'Buffy',
        'Sharie',
        'Blythe',
        'Gaylene',
        'Elida',
        'Randy',
        'Margarete',
        'Margarett',
        'Dion',
        'Tomi',
        'Arden',
        'Clora',
        'Laine',
        'Becki',
        'Margherita',
        'Bong',
        'Jeanice',
        'Qiana',
        'Lawanda',
        'Rebecka',
        'Maribel',
        'Tami',
        'Yuri',
        'Michele',
        'Rubi',
        'Larisa',
        'Lloyd',
        'Tyisha',
        'Samatha',
    );

    $lastname = array(
        'Mischke',
        'Serna',
        'Pingree',
        'Mcnaught',
        'Pepper',
        'Schildgen',
        'Mongold',
        'Wrona',
        'Geddes',
        'Lanz',
        'Fetzer',
        'Schroeder',
        'Block',
        'Mayoral',
        'Fleishman',
        'Roberie',
        'Latson',
        'Lupo',
        'Motsinger',
        'Drews',
        'Coby',
        'Redner',
        'Culton',
        'Howe',
        'Stoval',
        'Michaud',
        'Mote',
        'Menjivar',
        'Wiers',
        'Paris',
        'Grisby',
        'Noren',
        'Damron',
        'Kazmierczak',
        'Haslett',
        'Guillemette',
        'Buresh',
        'Center',
        'Kucera',
        'Catt',
        'Badon',
        'Grumbles',
        'Antes',
        'Byron',
        'Volkman',
        'Klemp',
        'Pekar',
        'Pecora',
        'Schewe',
        'Ramage',
    );

    $name = $firstname[rand ( 0 , count($firstname) -1)];
    $name .= ' ';
    $name .= $lastname[rand ( 0 , count($lastname) -1)];

    return $name;
}
?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        
        <script src="../sr-basic-feature/node_modules/jquery/dist/jquery.min.js" type="text/javascript"></script>
        <script src="../sr-basic-feature/dist/sr-basic-functions.js" type="text/javascript"></script>
        
        <link href="../sr-bootstrap-components/dist/sr-datatable.css" rel="stylesheet" type="text/css">
        <script src="../sr-bootstrap-components/dist/sr-datatable.js" type="text/javascript"></script>
        
        <link href="../sr-basic-feature/node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        
        <link href="src/others/bootstrap-4.0.0/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <table class="table table-bordered table-striped my-datatable">
            <thead>
                <tr>
                    <th data-sr-data-table-search-clear="true">#</th>
                    <th data-sr-data-table-search="true">Product</th>
                    <th data-sr-data-table-sort="numeric">Sale</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                for ($i = 1; $i < 500; $i++): ?>
                <tr>
                    <td><?= $i ?></td> 
                    <td> <?= randomName(); ?> </td> 
                    <td><?= random_int(100, 1000) ?></td>
                </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </body>

    <script src="src/others/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function ()
        {
            $(".my-datatable").srDatatable();
        });
    </script>
</html>
