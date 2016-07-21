<?php include('header.php'); ?>
<?php
    if(in_category('blog'))
    {
        include(TEMPLATEPATH.'/single-blog.php');
    }
    else if(cat_is_ancestor_of(2,$cat))
    {
        include(TEMPLATEPATH.'/single-capacitacion.php');
    }
?>