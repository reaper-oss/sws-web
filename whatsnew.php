<?php
$header = file_get_contents('header.html');
echo $header;
?>

<?php
$html = file_get_contents('./download/featured/index.html');
echo $html;
?>

<?php
$html = file_get_contents('footer.html');
echo $html;
?>