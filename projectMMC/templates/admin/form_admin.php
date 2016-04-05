<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<h1>Form Admin</h1>
<h3>{{deskripsi}}</h3>
<form action="" method="post">
	{% if data %}
    {% for row in data %}
            Nama: <input type="text" name="nama_admin" value="{{row.nama_admin}}"/><br />
            Alamat: <input type="text" name="alamat" value="{{row.alamat_admin}}" /><br />
    {% endfor %} 
    {% else %}
    		Nama: <input type="text" name="nama_admin" /><br />
            Alamat: <input type="text" name="alamat" /><br />
    {% endif %}

            <input type="submit" value="Insert" />
        </form>
 	
</body>
</html>