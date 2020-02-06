<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" CONTENT="noindex, nofollow">
        <?php
        echo $this->Html->meta("icon", "icon/favicon.png");
        echo $this->Html->css(array(
            "bootstrap.min",
            "main.style"
        ));
        ?>
    </head>
    <body class="background-login">
        <?php echo $this->fetch("content"); ?>
    </body>
</html>