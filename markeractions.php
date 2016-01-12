<?php
$html = file_get_contents('header_features.html');
echo $html;
?>

<h1>Marker Actions</h1>
<p>This feature (also called &quot;macro markers&quot;) allows you to place any Reaper action as a marker, and have that action ran when the play cursor crosses over that marker.</p>
<p>All you have to do is place a <span class="highlight">marker</span> and edit the <span class="highlight">marker</span> text such that it starts with !, followed by the ID of a command/action/macro.&nbsp; If you want to run more than one action, separate them with a space (eg !1 2 3).&nbsp; If you want to run a custom action or an extension action, use the action name instead of # from the Reaper actions dialog, eg !_SWS_SNAPSHOT_GET1.<br />
<br />
For example, this <span class="highlight">marker</span> will cause the playback to jump to <span class="highlight">marker</span> 2 when it crosses this <span class="highlight">marker</span>:<br />
<br />
<img height="204" border="0" width="267" alt="" src="/images/screenshots/markeraction.png" /><br />
<br />
You can get a list of all of Reaper's Command IDs by scrolling to the right in the Actions ('?') dialog.</p>
<p>This functionality can be enabled or disabled using the actions below, or by going to the Options menu and checking/unchecking &quot;Enable SWS marker actions&quot;.</p>
<p>In the forum there are lots of good ideas about uses for marker actions:&nbsp; <a href="http://forum.cockos.com/showthread.php?p=227196#post227196">Here's</a> the original thread, and <a href="http://forum.cockos.com/showthread.php?t=32839">this</a> particularly good thread shows using marker actions for punch points.</p>
<br />
<h2>Available Actions:</h2>
<ul>
    <li>SWS: Toggle marker actions enable</li>
    <li>SWS: Enable marker actions&nbsp;&nbsp;</li>
    <li>SWS: Disable marker actions</li>
</ul>
<p>&nbsp;</p>

<?php
$html = file_get_contents('footer.html');
echo $html;
?>
