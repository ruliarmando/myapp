<?php if(!empty($this->posts)): ?>

    <?php //looping posts ?>
    <?php foreach($this->posts as $post): ?>
        <h2><a href="#"><?php echo $post->title; ?></a></h2>
        <div class="underbanner2">Posted in  <a href="#">News Update</a>s on 25th May ,2007</div>
        <div class="article">
            <p>
                <?php echo $post->content; ?>
            </p>
        </div>
    <?php endforeach; ?>
    <?php // end looping posts ?>

<?php else: ?>
    <h3>No Posts Found</h3>
<?php endif; ?>