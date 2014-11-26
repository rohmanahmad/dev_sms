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
	<th>Penerima</th>
	<th>Pengirim</th>
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
		<td><?=$r->tanggal?></td>
		<td><?=$r->penerima?></td>
		<td><?=$r->pengirim?></td>
		<td><?=$r->text_sms?></td>
	 </tr>
 <?php $n++;
	}
 } ?>
 </tbody>

</table> 