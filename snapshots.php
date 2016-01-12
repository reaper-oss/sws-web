<?php
$html = file_get_contents('header_features.html');
echo $html;
?>

<h1>Snapshots</h1>
<p>The snapshots window allows you to save selected track parameters for recall later.&nbsp; There snapshots are saved in the project file.</p>
<p><img height="283" width="447" alt="" src="/images/screenshots/snapshotswnd.png" /></p>
<p>To open the window, go to Main menu > Extensions > Snapshots.</p>
<p>You can save into the next available &quot;slot&quot; with the New button (or action) or save into a specific slot with Ctrl-click (or action). Right click to set name (or double click).&nbsp; Alt-click will delete that snapshot.</p>
<p>Notable Features:</p>
<ul>
    <li>Unlimited slots</li>
    <li>Naming of snapshots</li>
    <li>Project file storage</li>
    <li>Save only parameters from selected tracks, or only certain parameters</li>
</ul>
<br />
<h2>Available Actions</h2>
<ul>
    <li>SWS: Open mix snapshots <em>- Toggle showing of window</em></li>
    <li>SWS: Add selected track(s) to current snapshot</li>
    <li>SWS: Add selected track(s) to all snapshots</li>
    <li>SWS: Delete selected track(s) from current snapshot</li>
    <li>SWS: Delete selected track(s) from all snapshots</li>
    <li>SWS: New snapshot</li>
    <li>SWS: Select current snapshot track(s)</li>
    <li>SWS: Save over current snapshot</li>
    <li>SWS: Recall current snapshot</li>
    <li>SWS: New snapshot and edit name</li>
    <li>SWS: Save as snapshot 1</li>
    <li>SWS: Save as snapshot 2</li>
    <li>...</li>
    <li>SWS: Save as snapshot 12</li>
    <li>SWS: Recall snapshot 1</li>
    <li>SWS: Recall snapshot 2</li>
    <li>...</li>
    <li>SWS: Recall snapshot 12</li>
</ul>
<p>The next group of actions sets the checkboxes on the window.
These are usful for macros like &quot;Create snapshot of volume states&quot;.If you don't want your macro to disturb the current window checkboxes, save and restore the filter state before and after.
An example macro is:</p>
<p><img height="92" width="266" src="/images/screenshots/ss_macro.png" alt="" /></p>
<ul>
    <li>SWS: Toggle snapshot mute</li>
    <li>SWS: Toggle snapshot solo</li>
    <li>SWS: Toggle snapshot pan</li>
    <li>SWS: Toggle snapshot vol</li>
    <li>SWS: Toggle snapshot sends</li>
    <li>SWS: Toggle snapshot fx</li>
    <li>SWS: Toggle snapshot visibility</li>
    <li>SWS: Toggle snapshot selection</li>
    <li>SWS: Toggle snapshot selected only</li>
    <li>SWS: Toggle snapshot apply filter to recall</li>
    <li>SWS: Clear all snapshot filter options</li>
    <li>SWS: Save current snapshot filter options</li>
    <li>SWS: Restore snapshot filter options</li>
</ul>

<?php
$html = file_get_contents('footer.html');
echo $html;
?>
