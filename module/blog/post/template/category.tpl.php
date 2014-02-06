<ul>
<?php
if(!empty($this->posts)){
	foreach($this->posts as $post){
        echo "<li>{$post->title}</li>";
    }
}else{
	echo '<p>Tidak ada post di category ini</p>';
}
?>
</ul>