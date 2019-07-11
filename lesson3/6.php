<?php
$menu_arr = [
    'Главная',
    'Товары' => ['категория 1', 'категория 2', 'категория 3'],
    'Услуги' => ['услуги 1', 'услуги 2', 'услуги 3'],
    "Контакты",
];
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>дз-3</title>
</head>
<body>
    <div class="menu">
        <ul>
            <?php foreach($menu_arr as $key=>$value):  ?>
                <?php if(is_array($value)): ?>
                    <li><?=$key;?>
                        <ul>
                            <?php foreach($value as $val): ?>
                                <li><?=$val;?></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                <?php else: ?>
                    <li><?=$value;?></li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
