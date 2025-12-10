
<?php
if(file_exists("journal.txt")){
    echo file_get_contents("journal.txt");
} else {
    echo "No journal entries yet.";
}
?>
