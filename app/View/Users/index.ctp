<h1 class="page-header">Usuários</h1>
<br>
<p><?php echo $this->Html->link('Novo Usuário', array('action' => 'add')); ?></p>
<?php if(!empty($users)){ ?>
<table class="table table-condensed table-hover">
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Criado em</th>
        <th>Opções</th>
    </tr>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo $user['User']['id']; ?></td>
            <td>
                <?php echo $user['User']['username']; ?>
            </td>
            <td>
                <?php echo $this->Html->link('Editar', array('action' => 'edit', $user['User']['id'])); ?>
                
                <?php echo $this->Form->postLink(
                    'Deletar',
                    array('action' => 'delete', $user['User']['id']),
                    array('confirm' => 'Você tem certeza?'));
                ?>
            </td>
            <td><?php echo $user['User']['created']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<?php }else{ ?>
    <?php echo $this->TextFormat->alert("Nenhum usuário encontrado."); ?>
<?php } ?>
<script>
$(function(){
    $('.nav-sidebar li a[href="/cakephp/users').parent().addClass("active");
});
</script>