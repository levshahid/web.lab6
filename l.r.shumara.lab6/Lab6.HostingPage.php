<!DOCTYPE html>
<html>
    <head>
        <meta charset="Utf-8">
        <title>Hosting</title>

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
        
                        <div class="sech">
                            <div class="form">
                                <form action="<?php $_SERVER['PHP_SELF']?>" method="GET" class="formSearch">
                                    <div class="layer">
                                        <input type="radio" name="c" id="all" value="all">
                                            <label for="all">Все товары</label>
                                        </input><br>
                                    </div>
                                    <div class="layer">
                                        <input type="radio" name="c" id="mobiles" value="mobiles">
                                            <label for="mobiles">Телефоны</label>
                                        </input><br>
                                    </div>
                                    <div class="layer">
                                        <input type="radio" name="c" id="comps" value="comps">
                                            <label for="comps">Компьютеры</label>
                                        </input><br>
                                    </div>
                                    <div class="layer">
                                        <input type="radio" name="c" id="accessoires" value="accessoires">
                                            <label for="accessoires">Аксессуары</label>
                                        </input><br>
                                    </div>

                                    <button type="submit" name="search" value="search">
                                        Искать!
                                    </button>
                                </form>
                            </div>
                            
                            <div class="form1">
                                <?
                                    $xml = simplexml_load_file("XMLFile.Lab6.xml");
                                        
                                        foreach($xml->all as $output){
                                            if($_GET['c']==='all'){
                                                outputMobiles($output);
                                                outputComps($output);
                                                outputAccessoires($output);
                                            }   
                                            if($_GET['c']==='mobiles') {
                                                outputMobiles($output);
                                            }
                                            if($_GET['c']==='comps') {
                                                outputComps($output);
                                            }
                                            if($_GET['c']==='accessoires') {
                                                outputAccessoires($output);
                                            }
                                        }
                                     
                                    function outputMobiles($output){
                                        foreach($output->mobiles->mobile as $mobile){
                                            $photo = $mobile->photo;
                                            echo "<img src='<?$photo?>' alt='' class='goodsPhoto'><br>";
                                            echo $mobile->factor.' ';
                                            echo $mobile->model.'<br>';
                                            echo $mobile->price.'<br><br><hr>';
                                        }
                                    }

                                    function outputComps($output) {
                                        foreach($output->comps->comp as $comp){
                                            $photo = $comp->photo;
                                            echo "<img src='<?$photo?>' alt='' class='goodsPhoto'><br>";
                                            echo $comp->factor.' ';
                                            echo $comp->model.'<br>';
                                            echo $comp->price.'<br><br><hr>';
                                        }
                                    }

                                    function outputAccessoires($output) {
                                        foreach($output->accessoires->accessoir as $accessoir){
                                            $photo = $accessoir->photo;
                                            echo "<img src='<?$photo?>' alt='' class='goodsPhoto'><br>";
                                            echo $accessoir->name.'<br>';
                                            echo $accessoir->price.'<br><br><hr>';
                                        }
                                    }
                                ?>
                            </div>
                            
                            
                            
                                
                                
                                
                            
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