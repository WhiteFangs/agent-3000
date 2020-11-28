<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Agent 3000</title>
	<style type="text/css">
		body {
			max-width: 60vw;
			margin: auto;
			text-align: justify;
		}

		.chapter {
			margin-top: 1em;
			margin-bottom: 2em;
		}

		.title {
			font-weight: bold;
			font-size: 2em;
			font-family: Sans-Serif;
			text-align: center;
			margin-top: 1em;
			margin-bottom: 1em;
		}

		.teleportation {
			font-style: italic;
			margin: 1em;
		}

		.date {
			font-style: italic;
			display: inline;
		}
	</style>
</head>
<body>
	<?php

	include("./utils.php");
	include("./prologue.php");
	include("./texts.php");


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
			case 'color:red':
			return "end";
			break;
			default:
			return "unknown";
			break;
		}
	}

	function getChapterContent($ch) {
		$baseUrl = "http://abw.blue/";
		$content = array();

	# Get timeline
		$homeHtml = getCurlOutput($ch, $baseUrl . "index.php");
		$homeXpath = getDOMXPath($homeHtml);

		$karmaElement = $homeXpath->query('//h2/h2')->item(0);
		if($karmaElement == null){
			$content["finished"] = true;
			return $content;
		} else {
			$content["finished"] = false;
		}
		$karmaValue = $karmaElement->nodeValue;
		$karmaPositive = $karmaElement->getAttribute("style") === "color:#22DD22";

		$events = array();
		$eventElements = $homeXpath->query('//ul/li');
		$eventLinkElements = $homeXpath->query('//ul/li/h3');
		$eventTypeElements = $homeXpath->query('//ul/li/h3/h7');

		foreach ($eventElements as $key => $event) {
			$firstEventElementTag = $eventLinkElements->item($key)->firstChild->nodeName;
			$eventLinkElement = ($firstEventElementTag == "a" || $firstEventElementTag == "font") ? $eventLinkElements->item($key)->firstChild : $eventLinkElements->item($key);
			$eventType = getEventType($eventTypeElements->item($key)->getAttribute("style"));
			$events[] = array(
				"date" => $event->getAttribute("data-date"),
				"link" => $eventLinkElement->getAttribute("href"),
				"text" => preg_replace("/(\[.+\])/i", "", $eventLinkElement->nodeValue),
				"type" => $eventType
			);
		}

		$content["events"] = $events;

	# Get event
		$eventsWithLinks = array_filter($events, function($v, $k) {
			return strlen($v["link"]) > 0;
		}, ARRAY_FILTER_USE_BOTH);
		$event = getRandomElement($eventsWithLinks);

		$content["event"] = $event;

	# Get event text	
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

		$content["eventText"] = $eventText;
		$content["choices"] = $choices;

	# Make a choice
		$choice = getRandomElement($choices);

		$content["choice"] = $choice;

		$choiceHtml = getCurlOutput($ch, $baseUrl . $choice["link"]);
		$choiceXpath = getDOMXPath($choiceHtml);

		$choiceText = $choiceXpath->query('//div/h2')->item(0)->nodeValue;

		$content["choiceText"] = $choiceText;

		return $content;
	}

	function getRandomElement($array) {
		return $array[array_rand($array)];
	}

	function eventToText($event) {
		return trim($event["date"] . " : " . $event["text"]);
	}

	function splitChoiceText($text){
		$ponctuations = array(".", "?", "!");
		$text = preg_replace('/\.+/', ".", $text);
		$vous = array();
		$vousPos = stripos($text, "vous");
		while ($vousPos !== false) {
			$endVousSentence = strlen($text) - 1;
			for ($i = $vousPos; $i < strlen($text); $i++) { 
				if(in_array($text[$i], $ponctuations)) {
					$endVousSentence = $i;
					break;
				}
			}
			$beginVousSentence = 0;
			for ($i = $vousPos; $i > -1; $i--) { 
				if(in_array($text[$i], $ponctuations)) {
					$beginVousSentence = $i + 2;
					break;
				}
			}
			$vousSentence = substr($text, $beginVousSentence, $endVousSentence - $beginVousSentence + 1);
			$vous[] = $vousSentence;
			$text = ucfirst(trim(substr($text, 0, $beginVousSentence))) . " " . ucfirst(trim(substr($text, $endVousSentence + 1, strlen($text))));
			$vousPos = stripos($text, "vous");
		}
		return array("vous" => $vous, "reste" => $text);
	}

	$openChapter = '<div class="chapter">' . PHP_EOL;
	$openTitle = '<div class="title">' . PHP_EOL;
	$openContent = '<div class="content">' . PHP_EOL;
	$openParagraph = '<div class="paragraph">' . PHP_EOL;
	$openDate = '<div class="date">' . PHP_EOL;
	$openTeleportation = '<div class="teleportation">' . PHP_EOL;
	$close = PHP_EOL . '</div>' . PHP_EOL;

	echo $openChapter;
	echo $openTitle . 'Prologue' . $close;
	echo $openContent . $prologue . $close;
	echo $close;

	$ch = curl_init();
	$new = true;
	for ($i = 0; $i < 150; $i++) {
		$content = getChapterContent($ch);
		if($content["finished"]) {
			curl_close($ch);
			$ch = curl_init();
			$new = true;
			continue;
		}
		echo $openChapter;
		echo  $openTitle . "Chapitre " . ($i+1) . $close;
		echo $openContent;
		if ($i != 0) {
			echo $openParagraph;
			echo "- Agent 3000 !!! " . getRandomElement($panicking) . " !!! " . getRandomElement($panicking) . " !!! ";
			echo getRandomElement($unplanned) . " ";
			$createdEvents = array_filter($content["events"], function($v, $k) {
				return $v["type"] === "created";
			}, ARRAY_FILTER_USE_BOTH);
			$modifiedEvents = array_filter($content["events"], function($v, $k) {
				return $v["type"] === "modified";
			}, ARRAY_FILTER_USE_BOTH);
			if (!$new && count($createdEvents) > 0 && count($modifiedEvents) > 0) {
				$created = getRandomElement($createdEvents);
				$modified = getRandomElement($createdEvents);
				echo $openDate;
				echo '"' . eventToText($created) . '"';
				echo $close;
				echo " ?! ";
				echo $openDate;
				echo '"' . eventToText($modified) . '"';
				echo $close;
				echo " ?! ";
			}
			echo getRandomElement($goAgain);
			echo $close;
		}
		echo $openParagraph;
		echo "- " . getRandomElement($adventureCall) . " ";
		echo getRandomElement($question) . " ";
		echo getRandomElement($interjections) . getRandomElement($ponctuations);

		$eventsWithLinks = array_filter($content["events"], function($v, $k) {
			return strlen($v["link"]) > 0;
		}, ARRAY_FILTER_USE_BOTH);
		shuffle($eventsWithLinks);

		for ($k = 0; $k < min(3, count($eventsWithLinks)); $k++) { 
			echo $openDate;
			echo '"' . eventToText($eventsWithLinks[$k]) . '"';
			echo $close;
			echo getRandomElement($interjections) . getRandomElement($ponctuations);
		}
		echo $close;

		echo $openParagraph;
		echo getRandomElement($hesitations) . " ";
		echo getRandomElement($hesitations) . " ";
		echo getRandomElement($interjections) . getRandomElement($ponctuations) . " ";
		echo eventToText($content["event"]) . " ! ";
		echo getRandomElement($decidedAdventure) . " ";
		echo getRandomElement($decidedAdventure) . " ";
		echo $close;

		echo $openTeleportation;
		echo "** Téléportation à travers l'espace et le temps, direction l'an " . $content["event"]["date"] . " **";
		echo $close;

		echo $openParagraph;
		echo "- " . getRandomElement($decidedAdventure) . " ";
		echo getRandomElement($q2000) . ", " . getRandomElement($askHelp) . " " . getRandomElement($askInfo);
		echo $close;

		echo $openParagraph;
		echo "- Bzz... Bzz... " . $content["eventText"] . " Fin de l'entrée. Bzz...";
		echo $close;

		echo $openParagraph;
		echo "- " . getRandomElement($interjections) . getRandomElement($ponctuations) . " ";
		echo getRandomElement($searchingSolution) . " ";
		echo getRandomElement($findingSolutions) . " ";
		$template = getRandomElement($solutionsTemplate);
		echo str_replace("2", lcfirst($content["choices"][1]["text"]), str_replace("1", lcfirst($content["choices"][0]["text"]), $template))  . " ";
		echo getRandomElement($hesitations) . " ";
		echo getRandomElement($hesitations) . " ";
		echo getRandomElement($decideSolution) . " ";
		echo getRandomElement($decideSolution) . " ";
		echo $content["choice"]["text"] . " ! ";
		echo getRandomElement($jobDone) . " ";
		echo $close;

		echo $openTeleportation;
		echo "** Téléportation à travers l'espace et le temps, direction le présent **";
		echo $close;

		$split = splitChoiceText($content["choiceText"]);

		echo $openParagraph;
		echo "- " . getRandomElement($welcomeBack) . " ";
		echo getRandomElement($missionReport) . " ";
		echo implode(" ", $split["vous"]);
		echo $close;

		echo $openParagraph;
		echo "- " . getRandomElement($thanking) . " ";
		echo trim($split["reste"]);
		echo $close;

		echo $openParagraph;
		echo "- " . getRandomElement($cliffhanger);
		echo $close;

		echo $close;
		echo $close;

		$new = false;
	}
	curl_close($ch);


	?>
</body>