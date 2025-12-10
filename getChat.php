<?php
if(file_exists("chat.txt")){
    echo file_get_contents("chat.txt");
} else {
    echo "No chat history yet.";
}
?>

