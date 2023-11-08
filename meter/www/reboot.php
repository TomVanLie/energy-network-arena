<?php
$output = shell_exec('sudo systemctl restart datel');
echo "<pre>$output</pre>";
?>