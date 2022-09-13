<html>
<head>
    <!--
       Written by Caleb, KO4UYJ
       ko4uyj@gmail.com
       I am not reponsable for the actions you do with this.
   -->
    <title>
        DVM RCON
    </title>
</head>
<body>
<center>
    <span style="font-size: 20px;"> DVM RCON </span>(Dont be dumb)
    <div style="margin:5px;"></div>
        <form action="index.php">
            <input type="submit" value="Back to Home"/>
        </form>
    <form action="submitRcon.php" method="get">
        <label style="font-size: 20px;" for="rconAction">Action:</label>
        <select name="rconAction" id="rconAction">
            <option value="">Select Action</option>
            <option value="p25-rid-page">Radio Page</option>
            <option value="p25-rid-check">Radio Check</option>
            <option style="background-color: darkred; color: antiquewhite;" value="p25-rid-inhibit">Radio Inhibit</option>
            <option style="background-color: darkred; color: antiquewhite;" value="p25-rid-uninhibit">Radio Uninhibit</option>
        </select>
        <span style="font-size: 20px">Radio Id:</span><input type="text" name="rid" />
        <input type="submit" value="Transmit"/>
    </form>
</center>
</body>
</html>
<?php
echo $_SERVER['SERVER_ADDR'];
?>
