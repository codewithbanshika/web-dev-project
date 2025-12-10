<?php
if(isset($_POST['message'])){
    $msg = trim($_POST['message']);
    $time = date("Y-m-d H:i:s");

    // AI logic
    $msg_lower = strtolower($msg);
    if(strpos($msg_lower,"hello")!==false || strpos($msg_lower,"hi")!==false){
        $reply = "Hello! How are you today?";
    } elseif(strpos($msg_lower,"sad")!==false){
        $reply = "I'm here for you. Take a deep breath!";
    } elseif(strpos($msg_lower,"happy")!==false){
        $reply = "That's great! Keep smiling 😄";
    } else {
        $reply = "I see. Tell me more!";
    }

    // Save chat
    $user_msg = "[$time] You: $msg" . PHP_EOL;
    $ai_msg = "[$time] AI: $reply" . PHP_EOL;
    file_put_contents("chat.txt", $user_msg.$ai_msg, FILE_APPEND);

    echo $reply;
}
?>
