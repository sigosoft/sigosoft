<?php
$file_path="APK/sigotracker.apk";
$file_name="sigotracker.apk";
header('Content-Type: application/vnd.android.package-archive');
header("Content-length: " . filesize($file_path));
header('Content-Disposition: attachment; filename="' . $file_name . '"');
ob_end_flush();
readfile($file_path);
return true;
?>