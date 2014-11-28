<table class ="table table-bordered">
 <tr>
	<td colspan="5"> SMS BARU 
		<div class="button-group">
			<?php echo form_open();
					echo form_submit('submit','Kirim','class="btn btn-primary"').' ';
					echo form_button('save','Save','class="btn btn-default"').' ';
					echo form_reset('reset','Reset','class="btn btn-danger"').' ';
					echo form_button('cancel','Cancel','class="btn btn-warning"');
					?>
		</div>
	</td>
 </tr>
 <tr>
	<td>Pengirim</td>
		<td>:</td>
			<td>
				<?php echo form_input('pengirim','','style="width:100%;"'); ?>
			</td>
 </tr>
 <tr>
	<td>Penerima</td>
		<td>:</td>
			<td>
				<?php echo form_input('penerima','','style="width:100%;"'); ?>
			</td>
 </tr>
 <tr>
	<td>Templates</td>
		<td colspan="2">
			<a class="btn btn-default" onclick="norec();">No.Rec</a>
			<a class="btn btn-default" onclick="norec();">No.Resi</a>
			<a class="btn btn-default" onclick="norec();">Konfirmasi</a>
			<a class="btn btn-default" onclick="norec();">Info Pengiriman</a>
		</td>
 </tr>
 <tr>
	<td colspan="3">Pesan Text</td>
 </tr>
 <tr>
	<td colspan="3"><?php echo form_textarea('pesan_text','','style="width:100%;" id="pesan_text"'); ?></td>
 </tr>
<?php  echo form_close(); ?>
</table> 
<script>
 function change_value(type){
	if(type === "rec"){
		var val="No.Rec yang tersedia :\n BRI : 112776287";
	}elseif(type==="resi"){
		var val="No.Resi Pengiriman Anda Yaitu: [...]";
	}elseif(type==="konf"){
		var val="Konfirmasi pembayaran melalui sms center dengan format:
				\n Nama pemesan , ";
	}
	$("#pesan_text").attr("value",val);
 }
</script>
