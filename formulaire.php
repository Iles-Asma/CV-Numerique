<?php 
$db = new PDO ('mysql:host=sqletud.u-pem.fr;dbname=iasma_db', 'iasma', 'iles91', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
$sql = "INSERT INTO contact (nom, prenom, email, comment) VALUES (:nom, :prenom, :email, :comment)";
$attributes = array(
    'nom' => $_GET['nom'],
    'prenom' => $_GET['prenom'],
    'email' => $_GET['email'],
    'comment' => $_GET['comment']
  );
$stmt = $db->prepare($sql);
$stmt->execute($attributes);
$db = null;
header('Location: index.html');
} else{
    http_response_code(500);
}
?>