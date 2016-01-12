<?php
$html = file_get_contents('header.html');
echo $html;
?>

<div class="information-section">
<div class="container">

<h1>Zoom + Scroll</h1>
<p>This category of actions allows simple, one key zoom in and out, as well as other zoom features, depending on the actions you pick.&nbsp;<br />
Bind one of the following to a convienient key!</p>
<h2>Action List</h2>
<ul>
    <li>SWS: Horizontal scroll to put edit cursor at 10%</li>
    <li>SWS: Vertical zoom to selected track(s)</li>
    <li>SWS: Vertical zoom to selected track(s), minimize others</li>
    <li>SWS: Vertical zoom to selected items(s)</li>
    <li>SWS: Vertical zoom to selected items(s), minimize others</li>
    <li>SWS: Horizontal zoom to selected items(s)</li>
    <li>SWS: Zoom to selected item(s)</li>
    <li>SWS: Zoom to selected item(s), minimize others</li>
    <li>SWS: Toggle zoom to sel track(s) + time sel</li>
    <li>SWS: Toggle zoom to sel track(s) + time sel, minimize others</li>
    <li>SWS: Toggle zoom to sel track(s) + time sel, hide others</li>
    <li>SWS: Toggle zoom to sel items(s)</li>
    <li>SWS: Toggle zoom to sel items(s), minimize others</li>
    <li>SWS: Toggle zoom to sel items(s), hide other tracks</li>
    <li>SWS: Save current arrange view</li>
    <li>SWS: Restore arrange view</li>
</ul>
<h2>Drag zoom (&agrave; la Wavelab/Cubase)</h2>
This feature allows you to zoom in the arrange view by grabing the timeline (top ruler) with the left mouse button and drag down/up to zoom in/out.<br />
Note: this feature is disabled by default.<br />
<br />
<h2>Zoom preferences</h2>
To enable and/or tweak zoom features: Main menu > Extension > Zoom preferences...
<br />
<br />
<br />
<br />

</div>
</div>

<?php
$html = file_get_contents('footer.html');
echo $html;
?>
