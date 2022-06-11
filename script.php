<?php
    extract($_REQUEST)
    $file=fopen("form-save.txt","a")

    fwrite($file,"name :");
    fwrite($file, $name . "\n");
    fwrite($file,"Email :");
    fwrite($file, $Email . "\n");
    fclose($file);
    ?>