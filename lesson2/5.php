<?php 
$h1 = 'Заголовок H1';
$title = 'Название';
$year = '2019';
?>
<head>   
    <title><?=$title?></title>
</head>
<body>
    <h1><?=$h1?></h1>
    <p>Сейчас <?=$year?> год</p>
</body>
<footer>
    <?php echo date("d.m.Yг"); ?>
</footer>