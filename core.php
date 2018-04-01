<?php
require_once __DIR__ . "/class/ts3admin.class.php";
require_once __DIR__ . "/config.php";
$files = array_diff(scandir('cache'), array(
    '..',
    '.',
    'fulls',
    'thumbs'
));
$ip = getenv('HTTP_CLIENT_IP') ?: getenv('HTTP_X_FORWARDED_FOR') ?: getenv('HTTP_X_FORWARDED') ?: getenv('HTTP_FORWARDED_FOR') ?: getenv('HTTP_FORWARDED') ?: getenv('REMOTE_ADDR');
if ($ip == $_SERVER['SERVER_ADDR']) {
	if (!empty($config['cache_name']) or $config['cache_name'] != '') {
		if (!in_array($config['cache_name'], $files)) {
			if (touch('./cache/' . $config['cache_name'])) {
				if (chmod('./cache/' . $config['cache_name'], 0777)) {
					$cache = 'success';
				} else {
					echo 'The folder and the cache file were created, no access rights were granted' . PHP_EOL;
					exit;
				}
			} else {
				echo 'Not created <b>cache</b> or not chmod 777' . PHP_EOL;
				exit;
			}
		} else {
			$query = new ts3admin($config['ts3']['host'], $config['ts3']['query_port'], 2);
			echo '• Starting Banner' . PHP_EOL;
			if ($query->getElement('success', $query->connect())) {
				echo '• Success connect to server' . PHP_EOL;
				if ($query->getElement('success', $query->login($config['ts3']['login'], $config['ts3']['password']))) {
					echo '• Success login to server' . PHP_EOL;
				} else {
					echo '• Error login to server' . PHP_EOL;
				}
				$query->selectServer($config['ts3']['login_port']);
				$query->setName('BannerTs3');
				while (1) {
					$srv            = array();
					$srv['server']  = $query->getElement('data', $query->serverInfo());
					$srv['groups']  = $query->getElement('data', $query->serverGroupList());
					$srv['clients'] = $query->getElement('data', $query->clientList('-uid -away -voice -times -groups -info -icon -country -ip'));
					$srv['channel'] = $query->getElement('data', $query->channelList());
					$srv['banlist'] = $query->getElement('data', $query->banList());
					@file_put_contents('cache/' . $config['cache_name'], json_encode($srv));
					sleep(60);
				}
			} else {
				echo '• Error connect to server' . PHP_EOL;
			}
		}
	} else {
		echo 'cache name not found in config.php' . PHP_EOL;
		exit;
	}
} else {
	echo 'You are not a machine!';
}
?>
