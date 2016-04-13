<?php
namespace EITAPIClient;

require __DIR__.'/../config/config.php';

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\RequestException;

class Client {
    
    protected $client = null;
    protected $baseURI = 'http://devel.api.carrentalexpress.com/';

    public function __construct() {
    	$this->client = $this->buildClient();
    }

    protected function buildClient($authName=null,$authKey=null) {
    	$client = new \GuzzleHttp\Client([
    		'base_url' => $this->baseURI,
    		'defaults' => [
    			'headers' => [
    				'authName' => ($authName ? $authName : EIT_API_AUTHNAME),
    				'authKey' => ($authKey ? $authKey : EIT_API_AUTHKEY)
    			]
    		]
    	]);
    	return $client;
    }

    public function getAllLocations($include_inactive=false,$also_hours=true) {
    	$query = [
    		'include_inactive' => $include_inactive,
    		'include_hours' => $also_hours
    	];
    	try {
    		//$resp = $this->client->request('GET','/locations',$query);
    		$resp = $this->client->get('/locations',[
    			'query' => $query
    			]
    		);

    	} catch(RequestException $e) {
    		$req = $e->getRequest();
    		$resp = $e->getResponse();
    	}
    	return $resp->json();
    }

    protected function handleException($e) {
    	if($e instanceof RequestException) {

    	} else {

    	}
    }
}
?>
