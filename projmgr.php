<?php
$html = file_get_contents('header_features.html');
echo $html;
?>

<h1>Project Management</h1>
<br />
<p>Under Main menu > Extensions > Project Management, there are a few options:</p>
<ul>
<li>Open projects from list opens a .RPL file, and then opens all the projects listed in it.
Optionally you can replace all open tabs with the projects in the .RPL list file.<br />
This is useful if you have an album's worth of tracks and you want to store a &quot;session&quot; such that it's easy to open all of the tracks at once.
</li>
<li>Save list of open projects...&quot; creates a file that lists all of the open project tabs.
The list file is saved with a .RPL (Reaper Project List) extension. This file format is just plain text with one line per Reaper project filename.
</li>
<li>You can also save &quot;related projects&quot;, or built in links to other project files. The links are stored in the project file so you only need to create the link once.
To create the link, select &quot;Add related project...&quot; and browse to your related project.
</li>
</ul>
<p>There's also a Project List dialog, from Main menu > Extensions > Project List.</p>
<p><img src="/images/screenshots/ProjList.png" alt="Project List" />
</p>

<br />
<h2>Actions</h2>
<p>As always, there are actions available for keybinding and macro building:</p>
<ul>
    <li>SWS: Save list of open projects</li>
    <li>SWS: Open projects from list</li>
    <li>SWS: Add related project</li>
    <li>SWS: Open related project 1</li>
    <li>SWS: Open related project 2</li>
    <li>SWS: Open related project 3</li>
    <li>SWS: Open related project 4</li>
    <li>SWS: Open related project 5</li>
    <li>SWS: Switch to first project tab</li>
    <li>SWS: Switch to last project tab</li>
</ul>
<br />
<br />
<br />
<br />

<?php
$html = file_get_contents('footer.html');
echo $html;
?>
