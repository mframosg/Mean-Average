<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator - Miguel Ramos</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="normalize.css">
</head>

<body>

    <!-- Forms to request the data -->
    <form action="index.php" method="post">
        <div class="form">
        <h1>Mean Average</h1>
            <div class="group" padding-lefg>
                <input type="text" name="name"><label for="">Name</label><br><br>
                <input type="text" name="subject"><label for="">Subject</label><br><br>
                <input type="text" name="grade1"><label for="">Grade 1</label><br><br>
                <input type="text" name="grade2"><label for="">Grade 2</label><br><br>
                <input type="text" name="grade3"><label for="">Grade 3</label><br><br>
                <input type="text" name="grade4"><label for="">Grade 4</label><br><br>
                <button class="button color" type="submit" ><p class="button-text">Calculate</p></button>
                <div>
                    <?php
                        //Ask if all of the informations is complete
                        if(isset($_POST['name']) && isset($_POST['subject']) 
                        && isset($_POST['grade1']) && isset($_POST['grade2']) 
                        && isset($_POST['grade3']) && isset($_POST['grade4'])){
                            $name = $_POST['name'];
                            $subject = $_POST['subject'];
                            $g1 = $_POST['grade1']; 
                            $g2 = $_POST['grade2'];
                            $g3 = $_POST['grade3'];
                            $g4 = $_POST['grade4'];
                            $total = ($g1 + $g2+ $g3 + $g4)/4;
                            echo "Hi ". $name;
                            printf ('<br>');
                            printf ('<br>');
                            echo 'These are your grades: ';
                            printf ('<br>');
                            printf ('<br>');
                            echo 'Grade 1 = '.$g1;
                            printf ('<br>');
                            printf ('<br>');
                            echo 'Grade 2 = '.$g2;
                            printf ('<br>');
                            printf ('<br>');
                            echo 'Grade 3 = '.$g3;
                            printf ('<br>');
                            printf ('<br>');
                            echo 'Grade 4 = '.$g4;
                            printf ('<br>');
                            printf ('<br>');
                            printf ('<br>');
                            echo "Your average is: ".$total;
                            if($total<2.95){
                                printf ('<br>');
                                printf ('<br>');
                                echo '<img src="img/dunce_hat.jpg" alt="not found" class="bad">';
                                printf ('<br>');
                                echo "¡You failed!"; 
                                
                            }else{
                                printf ('<br>');
                                printf ('<br>');
                                echo '<img src="img/button.jpg" alt="not found" id="good">';   
                                printf ('<br>');
                                echo "¡Very nice, continue studying!";
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </form>

</body>

</html>