<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mood_input = $_POST['mood'];
        // write this to to mood.txt
        $file = fopen("../mood.txt", "w") or die("Unable to open file!");
        fwrite($file, $mood_input);
        header("Location: thank_you.html");
        //open another terminal and run the python script

        sleep(5);
        exec("killall php");
        exit();
    }  
?>
  
