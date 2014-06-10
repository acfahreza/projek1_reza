<html>
<head><title>regist</title>
</head>
<body>
<center>
<form method="POST" action="insertregistrasi.php"><br/>    
 Email <input type =text name="email" placeholder="Email anda" required="required"><br/>
 Password <input type =password name="password" placeholder="Password anda" required="required"><br/>
 Verif password <input type =password name="verif_password" placeholder="Retype password" required="required"><br/>
 Nama pengguna <input type =text name="nama_pengguna" placeholder="Nama pengguna" required="required"><br/>
 Tanggal lahir<input type =date name ="tanggal_lahir" placeholder="Tanggal lahir" required="required"><br/>
 Gender <select name="gender">
			<option>--Pilih--</option>
			<option name="gender">Laki-laki</option>
			<option name="gender">Perempuan</option></select><br/>
 Alamat <textarea name ="alamat" placeholder="Alamat lengkap" required="required"></textarea><br/>
 Sekolah <input type =text name ="sekolah" placeholder="Sekolah anda" required="required"><br/>
 Pekerjaan <input type =text name ="pekerjaan" placeholder="Pekerjaan anda" required="required"><br/>

 <input type="submit" name="submit" value="daftar"><br/>
</table>
</form>
</body>
</html>
