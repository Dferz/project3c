<!DOCTYPE html>
<html>
<head>
    <title>Cetak Data Antrean Pasien || Muhammadiyah Medical Centre</title>
</head>
<body onload="window.print()">
<table>
        {% if (data or data2) %}
        <thead>
            <tr>
                <th>No Kartu</th>
                <th>Nama Pasien</th>
                <th>Deskripsi Penyakit</th>
                <th>Nama Dokter</th>
                <th>Hari</th>
                <th>Jam</th>
                <th>Tanggal Daftar</th>
            </tr>
        </thead>
        <tbody>
            {% for row in data %}
            <tr>
                <td>{{row.no_kartu}}</td>
                <td>{{row.nama_pasien}}</td>
                <td>{{row.deskripsi_penyakit}}</td>
                <td>{{row.nama_dokter}}</td>
                <td>{{row.hari}}</td>
                <td>{{row.jam}}</td>
                <td>{{row.tgl_daftar|date('d, M Y')}}</td>
            </tr>
            {% endfor %}
            {% for row in data2 %}
            <tr>
                <td>--</td>
                <td>{{row.nama_pasien}}</td>
                <td>{{row.deskripsi_penyakit}}</td>
                <td>{{row.hari}}</td>
                <td>{{row.jam}}</td>
                <td>{{row.tgl_periksa|date('d, M Y')}}</td>
            </tr>
            {% endfor %} 
            {% else %}
            <p>No records found</p>
            {% endif %}
        </tbody>
    </table>

</body>
</html>