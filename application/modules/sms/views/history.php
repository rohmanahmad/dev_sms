<table class ="table table-bordered" style="width:100%;">
 <tr>
	<td colspan="5">SEMUA INBOX DARI [<?=anchor(site('kontak/'.$number),$number)?>] 
		<div class="text-right">
			<a class="btn btn-default" onclick="history.back();">Back</a>
		</div>
	</td>
 </tr>
 <tr>
	<th>No</th>
	<th>Tanggal</th>
	<th>Kepada</th>
	<th>Text</th>
 </tr>
 <tbody>
 <?php 
 if(isset($db_data)){ 
 $n=1;
	foreach($db_data->result() as $r){
 ?>
	 <tr>
		<td><?=$n?></td>
		<td style="font-size:12px;width:20%"><?=$r->tanggal_masuk.br().'<font color="green">'.$r->tanggal_terbaca.'</font>'?></td>
		<td><?=$r->penerima?></td>
		<td><?=$r->text_sms?></td>
	 </tr>
 <?php $n++;
	}
 } ?>
 </tbody>

</table> 