<?php
$data = file_get_contents('data.json');
$persons = json_decode($data, true);
?>

<html lang="ru">
<head>
<meta charset="utf-8">
<style>
	table {
		border-collapse: separate;
		border-spacing: 0;
		color: #4a4a4d;
	}
	th,
	td {
		padding: 10px 15px;
		vertical-align: middle;
	}
	td {
		border-bottom: 1px solid #cecfd5;
		border-right: 1px solid #cecfd5;
	}
	thead {
	  background: #395870;
	  background: linear-gradient(#49708f, #293f50);
	  color: #fff;
	  font-size: 11px;
	  text-transform: uppercase;
	}
	th:first-child {
	  border-top-left-radius: 5px;
	  text-align: left;
	}
	th:last-child {
	  border-top-right-radius: 5px;
	}
	tbody tr:nth-child(even) {
	  background: #f0f0f2;
	}
	td {
	  border-bottom: 1px solid #cecfd5;
	  border-right: 1px solid #cecfd5;
	}
	td:first-child {
	  border-left: 1px solid #cecfd5;
	}

</style>
</head>
<body>
	<table>
		<thead>
			<tr>
				<td >Имя</td>
				<td>Фамилия</td>
				<td>Адрес</td>
				<td>Телефон</td>
			</tr>
		</thead>
		<?php foreach($persons as $person) : ?>
			<tbody>
				<tr>
					<td><?php echo $person['firstName']; ?></td>
					<td><?php echo $person['lastName']; ?></td>
					<td><?php echo $person['address']; ?></td>
					<td><?php echo $person['phoneNumber']; ?></td>
				</tr>
			</tbody>
		<?php endforeach; ?>
	</table>
</body>
</html>
