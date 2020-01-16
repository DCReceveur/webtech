<!-- Daan Receveur 642199 -->
<!-- 14-01-2020 -->
<?php
include 'database.php';
//        Ja ik weet dat je dit nooit in je code moet laten staan maar gezien dit een school project is en ik mezelf zelfs wachtwoord123 zie vergeten staat het hier nog in
//        echo password_hash('wachtwoord123', PASSWORD_DEFAULT);
function login($gebruikersnaam, $wachtwoord)
{
    $conn = getConnection();
    $statement = "select * from beheerder";
    $stmt = $conn->prepare($statement);
    $stmt->execute();
// set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach ($stmt->fetchAll() as $record)
        if (password_verify($wachtwoord, $record['wachtwoord']) && $gebruikersnaam == $record['naam']) {
            return 1;
        }
}

?>