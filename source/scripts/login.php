<?php
include_once 'db_connection.php';

// Iniciando a sessão
session_start();

if (isset($_POST['btn-login'])) {
    
    $login = mysqli_escape_string($connection, $_POST['login']);
    $senha = mysqli_escape_string($connection, $_POST['senha']);

    // Verificando se os campos estão vazios
    if ((empty($login)) or (empty($senha))) {
        $_SESSION['status'] = "Erro desconhecido. Código: 01";
        header('Location: ../index.php');
    } else {
        // Consulta no banco de dados
        $query = "SELECT * FROM usuario WHERE login = '$login'";
        $result = mysqli_query($connection, $query);

        // Verificando no banco de dados se o usuário é cadastrado no sistema
        if (mysqli_num_rows($result) > 0) {
            // Verificando a senha do usuário
            $query = "SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'";
            $result = mysqli_query($connection, $query);

            if (mysqli_num_rows($result) == 1) {
                $dados = mysqli_fetch_array($result);

                // Iniciando a sessão do usuário salvando o seu identificador único
                $_SESSION['session'] = true;
                $_SESSION['id'] = $dados['id'];

                // Redirecionando o usuário para a sua página
                header('Location: ../pages/home.php');

            } else {
                $_SESSION['status'] = "Senha inválida.";
                header('Location: ../index.php');
            }
        } else {
            $_SESSION['status'] = "Usuário não cadastrado no sistema.";
            header('Location: ../index.php');
        }
    }
}