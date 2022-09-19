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
                $('#logs').load('parseLogs.php');
                $('#container').animate({ scrollTop: $('#logs').height() }, 100);
            }, 500);
        });
    </script>
</head>

<body style="background-color: lightgrey">
    <div style="text-align: center;">
        <span style="font-size:30px">
            <b>DVM Host Monitor</b>
            <form action="getLogs.php" method="post">
                <input style="font-size:20px" type="submit" value="Show Full Logs"/>
            </form>
            <form action="rcon.php" method="post">
                <input style="font-size:20px" type="submit" value="RCON"/>
            </form>
        </span>
    </div>
    <strong style="font-size:30px">Current Configs</strong>
        <br />
        <?php include('parseConfig.php');?>
    <br />
    <center>
        <strong style="font-size:30px">Last Heard</strong>
    </center>
    <div style="background-color: black">
        <table>
            <tbody>
            <tbody align='left' style='display: table-header-group'>
            <thead>
            <tr>
                <th><span style='font-size: 30px; color: green'>Date</span></th>
                <th><span style='font-size: 30px; color: green'>Time</span></th>
                <th><span style='font-size: 30px; color: green'>Mode</span></th>
                <th><span style='font-size: 30px; color: green'>Type</span></th>
                <th><span style='font-size: 30px;color: green'>Action</span></th>
                <th><span style='font-size: 30px;color: green'>From</span></th>
                <th><span style='font-size: 30px;color: green'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To</span></th>
            </tr>
            <tr style='font-size: 30px; color: green''>
                <td>--------------&nbsp;</td>
                <td>&nbsp;&nbsp;---------------</td>
                <td>&nbsp;-----</td>
                <td>----</td>
                <td>-------------------------&nbsp;</td>
                <td>&nbsp;&nbsp;&nbsp;---------&nbsp;</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;---------&nbsp;</td>

            </tr>
            </thead>
            </tbody>
        </table>
    </div>



    <div id="container" style="height: 275px; overflow: scroll; margin: auto; background-color: black;">

        <div id="logs"></div>
    <div id="bottomofpage"></div>
</body>
</html>
