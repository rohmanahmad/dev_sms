<html>
<head>
 <title><?php if(isset($title))echo $title; else echo "untitle";?></title>
 <?php echo link_tag(get_bootstrap_css()); ?>
 <?php echo link_tag(get_css("style.css")); ?>
</head>
<body>
 <header style="background:#000;color:#0ff;">
  <div class="imgusr">
	<?php echo img(array("src"=>get_image_profile('noimage.jpg'),"class"=>'img img-circle','width'=>'100%','height'=>'100%')); ?>
  </div>
  
 </header>
 


