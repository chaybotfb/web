<?php
$zip = new ZipArchive;
if ($zip->open('KodExplorer-master.zip') === TRUE) {
    $zip->extractTo('/');
    $zip->close();
    echo 'ok';
} else {
    echo 'failed';
}
?>
