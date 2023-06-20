<!DOCTYPE html>
<HTML>
<HEAD>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8" />
</HEAD>
<BODY>
<?php
    $files = scandir('assets');
    foreach ($files as $file) {
        if (is_file('assets/' . $file)) {
            echo '<h3>' . $file . '</h3>';
            echo '<img src="assets/' . $file . '" />';
        }
    }
?>
</BODY>
</HTML>
