<?php ob_start(); ?>
    <h1>Bienvenue!</h1>

    <p>Cum historia mudat valde, Razgriz revelat ipsum, primum daemon seclesus est.</p>

<?php $content = ob_get_clean() ?>

<?php view('template', compact('content')); ?>