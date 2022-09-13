<html lang="en">
<!--
	Written by Caleb KO4UYJ and Justin K4JKR
-->
<head>
    <title>DVM HOST</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script>
        $(document).ready(() => {
            $.ajaxSetup({cache:false});

            setInterval(() => {
                $('#logs').load('getLogs.php');
                $('#container').animate({ scrollTop: $('#logs').height() }, 100);
            }, 500);
        });
    </script>
</head>

<body style="background-color: lightgrey">
    <div style="text-align: center;">
        <span style="font-size:20px">
            <b>DVM Host Monitor</b>
            <form action="getLogs.php" method="post">
                <input style="font-size:20px" type="submit" value="Show Full Logs"/>
            </form>
            <form action="rcon.php" method="post">
                <input style="font-size:20px" type="submit" value="RCON"/>
            </form>
        </span>
    </div>
    <div id="container" style="height: 600px; overflow: scroll; margin: auto; background-color: aqua">
        <div id="logs"></div>
    <div id="bottomofpage"></div>
</body>
</html>
