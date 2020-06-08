<!DOCTYPE html>
<html lang="en">
    <head>  
        <meta charset="utf-8">
        <title>Page 1</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php include("header.php"); ?>
        <div class="container">
            <?php
            $NumDeTable = 3;
            echo '<h1>Table de multiplication de 3 </h1>';
            $i = 0;
            $Affichage = "";
            while ($i < 11) {
                $Affichage .= $i.' × '.$NumDeTable.' = '.$i*$NumDeTable.' <br />';
                $i++;
            }
            echo "<div class='table_layout'><div class='Table_content'>";
            echo $Affichage;
            echo "</div></div>";
            ?>
        </div>
    </body>
</html>