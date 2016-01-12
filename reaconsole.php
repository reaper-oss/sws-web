<?php
$html = file_get_contents('header.html');
echo $html;
?>

<div class="information-section">
<div class="container">

<h1>ReaConsole</h1>
<p><img height="100" width="263" src="/images/screenshots/reaconsole.png" alt="" /></p>
<p>ReaConsole is a keyboard command interface for some common track tasks in <a href="http://www.reaper.fm/">REAPER</a>.&nbsp; You can also check out the &quot;official&quot; <a href="http://forum.cockos.com/showthread.php?t=19883">Reaper forum thread</a>.<br />
<br style="font-weight: bold;" />
<a href="#operation">Operation</a><br />
<a href="#commands">Commands</a><br />
<a href="#examples">Examples</a><br />
<a href="#actions">Making your own actions out of ReaConsole commands</a><br />
<a href="#issues">Known Issues/Limitations</a><br />
</p>

<a name="Operation"></a><h2>Operation</h2>
<ul>
    <li>Press the action key (default: 'c') to open the console.</li>
    <li>Type your command and press Ctrl-Enter (*)</li>
    <li>If you want to keep the console window open after running the command, use Enter (*)</li>
    <li>Invalid commands are ignored.&nbsp; You can exit at any time without performing a command with ESC.</li>
    <li>Alternatively, bind a key for the command you're interested to &quot;SWS: Open console and copy keystroke&quot;, for example 'i'. &nbsp;Now when you press 'i' to open the console the start of the i command is already preloaded for you. &nbsp;In this particular example, you can select a track and type &quot;i2&lt;enter&gt;&quot; and in three keystrokes you've set the recording input to #2.</li>
</ul>
(*) You can swap both shortcuts vian an option of the context menu.<br />

<br />
<a name="commands"></a><h2>Commands</h2>
<span style="font-family: monospace;">v&nbsp;&nbsp;&nbsp;</span>Volume trim - parameter in db of change<br />
<span style="font-family: monospace;">V&nbsp;&nbsp;&nbsp;</span>Set volume - parameter in db<br style="font-family: monospace;" />
<span style="font-family: monospace;">p&nbsp;&nbsp;&nbsp;</span>Pan trim - parameter in % of change<br />
<span style="font-family: monospace;">P&nbsp;&nbsp;&nbsp;</span>Set Pan - parameter in %, negative pans left<br />
<span style="font-family: monospace;">o&nbsp;&nbsp;&nbsp;</span>Solo<br />
<span style="font-family: monospace;">m&nbsp;&nbsp;&nbsp;</span>Mute<br />
<span style="font-family: monospace;">a&nbsp;&nbsp;&nbsp;</span>Arm<br />
<span style="font-family: monospace;">h&nbsp;&nbsp;&nbsp;</span>Phase<br />
<span style="font-family: monospace;">f&nbsp;&nbsp; </span>FX enable<br />
<span style="font-family: monospace;">x&nbsp;&nbsp; </span>Add FX - parameter is FX name, see details <a href="http://forum.cockos.com/showpost.php?p=1115796&postcount=1179">here</a><br />
<span style="font-family: monospace;">s&nbsp;&nbsp;&nbsp;</span>Select tracks<br />
<span style="font-family: monospace;">n&nbsp;&nbsp;&nbsp;</span>Set track name - parameter is track name<br />
<span style="font-family: monospace;">b&nbsp;&nbsp; </span>Prefix the track name - parameter is the prefix<br />
<span style="font-family: monospace;">z&nbsp;&nbsp; </span>Suffix the track name - parameter is track name<br />
<span style="font-family: monospace;">i&nbsp;&nbsp;&nbsp;</span>Set record input - parameter is # for rec input. &nbsp;'s' suffix sets stereo input. &nbsp;'m' suffix sets MIDI input (all HW). &nbsp;'-' suffix sets input to mono tracks and auto increments.<br />
<span style="font-family: monospace;">l&nbsp;&nbsp; </span>Set number of track channels - parameter is number of channels: 2-64, must be even.<br />
<span style="font-family: monospace;">c&nbsp;&nbsp; </span>Set track color - parameter is a # of a custom color (1-16) or a common color name (red, blue, etc)<br />
<br />
Non-track related commands:<br />
<span style="font-family: monospace;">/ &nbsp; </span>Send local OSC messages (as if it was sent by a device on the network, see details <a href="http://forum.cockos.com/showpost.php?p=1115796&postcount=1179">here</a>)<br />
<span style="font-family: monospace;">! &nbsp; </span>Add an action marker at the edit cursor with the supplied command #/string<br />
<br />
<br />
Many commands (o, m ,a, h, s, f) can be prefixed with '-' or '+' to force disabling/enabling the desired setting. &nbsp;Also, using the command in uppercase will use &quot;exclusive&quot; mode where the setting will be enabled on the desired tracks and disabled on all other.</p>
<p>There are a couple modifiers you can place after the command ID: A slash '/' will cause actions to take place on the children (of folders) of the desired tracks.&nbsp; An exclamation point '!' will invert the track selection.</p>
<p>A full command string consists of the command character itself (or +/- prefix and then the one character command), followed immediately by the track &quot;ID&quot; that you would like to affect. &nbsp;If a parameter is necessary, follow the track id string with a space and then enter the parameter. &nbsp;If no tracks are specified, the currently selected tracks are affected. &nbsp; You can force ReaConsole to separate the track name from the parameter with a semicolon ';'. &nbsp; See <a href="#examples">examples</a> for details.<br />
<br />
Tracks that are affected can be specified by:</p>
<ol>
    <li>Their number (the order in the TCP, or label in the MCP)</li>
    <li>Their name</li>
    <li>The beginning of the unique track name</li>
    <li>A range of numbers (e.g. 1-3)</li>
    <li>Using the wildcard character '*' (*word for matching end of name, word* for beginning, *word* for anywhere)</li>
    <li>A comma separated list of any of the above</li>
    <li>Using the keyword 'all' or a singular '*' for all tracks</li>
