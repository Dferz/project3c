<!DOCTYPE html>
<html>
<head>
    <title>Cetak Daftar Pasien || Muhammadiyah Medical Centre</title>
    <meta charset="utf-8">
    <meta name="author" content="Mahasiswa IF UNS">
    <link rel="stylesheet" type="text/css" href="../css/global.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
</head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    font-size: 1em;
}
th, td {
    padding: 2px;
}
</style>
<body onload="window.print()">
<table>
        {% if data %}
        <thead>
            <tr>
                <th>No. Kartu</th>
                <th>Nama Pasien</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>No. Tlpn</th>
                <th>Tanggal Lahir</th>
                <th>Pekerjaan</th>
                <th>Gol. Darah</th>
            </tr>
        </thead>
        <tbody>
            {% for row in data %}
            <tr style="text-align: center">
                <td>{{row.no_kartu}}</td>
                <td>{{row.nama_pasien}}</td>
                <td>{{row.alamat_pasien}}</td>
                <td>{{row.jenis_kelamin}}</td>
                <td>{{row.no_telp}}</td>
                <td>{{row.tgl_lahir_pasien|date('d M Y')}}</td>
                <td>{{row.pekerjaan}}</td>
                <td>{{row.gol_darah}}</td>
            </tr>
            {% endfor %} 
            {% else %}
            <p>No records found</p>
            {% endif %}
        </tbody>
    </table>
</body>
</html>