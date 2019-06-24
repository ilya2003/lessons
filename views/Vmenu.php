<?php
today();
?>

<a href="http://vk.com">Перейти на ВК</a>
<a href="http://google.ru">Поискать в Google</a>
<a href="oop.php">ООП</a>
<?php
require_once "app\classes\Config.php";
require_once "app\classes\Db.php";
$result = new app\classes\Db();
$menu = $result->sql("SELECT menu_name,id FROM pages");

foreach ($menu as $page)
{
    echo "<a href='index.php?page={$page['id']}'>{$page['menu_name']}</a>";
}


