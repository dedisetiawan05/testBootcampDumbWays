<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "web_wiki_games";

$connection = mysqli_connect($servername, $username, $password, $dbName);

// Check connection
if (mysqli_connect_errno()) {
  echo "Koneksi database Gagal : " . mysqli_connect_error();
}
