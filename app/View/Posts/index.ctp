<h1 class="page-header">Posts</h1>
<br>
<p><?php echo $this->Html->link('Novo Post', array('action' => 'add')); ?></p>
<?php if(!empty($posts)){ ?>
<table class="table table-condensed table-hover">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Actions</th>
        <th>Created</th>
    </tr>
    <?php foreach ($posts as $post): ?>
        <tr>
            <td><?php echo $post['Post']['id']; ?></td>
            <td>
                <?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']));?>
            </td>
            <td>
                <?php echo $this->Html->link('Editar', array('action' => 'edit', $post['Post']['id'])); ?>
                
                <?php echo $this->Form->postLink(
                    'Deletar',
                    array('action' => 'delete', $post['Post']['id']),
                    array('confirm' => 'Are you sure?'));
                ?>
            </td>
            <td><?php echo $post['Post']['created']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<?php }else{ ?>
    <?php echo $this->TextFormat->alert("Nenhum comentário encontrado."); ?>
<?php } ?>
<script>
$(function(){
    $('.nav-sidebar li a[href="/cakephp/posts').parent().addClass("active");
});
</script>