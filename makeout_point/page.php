<?php theme_include('header'); ?>
    <article id="article-<?php echo page_id(); ?>">
        <h3 class="post-title"><a href="<?php echo page_url(); ?>"><?php echo page_title();?></a></h3>
        <?php echo page_content(); ?>
    </article>
<?php theme_include('footer'); ?>