
    <h1>entrada simple</h1>
    <?php
    while(have_posts()){
        the_post();
    ?>
        <h2><a href="<?the_permalink()?>"><?=the_title()?></a><h2>
            <p><?=the_excerpt()?></p>
        <?php
    }
    ?>
    
</body>
</html>