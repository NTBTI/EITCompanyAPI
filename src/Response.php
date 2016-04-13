<?php
namespace EITAPIClient;

class Response {
	protected $has_errors = false;
	protected $errors = array();
	protected $data = array();

	public function __construct(array $response) {
		echo '<div style="background: white; color: black;">';
		echo '<span style="background: #CC0000; color:#FFF; padding-left: 1em; padding-right:1em">REMOVE START LINE '.__LINE__.' FROM '.__FILE__.'</span><br/>';
		echo '<pre>';
		print_r($response);
		echo '</pre>';
		echo '<br/><span style="background: #CC0000; color:#FFF; padding-left: 1em; padding-right:1em">REMOVE END LINE '.__LINE__.' FROM '.__FILE__.'</span>';
		
	}
}
?>