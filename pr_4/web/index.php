<?php
$host = 'db';
$user = 'testuser';
$pass = 'testpass';
$db = 'testdb';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("DB 연결 실패: " . $conn->connect_error);
}
echo "DB 연결 성공!";
?>
