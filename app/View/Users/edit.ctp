<h1>Edit Usuário</h1>
<?php
    echo $this->Form->create('User', array('url' => 'edit'));
    echo $this->Form->input("username", array(
        "label" => "Usuário",
        "class" => "form-control",
        "div" => array("class" => "form-group")
    ));
    echo $this->Form->input("password", array(
        "label" => "Senha",
        "class" => "form-control",
        "div" => array("class" => "form-group")
    ));
    echo $this->Form->input('role', array(
        "label" => "Tipo",
        "class" => "form-control",
        "div" => array("class" => "form-group"),
        'options' => array('admin' => 'Admin', 'author' => 'Author')
    ));
    echo "<hr>";
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Html->link("<span class=\"glyphicon glyphicon-remove\"></span> Cancelar", array(
        "controller" => "users", "action" => "index"
        ), 
        array("class" => "btn btn-danger btn-b-l", "data-loading-text" => "Aguarde...", "escape" => false)
    )." ";
    echo $this->Form->button("<span class=\"glyphicon glyphicon-ok\"></span> Salvar", array(
        "label" => false,
        "type" => "submit",
        "class" => "btn btn-success btn-b-l send-success-button",
        "data-loading-text" => "Aguarde...",
    ));
    echo $this->Form->end();
?>
<script>
$(function(){
    $('.nav-sidebar li a[href="/cakephp/users').parent().addClass("active");
});
</script>