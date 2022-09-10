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

    //include('config.inc');
    date_default_timezone_set("UTC");

    $lType = $_GET['log'];
    $logDirectory = "/home/uyj/dvmhost/";
    $cDate = date("Y-m-d");
    $lType = ".activity";
    $logFile = $logDirectory . "DVM-" . $cDate . $lType . ".log";

    $configJson = file_get_contents('config.json');
    $config = json_decode($configJson, true);
    foreach ($locationConfig as $key => $locationConfigs){
        $locationConfig = $locationConfigs['answer'];
    }

$csv = file_get_contents($logFile);
$csvData = explode("\n", $csv);
$idJson = file_get_contents('idAlias.json');
$idAlias = json_decode($idJson, true);
$stuff = $idAlias['rIds'];
$tgAlias = $idAlias['tgIds'];


foreach ($csvData as $key => $csvDatum) {
	$csvDatum = str_replace("A: ", "", $csvDatum);
	$csvDatum = preg_replace('/\s+/', ' ', $csvDatum); // Replaces consecutive spaces with a single space

 	$isLocation = str_contains($csvDatum, 'location') && !$config['showLocation'];

	$isValid = !$isLocation && !empty($csvDatum);

	if ($isValid) {
		foreach ($stuff as $value) {
			$csvDatum = str_replace($value['id'], $value['name'], $csvDatum);
		}
		foreach ($tgAlias as $value) {
                        $csvDatum = str_replace($value['id'], $value['name'], $csvDatum);
                }

		echo "<span style='font-size:25px'>" . $csvDatum . "</span><br/>";
	}
}

