<!DOCTYPE html>
<html lang="en">
    <head>  
        <meta charset="utf-8">
        <title>Page 2</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php include("header.php"); ?>
        <div class="container">
            <h1>Choisissez la table de multiplication</h1>
            <form method="post" action="/page2.php" class="page2_form">
                <select name="TableDeMultiplication">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
            </select>
            <input type="submit" value="Valider"/>
            </form>
            <?php
            if (isset($_POST['TableDeMultiplication'])) {
                $NumDeTable = $_POST['TableDeMultiplication'];
                $Affichage = '<h2>Table de multiplication de '.$NumDeTable.' :</h2><br />';
                $i = 0;
                while ($i < 11) {
                    $Affichage .= $i.' × '.$NumDeTable.' = '.$i*$NumDeTable.'<br />';
                    $i++;
                }
                
                echo "<div class='table_layout'><div class='Table_content'>";
                echo $Affichage;
                echo "</div></div>";
            }
            ?>
        </div>
    </body>
</html>