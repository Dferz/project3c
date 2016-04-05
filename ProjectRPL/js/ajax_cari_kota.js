$(document).ready(function(){
    $('#provinsi').change(function(){
    	var namaProvinsi = $("#provinsi").val();
    	$.ajax({
    		type: "POST",
            dataType: "html",
            url: "php/cari_kota.php",
            data: "namaProvinsi="+namaProvinsi,
            success: function(data){
               	$("#kota").html(data);                                                                                    
            }
        });
    });

    $('#provinsi_sekolah').change(function(){
        var namaProvinsi = $("#provinsi_sekolah").val();
        $.ajax({
            type: "POST",
            dataType: "html",
            url: "php/cari_kota.php",
            data: "namaProvinsi="+namaProvinsi,
            success: function(data){
                $("#kota_sekolah").html(data);                                                                                    
            }
        });
    });

    $('#kota_sekolah').change(function(){
        var namaKota = $("#kota_sekolah").val();
        $.ajax({
            type: "POST",
            dataType: "html",
            url: "php/cari_sekolah.php",
            data: "namaKota="+namaKota,
            success: function(data){
                $("#asal_sekolah").html(data);                                                                                    
            }
        });
    });
});