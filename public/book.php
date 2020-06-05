<?php

require_once '../connec.php.dist';

$debug = $error = "";

try{
    $pdo = new \PDO(DSN, USER, PASS);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch ( Exception $e ) { // class auto instanciée pas besoin de faire new Exception ... 
    echo "No access to database /  Info : possible cause bad path to database file !<br> " .  PHP_EOL . $e->getMessage();
    die(); // litterallement tuer le script -> accepte une chaine de caractère en paramètre exple die("Ce script ne fonctionne pas !");
}

try{
    $query = "SELECT * FROM bribe ORDER BY name";
    $stm = $pdo->query($query);
    $bribes = $stm->fetchall(PDO::FETCH_ASSOC);
}catch( Exception $e) {
    $error .= "No bribe found !  <br> " .  PHP_EOL; 
    $debug .= $e->getMessage() . "<br> " .  PHP_EOL; 
}

$nameErr = $paymentErr ="";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
    if (empty($_POST["name"])){
        $nameErr = "Name required.";
    }
    if (empty($_POST["payment"])){
        $paymentErr = "Payment required ";
    }
    if ($_POST["payemnt"] <= 0){
        $error = "Pas 0 ! Gros radin !";
    }   
    if ($nameErr = $paymentErr === "" && $_POST["payment"] > 0){

        try{  
            $name = $_POST['name'];
            $payment = $_POST['payment'];
            $queryInsert = "INSERT INTO bribe (name, payment) VALUES (:name, :payment)";

            $stm = $pdo->prepare( $queryInsert );

            $stm->bindValue(':name', $name, PDO::PARAM_STR );
            $stm->bindValue(':payment', $payment, PDO::PARAM_INT );
            $stm->execute();
            header('Location: book.php');
            exit;

        } catch ( Exception $e ) {  
            $error .= "Cannot insert data ! <br> " .  PHP_EOL; 
            $debug .= $e->getMessage( ) . "<br> " .  PHP_EOL; 
        }
    
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/book.css">
    <title>Checkpoint PHP 1</title>
</head>
<body>

<?php include 'header.php'; 
    if($error != ''){
        echo "<div class=\"error\">" . $error . "</div>";
    } 
?>

<main class="container">

    <section class="desktop">
        <img src="image/whisky.png" alt="a whisky glass" class="whisky"/>
        <img src="image/empty_whisky.png" alt="an empty whisky glass" class="empty-whisky"/>

        <div class="pages">
            <div class="page leftpage">
            <p> Add a bribe</p>
            <form action="book.php"  method="post">
                    <div class="form-group ">
                        <label for="name">Name :</label></br>
                        <input type="text"  id="name" name="name" required >
                    </div>
                    <div>
                        <label for="payment">Payment :</label></br>
                        <input type="number"  id="payment" name="payment" required >
                    </div>
                    <div>
                        <button type="submit" id="submit" name="add">Add Payment</button>
                    </div>
                </form>
            </div>

            <div class="page rightpage">
            <?php
                echo 
                '<table>
                    <thead>
                        <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Payment</th>
                        </tr>
                    </thead>
                    <tbody>';
                $total= 0;
                foreach( $bribes as $bribe)
                {
                    echo "<tr>
                    <td>" . $bribe['name'] . "</td>
                    <td>" . $bribe['payment'] . "</td>
                    </tr>
                    </tbody>" . PHP_EOL;
                    $total += $bribe['payment']; 
                }
                    echo "<tfoot>
                        <th> Total : </th>
                        <td>" . $total . "</td>
                    </tfoot>";
                echo "</table>" . PHP_EOL;
                
            ?>
            </div>
        </div>
        <img src="image/inkpen.png" alt="an ink pen" class="inkpen"/>
    </section>
</main>
</body>
</html>

