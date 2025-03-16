<?php
/**
 * @var \App\Kernel\View\ViewInterface $view
 * @var \App\Kernel\Session\SessionInterface $session
 */
?>

<?php $view->component('start'); ?>

    <h1>Authentication</h1>

    <form action="/authentication" method="post">
        <?php if ($session->has('error')) { ?>
            <p style="color: red;">
                <?= $session->getFlash('error') ?>
            </p>
        <?php } ?>
        <p>email</p>
        <input type="email" name="email">
        <p>password</p>
        <input type="password" name="password">
        <button>Auth</button>
    </form>

<?php $view->component('end'); ?>