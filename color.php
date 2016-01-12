<?php
$html = file_get_contents('header_features.html');
echo $html;
?>

<h1>Color Utilities</h1>
<p>The color utilities included in the SWS extension allow easier setting of track and item colors. You know those 16 colors that you can set in the Reaper color dialog as &quot;custom&quot; colors for your tracks and items? Now these are available directly in the menu for tracks and items as shown here:<br />
<br />
<img width="351" height="381" src="/images/screenshots/colormenu.png" alt="" /><br />
<br />
This menu is also in the item settings menu available when you right click items, and there are actions available for key binding or macros.</p>
<p>If you open the Color Management dialog (one of the menu options) you can save/load those 16 colors to/from a file so you can have color sets for different themes, or projects. You can also save the custom colors to your .ReaperTheme file.<br />
<br />
<img width="191" height="262" src="/images/screenshots/colormgmt.png" alt="" /><br />
<br />
From here you can also setup a start and a stop color that work with the &quot;gradient&quot; commands, so you can color your tracks as such:<br />
<br />
<img width="338" height="379" src="/images/screenshots/gradient.png" alt="" /><br />
<br />
<br />
Themers, feel free to include 16 colors that work well with your themes in the ReaperTheme file. Add a section [SWS Colors] and values for custcolor1 through custcolor16 using the same format as the rest of the file. Save your current colors to the file first for a nice template.</p>
<br />



<h1>Autocoloring<a name="auto">&nbsp;</a></h1>
<br />
<p><img width="501" height="532" src="/images/screenshots/acss.png" alt="" /></p>
<p>Go to Main menu > Extensions > Auto Color/Icon to open the autocolor dialog.&nbsp; Add &quot;rules&quot; by clicking on the Add button. Double click (name) and type in a piece of a track name, like &quot;gtr&quot;. Then press the square of color next to the Remove button to choose your desired color. Then press &quot;Apply&quot; and any tracks with gtr in their name are colored. If you want this to happen automatically, check the Enable box. (Then anytime you change a track name or add a track, it applies for you.)<br />
<br />
There are also special types of names/filters and colors, right click in the list to access them. For example, you can have unnamed (eg new) tracks automatically colored randomly.</p>
<h2>Actions</h2>
<p><em>General actions:</em></p>
<p>SWS: Open color management window<br />
SWS: Open auto color window<br />
SWS: Enable auto coloring<br />
SWS: Apply auto coloring</p>
<p><em>Track actions:</em></p>
<p>SWS: Set selected track(s) to color white<br />
SWS: Set selected track(s) to color black<br />
SWS: Set selected track(s) to previous track's color<br />
SWS: Set selected track(s) to next track's color<br />
SWS: Set selected track(s) to one random custom color<br />
SWS: Set selected track(s) to random custom color(s)<br />
SWS: Set selected tracks to color gradient<br />
SWS: Set selected track(s) to ordered custom colors<br />
SWS: Set selected track(s) children to same color<br />
SWS: Set selected track(s) to custom color 1<br />
...<br />
SWS: Set selected track(s) to custom color 16</p>
<p><em>Item Actions:</em></p>
<p>SWS: Set selected item(s) to color white<br />
SWS: Set selected item(s) to color black<br />
SWS: Set selected item(s) to one random custom color<br />
SWS: Set selected item(s) to random custom color(s)<br />
SWS: Set selected item(s) to color gradient per track<br />
SWS: Set selected item(s) to color gradient<br />
SWS: Set selected item(s) to ordered custom colors per track<br />
SWS: Set selected item(s) to ordered custom colors<br />
SWS: Set selected item(s) to respective track color<br />
SWS: Set selected item(s) to custom color 1<br />
...<br />
SWS: Set selected item(s) to custom color 16<br />
</p>

<?php
$html = file_get_contents('footer.html');
echo $html;
?>
