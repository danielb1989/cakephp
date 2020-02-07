<h1 class="page-header">Comentários</h1>
<br>
<?php if(!empty($comments)){ ?>
<table class="table table-condensed table-hover">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Created</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($comments as $comment): ?>
        <tr>
            <td><?php echo $comment['Comment']['id']; ?></td>
            <td><?php echo $comment['Comment']['name']; ?></td>
            <td><?php echo $comment['Comment']['email']; ?></td>

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
});
</script>