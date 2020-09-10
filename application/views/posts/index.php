<br>
<h2><?= $title ?></h2>
<?php foreach($posts as $post) : ?>
    <h3><?php echo $post['title']; ?></h3>
    <small class="post-date">Created at: <?php echo $post['created_at']; ?></small>
    <p><?php echo $post['body']; ?></p>
    <p><a class="btn btn-primary" href="<?php echo base_url('/posts/'.$post['slag']); ?>">Read More</a></p>
<?php endforeach; ?>
