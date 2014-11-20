<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Register Information</h2>

		<div>
			<table>
				<tr>
					<td>ชื่อ : </td>
					<td>{{ $firstname.' '.$lastname }}</td>
				</tr>
				<tr>
					<td>เบอร์โทร : </td>
					<td>{{ $tel }}</td>
				</tr>
				<tr>
					<td>อีเมล์ :</td>
					<td>{{ $email }}</td>
				</tr>
				<tr>
					<td>ข้อความ : </td>
					<td>{{ $info }}</td>
				</tr>
			</table>
		</div>
	</body>
</html>