<?php
if (!empty($_post['name']) and !empty($_post['email']) and !empty($_post['message'])){

	$theme = 'Новое сообщение';

	$letter = 'Данные сообщения:/r/n';
	$leter = 'Имя: '.$_post['name'].'/r/n';
	$leter = 'Email: '.$_post['email'].'/r/n';
	$leter = 'Телефон: '.$_post['phone'].'/r/n';
	$leter = 'Сообщение: '.$_post['message'].'/r/n';

	(mail('nyzhnyknazariy@gmail.com' $theme, $letter)){
	header('Location:/https://www.instagram.com/?hl=ru')
} else {

}