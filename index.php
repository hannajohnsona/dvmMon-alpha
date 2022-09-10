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

<body>
    <div id="container" style="height: 600px; overflow: scroll; margin: auto">
        <div id="logs"></div>
    </div>
    <div id="bottomofpage"></div>
</body>
</html>
