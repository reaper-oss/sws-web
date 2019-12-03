<?php
function file_info($file)
{
  $icons = [
    'dmg' => 'apple',
    'exe' => 'windows',
    'xz'  => 'linux',
  ];

  return [
    'name' => $file,
    'time' => filemtime($file),
    'size' => filesize($file),
    'icon' => $icons[pathinfo($file, PATHINFO_EXTENSION)],
  ];
}

function size_format($size, $base = 1024)
{
  $units = ['K', 'M', 'G', 'T'];
  $unit = '';
  while(count($units) > 0 && $size > $base) {
    $unit = array_shift($units);
    $size /= $base;
  }
  return number_format($size, 2) . $unit;
}

function print_listing($title, $files)
{
  $name_length = array_reduce($files, function($carry, $item) {
    return max(strlen($item['name']), $carry);
  }, strlen('Name')) + 1;
  $title_splat = preg_replace('/[^a-z0-9\.]+/', '-', strtolower($title));

  echo '<h2 id="' . $title_splat . '">';
  echo '<a href="#' . $title_splat . '">';
  echo htmlspecialchars($title);
  echo '</a></h2><pre>';

  echo '<strong><i class="fa fa-fw"></i>';
  echo str_pad('Name', $name_length);
  echo 'Modified' . str_repeat("\x20", 12);
  echo 'Size</strong><hr/>';
  
  usort($files, function($a, $b) { return $a['name'] < $b['name'] ? -1 : 1; });

  foreach($files as $file) {
    if($file['icon'])
      echo '<i class="fa fa-fw fa-' . $file['icon'] . '"></i>';
    else
      echo '<i class="fa fa-fw"></i>';

    echo '<a href="' . htmlspecialchars($file['name']) . '">';
    echo htmlspecialchars($file['name']) . '</a>';
    echo str_repeat("\x20", $name_length - strlen($file['name']));
    echo strftime('%Y-%m-%d %H:%M:%S', $file['time']) . ' ';
    echo size_format($file['size']) . "\n";
  }

  echo '<hr/></pre>';
}

$files = glob('sws-*');
array_walk($files, function(&$file) { $file = file_info($file); });

$builds = [];
foreach($files as $file) {
  $matches = [];
  if(!preg_match('/^sws-([0-9\.]+)-.+-([a-f0-9]+)\.[a-z\.]+$/', $file['name'], $matches))
    continue;

  $build_name = "v${matches[1]} ${matches[2]}";
  $builds[$build_name][] = $file;
}

// Sort the builds by the modified time of their oldest file
array_walk($builds, function(&$files) {
  usort($files, function($a, $b) { return $a['time'] < $b['time'] ? -1 : 1; });
});
uksort($builds, function($a, $b) use ($builds) {
  return $builds[$a][0]['time'] > $builds[$b][0]['time'] ? -1 : 1;
});
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta name="robots" content="nofollow"/>
  <title>SWS Bleeding Edge Builds</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <style>
  body {
    background-color: #1c120f;
    color: #c6c3c3;
    font-family: "Yanone Kaffeesatz", sans-serif;
    font-size: 1.2em;
  }
  h1, h2, a {
    color: #feb56f;
    text-decoration: none;
    text-shadow: 1px 1px 2px black;
  }
  a:hover, a:focus { color: #ffcfa1; }
  hr { border: 2px solid #2b2626; }
  .fa { font-size: 16px; }
  </style>
</head>
<body>
  <h1>SWS Bleeding Edge Builds</h1>
  <p>
    Generated straight from the master branch of the SWS git repository.
    Use the builds listed here at your own risk.
  </p>
  <?php 
  date_default_timezone_set('UTC');
  print_listing('Latest', [
    file_info('SWS_Template.ReaperLangPack'),
    file_info('whatsnew.html'),
  ]);
  foreach($builds as $build_name => $files)
    print_listing($build_name, $files);
  ?>
</body>
</html>
