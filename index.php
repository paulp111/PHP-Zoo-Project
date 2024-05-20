<?php
include __DIR__ . "/header.php";
include __DIR__ . "/src/init.php";

if (isset($zooInstance)) {
    include __DIR__ . "/views/index.view.php";
}
?>
