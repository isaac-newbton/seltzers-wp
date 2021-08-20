<?php
$categories = get_terms([
    'taxonomy'=>'product_category',
    'hide_empty'=>true
]);

global $category;

?>

<div class="content_container product_categories_nav_container">
    <nav class="product_categories">
        <ul>
            <?php foreach($categories as $c): ?>
                <li class="<?=$c==$category ? 'active' : ''?>">
                    <a href="<?=get_term_link($c)?>"><?=$c->name?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</div>