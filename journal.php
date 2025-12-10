<?php
header('Content-Type: text/html;charset=UTF-8');
if(isset($_POST['journal'])){
    $journal = htmlspecialchars($_POST['journal']);
    $time = date("Y-m-d H:i:s");
    $entry = "[$time] " . $journal . PHP_EOL;
    file_put_contents("journal.txt", $entry, FILE_APPEND);
    echo "Journal saved!";
}
?>

