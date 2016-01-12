<?php
$header = file_get_contents('header.html');
echo $header;
?>

<?php include 'version.php'; ?>

	<!-- DOWNLOAD -->
	<div class="information-section">
		<div class="container">
			<div class="row">

<center>
<h2>DOWNLOAD THE SWS EXTENSION<a name="download_featured">&nbsp;</a></h2><br />
<h2>
Latest stable version: 
<?php echo GetVersionStr("featured"); ?> - <a href="whatsnew.php">What's new?</a><br />
Requires <a href="http://www.reaper.fm/download.php">REAPER <?php echo GetReaperVersionStr("featured"); ?></a> or above<br />
</h2>
<br />
<br />
</center>

				<div class="one-third column info">
					<center>
						<a href="<?php print GetWin32("featured"); ?>">
							<img src="images/win.gif" alt="Download Windows 32-bit" /><br />
							<h3>Windows 32-bit</h3><br />
						</a>
						For REAPER 32-bit <?php echo GetReaperVersionStr("featured"); ?> or above<br />
						Windows XP/Vista/7/8/10 or WINE<br />
<!--[if !(IE)]><!-->
						&nbsp;<br />
						<a href="<?php print GetWin32("featured"); ?>"><button type="button" class="learn-more">Download</button></a>
						&nbsp;<br />
<!--<![endif]-->
					</center>
				</div>
				<div class="one-third column info">
					<center>
						<a href="<?php print GetWin64("featured"); ?>">
							<img src="images/win.gif" alt="Download Windows 64-bit" /><br />
							<h3>Windows 64-bit</h3><br />
						</a>
						For REAPER 64-bit <?php echo GetReaperVersionStr("featured"); ?> or above<br />
						Windows XP/Vista/7/8/10 or WINE<br />
<!--[if !(IE)]><!-->
						&nbsp;<br />
						<a href="<?php print GetWin64("featured"); ?>"><button type="button" class="learn-more">Download</button></a>
						&nbsp;<br />
<!--<![endif]-->
					</center>
				</div>
				<div class="one-third column info">
					<center>
						<a href="<?php print GetOSX("featured"); ?>">
							<img src="images/mac.gif" alt="OS X Universal Binary" /><br />
							<h3>OS X Universal Binary</h3><br />
						</a>
						For REAPER 32/64-bit <?php echo GetReaperVersionStr("featured"); ?> or above<br />
						OS X 10.5-10.11 32/64-bit<br />
<!--[if !(IE)]><!-->
						&nbsp;<br />
						<a href="<?php print GetOSX("featured"); ?>"><button type="button" class="learn-more">Download</button></a>
						&nbsp;<br />
<!--<![endif]-->
						<br />
					</center>
				</div>
			</div>
		</div>
	</div>



	<!-- ABOUT -->
	<div class="gallery-section">
		<div class="container">
			<div class="row">

				<center>
				<h2>&nbsp;ABOUT<a name="about">&nbsp;</a></h2><br />
				<br />
				</center>

				<div class="one-third column info">
<h3>SWS !?  S&amp;M ?</h3><br />
"SWS" stands for "Standing Water Studios". It is <a href="http://forum.cockos.com/member.php?u=6434">Tim Payne</a>'s project studio.
It's aptly named as all of the incarnations of the recording space have flooded at one time or another. Tim is the project founder.<br />
<br />
Not sure about the "S&amp;M" bit though... "Simple &amp; Mighty"? Inspired by this <a href="http://www.askjf.com/index.php?q=484s">quote</a>?
Well, the only justification <a href="http://forum.cockos.com/member.php?u=11336">Jeffos</a> could provide is that '&amp;' was an efficient filter in the action list (and fun, code-wise).
Jeffos is a project owner, together with Tim.<br />
<br />
The extension is poorly named, it is a collaborative project actually:
<a href="http://forum.cockos.com/member.php?u=27094">Breeder</a> and 
<a href="http://forum.cockos.com/member.php?u=18458">Fingers</a> have contributed popular tools,
but also <a href="http://forum.cockos.com/member.php?u=3602">Xenakios</a>,
<a href="http://forum.cockos.com/member.php?u=2949">IXix</a>, 
<a href="http://forum.cockos.com/member.php?u=473">Shane</a>, 
<a href="http://forum.cockos.com/member.php?u=8580">Adam Wathan</a>, 
<a href="http://forum.cockos.com/member.php?u=16297">Padre_PC</a>, 
<a href="http://forum.cockos.com/member.php?u=52462">Brad</a>, and 
<a href="http://forum.cockos.com/member.php?u=70153">Wol</a>.<br />
<br />
				</div>
				<div class="one-third column info">
