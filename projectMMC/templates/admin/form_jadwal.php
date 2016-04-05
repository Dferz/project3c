<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
 
<h1>Form Jadwal</h1>
<h3>{{deskripsi}}</h3>
<form action="jadwal" method="post">
			id Jadwal: <input type="text" maxlength='5' name="id_jadwal" /><br />
            hari: <input type="text" name="hari" /><br />
            jam:<select id='waktu' name="jam" style='height:25px; width:150px' required>
								<option value="">-Pilih-</option>
								<option value="08.00-10.00">08.00-10.00</option>
								<option value="10.00-12.00">10.00-12.00</option>
								<option value="12.00-14.00">12.00-14.00</option>
								<option value="14.00-16.00">14.00-16.00</option>
								<option value="16.00-18.00">16.00-18.00</option>
								<option value="18.00-20.00">18.00-20.00</option>
								<option value="20.00-22.00">20.00-22.00</option>
							</select></br>
            id Dokter: <input type="text" name="id_dokter" /><br />

            <input type="submit" value="Insert" />
        </form>
 
</body>
</html>