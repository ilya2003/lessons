<?php
today();
?>

<a href="http://vk.com">Перейти на ВК</a>
<a href="http://google.ru">Поискать в Google</a>
<a href="oop.php">ООП</a>
<?php
$menu = db("SELECT menu_name,id FROM pages");

foreach ($menu as $page)
{
    echo "<a href='index.php?page={$page['id']}'>{$page['menu_name']}</a>";
}


