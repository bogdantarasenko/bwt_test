<?php
//chdir(dirname(__DIR__));

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Sunra\PhpSimple\HtmlDomParser;

class Controller_Main extends Controller
{

	public function action_index()
	{	

		if($this->AuthCheck() == true)
		{

			$dom = HtmlDomParser::file_get_html('https://sinoptik.ua/%D0%BF%D0%BE%D0%B3%D0%BE%D0%B4%D0%B0-%D0%B7%D0%B0%D0%BF%D0%BE%D1%80%D0%BE%D0%B6%D1%8C%D0%B5')->getElementById("blockDays");

			$data = $this->process_dom($dom);

			$this->view->generate('main_view.php', 'template_view.php',$data);
			
		}else{
			$this->view->generate('auth_view.php', 'template_view.php');
		}

	}

	private function process_dom($dom){

			$mainContentBlock = $dom->find('div[class=tabs]');

			$div_main = $mainContentBlock[0]->find('div[class=main]');

			$days = [];

			for($j=0;$j<count($div_main);$j++){

				$result = $div_main[$j]->children();
	
				$weather = [];

				for($i=0;$i<count($result);$i++){
					array_push($weather, $result[$i]->plaintext);
				}

				$key = $result[1]->plaintext;

				$days["$key"] = $weather;

			}
			
			return $days;
	}
}