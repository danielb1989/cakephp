<div class="jumbotron">
    <div class="container">
      <h1>Hello, world!</h1>
      <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
    </div>
</div>
<div class="container">
    <h3>Últimas Postagens</h3>
    <div class="row">
        <?php foreach ($ultimasPostagens as $post): ?>
            <div class="col-md-4">
                <h2><?php echo $post['Post']['title']; ?></h2>
                <p><?php echo $post['Post']['body']; ?></p>
                <p><?php echo $this->Html->link("Ver detalhes", array('action' => 'post', $post['Post']['id']), array("class" => "btn btn-default"));?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>