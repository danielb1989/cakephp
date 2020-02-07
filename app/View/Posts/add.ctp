<h1>Adicionar Post</h1>
<?php
    echo $this->Form->create('Post');
    echo $this->Form->input("title", array(
        "label" => "Título",
        "class" => "form-control",
        "div" => array("class" => "form-group")
    ));
    echo "<label>Conteúdo</label>";
    echo $this->Form->textarea("body", array(
        "class" => "form-control",
        "rows" => "10"
    ));
    echo "<hr>";
    echo $this->Html->link("<span class=\"glyphicon glyphicon-remove\"></span> Cancelar", array(
        "controller" => "posts", "action" => "index"
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
    $('.nav-sidebar li a[href="/cakephp/posts').parent().addClass("active");
});
</script>