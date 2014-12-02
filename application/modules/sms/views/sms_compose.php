<?php if(isset($reply)){$width='width="100%"';}else{$width='';}?>
<table class ="table table-bordered" <?=$width?>>
 <tr>
	<td colspan="5"> SMS BARU 
		<div class="button-group">
			<?php echo form_open('#','id="formInput"');
					echo form_button('send','Kirim','class="btn btn-primary" onclick="send();"').' ';
					echo form_button('save','Save','class="btn btn-default" onclick="saveDraft();"').' ';
					echo form_reset('reset','Reset','class="btn btn-danger"').' ';
					echo form_button('cancel','Cancel','class="btn btn-warning"');
			?>
		</div>
		<?php 
		echo $success=$load->get_flash('success');
		if (isset($error)){
		 echo "<div class='error'>".
			$err
		 ."</div>";
		}elseif(isset($success)){
		 echo "<div class='success'>".
			$success
		 ."</div>";
		}
		?>
	</td>
 </tr>
 <tr>
	<td>Pengirim</td>
		<td>:</td>
			<td>
				<?php echo form_input('pengirim','','style="width:100%;" id="pengirim"'); ?>
			</td>
 </tr>
 <tr>
	<td>Penerima</td>
		<td>:</td>
			<td>
				<?php echo form_input('penerima','','style="width:100%;" id="penerima"'); ?>
			</td>
 </tr>
 <tr>
	<td>Templates</td>
		<td colspan="2">
			<a class="btn btn-default" onclick="change_value('rec');">No.Rec</a>
			<a class="btn btn-default" onclick="change_value('resi');">No.Resi</a>
			<a class="btn btn-default" onclick="change_value('konf');">Konfirmasi</a>
			<a class="btn btn-default" onclick="change_value('');">Info Pengiriman</a>
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
	var val;
	if(type === "rec"){
		val="No.Rec yang tersedia :\n BRI : 112776287";
	}else if(type==="resi"){
		val="No.Resi Pengiriman Anda Yaitu: [...]";
	}else if(type==="konf"){
		val="Konfirmasi pembayaran melalui sms center dengan format:\n Nama pemesan , ";
	}else{
		val="Konfirmasi";
	}
	$("#pesan_text").attr("value",val);
 }
 
 function saveDraft(){
	
 }
 
 function execute_url(url){
	var data={
		'pengirim':$("#pengirim").val(),
		'penerima':$("#penerima").val(),
		'text_sms':$("#pesan_text").val()
	}
	$.ajax({
        url: url,
        type: 'post',
        dataType: 'json',
        data: data,
        success: function(data) {
                   alert();
                 }
    });
 }
 
 function send(){
	
	var url="<?=site('PesanBaru')?>";
	//alert(url);
	execute_url(url);
 }
</script>
