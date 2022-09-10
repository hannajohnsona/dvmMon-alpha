<html lang="en">
<head>
    <title>DVM HOST</title>
    <script>
    </script>
</head>
<body>

</body>
</html>

<?php
    /*
     * Written by Caleb KO4UYJ and Justin K4JKR
     * ko4uyj@gmail.com
     */

    $configJson = file_get_contents('config.json'); //get da configs
    $config1 = json_decode($configJson, true); //decode said json
    $config = $config1['configs']; //get the config object
    foreach ($config as $key => $configs){ //looping over the configs
    	 $logDirectory[$key] = $configs['logDir']; //Set the log variable
         $showLocation[$key] = $configs['showLocation']; //set show location
         $showIdAlias[$key] = $configs['showIdAlias']; // set show id variable
         $showTgAlias[$key] = $configs['showTgAlias']; // set show tg variable
         $defaultTimeZone[$key] = $configs['defaultTimeZone']; // set timeZone variable
         $customTimeZone[$key] = $configs['customTimeZone']; // set customTimeZone variable
    }
    if ($defaultTimeZone[4]){//did the user want it to be default aka UTC??
        date_default_timezone_set("UTC"); // set the time zone to UTC bc thats what dvmhost is
    }else{
        date_default_timezone_set($customTimeZone[4]); //set the custom time zone
    }
    $cDate = date("Y-m-d"); // get the time so it knows the log to use
    $lType = ".activity"; //type of log. for future additions
    $logFile = $logDirectory[1] . "DVM-" . $cDate . $lType . ".log"; //concatenate aka put the name of the log file together
    foreach ($locationConfig as $key => $locationConfigs){ //find our answer to show config or not
        $locationConfig = $locationConfigs['answer'];
    }

$csv = file_get_contents($logFile); //bad variable names here ik. This isnt csv.  get the log file
$csvData = explode("\n", $csv); // Use a new line as the separating value
$idJson = file_get_contents('idAlias.json'); // Get the aliases for ids and tgs
$idAlias = json_decode($idJson, true); //decode said aliases
$stuff = $idAlias['rIds']; //bad var name i know. Get the rids and aliases
$tgAlias = $idAlias['tgIds']; // get the tgids and aliases

foreach ($csvData as $key => $csvDatum) {// start the loop to display logs
	$csvDatum = str_replace("A: ", "", $csvDatum); // get rid of the ugly A: at the beginning
	$csvDatum = preg_replace('/\s+/', ' ', $csvDatum); // Replaces consecutive spaces with a single space

 	$isLocation = str_contains($csvDatum, 'location') && !$showLocation[0]; //if the config says to show location, then do it!

	$isValid = !$isLocation && !empty($csvDatum); //check validity

	if ($isValid) { //check validity
        if ($showIdAlias[2]) { //So do i show the id alias?
		foreach ($stuff as $value) {// bad variable name here i know. get the rid alias values

			$csvDatum = str_replace($value['id'], $value['name'], $csvDatum); //replace rids with aliases
		}}
        if ($showTgAlias[3]) { //so do i show the tg aliases?
		foreach ($tgAlias as $value) {// get the tg aliases
                        $csvDatum = str_replace($value['id'], $value['name'], $csvDatum); //replace tg id with rid
                }}

		echo "<span style='font-size:25px'>" . $csvDatum . "</span><br/>"; // echo it all to the screen!!! Finally!!
	}
}

