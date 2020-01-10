<?php
include 'database.php';

//        echo password_hash('wachtwoord123', PASSWORD_DEFAULT);
function login($gebruikersnaam, $wachtwoord){
    $conn = getConnection();
    $statement = "select * from beheerder";
    $stmt = $conn->prepare($statement);
    $stmt->execute();
// set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach ($stmt->fetchAll() as $record)
    if(password_verify($wachtwoord,$record['wachtwoord']) && $gebruikersnaam == $record['naam']){
        return 1;
    }
}
?>