<?php

$tpl = new Savant3(array(
    'template_path' => array(
        "module/{$moduleName}/{$controllerName}/template",
        "module/{$moduleName}/{$controllerName}/template/layout",
        "common/template",
    )
));