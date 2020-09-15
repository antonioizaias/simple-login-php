<?php
// Iniciando a sessão
session_start();
?>

<!-- Verificando a existência de sessões -->
<?php if (isset($_SESSION['status'])): ?>
    <script>
        window.onload = function () {
            M.toast({html: '<?= $_SESSION['status'] ?>'});
        }
    </script>
<?php endif ?>

<?php
// Limpando a sessão
session_unset();
?>