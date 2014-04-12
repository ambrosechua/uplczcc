<?php
require_once "config.php";

if ($handle = opendir($updir)) {
    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {
            echo "<a href='$fdir$entry'>$entry</a>";
        }
    }
    closedir($handle);
}
?>