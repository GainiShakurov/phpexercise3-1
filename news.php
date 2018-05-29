<?php

require_once 'ClassNews.php';

echo '<h2>Новости</h2>';

for ($i = 0; $i < 5; $i++) {
    $currentNews = new ClassNews('Новость ' . $i);
    $currentNews->setAuthor('Человек' . $i);

    echo $currentNews->getBody();
    echo '<br />';
    echo 'Автор - ' . $currentNews->getAuthor();
    echo '<p></p>';
}
