<?php
$output = shell_exec('systemctl restart datel');
echo "<pre>$output</pre>";
?>