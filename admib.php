<?php
  //menghubungkan ke database
  $koneksi = mysqli_connect("localhost","root","","galerifoto");

 //mengambil data dari data base
  $hasil = mysqli_query($koneksi,"SELECT * FROM  album");
 //mengambil data dari data base
 $hasil = mysqli_query($koneksi,"SELECT * FROM foto");
 //mengambil data dari data base
 $hasil = mysqli_query($koneksi,"SELECT * FROM komentarfoto");
 //mengambil data dari data base
 $hasil = mysqli_query($koneksi,"SELECT * FROM user");
 //mengambil data dari data base
 $hasil = mysqli_query($koneksi,"SELECT * FROM likefoto");
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <a href="">login</a> | <a href="">logout</a>

    <H1>Website Galeri Foto</H1>
    <a href="">tambah data </a>
    <table border=1>
        <thead>
    <tr>
                <th><H1>album</H1></th>
                <th>albumid</th>
                <th>namaalbum</th>
                <th>deskripsi</th>
                <th>tanggaldibuat</th>
                <th>userid</th>
</tr>
    <tr>
                <th><H1>foto</H1></th>
                <th>fotoid</th>
                <th>judulfoto</th>
                <th>deskripsifoto</th>
                <th>tanggalunggah</th>
                <th>lokasifile</th>
                <th>albumid</th>
                <th>userid</th>
    </tr>
    <tr>
                <th><H1>komentar foto</H1></th>
                <th>komentarid</th> 
                <th>fotoid</th>
                <th>userid</th>
                <th>isikomentar</th>
                <th>tanggalkomentar</th>
</tr>
<tr>
                <th><H1>like foto</H1></th>
                <th>likeid</th>
                <th>fotoid</th>
                <th>userid</th>
                <th>tanggallike</th>
</tr>
<tr>
                <th><H1>user</H1></th>
                <th>userid</th>
                <th>username</th>
                <th>password</th>
                <th>email</th>
                <th>namalengkap</th>
                <th>alamat</th>
</tr>
   
            


</thead>
<tbody>
<?php 
?>
<tr>
</td>
<?php
?>
</tbody>
</table>
</body>
</html>