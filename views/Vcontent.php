<?php
$sql = "SELECT content FROM pages WHERE id='{$_GET['page']}'";
$content= db($sql);

echo $content[0]['content'];