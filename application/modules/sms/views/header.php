<html>
<head>
 <title><?php if(isset($title))echo $title; else echo "untitle";?></title>
 <?php echo link_tag(get_bootstrap_css()); ?>
 <?php echo link_tag(get_css("style.css")); ?>
 <script src="<?=load_js('jquery-1.7.2.min.js')?>"></script>
</head>
<body>
 <header style="background:#000;color:#0ff;">
  <div class="imgusr">
	<?php echo img(array("src"=>get_image_profile('noimage.jpg'),"class"=>'img img-circle','width'=>'100%','height'=>'100%')); ?>
  </div>
  
 </header>
 


