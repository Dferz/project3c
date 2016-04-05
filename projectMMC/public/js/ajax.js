$(document).ready(function(){
	window.alert(5 + 6);
    $('#status_registrasi').change(function(){
       window.alert(5 + 6);
        $('#nim_registrasi').append('<label for="nim" class="col-md-3 control-label">NIM</label>
		<div class="col-md-3">
			<input type="text" class="form-control" name="nim" required>
		</div>');
   
    });
});