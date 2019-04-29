DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php echo "Hello world"; ?> <hr>
        <?php echo strtoupper("string")."<br>"; 
              echo strtolower("String");?> <hr>
        <?php 
            $var="Php je skriptni jezik";
            echo strtoupper($var);
            $var1=25;
            echo "<br>".$var1;?> 
            <hr>
        <?php
            define("PI", 3.1415);
            echo PI;
            //PI=4.8;
            //echo PI; --> ne moze
            ?> <hr>
        <?php 
            $var2=30;
            echo $var1+ $var2;
            $var1++;
            echo "<br>".($var1+$var2);
            ?> <hr>
        <pre><?php 
            $niz=array(2,6,88,"auto",2.6,"avion");
            print_r($niz);
            echo "Treći član niza je ".$niz[2];
            echo "<br>".($niz[0]+$niz[2]);
            ?>
            <hr>
            <?php 
                $asocniz=array("ime"=>"Ivan","prezime"=>"Ivić");
                print_r($asocniz);
                echo $asocniz["ime"];
                $asocniz["ime"]="Marko";
                echo "<br>".$asocniz["ime"]." ".$asocniz["prezime"]."<hr>";
                ?>
            <?php
                $niz_brojeva=array(2,6,33,4,27,44);
                print_r($niz_brojeva);
                echo count($niz_brojeva)."<br>";
                sort($niz_brojeva);
                print_r($niz_brojeva);
                rsort($niz_brojeva);
                print_r($niz_brojeva);
            ?>
            
        </pre><hr>
        <?php 
            echo strlen("Hello world")."<br>";
            echo str_replace("world","Dolly","Hello world")."<br>";
            echo strrev("Hello world");     
        ?>
    </body>
</html>
 