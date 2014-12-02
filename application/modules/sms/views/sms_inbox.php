<table class ="table table-bordered table-hover" style="max-width:95%;">
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
		if($r->status == 0){$style='style="font-weight:bold;"';}else{$style='style="font-size:12px;"';}
 ?>
	 <tr <?=$style?>>
		<td><?=$n?></td>
		<td><?=$r->tanggal_masuk.br().'<font color="green">'.$r->tanggal_terbaca.'</font>'?></td>
		<td><?=$r->penerima?></td>
		<td><?=$r->pengirim?></td>
		<td><?=anchor(site('detail/inbox/'.$r->pengirim),substr($r->text_sms,0,20))?></td>
	 </tr>
 <?php $n++;
	}
	//anchor(site('history/inbox/'.$r->penerima),'');
	//anchor(site('history/inbox/'.$r->pengirim),'');
 } ?>
 </tbody>

</table> 