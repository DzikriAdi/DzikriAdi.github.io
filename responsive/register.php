<html>
	<head>
		<title>Keluaran Form</title>
	</head>
	<body align="center">
	
	<table border="0" width="100%" cellspacing="0" cellpadding="0">
			
			<tr background="gambar/bgs1.png" border="2">
				<td width="20%" align="middle">
					<img src="gambar/un.png" width="390" height="110" />
				</td>
				<td width="10%"><img src="gambar/form12.png" width="280" height="110"/></td>
				<td align="middle" width="10%"></td>
				<td width="30%"></td>
				<td width="5%"></td>	
				<td width="10%" align="right"><a href="Biodata.html"><img src="gambar/home.png" width="60" height="70" /></a></td>
				<td width="5%"></td>
			</tr>
			
			<tr height="2">
				<td colspan="7" bgcolor="green"></td>
			</tr>
			<tr height="60"/>
		</table>
		
		<table  width="500" border="0" align="center"  cellpadding="0" cellspacing="0"  bgcolor="#000" style="padding: 2px" style="color: #00008B">
				
				<tr align="center">
					<td  height="40" colspan="5"  background="gambar/bgs1.png"><font face="arial" size="5" color="#FFFFFF">
					<b>Data Pendaftar</b></font></td>
				</tr>
				<tr>
				<td  bgcolor="#FFFFFF"><table width="452"  border="0" align="center" cellpadding="10"  cellspacing="0">
				
				<tr>
					<td><font face="arial" size="4"><b>Nama</td>
					<td>:</td>
					<td><font face="arial" size="4" color="green"><b>
						<?php
						echo $_GET['nama'];?>
					</td>
				</tr>
				<tr>
					<td><font face="arial" size="4"><b>Dari</td>
					<td>:</td>
					<td><font face="arial" size="4" color="green"><b>
						<?php
						echo $_GET['sekolah'];?>
					</td>
				</tr>
				<tr>
					<td><font face="arial" size="4"><b>Password</td>
					<td>:</td>
					<td><font face="arial" size="4" color="green"><b>
						<?php
						echo $_GET['password'];?>
					</td>
				</tr>
				<tr>
					<td><font face="arial" size="4"><b>Jenis Kelamin</td>
					<td>:</td>
					<td><font face="arial" size="4" color="green"><b>
						<?php
						echo $_GET['jenis_kelamin'];?>
					</td>
				</tr>
				<tr>
					<td><font face="arial" size="4"><b>Keahlian</td>
					<td>:</td>
					<td><font face="arial" size="4" color="green"><b>
						<?php
						echo $_GET['keahlian'];?>
					</td>
				</tr>
				<tr>
					<td><font face="arial" size="4"><b>Tempat Lahir</td>
					<td>:</td>
					<td><font face="arial" size="4" color="green"><b>
						<?php
						echo $_GET['tempat_lahir'];?>
					</td>
				</tr>
				<tr>
					<td><font face="arial" size="4"><b>Alamat Lengkap</td>
					<td>:</td>
					<td><font face="arial" size="4" color="green"><b>
						<?php
						echo $_GET['aleng'];?>
					</td>
				</tr>
				<tr>
					<td><font face="arial" size="4"><b>Deskripsi</td>
					<td>:</td>
					<td><font face="arial" size="4" color="green"><b>
						<?php
						echo $_GET['deskripsi'];?>
					</td>
				</tr>
				
		</table>
		
	</body>
</html>