<?php ob_start(); ?>
<h1>Contacte !</h1>

<p>Cum historia mudat valde, Razgriz revelat ipsum, primum daemon seclesus est.</p>

<fieldset>
    <form action='<?= url('/contacte')?>' method='post'>
        <input type='text' placeholder='adresse mail' name='mail'><br />
        <input type='text' placeholder='Nom' name='nom'><br />
        <input type='textarea' placeholder='Votre message' name='msg'><br />
        <input type="submit" value="Ajouter" name="valid">
    </form>
</fieldset>

<?php $content = ob_get_clean() ?>

<?php view('template', compact('content')); ?>