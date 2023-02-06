<?php
function breaker_status(){
    if (file_exists("4059VUTWRAP00020.txt")){
        $file = $file = file_get_contents('./4059VUTWRAP00020.txt', true);
        $explode = explode(PHP_EOL,$file);
        $counter = 0;
        foreach ($explode as $object){
            if ($counter++ == 0) {
                continue;
            }
            if (isset(explode("=",$object)[0]) and explode("=",$object)[1])
            {
                $objects[explode("=",$object)[0]] = explode("=",$object)[1];
            }
        }
        if (isset($objects["0.0.24.4.0.255"]))
        {
            if ($objects["0.0.24.4.0.255"] == "false")
            {
                return false;
            }
            if ($objects["0.0.24.4.0.255"] == "true")
            {
                return true;
            }
        }
        else
        {
            return true;
        }
    }
    else
    {
        return true;
    }
}
?>