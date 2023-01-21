<?php
    $yaml = file_get_contents('/opt/dvmhost/configVC.yml');
    $parsed = yaml_parse($yaml);
    $callsign = $parsed['system']['cwId']['callsign'];
    $identity = $parsed['system']['identity'];
    $id = $parsed['network']['id'];
    //var_dump($parsed['protocols']['dmr']['enable']);
    $dmrEnB = $parsed['protocols']['dmr']['enable'];
    $dmrEn = $dmrEnB ? 'true':'false';
    $dmrEn = str_replace(['true', 'false'], ['yes', 'no'], $dmrEn);
    $p25EnB = $parsed['protocols']['p25']['enable'];
    $p25En = $p25EnB ? 'true':'false';
    $p25En = str_replace(['true', 'false'], ['yes', 'no'], $p25En);
    //$dmrEn = str_replace('false', 'Yes', $dmrEn);
    //var_dump($parsed);
    echo "<div style='width: 350px; border:2px solid black; border-style: dashed;'><span style='font-size: 30px;'>";
    echo "Callsign: " . $callsign;
    echo "<br />" . "Identity: " . $identity;
    echo "<br />" . "Id: " . $id;
    echo "<br />" . "P25 Enabled: "; echo $p25En;
    echo "<br />" . "DMR Enabled: "; echo $dmrEn;
    //echo $dmrEn ? 'true' : 'true';
    echo "</span></div>";
    ?>
<html lang="en">



</html>

