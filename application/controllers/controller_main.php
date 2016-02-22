<?php
//chdir(dirname(__DIR__));

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class Controller_Main extends Controller
{

	public function action_index()
	{	

	//$client = new Client(['base_uri' => 'https://www.gismeteo.ua']);

		

		if($this->AuthCheck() == true){
				
			$client = new Client();
			$data = $client->request('GET', 'https://sinoptik.ua/%D0%BF%D0%BE%D0%B3%D0%BE%D0%B4%D0%B0-%D0%B7%D0%B0%D0%BF%D0%BE%D1%80%D0%BE%D0%B6%D1%8C%D0%B5');
			$result = $data->getBody();

			$this->view->generate('main_view.php', 'template_view.php',$result);

		}else{
			$this->view->generate('auth_view.php', 'template_view.php');
		}

		
	}
}