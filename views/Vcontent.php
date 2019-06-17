<?php
$sql = "SELECT content FROM pages WHERE id='{$_GET['page']}'";
$content= db($sql);

for ($i= 1; $i<=10;$i++)
{
    echo $i;
}
echo "<br>";
$i=1;
while($i<=10)
{
    echo $i;
    $i++;
}

if ($content[0]['content']=="Таблица Пифагора") {
    echo $content[0]['content'];
    ?>
    <form method="post">
        Введите число строк:
        <input type="text" name="tr">
        Введите число столбцов:
        <input type="text" name="td">
        <input type="submit" value="Нарисовать таблицу">
    </form>
    <div id="pifagor">
    <?php

        pifagor($_POST['tr'],$_POST['td']);

    echo "</div>";
    }
    else
    {

        echo $content[0]['content'];
    }

