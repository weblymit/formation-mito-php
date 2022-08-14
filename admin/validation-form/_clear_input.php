<?php
$name = clear_xss($_POST["name"]);
$price = clear_xss($_POST["price"]);
$description = clear_xss($_POST["description"]);
$category = !empty($_POST["category"]) ? clear_xss($_POST["category"]) : [];