<h3>Donations</h3><br />
Donations go to a common wallet which covers website costs at the moment. The rest could be saved for something:
A vacation fund so we can visit Cockos? Hire Geoffrey Francis to write a manual update?<br />
Well, this is yet to be defined but make sure we are not making money out of this project: it is only led by passion...<br />
<br />
Some contributors also have a direct donation account: <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=CDQDHPRX7UYY2">Wol</a>, <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=Q64NF4QCJS3ZJ">Breeder</a>, and <a href="http://reaper.mj-s.com">Jeffos</a>.<br />
<br />
Thank you for supporting the project!
				</div>
				<div class="one-third column info">
<h3>Documentation</h3><br />
Unfortunately, the available documentation does not (cannot) follow the development pace.
The user manual as well as the list of <a href="#features">features documented below</a> are woefully incomplete and do not reflect the latest-and-greatest features.<br />
<br />
For "undocumented" features, you will find some information in the <a href="whatsnew.php">What's new</a>, at least.<br />
				</div>
			</div>


			<div class="row">
				<div class="one-third column info">
<h3>User manual</h3><br />
Download <a href="download/REAPERPlusSWS171.pdf">"REAPER Plus! The Power of SWS Extensions"</a> (for extension version v1.7.1).
If you want to print the PDF, or would like a copy of the manual shipped to your door,
please support <a href="http://forum.cockos.com/member.php?u=2831">Geoffrey Francis</a>
and purchase a copy at his <a href="http://www.lulu.com/spotlight/glazfolk">Lulu store</a>.<br />
<br />
				</div>
				<div class="one-third column info">
<h3>Forum</h3><br />
You can get some support and discuss the extension in the "official" <a href="http://forum.cockos.com/showthread.php?t=29640">REAPER forum thread</a>.
To avoid any confusion, beta versions should be discussed in the <a href="http://forum.cockos.com/showthread.php?t=153702">pre-release thread</a>.
				</div>
				<div class="one-third column info">
<h3>Video</h3><br />
Training videos by <a href="http://www.groove3.com/str/reaper-sws-extensions.html">Groove 3</a>, featuring Kenny Gioia.
				</div>
			</div>

			<div class="row">
				<div class="one-third column info">
