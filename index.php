<?php
/* copyleft 2013 (CC-0) Melker "meklu" Narikka
 *
 * This is an example case for those using this parser.
 * It prints the data as JSON and sets an appropriate heading for it as well
 */

/* We mustn't forget to include the parser */
require_once("steameventparser.php");
/* Setting the MIME type */
header("Content-Type: application/json");
/* Initialising the parser */
$parser = new SteamEventParser();
/* Generating and echoing the data */
$data = $parser->genData("steamlug");
echo json_encode($data);
?>
