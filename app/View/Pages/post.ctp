<div class="container">
    <div class="row">
        <div class="col-md-9">
            <h1><?php echo $post['Post']['title']; ?></h1>
            <p><small>Criado em: <?php echo $this->TextFormat->convertDateToText($post['Post']['created']); ?> ás
                    <?php echo $this->TextFormat->convertDateToText($post['Post']['created'], "H:i"); ?></small></p>
            <p><?php echo $post['Post']['body']?></p>
            <hr>
            <?php echo $this->Session->flash(); ?>
            <h4>Comentários</h4>
            <?php if(!empty($comments)){ ?>
            <?php foreach ($comments as $comment): ?>
            <div class="well well-sm">
                <p><label><?php echo $comment["Comment"]["name"] . "</label> - <i>".$comment["Comment"]["email"] ?></i></p>
                <p><?php echo $comment["Comment"]["comment"]; ?></p>
            </div>
            <?php endforeach; ?>
            <?php }else{ ?>
                <?php echo $this->TextFormat->alert("Nenhum comentário encontrado."); ?>
            <?php } ?>
            <hr>
            <?php 
                echo $this->Form->create("Comment", array(
                    "id" => "form-validate",
                    "url" => array("controller" => "comments", "action" => "add")
                ));
                echo $this->Form->input("Comment.post_id", array(
                    "type" => "hidden",
                    "value" => $post["Post"]["id"]
                ));
                echo "<div class=\"row\">";
                echo "<div class=\"col-md-6\">";
                echo $this->Form->input("Comment.name", array(
                    "label" => "Nome",
                    "class" => "form-control",
                    "div" => array("class" => "form-group")
                ));
                echo "</div>";
                echo "<div class=\"col-md-6\">";
                echo $this->Form->input("Comment.email", array(
                    "label" => "E-mail",
                    "class" => "form-control",
                    "div" => array("class" => "form-group")
                ));
                echo "</div>";
                echo "</div>";
                echo "<label>Comentário</label>";
                echo $this->Form->textarea("Comment.comment", array(
                    "class" => "form-control",
                    "rows" => "5",
                ));
                echo "<hr>";
                echo $this->Form->button("<span class=\"glyphicon glyphicon-ok\"></span> Enviar", array(
                    "label" => false,
                    "type" => "submit",
                    "class" => "btn btn-success btn-b-l pull-right send-success-button",
                    "data-loading-text" => "Aguarde...",
                ));
                echo $this->Form->end();
            ?>
        </div>
        <div class="col-md-3 sidebar-blog">
            <div class="list-group">
            <?php 
                foreach ($last_posts as $post_list):
                    $class = $post_list['Post']['id'] == $post['Post']['id'] ? "list-group-item active" : "list-group-item";
                    echo $this->Html->link($post_list['Post']['title'], array('action' => 'post', $post_list['Post']['id']), array("class" => $class));
                endforeach;
            ?>
            </div>
        </div>
    </div>
</div>