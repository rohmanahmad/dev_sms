<table class ="table table-bordered">
 <tr>
	<td colspan="5"> SMS OUTBOX </td>
 </tr>
 <tr>
	<th>No</th>
	<th>Tanggal</th>
	<th>Pengirim</th>
	<th>Penerima</th>
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
		<td><?=anchor(site('history/outbox/'.$r->penerima),$r->penerima)?></td>
		<td><?=anchor(site('history/outbox/'.$r->pengirim),$r->pengirim)?></td>
		<td><?=anchor(site('detail/outbox/'.$r->pengirim),substr($r->text_sms,0,20)."_".$r->status)?></td>
	 </tr>
 <?php $n++;
	}
 } ?>
 </tbody>

</table> 