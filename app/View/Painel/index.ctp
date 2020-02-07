<h1 class="page-header">Bem vindo!</h1>
<div class="row text-center">
    <div class="col-md-4">
        <h3>Total de Posts</h3>
        <span class="font90"><?php echo $posts; ?></span>
        <br>
        <?php echo $this->Html->link("<span class=\"glyphicon glyphicon-eye-open\"></span> Visualizar", array(
            "controller" => "posts", "action" => "index"
            ), 
            array("class" => "btn btn-default btn-b-l", "data-loading-text" => "Aguarde...", "escape" => false)
        )." "; ?>
    </div>
    <div class="col-md-4">
        <h3>Total de Comentários</h3>
        <span class="font90"><?php echo $comments; ?></span>
        <br>
        <?php echo $this->Html->link("<span class=\"glyphicon glyphicon-eye-open\"></span> Visualizar", array(
            "controller" => "comments", "action" => "index"
            ), 
            array("class" => "btn btn-default btn-b-l", "data-loading-text" => "Aguarde...", "escape" => false)
        )." "; ?>
    </div>
    <div class="col-md-4">
        <h3>Total de Usuários</h3>
        <span class="font90"><?php echo $users; ?></span>
        <br>
        <?php echo $this->Html->link("<span class=\"glyphicon glyphicon-eye-open\"></span> Visualizar", array(
            "controller" => "users", "action" => "index"
            ), 
            array("class" => "btn btn-default btn-b-l", "data-loading-text" => "Aguarde...", "escape" => false)
        )." "; ?>
    </div>
</div>
<script>
$(function(){
    $('.nav-sidebar li a[href="/cakephp/painel').parent().addClass("active");
});
</script>