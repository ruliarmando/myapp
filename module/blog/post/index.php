<?php

$tpl->posts = ORM::for_table('post')->find_many();

$tpl->content = $tpl->fetch('index.tpl.php');

$tpl->display('frontend_layout.tpl.php');
