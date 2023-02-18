<?php $about = get_page_by_title('sobre'); ?>

<section class="qualidade container">
    <h2 class="subtitulo"><?php the_field('quality_title', $about); ?></h2>
    <img src="<?php the_field('logo_bikecraft', $about); ?>" alt="Bikcraft">
    <ul class="qualidade_lista">
        <?php if(have_rows('quality_item', $about)): while(have_rows('quality_item', $about)) : the_row(); ?>
            <li class="grid-1-3">
                <h3><?php the_sub_field('item_title', $about); ?></h3>
                <p><?php the_sub_field('item_description', $about); ?></p>
            </li>
        <?php endwhile; else : endif; ?>
    </ul>
    <?php if (!is_page("sobre")) { ?>
        <div class="call">
            <p><?php the_field('quality_about_action', $about); ?></p>
            <a href="/sobre" class="btn btn-preto">Sobre</a>
        </div>
    <?php } ?>
</section>