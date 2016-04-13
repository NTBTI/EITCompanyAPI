<?php
require_once '../vendor/autoload.php';

$client = new \EITAPIClient\Client();
$resp = $client->getAllLocations();
/*echo '<div style="background: white; color: black;">';
echo '<span style="background: #CC0000; color:#FFF; padding-left: 1em; padding-right:1em">REMOVE START LINE '.__LINE__.' FROM '.__FILE__.'</span><br/>';
echo '<pre>';
print_r($resp);
echo '</pre>';
echo '<br/><span style="background: #CC0000; color:#FFF; padding-left: 1em; padding-right:1em">REMOVE END LINE '.__LINE__.' FROM '.__FILE__.'</span>';
*/

$m = new Mustache_Engine([
		'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/../src/views/'),
		'partials_loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/../src/views/partials/'),
	]);
$tpl = $m->loadTemplate('header');
echo $tpl->render();
?>
