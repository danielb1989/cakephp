<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $this->fetch('title'); ?> - Blog com CakePHP</title>
    <?php
        echo $this->Html->meta("icon", "icon/favicon.ico");
        echo $this->Html->css(array(
            "bootstrap.min"
        ));
        echo $this->fetch("css");
        echo $this->Html->css(array(
            "main.style",
            "login"
        ));
        echo $this->Html->script(array(
            "jquery-1.11.2.min",
            "bootstrap.min"
        ));
        echo $this->fetch("script");
        echo $this->Html->script(array(
            "main.script"
        ));
    ?>
  </head>
  <body>
    <div id="content">
        <?php echo $this->Flash->render(); ?>
        <?php echo $this->fetch('content'); ?>
    </div>
    <hr>
    <footer>
        <div class="container text-center">
            <p>Blog com CakePHP  - &copy; 2016 Company, Inc.</p>
        </div>
    </footer>
</body>
</html>