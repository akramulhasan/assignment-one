<div class="big-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="<?php the_permalink(); ?>"><h2 class="post-title"><?php the_title(); ?></h2></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <p>
                    <strong><?php the_author_posts_link(); ?></strong><br/>
                    <?php $assone_date=get_the_date('jS F, Y');
                        echo esc_html($assone_date);
                    ?>
                </p>
                <?php the_tags('<ul class="list-unstyled"><li>','</li><li>','</ul>'); ?>
            </div>
            <div class="col-md-8">
                <p>
                    <?php the_post_thumbnail('large',array('class'=>'img-fluid')); ?>
                </p>
                <?php the_content(); ?>
            </div>
        </div>

    </div>
</div>
 