</ol>
<p>If multiple tracks have the same name, they will all be affected.<br />
<br />
For the commands that require a parameter, such as the volume/pan/name/input commands, follow the track(s) parameter with a value for the command.&nbsp;&nbsp;The value must have a space or semicolon before it, or if you've omitted the track id field you can enter the parameter right after the command.&nbsp;  The&nbsp;semicolon ';' can be used to explicity mark the end of the track identifiers and start of the parameter. &nbsp; This is useful if you want to select a track that has a space in the name.

<br />
<a name="examples"></a><h2>Examples</h2>
<span style="font-family: monospace;">mbass&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</span>Toggles mute on the track(s) labeled exactly &quot;bass&quot;<br />
<span style="font-family: monospace;">-mjazz bass&nbsp; &nbsp; </span>Turns off mute of the track(s) labeled exactly &quot;jazz bass&quot;<br />
<span style="font-family: monospace;">O1,3-5 &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;</span>Sets solo (in-place) on for tracks 1, 3, 4, 5; all other tracks unsoloed.<br />
<span style="font-family: monospace;">obass*&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;</span>Toggles solo for all tracks starting with the text &quot;bass&quot;.<br />
<span style="font-family: monospace;">+a*vocals&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</span>Arm recording on all tracks ending with the text &quot;vocals&quot;.<br />
<span style="font-family: monospace;">-a*&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;</span>Turn off recording arm on all tracks.<br />
<span style="font-family: monospace;">v*gtr* -1&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</span>Turn down the volume by 1 db on all tracks with &quot;gtr&quot; in the name.<br />
<span style="font-family: monospace;">V0 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; </span>Sets the volume for selected&nbsp;track(s) to 0.0db.<br />
<span style="font-family: monospace;">i2 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span>Set rec input to #2 on selected track(s).<br />
<span style="font-family: monospace;">i1s &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>Set rec input to stereo 1-2 on selected track(s).<br />
<span style="font-family: monospace;">i1m &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>Set rec input to MIDI channel 1, all available devices, on selected track(s).<br />
<span style="font-family: monospace;">i1-10 1-&nbsp; &nbsp; &nbsp; &nbsp;</span>Set rec input on tracks 1 through 10 to hardware inputs 1 through 10.<br />
<span style="font-family: monospace;">n;Gtr Lead &nbsp; &nbsp; </span>Name selected track(s) &quot;Gtr Lead&quot;.<br />
<span style="font-family: monospace;">nGtr Gtr2 &nbsp;&nbsp; &nbsp; </span>Rename all tracks labeled &quot;Gtr&quot; to &quot;Gtr2&quot;.<br />

<br />
<a name="actions"></a><h2>Making your own actions out of ReaConsole commands</h2>
The Cycle Action editor features an instruction "CONSOLE" to run ReaConsole commands, see details <a href="http://forum.cockos.com/showpost.php?p=1115796&postcount=1179">here</a>.<br />

<br />
<a name="issues"></a><h2>Known issues/limitations</h2>
<ol>
    <li>Solo-in-place is always assumed, even if you have it turned off in REAPER preferences.</li>
    <li>Track names are always matched case-insensitive.</li>
    <li>Command shortcuts above aren't configurable.</li>
    <li>Track names with strictly numerical names or containing '*',&nbsp;'-',&nbsp;',', '/', or ';' can't be selected reliably by name.</li>
</ol>
<p>&nbsp;</p>

</div>
</div>

<?php
$html = file_get_contents('footer.html');
echo $html;
?>
