<?php
require("config/config.php");
require("lib/db.php");
$conn = db_conn($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
$sql = "SELECT * FROM topic";
$result = $conn->query($sql);
require("tmpl/index.tmpl.php");
$conn->close();