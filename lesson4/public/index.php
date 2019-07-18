<?php

require_once __DIR__ . '/../config/config.php';



$news = getNews();

echo render(TEMPLATES_DIR . 'index.tpl', [
	'title' => 'Главная',
	'h1' => 'Горячие новости',
	'content' => renderNews($news)
]);