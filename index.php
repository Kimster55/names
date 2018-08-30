<!DOCTYPE html>
<html>
<?php 
include "settings.php";
include "buttons.php";
?>
<head>
  <meta charset="utf-8">
  <title><?php echo $title ?></title>
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
<header>
  <h1 id="titleH1"><?php echo $absent; ?></h1>
  <button id="shuffle" type="button"><?php echo $shuffle; ?></button>
  <button id="doInverse" type="button"><?php echo $present; ?></button>
  <button id="nocover" type="button"><?php echo $shownames; ?></button>
  <button id="docover" type="button"><?php echo $hidenames; ?></button>
</header>      
  <main id="article_list">
  <?php
  // find files in folder  and sort by filename
  $allFiles = scandir($sti,1);
  sort($allFiles);
  // take away . and ..
  array_splice ($allFiles,0,2);
  // and show them
  $howMany = count($allFiles);
  for($i=0;$i<$howMany;$i++){
  //				<section class='gametile' onClick=\" this.innerHTML='' \">
	echo "
	<section class='show' onClick=\" swop(this) \">		
		<img src=\"./images/$allFiles[$i]\" />
		<div class='cover' onClick=\" swop2(this) \"></div>
	</section>	";
  }
  ?>
  </main>


<script src ="script.js.php"></script>

</body>
</html>