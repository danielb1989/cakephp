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
            "painel"
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
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php echo $this->Html->link("Painel de Controle", array('controller' => 'painel', 'action' => 'index'), array("class" => "navbar-brand")); ?>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <?php echo $this->Html->link("Visualizar Blog", array('controller' => 'pages', 'action' => 'home'), array('target' => '_blank', 'escape' => false)); ?>
                    </li>
                    <li><?php echo $this->Html->link("Sair do Painel", array('controller' => 'painel', 'action' => 'logout')); ?></li>
                </ul>
                <form class="navbar-form navbar-right">
                    <input type="text" class="form-control" placeholder="Pesquisar...">
                </form>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <li>
                        <?php echo $this->Html->link("Home", array('controller' => 'painel', 'action' => 'index')); ?>
                    </li>
                    <li><?php echo $this->Html->link("Usuários", array('controller' => 'users', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link("Posts", array('controller' => 'posts', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link("Comentários", array('controller' => 'comments', 'action' => 'index')); ?></li>
                </ul>
                <ul class="nav nav-sidebar">
                    <li><?php echo $this->Html->link("Visualizar Blog", array('controller' => 'pages', 'action' => 'home'), array('target'=>'_blank','escape'=>false)); ?></li>
                </ul>
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <?php echo $this->Flash->render(); ?>
                <?php echo $this->fetch('content'); ?>
            </div>
        </div>
    </div>

  </body>
</html>
