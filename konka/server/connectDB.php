<?php
$db = mysqli_connect("127.0.0.1", "root", "", "konka");

if (!$db) {
  die('连接错误: ' . mysqli_error($db));
}
?>