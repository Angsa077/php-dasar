<?php

$data = [];

if (isset($data["action"])) {
    $action = $data["action"];
} else {
    $action = "Nothing";
}

echo $action . PHP_EOL;

$doto = [];
$oction = $doto["oction"] ?? "Nothong";
echo $oction . PHP_EOL;