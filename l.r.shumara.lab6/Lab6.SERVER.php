<!DOCTYPE html>
<html>
    <head>
        <meta charset="Utf-8">
        <title>Server</title>

        <link rel="stylesheet" href="Style.Lab6.css">
        <script type="text/javascript" src="jquery-3.6.0.js"></script>
        <script type="text/javascript" src="Lab6.Main.script.js"></script>

        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Geostar&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Syne&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    </head>

    <?php
        
        if( !empty($_POST["name"]) && !empty($_POST["family"]) && !empty($_POST["otchestwo"])) {
                
            require "header.php";
            echo "<br /><br /><br /><br /><br />";
            # echo "Вас зовут ". $_POST['family']. " ". $_POST['name']. " ". $_POST['otchestwo']. "<br />";
            print_r($_POST);
            echo "<br />";
            print_r($_SERVER);
            echo "<br /><br /><br /><br />";
            require "footer.php";
            
            exit();
        }
    ?>

    <body>
        
    </body>
</html>
