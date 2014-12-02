<table class ="table table-bordered table-hover" style="width:100%;font-size:12px;">
 <tr>
	<td colspan="5">
		SMS PERCAKAPAN  <b><span></span></b>
		<div class="text-right">
		<a class="btn btn-default" onclick="history.back();">Back</a>
		</div>
		<a class="btn btn-primary" id="reply">Balas</a>
	</td>
 </tr>
 <tr>
	<td colspan="5" class="hide" id="compose">
		
	</td>
 </tr>
 <tr>
	<th>No</th>
	<th>Tanggal</th>
	<th>Penerima</th>
	<th style="width:40%;">Text</th>
 </tr>
 <tbody>
 <?php 
 if(isset($db_data)){ 
 $n=1;
	foreach($db_data->result() as $r){
	 $pengirim=$r->pengirim;
 ?>
	 <tr>
		<td><?=$n?></td>
		<td><?=$r->tanggal_masuk.br().'<font color="green">'.$r->tanggal_terbaca.'</font>'?></td>
		<td><?=$r->penerima?></td>
		<td><?=$r->text_sms?></td>
	 </tr>
 <?php 
 $n++;
	}
 } ?>
 </tbody>

</table> 
<script>
 $(document).ready(function (){
	$("span").text("<?=$pengirim?>");
 });
</script>

<script>
$(document).ready(function(){
	$("#compose").load("<?=site('PesanBaru?reply')?>");
});
 $("#reply").click(function(){
	var text=$(this).text();
	if(text ==="Balas"){
		$("#compose").attr('class','show');
		$(this).text("Cancel");
	}else{
		$("#compose").attr('class','hide');
		$(this).text("Balas");
	}
	
 });
 
</script>