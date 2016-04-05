<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
 
<h1>Form Mahasiswa</h1>
<h3>{{deskripsi}}</h3>


<form action="mahasiswa" method="post">
            Nim: <input type="text" name="nim" /><br />
            Nama: <input type="text" name="nama" /><br />
            Alamat: <input type="text" name="alamat" /><br />
            Tanggal lahir: <input type="date" name="tgl_lahir" required><br />
            Jenis Kelamin: <input type="radio" name="jenis_kelamin" value ="L" checked><span>Laki-Laki</span>
					  	   <input type="radio" name="jenis_kelamin" value ="P"><span>Perempuan</span><br />
			Nomor Telepon: <input type="text" name="no_telp" maxlength="12" required><br />
			Fakultas: <input type="text" name="fakultas" /><br />
            Jurusan: <input type="text" name="jurusan" /><br />
            Angkatan: <input type="text" name="angkatan" /><br />
            Golongan Darah: <input type="text" name="gol_darah" /><br />

            <input type="submit" value="Input" />
        </form>
 
</body>
</html>