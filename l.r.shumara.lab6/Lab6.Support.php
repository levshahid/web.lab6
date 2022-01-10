<!DOCTYPE html>
<html>
    <head>
        <meta charset="Utf-8">
        <title>Support</title>

        <link rel="stylesheet" href="Style.Lab6.css">
        <script type="text/javascript" src="jquery-3.6.0.js"></script>
        <script type="text/javascript" src="Lab6.Main.script.js"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Geostar&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Syne&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <?php
                require "header.php"
            ?>
        </header>
        

        
        
        <div class="content">
            <div class="container">
                
                
                <main>
                    <div class="mainNoMain">
                        <div class="members1">
                            <div class="membersText1">
                                <div class="innerMembersText1">
                                    Info
                                </div>
                            </div>
                            <div class="membersArrow1">
                                <div class="innerMembersArrow1">
                                    <img src="photos/arrowDown.png" alt="">
                                </div>
                            </div>
                        </div>
        
                        <div class="files">
                            <p>Поиск файла среди локальных файлов:</p><br>

                            <form action="<? $_SERVER['PHP_SELF']?> " method="GET">
                                <input type="text" name="file" placeholder="Поиск...">
                                <button type="submit" class="search" >Найти файлы!</button>
                            </form>
                            
                            <?php
                                $pattern = $_GET['file'];
                                foreach(glob("*$pattern*") as  $filename) {
                                    echo "$filename <br>";
                                }
                            ?>
                            
                        </div>
                              
                    </div>
                </main>
            </div>
        </div>

        
        
        <footer>
           <?php
                require "footer.php"
           ?>
        </footer>
    </body>
</html>