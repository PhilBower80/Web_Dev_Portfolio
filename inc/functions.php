<?php 

function sendMessage($forename, $surname, $email, $telephone, $subject, $message) {
    include 'connection.php';

    $sql = "INSERT INTO contact_form(forename, surname, email, telephone, subject, message) VALUES('$forename', $surname','$email', '$telephone', '$subject', '$message')";

    try {
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':forename', $forename, PDO::PARAM_STR);
        $stmt->bindValue(':surname', $surname, PDO::PARAM_STR);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->bindValue(':telephone', $telephone, PDO::PARAM_INT);
        $stmt->bindValue(':subject', $subject, PDO::PARAM_STR);
        $stmt->bindValue(':message', $message, PDO::PARAM_STR);
        $stmt->execute();
    } catch (Exception $e){
        echo "Error!: " . $e->getMessage() . "<br />";
    }
}

?>