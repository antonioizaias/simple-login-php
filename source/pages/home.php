<?php
// Header
require_once '../templates/header.php';

// Conexão com o banco de dados
include_once '../scripts/db_connection.php';
?>

<?php
// Iniciando a sessão
session_start();

if (isset($_SESSION['session'])) {

    // Identificado único do usuário logado no sistema
    $id = $_SESSION['id'];

    // Buscando os seus dados
    $query = "SELECT * FROM usuario WHERE id = '$id'";
    $result = mysqli_query($connection, $query);
    $dados = mysqli_fetch_array($result);

} else {
    // Redirecionando o usuário que não se encontra logado no sistema
    header('Location: ../index.php');
}
?>

<!-- Body -->
<div class="row">
    <div class="col s12 m12">
        <h3 class="light">Bem-vindo, <?= $dados['nome'] ?>!</h3>
        <a href="../scripts/logout.php">Sair</a>
    </div>
</div>

<?php
// Footer
require_once '../templates/footer.php';
?>