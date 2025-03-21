<?php
/**
 * @var \App\Kernel\View\ViewInterface $view
 * @var \App\Kernel\Session\SessionInterface $session
 */
?>

<?php $view->component('start'); ?>

<h1>Register</h1>
<form action="/register" method="post">
    <p>email</p>
    <input type="email" name="email">
    <?php if ($session->has('email')) { ?>
        <ul>
            <?php foreach($session->getFlash('email') as $error) { ?>
                <li style="color: red;"><?= $error ?></li>
            <?php } ?>
        </ul>
    <?php } ?>
    <p>password</p>
    <input type="password" name="password">
    <?php if ($session->has('password')) { ?>
        <ul>
            <?php foreach($session->getFlash('password') as $error) { ?>
                <li style="color: red;"><?= $error ?></li>
            <?php } ?>
        </ul>
    <?php } ?>
    <button>Register</button>
</form>


<?php $view->component('end'); ?>