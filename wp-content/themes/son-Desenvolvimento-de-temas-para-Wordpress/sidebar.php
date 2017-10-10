<h3>Categorias</h3>
<ul class="list-group">
    <?php
    $categories = get_categories();
    foreach ($categories as $category):
        printf('<li class="list-group-item"><a href="%s" title="%s">%s</a></li>',
            get_category_link($category->term_id),
            sprintf('Ver posts de %s', $category->name),
            $category->name);
    endforeach;
    ?>
</ul>

<h3>Tags</h3>
<ul class="list-group">
    <?php
    $tags = get_tags();
    foreach ($tags as $tag):
        printf('<li class="list-group-item"><a href="%s" title="%s">%s</a></li>',
            get_tag_link($tag->term_id),
            sprintf('Ver posts sobre %s', $tag->name),
            $tag->name);
    endforeach;
    ?>
</ul>