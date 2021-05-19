<?php 
session_start();

if(isset($_SESSION['msg'])){
echo $_SESSION['msg'];
}else{
    return null;
}
?>
<link rel="stylesheet" href="style.css">
<form action="session.php" method="post">
    <div>
        <label for="msg"><h1>Editar Mensagem: </h1></label>
        <textarea name="msg" id="msg" cols="50" rows="10"></textarea>
    </div>
    <div>
        <button type="submit">Editar</button>
    </div>
</form>
    <div>
    <h1>Deletar Mensagem: </h1>
    <a href="delete.php">
        <button>Deletar</button>
    </a>
    </div>