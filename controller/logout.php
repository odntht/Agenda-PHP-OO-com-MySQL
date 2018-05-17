
<?php 
session_start();
unset($_SESSION['id']);
unset($_SESSION['nome']);

echo "<script>alert('Logout executado com sucesso!.');"
            . "location.assign('http://localhost:8080/Agenda/');</script>"; 

?>
