<?php
echo $this->post->title;

echo '<br />';

echo '<p>';
echo $this->post->content;
echo '</p>';

echo $GLOBALS['router']->generate('post-category', array('name'=>'hacking'));
?>