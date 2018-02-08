<?php
$data = file_get_contents('C:\Games\OSPanel\domains\task.com\lesson_5.json');
$persons = json_decode($data, true);

?>


<html>
<head>
<style>

</style>
</head>
<body>
	<table>
		<tr class="">
			<td>Имя</td>
			<td>Фамилия</td>
			<td>Адрес</td>
			<td>Телефон</td>
		</tr>
		<?php foreach($persons as $person) : ?>
			<tr class="">
				<td><?php echo $person['firstName']; ?></td>
				<td><?php echo $person['lastName']; ?></td>
				<td><?php echo $person['address']; ?></td>
				<td><?php echo $person['phoneNumber']; ?></td>
			</tr>
		<?php foreachend; ?>
	</table>
</body>
</html>
