<div class="container">
    <?php 
        echo $this->Session->flash();
        echo $this->Form->create("User", array("id" => "form-signin", "class" => "form-signin")); 
        echo $this->Form->input("User.username", array(
            "type" => "text",
            "label" => false,
            "placeholder" => "Login",
            "class" => "form-control",
            "autofocus" => ""
        ));
        echo $this->Form->input("User.password" , array(
            "type" => "password",
            "label" => false,
            "placeholder" => "Senha",
            "class" => "form-control"
        ));
        echo "<br>";
        echo $this->Form->button("Entrar", array(
            "type" => "submit",
            "class" => "btn btn-lg btn-primary btn-block btn-b-l",
            "data-loading-text" => "Aguarde...",
        ));
        echo "<br>";
        echo $this->Html->link("Voltar p/ o Blog", array('controller' => 'pages', 'action' => 'home'), array(
            "class" => "btn btn-lg btn-default btn-block btn-b-l"
        ));
        echo $this->Form->end();
    ?>
    <hr>
    <div class="text-center">
        <p><strong>Login p/ Teste</strong>: admin</p>
        <p><strong>Senha p/ Teste</strong>: 123456</p>
    </div>
</div>