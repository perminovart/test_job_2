<?php
require  '../vendor/autoload.php';
include_once ('array.php'); // getArray
use Google\Spreadsheet\DefaultServiceRequest;
use Google\Spreadsheet\ServiceRequestFactory;
putenv('GOOGLE_APPLICATION_CREDENTIALS=' . __DIR__ . '/crendentials.json');
		 $client = new Google_Client;
				$client->useApplicationDefaultCredentials();
			  $client->setApplicationName("Something to do with my representatives");
				$client->setScopes(['https://www.googleapis.com/auth/drive','https://spreadsheets.google.com/feeds']);
			   if ($client->isAccessTokenExpired()) {
					$client->refreshTokenWithAssertion();
				}

				$accessToken = $client->fetchAccessTokenWithAssertion()["access_token"];
				ServiceRequestFactory::setInstance(
					new DefaultServiceRequest($accessToken)
				);
			   // Get our spreadsheet
				$spreadsheet = (new Google\Spreadsheet\SpreadsheetService)
					->getSpreadsheetFeed()
					->getByTitle('artem_test');

				// Get the first worksheet (tab)
				$worksheets = $spreadsheet->getWorksheetFeed()->getEntries();
				$worksheet = $worksheets[0];
				$listFeed = $worksheet->getListFeed();
				$data=getArray();
				foreach($data as $values){
					$listFeed->insert($values);
				}			
?>