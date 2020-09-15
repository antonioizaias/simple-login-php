<?php
// Header
require_once 'templates/header.php';

// Respostas
require_once 'templates/response.php';
?>

<!-- Body -->
<div class="row">
    <div class="col s12 m4 push-m4">
        <h3 class="light">Login</h3>
        <form action="scripts/login.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="login" id="login" required="true">
                <label for="login">Usuário</label>
            </div>
            <div class="input-field col s12">
                <input type="password" name="senha" id="senha" maxlength="12" required="true">
                <label for="senha">Senha</label>
            </div>
            <div class="right">
                <button class="btn" type="submit" name="btn-login">Entrar</button>
            </div>
        </form>
    </div>
</div>

<?php
// Footer
require_once 'templates/footer.php';
?>