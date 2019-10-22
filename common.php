<?php
// データベース情報
function connect() {
  return new PDO(
    "mysql:dbname=blog;host:localhost;charset=utf8mb4",
    "",
    "",
    [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]
  );
}
?>