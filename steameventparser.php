<?php
/* copyleft 2013 (CC-0) Melker "meklu" Narikka
 *
 * This is a script that parses events for a Steam group
 * into a neat array. We pull dates but not times, since
 * those are really dodgy.
 *
 * You'll need SimpleXML support for your copy of PHP.
 *
 * Basically we're pulling some XML from Steam, and then
 * doing awful hacky processing on it.
 *
 * The commented out parts might be useful for debugging
 * things in case the API breaks at some point, so I left
 * them there.
 */

class SteamEventParser {
	/**
	 * Parses an event into an array
	 *
	 * @param string $str The HTML string from which to parse the event
	 * @param int $month The numeric month
	 * @param int $year The numeric year
	 * @return array An array of awesome stuff.
	 */
	private function parseEvent($str, $month, $year) {
		$str = str_replace("&nbsp;", "", $str);
		$xml = simplexml_load_string($str);
		$event = array();
		foreach ($xml->children() as $key => $value) {
			//echo "$key: $value\n";
			if ($key === "monthName") $month = $value;
			elseif ($key === "year") $year = $value;
			else {
				foreach ($value->children() as $k => $v) {
					//echo "\t$k: $v\n";
					if ($k === "a") {
						foreach ($v->attributes() as $ak => $av) {
							if ($ak === "href") {
								$event["id"] = explode("/", (string) $av);
								$event["id"] = $event["id"][count($event["id"]) - 1];
								$event["url"] = (string) $av;
							}
							//echo "\t\t\t$ak: $av\n";
						}
						//foreach ($v->children() as $ck => $cv) {
						//	echo "\t\t\t$ck: $cv\n";
						//}
					}
				}
			}
		}
		foreach ($xml->xpath("//div[@class='eventDateBlock']/span[1]") as $key => $value) {
			$date = explode(" ", (string) $value);
			$date = (strlen($date[1]) === 1) ? "0" . $date[1] : (string) $date[1];
			$event["date"] = "$year-$month-" . $date;
		}
		foreach ($xml->xpath("//img") as $key => $value) {
			foreach ($value->attributes() as $ak => $av) {
				if ($ak === "src") {
					$event["appid"] = explode("/", (string) $av);
					$event["appid"] = $event["appid"][count($event["appid"]) - 2];
					$event["img_small"] = (string) $av;
					$event["img_header"] = "http://cdn.steampowered.com/v/gfx/apps/" . $event["appid"] . "/header.jpg";
					$event["img_header_small"] = "http://cdn.steampowered.com/v/gfx/apps/" . $event["appid"] . "/header_292x136.jpg";
				}
			}
		}
		return $event;
	}

	/**
	 * Generates the event data for a given month
	 *
	 * @param string $group The Steam group to get the data for
	 * @param int $month The numeric month
	 * @param int $year The numeric year
	 * @param int $tries The amount of tries used for grabbing the data from Steam
	 * @return array An array of events
	 */
	public function genData($group, $month = "", $year = "", $tries = 3) {
		$month = (empty($month)) ? gmstrftime("%m") : $month;
		$year = (empty($year)) ? gmstrftime("%Y") : $year;
		do {
			$tries -= 1;
			// TODO: check robots.txt
			$f = @fopen("http://steamcommunity.com/groups/" . $group ."/events?xml=1&action=eventFeed&month=$month&year=$year", "r");
			if ($f !== false) {
				break;
			}
		} while ($tries > 0);
		if ($f === false) {
			return array("status" => false, "events" => array(), "pastevents" => array(),);
		}
		$str = stream_get_contents($f);
		$xml = simplexml_load_string($str);
		$events = array();
		$pastevents = array();
		foreach ($xml->children() as $key => $value) {
			if ($key === "event") {
				$events[] = $this->parseEvent($value, $month, $year);
			} elseif ($key === "expiredEvent") {
				$pastevents[] = $this->parseEvent($value, $month, $year);
			//} else {
			//	echo "$key: $value\n";
			}
		}
		return array("status" => true, "events" => $events, "pastevents" => $pastevents);
	}
}
?>
