<html>
<head>
 <title><?php if(isset($title))echo $title; else echo "untitle";?></title>
 <?php echo link_tag(get_bootstrap_css()); ?>
</head>
<body>
<div class="row">
 <div class="row" style="background:#000;color:#fff;">
  <div class="col-md-9 col-md-push-1" style="height:50px;">REZStore</div>
  <div class="col-md-1 col-md-pull-6">
  
  </div>
 </div>
	<div class="btn-group" role="group" aria-label="as">
	  <button type="button" class="btn btn-default">Left</button>
	  <button type="button" class="btn btn-default">Middle</button>
	  <button type="button" class="btn btn-default">Right</button>
	</div>

