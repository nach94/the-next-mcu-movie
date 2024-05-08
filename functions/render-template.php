<?php

declare(strict_types=1);

function render_template(string $template, array $data = []){
    extract($data);
    require "template-parts/$template.php";
}
?>
