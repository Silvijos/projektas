<?php
if(!empty($_POST)) {
    //print_r($_POST);

    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "kontaktai");

    $name = trim(htmlspecialchars($_POST['name']));
    $email = trim(htmlspecialchars($_POST['email']));
    $message = trim(htmlspecialchars($_POST['message']));


    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    if($mysqli->connect_error) {
            echo "Atsiprašome, bet svetainė susidūrė su problema. \n";
            echo 'Klaida: ' . $mysqli->connect_error . '\n';
            exit();
    }

    mysqli_query($mysqli, "INSERT INTO klientai (name, email, message) VALUES('$name', '$email', '$message')");

    echo "<script>alert('Thanks we got your message. See you soon.');</script>";
}
?>
