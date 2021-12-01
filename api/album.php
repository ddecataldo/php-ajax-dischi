<?php
require_once __DIR__ . "/../data/album.php";

header("Content-Type: application/json");

echo json_encode($listAlbum);