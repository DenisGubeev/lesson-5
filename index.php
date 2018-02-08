<?php
$data = file_get_contents('data.json');
$persons = json_decode($data, true);
?>

<html>
<head>
<style>
	.border{
		border: 3px solid gray;
		border-collapse: collapse;
	}
</style>
</head>
<body>
	<table>
		<tr class="border">
			<td>Имя</td>
			<td>Фамилия</td>
			<td>Адрес</td>
			<td>Телефон</td>
		</tr>
		<?php foreach($persons as $person) : ?>
			<tr class="border">
				<td><?php echo $person['firstName']; ?></td>
				<td><?php echo $person['lastName']; ?></td>
				<td><?php echo $person['address']; ?></td>
				<td><?php echo $person['phoneNumber']; ?></td>
			</tr>
		<?php foreachend; ?>
	</table>
</body>
</html>
