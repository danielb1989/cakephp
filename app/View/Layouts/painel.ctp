<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title_page; ?> - Prime System</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex, nofollow">
        <?php
        echo $this->Html->meta("icon", "icon/favicon.png");
        echo $this->Html->css(array(
            "bootstrap.min",
            "datepicker.min",
            "clockpicker.min",
            "select2.min"
        ));
        echo $this->Html->css(array(
            "print.min"
        ), array(
            "media" => "print"
        ));
        echo $this->fetch("css");
        echo $this->Html->css(array(
            "main.style"
        ));
        echo $this->Html->script(array(
            "jquery-1.11.2.min",
            "bootstrap.min",
            "bootbox.min",
            "bootstrap-datepicker.min",
            "locales/bootstrap-datepicker.pt-BR",
            "clockpicker.min",
            "jquery.mask.min",
            "jquery.validate/jquery.validate.min",
            "jquery.validate/additional-methods",
            "jquery.form.min",
            "select2-3.4.5/select2.min",
            "select2-3.4.5/select2_locale_pt-BR",
            "tinymce/tinymce.min"
        ));
        echo $this->fetch("script");
        echo $this->Html->script(array(
            "main.script"
        ));
        ?>
    </head>
    <body class="body-painel">
        <div class="menu">

        </div>
        <div class="main">
            <div class="container container-pattern">
                <?php echo $this->fetch("content"); ?>
            </div>
        </div>
        <footer class="footer">
            <div class="container text-center footer-container">
                Desenvolvido por <strong>Daniel Brito</strong>, <?php echo date("Y");?>.
            </div>
        </footer>
    </body>
</html>