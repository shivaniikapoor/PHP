<?php

    $filename = "newfile.txt";
    $myfile = fopen($filename, "w") or die("Unable to open file!");
    $txt = "Shivani Kapoor\n";
    fwrite($myfile, $txt);
    $txt = "Shruti Kapoor\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    
    if(file_exists($filename))
    {
       $filesize = filesize($filename);
       $msg = "File  created with name $filename ";
       $msg .= "containing $filesize bytes";
       echo $msg;
    }
    else
    {
       echo "File $filename does not exit";
    }
echo "<br> This program is written and executed by Shivani Kapoor-0221BCA140";

    
?>