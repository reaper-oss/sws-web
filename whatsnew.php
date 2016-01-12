<?php
$header = file_get_contents('header.html');
echo $header;
?>

<div class="information-section">
<div class="container">

<?php
$html = file_get_contents('./download/featured/index.html');
echo $html;
?>

</div>
</div>

<?php
$html = file_get_contents('footer.html');
echo $html;
?>
