

<?php
if(isset($_POST['mood'])){
    $mood = htmlspecialchars($_POST['mood']);
    // save mood if needed (optional)
    echo "Mood saved: " . $mood;
}
?>
