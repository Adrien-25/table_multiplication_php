<!DOCTYPE html>
<html lang="en">
    <head>  
        <meta charset="utf-8">
        <title>Page 3</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php include("header.php"); ?>
        <div class="container">
        <h1>Choisissez la ou les tables de multiplication</h1>
            <form method="post" action="">
                <fieldset>
                    <div>
                        <input type="checkbox" name="Table[]" value="1">
                        <label for="1">1</label>
                    </div>
                    <div>
                        <input type="checkbox"  name="Table[]" value="2">
                        <label for="2">2</label>
                    </div>
                    <div>
                        <input type="checkbox"  name="Table[]" value="3">
                        <label for="3">3</label>
                    </div>
                    <div>
                        <input type="checkbox"  name="Table[]" value="4">
                        <label for="4">4</label>
                    </div>
                    <div>
                        <input type="checkbox"  name="Table[]" value="5">
                        <label for="5">5</label>
                    </div>
                    <div>
                        <input type="checkbox"  name="Table[]" value="6">
                        <label for="6">6</label>
                    </div>
                    <div>
                        <input type="checkbox"  name="Table[]" value="7">
                        <label for="7">7</label>
                    </div>
                    <div>
                        <input type="checkbox"  name="Table[]" value="8">
                        <label for="8">8</label>
                    </div>
                    <div>
                        <input type="checkbox"  name="Table[]" value="9">
                        <label for="9">9</label>
                    </div>
                    <div>
                        <input type="checkbox"  name="Table[]" value="10">
                        <label for="10">10</label>
                    </div>
                    <div>
                        <button type="submit">Envoyer le formulaire</button>
                    </div>
                </fieldset>
            </form>
            <?php
            echo "<div class='table_layout'>";
                for ($y=0; $y<10; $y++) {
                    
                    if (isset($_POST["Table"][$y]) != false) {
                        $NumDeTable = $_POST["Table"];
                        $Affichage = '<h2>Table de multiplication de '.$NumDeTable[$y].' :</h2><br />';
                        $i = 0;
                        while ($i < 11) {
                            $Affichage .= $i.' × '.$NumDeTable[$y].' = '.$i*$NumDeTable[$y].'<br />';
                            $i++;
                        }
                        $Affichage .= '<br />';
                        
                        echo "<div class='Table_content'>";
                        echo $Affichage;
                        echo" </div> ";
                        
                    }
                    
                } 
            echo" </div> ";
            
            
            ?>
            </div>
        </div>
    </body>
</html>