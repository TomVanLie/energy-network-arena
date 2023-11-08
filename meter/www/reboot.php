<?php
if(shell_exec('sudo systemctl restart datel')){
    echo 'Success. <a href="index.php">Go Back</a>';
}

?>