<h3>Additional downloads</h3>
<ul style="margin-top:0px;margin-bottom:0px;">
	<li>Old featured versions: <a href="download/featured/old/">here</a></li>
	<li>All versions older than v2.4.0 #3: <a href="https://code.google.com/p/sws-extension/downloads/list?can=1">here</a></li>
	<li>Last PPC build (v2.4.0 #1): <a href="download/featured/old/sws-v2.4.0.1-LAST_PPC.dmg">here</a></li>
	<li><a href="http://forum.cockos.com/showpost.php?p=941893&amp;postcount=810">Translate or customize</a> the extension thanks to the <a href="<?php print GetLangPack("featured"); ?>">Template LangPack</a> (latest version)</li>
</ul>
				</div>
				<div class="one-third column info">
<h3>Open source</h3><br />
The source code is available at <a href="https://github.com/Jeff0S/sws/">GitHub</a>.
If you are familiar with C/C++ and would like to contribute, just fork the repo and send us a pull request!<br />
Also see our <a href="https://github.com/Jeff0S/sws/wiki">wiki</a> for building/coding guidelines.
				</div>
				<div class="one-third column info">
<h3>Submit a bug report</h3><br />
You can submit a bug report or a feature request in our <a href="https://github.com/Jeff0S/sws/issues">issue tracker</a>.
				</div>
			</div>


		</div><!-- close container -->
	</div>



	<!-- FEATURES -->
	<div class="information-section">
		<div class="container">

			<center>
<h2>SOME<a name="features">&nbsp;</a>FEATURES...</h2><br />
<h2>Please note these documents, screenshots, etc might be outdated and/or incomplete.<br />
They are provided in the hope that they will help you in getting started...</h2>
<br />
<br />
			</center>

			<div class="row">
				<div class="one-third column info">
<h3>A bunch of actions</h3><br />
Filter REAPER's action list with "SWS"!
				</div>
				<div class="one-third column info">
<h3><a href="snapshots.php">Snapshots</a></h3><br />
The Snapshots window allows you to save selected track parameters for recall later. Learn more <a href="snapshots.php">here</a>.
				</div>
				<div class="one-third column info">
<h3>Resources</h3><br />
The Resources window is a versatile tool, but its main job is to let you fill your own "slots" of projects, track templates, FX chains, media files, etc.
Just fill some slots and filter the action list with "Resources"!
				</div>
			</div>

			<div class="row">
				<div class="one-third column info">
<h3><a href="http://wiki.cockos.com/wiki/index.php/Fingers_Groove_Tool">Groove tool</a></h3><br />
This is for quantizing audio and MIDI: learn a groove from an item and apply it to other items! Learn more <a href="http://wiki.cockos.com/wiki/index.php/Fingers_Groove_Tool">here</a>.
				</div>
				<div class="one-third column info">
<h3><a href="http://wiki.cockos.com/wiki/index.php/ALR_Main_S%26M_Cycling">Cycle Actions</a></h3><br />
Make special/advanced actions that perform sub-actions successively, or offer conditional statements, or etc.
Learn more <a href="http://wiki.cockos.com/wiki/index.php/ALR_Main_S%26M_Cycling">here</a>.
				</div>
				<div class="one-third column info">
<h3><a href="markeractions.php">Marker actions</a></h3><br />
This feature allows you to place any action as a marker, and have that action ran when the play cursor crosses over that marker. Learn more <a href="markeractions.php">here</a>.
				</div>
			</div>

			<div class="row">
				<div class="one-third column info">
<h3><a href="http://wiki.cockos.com/wiki/index.php/Category:Tempo">Tempo manipulation and warp grid</a></h3><br />
SWS allows you to do extensive <a href="http://wiki.cockos.com/wiki/index.php/Tempo_manipulation_with_SWS">tempo manipulation</a> and
<a href="http://wiki.cockos.com/wiki/index.php/Tempo_mapping_with_SWS">tempo mapping</a>. If that's not enough, you can also freely <a href="http://wiki.cockos.com/wiki/index.php/Warp_grid_with_SWS">warp grid</a> using nothing but mouse. Learn more <a href="http://wiki.cockos.com/wiki/index.php/Category:Tempo">here</a>.
				</div>
				<div class="one-third column info">
<h3><a href="http://wiki.cockos.com/wiki/index.php/Measure_and_normalize_loudness_with_SWS">Loudness</a></h3><br />
Anaylze and normalize loudness using the tools fully compliant with <a href="http://tech.ebu.ch/loudness">EBU R128 Loudness Recommendation</a>.
Learn more <a href="http://wiki.cockos.com/wiki/index.php/Measure_and_normalize_loudness_with_SWS">here</a>.
				</div>
				<div class="one-third column info">
<h3><a href="http://wiki.cockos.com/wiki/index.php/Contextual_toolbars_with_SWS">Contextual toolbars</a></h3><br />
Power up your mouse usage with contextual toolbars. Show different toolbar at mouse cursor for each part of the interface. Learn more <a href="http://wiki.cockos.com/wiki/index.php/Contextual_toolbars_with_SWS">here</a>.
				</div>
			</div>

			<div class="row">
				<div class="one-third column info">
<h3><a href="reaconsole.php">ReaConsole</a></h3><br />
ReaConsole is a keyboard command interface for common track tasks. Learn more <a href="reaconsole.php">here</a>.
				</div>
				<div class="one-third column info">
<h3>Notes</h3><br />
This window allows you to write custom notes for projects, tracks, etc but also for marker and regions. They can follow playback too (subtitles, lyrics, etc). Demo <a href="./images/screenshots/S&amp;M_big_notes.gif">here</a>.
				</div>
				<div class="one-third column info">
<h3>... and many other things !</h3><br />
Region playlist (non-linear play), <a href="download/S&amp;M_LiveConfigs_Ed2.pdf">Live Configs</a>
(for live performers: use REAPER like an FX pedal), additional <a href="zoom.php">zoom</a> features, <a href="projmgr.php">project management</a>,
<a href="color.php">color management</a>, <a href="color.php#auto">automatic colors/icons</a>, LFO generator, cue buss generator, easily previewing and playing takes at mouse cursor, <a href="http://wiki.cockos.com/wiki/index.php/SWS_mouse_cursors">custom mouse cursors</a>, etc.
				</div>
			</div>

		<br />
		<br />

		</div>
	</div>


<?php
$html = file_get_contents('footer.html');
echo $html;
?>
