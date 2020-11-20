<?php

include("./utils.php");


function getEventType ($style) {
	switch ($style) {
		case 'color:white':
		return "unchanged";
		break;
		case 'color:#65FF33':
		return "modified";
		break;
		case 'color:#FF8833':
		return "created";
		break;
		default:
		return "unknown";
		break;
	}
}

function getNextChapter($ch) {
	$baseUrl = "http://abw.blue/";

	# Get timeline
	$homeHtml = getCurlOutput($ch, $baseUrl . "index.php");
	$homeXpath = getDOMXPath($homeHtml);

	$karmaElement = $homeXpath->query('//h2/h2')->item(0);
	$karmaValue = $karmaElement->nodeValue;
	$karmaPositive = $karmaElement->getAttribute("style") === "color:#22DD22";

	$events = array();
	$eventElements = $homeXpath->query('//ul/li');
	$eventLinkElements = $homeXpath->query('//ul/li/h3/*[1]'); // TODO: fix case when no child to h3 for title
	$eventTypeElements = $homeXpath->query('//ul/li/h3/h7');

	foreach ($eventElements as $key => $event) {
		$events[] = array(
			"date" => $event->getAttribute("data-date"),
			"link" => $eventLinkElements->item($key)->getAttribute("href"),
			"text" => $eventLinkElements->item($key)->nodeValue,
			"type" => getEventType($eventTypeElements->item($key)->getAttribute("style"))
		);
	}

	var_dump($karmaValue);
	var_dump($karmaPositive);
	var_dump($events);

	# Get event
	$eventsWithLinks = array_filter($events, function($v, $k) {
		return strlen($v["link"]) > 0;
	}, ARRAY_FILTER_USE_BOTH);
	$event = $eventsWithLinks[array_rand($eventsWithLinks)];

	var_dump($event);
	
	$eventHtml = getCurlOutput($ch, $baseUrl . $event["link"]);
	$eventXpath = getDOMXPath($eventHtml);

	$eventText = $eventXpath->query('//h2')->item(0)->nodeValue;
	$choices = array();
	$choicesLinkElements = $eventXpath->query('//a');
	foreach ($choicesLinkElements as $key => $choice) {
		$choices[] = array(
			"link" => $choice->getAttribute("href"),
			"text" => $choice->nodeValue
		);
	}

	var_dump($eventText);
	var_dump($choices);

	# Make a choice
	$choice = $choices[array_rand($choices)];

	var_dump($choice);

	$choiceHtml = getCurlOutput($ch, $baseUrl . $choice["link"]);
	$choiceXpath = getDOMXPath($choiceHtml);

	$choiceText = $choiceXpath->query('//div/h2')->item(0)->nodeValue;
	var_dump($choiceText);
}

$ch = curl_init();
for ($i=0; $i < 3; $i++) { 
	getNextChapter($ch);
}
curl_close($ch);


?>