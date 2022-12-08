<?php
if (isset($_SESSION['mensaje'])) { ?>
    <div class="alert alert-<?= $_SESSION['tipo'] ?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['mensaje'] ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php session_unset();
} ?>