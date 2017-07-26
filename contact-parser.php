<?php


function parseContacts($filename)
{
	$results = array();
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	$contacts = explode("\n", $contents);

	foreach ($contacts as $key => $value) {
		$contact = explode("|" , $value);

		$contact[1] = substr($contact[1], 0, 3) . "-" . substr($contact[1], 3, 3) . "-" . substr($contact[1], 6);

		$assocArray["name"] = $contact[0];
		$assocArray["number"] = $contact[1];
		array_push($results, $assocArray);
	}

	fclose($handle);
	return $results;
}


var_dump(parseContacts('contacts.txt'));












