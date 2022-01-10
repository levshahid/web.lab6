<?php
    $isIncorrect = false;
    if(!empty($_POST["name"]) && !empty($_POST["family"]) && !empty($_POST["otchestwo"]) && !empty($_POST["submit"])) {
        
        header('HTTP/1.1 307 Temporary Redirect');
        header('Location: Lab6.SERVER.php');
    }
    else if(empty($_POST['submit'])) {
        
    }
    else {
        $isIncorrect = true;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="Utf-8">
        <title>Лабораторная работа №5</title>

        <link rel="stylesheet" href="Style.Lab6.css">
        <script type="text/javascript"  src="jquery-3.6.0.js"></script>
        <script type="text/javascript"  src="Lab6.Main.script.js"></script>

        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Geostar&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Syne&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    </head>

    

    

    

    <body>
        <header>
            <?php 
                require 'header.php'; 
            ?>
        </header>
        
        
        
        
        <div class="content">
            <div class="container">
                <section>
                    <div class="login">
    
                        <div class="members">
                            <div class="membersText">
                                <div class="innerMembersText">
                                    Members
                                </div>
                            </div>
                            <div class="membersArrow">
                                <div class="innerMembersArrow">
                                    <img src="photos/arrowDown.png" alt="">
                                </div>
                            </div>
                        </div>

                        <div id="funf">

                        </div>

                        <form action="<? $_SERVER['PHP_SELF']?>" method ="POST" name="nameOfUser">

                            <div class="layer">
                                <div class="info1">
                                    Фамилия:
                                </div>
                                <div class="field">
                                    <input id="firstInput" type ="text" name ="family" value="<?php echo $_POST['family']?>">
                                </div>
                            </div>

                            <div id="funf">
        
                            </div>

                            <div class="layer">
                                <div class="info2">
                                    Имя:
                                </div>
                                <div class="field">
                                    <input id="secondInput" type ="text" name ="name" value="<?php echo $_POST['name']?>">
                                </div>
                            </div>

                            <div id="funf">
        
                            </div>

                            <div class="layer">
                                <div class="info3">
                                    Отчество:
                                </div>
                                <div class="field">
                                    <input id="thirdInput" type ="text" name ="otchestwo" value="<?php echo $_POST['otchestwo']?>">
                                </div>
                            </div>

                            <div id="funf">
                                
                            </div>

                            <div class="inputData">
                            

                                <div class="layer">
                                    <div class="info3">
                                        Предпочтения:
                                    </div>
                                </div>

                                <div class="layer">
                                    <select name="user_hobbies[]" size="5" class="select">
                                        <option id="Учёба">Учёба</option>
                                        <option id="Спорт">Спорт</option>
                                        <option id="Чтение">Чтение</option>
                                        <option id="Музыка">Музыка</option>
                                        <option id="Танцы">Танцы</option>
                                    </select>

                                    
                                    <div class="selected">



                                    </div>
                                </div>

                                <div id="nein">

                                </div>
     
                            </div>

                            <input type="submit" class="submit" name="submit" value="Сохранить!" />
                                
                        </form>
        
                        <?php
                           if($isIncorrect)
                           {
                               ?>
                            <script type="text/javascript">isnotnull();</script>

                            <?php
                           }
                        ?>
        
                    </div>
                </section>
                
                <main>
                    <div class="main">
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
        
                        <div>
                            <img class="photo1" src="photos/database.png" alt="Серверная, хранилище данных">
                        </div>
        
                        <div class="mainText">
                            <h1><b>Database Applications</b></h1>
                            <h2>
                                <br>MySQL/PHP
                                <br>Many Web developers like to build database-backed Web sites using PHP scripting in conjuction with a MySQL database. 
                                The MySQL/PHP combination is ideally suited to solving those problems posed by Web site designs 
                                that are not scalable, maintainable, or technically feasible using conventional HTML authoring
                                techniques. MySQL provides a fast, reliable and easy-to-use database solution that is ideal for retrieving
                                product informationand storing customer information. PHP is a server-side HTML-embedded scripting
                                 language equivalent to Microsoft's Active Server Pages on the Windows NT platform
                            </h2>
                             
                        </div>
                    </div>
                </main>
            </div>
            
            
            <section class="neuigkeit">
                <div class="news">
                    <div class="newsText">
                        <div>
                            <img class="last" src="photos/LastNews.png" alt="">
                        </div>
        
                        
                    </div>
                    <div>
                        <img class="photo2" src="photos/headphones.png" alt="Наушники">
                    </div>
        
                    <div class="TEXT">
                        Sept 4 2002
                        <br>ProHosting releases new and improved Web site, and Account administration utility.
                        <br><br>Notice:<br>Due to the increase of spam filters (i. e. with hotmail.com and others), 
                        please include ProHosting.com onyour recipient list so you can receive notice and e-mail 
                        invoices from ProHosting.com.
                    </div>
                </div>
            </section>
        </div>

        

        
        <footer>
           <?php
                require "footer.php"
           ?>
        </footer>
        
        

    </body>
</html>