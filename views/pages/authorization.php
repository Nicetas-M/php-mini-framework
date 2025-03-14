<?php
/**
 * @var \App\Kernel\View\ViewInterface $view
 * @var \App\Kernel\Session\SessionInterface $session
 */
?>

<?php $view->component('start'); ?>

    <h1>Authorization</h1>

    <form action="/register" method="post">
        <?php if ($session->has('error')) { ?>
            <p style="color: red;">
                <?= $session->getFlash('error') ?>
            </p>
            <?php foreach ($session->getFlash('password') as $error) { ?>
                <li style="color: red;"><?= $error ?></li>
            <?php } ?>
        <?php } ?>
        <p>email</p>
        <input type="email" name="email">
        <p>password</p>
        <input type="password" name="password">
        <button>Register</button>
    </form>


<?php $view->component('end'); ?>