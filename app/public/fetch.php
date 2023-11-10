<?php

$bookNumber = 1;
$verseNumber = 1;
$chapterNumber = 1;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST['book'])){
        $bookNumber = $_POST['book'];
        //todo call db  
    }
    if(isset($_POST['chapter'])){
        $chapterNumber = $_POST['chapter'];
    }
    if(isset($_POST['verse'])){
        $verseNumber = $_POST['verse'];
    }
}
require_once '../src/Database/Database.php';
require_once '../src/Model/Verse.php';
$database = new Database();
$pdo = $database->connect();
$verse = new Verse($pdo);
$verse->book = $bookNumber;
$verse->chapter = $chapterNumber;
$verse->verse = $verseNumber;
$row = $verse->readOne();
echo json_encode($row);
?>