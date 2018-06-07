<?php get_header(); ?>

<div class="posts">
    <div class="post">
        <div class="container">
            <div class="row">

    <?php if ( have_posts() ) :

        $post_num = 0;

     while ( have_posts() ) : the_post();

            
            

            if($post_num%4 == 0): ?>
            
                <?php get_template_part('template-part/post/big-post'); ?>
             

           <?php else: ?>

                <?php get_template_part('template-part/post/small-post'); ?>

            <?php endif; $post_num++; ?>
            
            
        <?php endwhile; ?>
    
    <?php endif; ?>



        </div>
    </div>
</div>

<?php get_footer(); ?>