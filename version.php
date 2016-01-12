<?php
	function GetVersionData($dir, $what)
	{
		$key = $dir.$what;
		$GLOBALS[$key] = array("0","0","0","0");
		$fp = fopen("download/".$dir."/version.h","r") or die ("can't open version.h");
		while ($s = fgets($fp,128))
		{
			$s=ltrim($s);
			$s=rtrim($s);
			$s=preg_replace('~[\r\n]+~','',$s);
			$s=preg_replace('~[\n]+~','',$s);
			if (strlen($s) && strlen(stristr($s, $what))) {
				list($GLOBALS[$key][0],$GLOBALS[$key][1],$GLOBALS[$key][2],$GLOBALS[$key][3]) =  sscanf($s, "#define ".$what." %d,%d,%d,%d");
				break;
			}
		}
		fclose($fp) or die("can't close version");
	}

	/* Get versions once for all */
	GetVersionData("featured", "REA_VERSION");
	/*GetVersionData("pre-release", "REA_VERSION");*/
	GetVersionData("featured", "SWS_VERSION");
	GetVersionData("pre-release", "SWS_VERSION");

	function GetReaperVersionStr($dir)
	{
		$key = $dir."REA_VERSION";
		$version = "v".$GLOBALS[$key][0].".".$GLOBALS[$key][1];
		if (strcmp($GLOBALS[$key][2], "0") || strcmp($GLOBALS[$key][3], "0"))
		{
			$version .= $GLOBALS[$key][2];
			if (strcmp($GLOBALS[$key][3], "0")) $version .= $GLOBALS[$key][3];
		}
		return $version;
	}

	/* GetVersionStr() is used for display only */
	function GetVersionStr($dir)
	{
		$f = "download/".$dir."/version.h";
		$ftime = filemtime($f);
		$key = $dir."SWS_VERSION";
		$version = "v".$GLOBALS[$key][0].".".$GLOBALS[$key][1].".".$GLOBALS[$key][2];
		if (strcmp($GLOBALS[$key][3], "0")) $version .= " #".$GLOBALS[$key][3];
		if ($ftime != false) $version .= " - ".date('F d, Y', $ftime);
		return $version;
	}

	/* GetVersion() is used for filenames (installers, langpacks, etc) */
	function GetVersion($dir)
	{
		$key = $dir."SWS_VERSION";
		return "v".$GLOBALS[$key][0].".".$GLOBALS[$key][1].".".$GLOBALS[$key][2].".".$GLOBALS[$key][3];
	}

	function GetWin32($dir) { return "download/".$dir."/sws-".GetVersion($dir)."-install.exe"; }
	function GetWin64($dir) { return "download/".$dir."/sws-".GetVersion($dir)."-x64-install.exe"; }
	function GetOSX($dir) { return "download/".$dir."/sws-".GetVersion($dir).".dmg"; }
	function GetLangPack($dir) { return "download/".$dir."/sws-".GetVersion($dir)."-template.ReaperLangPack"; }
?>
