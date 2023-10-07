<?php

    require 'includes/app.php';

    use Model\Blog;
    $id = validarORedireccionar('/');

    // Obtener los datos del blog
    $blog = Blog::find($id);

    includeTemplate('headerRedesign');
?>

<section id="individual-blog">
    <div class="container-fluid">
        <div class="title-blog">
            <p><?php echo $blog->titulo; ?></p>
            <h6><?php echo $blog->autor; ?></h6>
        </div>
        <div class="text-blog">
            <p><?php echo $blog->descripcion; ?></p>
        </div>
        <div class="blog-image">
            <img src="/assets/redesign/programa1.png"  alt="blog equilibrio">
            <!-- /imagenes/<?php 
            // echo $blog->imagen; 
            ?> -->
        </div>
    </div>

<?php
    includeTemplate('footerRedesign');
?>