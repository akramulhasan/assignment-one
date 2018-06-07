
   
        <div class="col-md-4">
            <div class="post">
                <?php the_post_thumbnail('large',array('class'=>'img-fluid')); ?>

                <h2><?php the_title(); ?></h2>

                <p>
                    <strong><?php the_author(); ?></strong><br/>
                    <?php $assone_date=get_the_date('jS F, Y');
                        echo esc_html($assone_date);
                    ?>
                </p>

               <?php the_content(); ?>
            </div>
        </div>

