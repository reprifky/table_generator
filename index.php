<?php
/**
 * Created by PhpStorm.
 * User: Rifky_Rep
 * Date: 07/03/2017
 * Time: 11.42
 */
require_once './Tools/Table_Generator/Table_Generator.php';
use Tools\Table_Generator\Table_Generator;
$data = array(
    'MATEMATIKA',
    'IPA',
    'IPS',
    'SEJARAH',
    'PRODUKTIF'
);

$datatable = array(
    array(
        'is-group'=>true,
        'data'=>$data
    ),
    array(
        'is-group'=>true,
        'data'=>$data
    ),
    array(
        'is-group'=>false,
        'data'=>$data
    ),
    array(
        'is-group'=>false,
        'data'=>$data
    )
);


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        #q{
            display: inline-block;
            margin: 20px;
        }
        td{
            padding:10px 30px;
            text-align: center;
        }
    </style>
</head>

<body>
<?php
$x = new Table_Generator($datatable,'aqua');
echo $x->generate();
?>
</body>
</html>
