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
        echo $this->Form->end();
    ?>
</div>