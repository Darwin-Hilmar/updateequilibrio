<?php

    require 'includes/app.php';

    use Model\Blog;
    $blogs = Blog::hidd();

    includeTemplate('headerRedesign');
?>

<section id="items-blog">
    <div class="container-fluid">
    <div class="row">
            <?php foreach($blogs as $blog): ?>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <a href="blog.php?id=<?php echo $blog->id; ?>">
                    <div class="blog-cont text-justify">
                        <h4 class="card-titleBlog"><?php echo $blog->titulo; ?></h4>
                        <p class="card-textBlog"><?php echo $blog->tema; ?></p>
                        <small class="card-autorBlog">Autor: <?php echo $blog->autor; ?></small>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

            

<?php
    includeTemplate('footerRedesign');
?>