<?php

$cat_name = $_GET['name'];
    
$tpl->posts = ORM::for_table('post')
    ->select_many('post.title')
    ->join('category', array('post.cat_id', '=', 'category.category_id'))
    ->where('category.title', $cat_name)
    ->find_many();
    
//echo ORM::get_last_query();

$tpl->content = $tpl->fetch('category.tpl.php');

$tpl->display('frontend_layout.tpl.php');