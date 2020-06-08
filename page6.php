<!DOCTYPE html>
<html lang="en">
    <head>  
        <meta charset="utf-8">
        <title>Page 6</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php include("header.php"); ?>
        <div class="container page4" >
            <h1>Choisissez la table de multiplication</h1>
            <form method="post" action="" >
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
            <input type="submit" value="Valider"  />
            </form>

            <?php
            echo "<div class='table_layout'>";
                if (empty($NumTableAleatoire)) {
                    $NumTableAleatoire = random_int(1, 10);
                }
                $NumDeTable = 1;

            ?>
            <div class='table_layout'>
                <div class=""><?php $NumTableAleatoire. ' × '.$NumDeTable.' = ';?></div>
                <form method="post" action=" " class="form_answer" > 
                    <input type="text" name="reponse"/> 
                    <input type="button" value="Vérifier" onclick="submitForm()"/>
                </form>
            </div>
            <div class="correction">
                <?php
                    if ((!empty($_SESSION['NumeroTable'])) && (!empty($_SESSION['NumeroTableAleatoire']))) {
                        $corriger = $_SESSION['NumeroTableAleatoire'] * $_SESSION['NumeroTable'];
                        if  (isset($_POST['reponse']) && ($_POST['reponse'] == $corriger)) {
                            echo "Juste";
                        } elseif (isset($_POST['reponse']) && ($_POST['reponse'] != $corriger)){
                            echo "Faux";
                        }
                    }
                    

                ?>
            <div>
        </div>
        
    </body>
    <script src="script.js"></script>
</html>