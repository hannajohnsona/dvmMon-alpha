<?php
    /*
     * Written by Caleb, KO4UYJ
     * ko4uyj@gmail.com
     * I am not responsible for the actions you do with this.
     */
    $action = $_GET['rconAction'];
    $rid = $_GET['rid'];
    $configFile = file_get_contents('config.json');
    $configJson = json_decode($configFile, true); //decode said json
    $config = $configJson['rconConfigs']; //get the config object
    foreach ($config as $key => $configs){ //looping over the configs
         $rconAddress[$key] = $configs['rconAddress']; //Set the log variable
         $rconPort[$key] = $configs['rconPort'];
         $rconPassword[$key] = $configs['rconPassword'];

    }
//var_dump($config);
    if (strpos($rid, ';')){
       die("An error must have occured");
    }
    echo $rconPassword[2];
    $output = shell_exec("/home/uyj/dvmhost/dvmcmd  -a $rconAddress[0] -p $rconPort[1] -P $rconPassword[2] $action $rid");
    //echo $output;
    if (strpos($output, 'sending command')){
        $rconStatus = true;
    }else{
        $rconStatus = "test";
    }
    header("Refresh: 0 url=rconConfirm.php?rconAction=$action&rid=$rid&rconStatus=$rconStatus");
