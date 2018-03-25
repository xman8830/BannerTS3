<?php 
########################################
#									   #
#		Created by xman8830			   #
#									   #
########################################									
date_default_timezone_set('Europe/Warsaw');//Time zone/Strefa czasowa
$config['cache_name'] = 'EDIT_ME'; //Name cache/Nazwa cache
$config['apikey'] = ''; //Api key https://xman8830.ovh/contact
$config['ts3']['host'] = '';  //Host IP
$config['ts3']['login_port'] = '9987';  //Port Server/Port serwera
$config['ts3']['query_port'] = '10011'; //Port Query
$config['ts3']['login'] = 'serveradmin'; //Login Query
$config['ts3']['password'] = '';  //Password Query/Hasło Query

$config['banner']['format'] = 'png'; //Format png/jpg
$config['banner']['background'] = 'img/banner.png'; //link to background png/jpg/Link do tła png/jpg  
$admingroups = array(14,13,15); //id admins groups/Id grup administracyjnych
$config['img']['found_nick'] = 'Nieznajomy';// Nick if not found nick/Nick jeżeli nie znajdzie go
$config['lang'] = 'PL';//Language PL/EN/Język PL/EN
$weather = array(
	'status' => false,
	'icon' => array (//Icon weather/Ikona pogody
		'status' => true,
		'x' => 1300,
		'y' => 100
	),
	'description' => array (//Details weather/Szczegóły pogody
		'status' => false,
		'font' => '/fonts/Ubuntu-l.ttf',
		'color' => '#fff',
		'size' => 34,
		'x' => 100,
		'y' => 100
	),
	'temp' => array (//Temperature/Temperatura
		'status' => true,
		'font' => '/fonts/Ubuntu-l.ttf',
		'color' => '#fff',
		'size' => 33,
		'x' => 1330,
		'y' => 210
	),
	'city' => array (//City/Miasto
		'status' => true,
		'font' => '/fonts/Ubuntu-l.ttf',
		'color' => '#fff',
		'size' => 34,
		'x' => 1270,
		'y' => 40
	)
);
/*
Variables/Zmienne:
[nick] - Nick
[adminsOnline] - Admins Online/Admini online
[channel] - Online channels/Dostępne kanały
[uptime] - Time on days of enabled server/Czas w dniach włączonego serwera
[visit] - Server visits/Odwiedzin Serwera
[max] - The maximum number of slots/Maksymalna ilość slotów
[online] - User online/Osób online
[ping] - Ping
[time] - Time/Czas
[date] - Date/Data
[nameday] - Name day/Imieniny


##########################################
			THIS COPY/TO KOPIUJ
$img[] = array (
	'x' => 100,//Width/Szerokość
	'y' => 100,//Height/Wysokość
	'size' => 20,//Size/Wielkość
	'text' => 'It Works',//Content/Zawarość
	'font' => '/fonts/Ubuntu-l.ttf',//Font/Czcionka
	'color' => '#fff',//Color/Kolor
); 
##########################################
*/


$img[] = array (
	'x' => 173,
	'y' => 40,
	'size' => 34,
	'text' => 'Admini online: [adminsOnline]',
	'font' => '/fonts/Ubuntu-l.ttf',
	'color' => '#fff',
); 

$img[] = array (
	'x' => 173,
	'y' => 80,
	'size' => 34,
	'text' => 'Nick [nick]',
	'font' => '/fonts/Ubuntu-l.ttf',
	'color' => '#fff',
); 

$img[] = array (
	'x' => 173,
	'y' => 120,
	'size' => 34,
	'text' => 'online: [online]/[max]',
	'font' => '/fonts/Ubuntu-l.ttf',
	'color' => '#fff',
); 

$img[] = array (
	'x' => 173,
	'y' => 160,
	'size' => 34,
	'text' => 'Godzina: [time]',
	'font' => '/fonts/Ubuntu-l.ttf',
	'color' => '#fff',
); 

$img[] = array (
	'x' => 173,
	'y' => 200,
	'size' => 34,
	'text' => 'Data: [date]',
	'font' => '/fonts/Ubuntu-l.ttf',
	'color' => '#fff',
); 

$img[] = array (
	'x' => 173,
	'y' => 240,
	'size' => 34,
	'text' => 'Kanały: [channel]',
	'font' => '/fonts/Ubuntu-l.ttf',
	'color' => '#fff',
); 

$img[] = array (
	'x' => 173,
	'y' => 280,
	'size' => 34,
	'text' => 'uptime: [uptime] dni',
	'font' => '/fonts/Ubuntu-l.ttf',
	'color' => '#fff',
); 
$img[] = array (
	'x' => 173,
	'y' => 320,
	'size' => 34,
	'text' => 'Odwiedzin: [visit]',
	'font' => '/fonts/Ubuntu-l.ttf',
	'color' => '#fff',
); 

$img[] = array (
	'x' => 173,
	'y' => 360,
	'size' => 34,
	'text' => 'Ping: [ping]',
	'font' => '/fonts/Ubuntu-l.ttf',
	'color' => '#fff',
); 

$img[] = array (
	'x' => 430,
	'y' => 400,
	'size' => 34,
	'text' => 'Imieniny: [nameday]',
	'font' => '/fonts/Ubuntu-l.ttf',
	'color' => '#fff',
); 




?>