<table class ="table table-bordered" style="max-width:95%;">
 <tr>
	<td colspan="5"> SMS INBOX </td>
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
		<td><?=anchor(site('history/inbox/'.$r->penerima),$r->penerima)?></td>
		<td><?=anchor(site('history/inbox/'.$r->pengirim),$r->pengirim)?></td>
		<td><?=anchor(site('detail/inbox/'.$r->pengirim),substr($r->text_sms,0,20)."_".$r->status)?></td>
	 </tr>
 <?php $n++;
	}
 } ?>
 </tbody>

</table> 