<h1 class="page-header">Comentários</h1>
<br>
<?php if(!empty($comments)){ ?>
<table class="table table-condensed table-hover">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>IP</th>
        <th>Mensagem</th>
        <th>Created</th>
        <th>Opções</th>
    </tr>
    <?php foreach ($comments as $comment): ?>
        <tr>
            <td><?php echo $comment['Comment']['id']; ?></td>
            <td><?php echo $comment['Comment']['name']; ?></td>
            <td><?php echo $comment['Comment']['email']; ?></td>
            <td><?php echo $comment['Comment']['ip']; ?></td>
            <td>
                <span class="label label-default" data-toggle="tooltip" data-placement="bottom" title="<?php echo $comment['Comment']['comment']; ?>">
                    MENSAGEM
                </span>
            </td>
            <td><?php echo $comment['Comment']['created']; ?></td>
            <td>
                <?php echo $this->Form->postLink(
                    'Deletar',
                    array('action' => 'delete', $comment['Comment']['id']),
                    array('confirm' => 'Você tem certeza?'));
                ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php }else{ ?>
    <?php echo $this->TextFormat->alert("Nenhum comentário encontrado."); ?>
<?php } ?>
<script>
$(function(){
    $('.nav-sidebar li a[href="/cakephp/comments').parent().addClass("active");
    $('[data-toggle="tooltip"]').tooltip();
});
</script>