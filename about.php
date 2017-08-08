<?php
	$surname='Стукалов';
	$firstname='Евгений';
	$patrname='Александрович';
	$age=42;
	$email='evg1075@yandex.ru';
	$city='Гатчина';
	$about='Ведущий программист баз данных';
?>

<style type="text/css">
	td {
		padding-right: 30px;
	}
</style>

<h1>Страница пользователя Евгений</h1>

<table>
	<tr>
		<td>Фамилия</td>
		<td><?=$surname?></td>
	</tr>
	<tr>
		<td>Имя</td>
		<td><?=$firstname?></td>
	</tr>
	<tr>
		<td>Отчество</td>
		<td><?=$patrname?></td>
	</tr>
	<tr>
		<td>Возраст</td>
		<td><?=$age?></td>
	</tr>
	<tr>
		<td>Адрес электронной почты</td>
		<td><a href=<?='mailto:'.$email?>><?=$email?></a></td>
	</tr>
	<tr>
		<td>Город</td>
		<td><?=$city?></td>
	</tr>
	<tr>
		<td>О себе</td>
		<td><?=$about?></td>
	</tr>
</table>