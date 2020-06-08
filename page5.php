<!DOCTYPE html>
<html lang="en">
    <head>  
        <meta charset="utf-8">
        <title>Page 5</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php include("header.php"); ?>
        <div class="container page4 page5" >
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
            <input type="submit" value="Valider" >
            </form>
            <?php
                session_start();
                if (isset($_POST['TableDeMultiplication'])){
                    $NumTable = $_POST['TableDeMultiplication'];
                    $_SESSION['SessionTable'] = $NumTable;
                } elseif (!isset($_SESSION['SessionTable'])){
                    $NumTable = 1;
                    $_SESSION['SessionTable'] = $NumTable;
                } elseif ((!isset($NumTable)) && (!isset($_POST['answer0']))) {
                    $NumTable = 1;
                }
                if(!isset($NumTable)){
                    $NumTable = 5;
                }

                if  ((($_SESSION['SessionTable'] != $NumTable) && (!isset($NumRandom))) && (!isset($_POST['answer0'])) || (($_SESSION['SessionTable'] == $NumTable) && (!isset($_POST['answer0'])))) {
                    $NumRandom = array (
                        'NumRandom0' => random_int(1, 10),
                        'NumRandom1' => random_int(1, 10),
                        'NumRandom2' => random_int(1, 10),
                        'NumRandom3' => random_int(1, 10),
                        'NumRandom4' => random_int(1, 10));
                    $_SESSION['NumRand0'] = $NumRandom ['NumRandom0'];
                    $_SESSION['NumRand1'] = $NumRandom ['NumRandom1'];
                    $_SESSION['NumRand2'] = $NumRandom ['NumRandom2'];
                    $_SESSION['NumRand3'] = $NumRandom ['NumRandom3'];
                    $_SESSION['NumRand4'] = $NumRandom ['NumRandom4'];
                    if (!isset($correct)){
                        $correct = array (
                            'correct0' => $NumRandom['NumRandom0'] * $_SESSION['SessionTable'],
                            'correct1' => $NumRandom['NumRandom1'] * $_SESSION['SessionTable'],
                            'correct2' => $NumRandom['NumRandom2'] * $_SESSION['SessionTable'],
                            'correct3' => $NumRandom['NumRandom3'] * $_SESSION['SessionTable'],
                            'correct4' => $NumRandom['NumRandom4'] * $_SESSION['SessionTable']);
                        $_SESSION['Corr0'] = $correct ['correct0'];
                        $_SESSION['Corr1'] = $correct ['correct1'];
                        $_SESSION['Corr2'] = $correct ['correct2'];
                        $_SESSION['Corr3'] = $correct ['correct3'];
                        $_SESSION['Corr4'] = $correct ['correct4'];
                    }
                }
                
            ?>
            <div class="table_layout">
                <form method="post" action="" class="form_answer">
                    <div>
                        <label for="fname"><?php echo  $_SESSION['NumRand0']. ' × ' .$_SESSION['SessionTable']. ' = ';?></label>
                        <input type="text" name="answer0" >
                    </div>

                    
                    <div>
                        <label for="fname"><?php echo  $_SESSION['NumRand1']. ' × ' .$_SESSION['SessionTable']. ' = ';?></label>
                        <input type="text" name="answer1" >
                    </div>

                    <div>
                        <label for="fname"><?php echo  $_SESSION['NumRand2']. ' × ' .$_SESSION['SessionTable']. ' = ';?></label>
                        <input type="text" name="answer2" >
                    </div>

                    <div>
                        <label for="fname"><?php echo  $_SESSION['NumRand3']. ' × ' .$_SESSION['SessionTable']. ' = ';?></label>
                        <input type="text" name="answer3" >
                    </div>

                    <div>
                        <label for="fname"><?php echo  $_SESSION['NumRand4']. ' × ' .$_SESSION['SessionTable']. ' = ';?></label>
                        <input type="text" name="answer4" >
                    </div>

                    <input type="submit" value="Valider les réponses">
                </form> 
            </div>

            <?php
                $score = 0;
                if (isset($_POST['answer0'])){
                    if ($_POST['answer0'] == $_SESSION['Corr0']){
                        $score++;
                    }
                }
                if (isset($_POST['answer1'])){
                    if ($_POST['answer1'] == $_SESSION['Corr1']){
                        $score++;
                    }
                }
                if (isset($_POST['answer2'])){
                    if ($_POST['answer2'] == $_SESSION['Corr2']){
                        $score++;
                    }
                }
                if (isset($_POST['answer3'])){
                    if ($_POST['answer3'] == $_SESSION['Corr3']){
                        $score++;
                    }
                }
                if (isset($_POST['answer4'])){
                    if ($_POST['answer4'] == $_SESSION['Corr4']){
                        $score++;
                    }
                }
                if ((isset($_POST['answer0'])) || (isset($_POST['answer1'])) || (isset($_POST['answer2'])) || (isset($_POST['answer3'])) || (isset($_POST['answer4']))){
                    echo '<div class="score_layout">';
                    echo "<p>Score : ".$score."/5</p>";
                    echo '</div>';
                }
                
            ?>

        </div>
    </body>
</html>