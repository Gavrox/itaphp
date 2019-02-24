<?php
$fp = fsockopen("www.google.com", 80);     
fputs($fp, "GET /index.php HTTP/1.1\r\n ");
fputs($fp, "Host: www.google.com\r\n ");
fputs($fp, "Connection: close\r\n\r\n ");

    while(!feof($fp))
        echo fgets($fp);

fclose($fp);
?>
