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
            "main.style"
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
    
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php echo $this->Html->link("Blog com CakePHP", array('controller' => 'pages', 'action' => 'home'), array("class" => "navbar-brand")); ?>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Sign in</button>
                </form>
            </div>
        </div>
    </nav>
      
    <div id="content">
        <?php echo $this->Flash->render(); ?>
        <?php echo $this->fetch('content'); ?>
    </div>
      
    <hr>
      
    <footer>
        <div class="container">
            <p>&copy; 2016 Company, Inc.</p>
        </div>
    </footer>
    
  </body>
</html>