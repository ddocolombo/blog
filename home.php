<?php require 'helper.php' ?>
<?php require 'templates/blog.header.php' ?>

<section id="home">
    <div id="content">
        <ul>
            <?php for ($i = 0; $i < 20; $i++): ?>
            <li>
                <article>
                    <figure>
                        <a href="#">
                            <img src="./storage/<?php echo urlencode(image()) ?>" alt="" />
                        </a>
                        <a href="#" class="badge" style="background: #<?php echo random_color() ?>;">Sports</a>
                    </figure>
                    <!--<time>21 de janeiro de 2022</time>-->
                    <h2><a href="#">Lorem ipsum dolor sit vero neque ab nesciunt pariatur</a></h2>
                    
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos vero neque ab, nesciunt pariatur
                        laudantium, quas non a quia nisi quidem necessitatibus molestiae magni eum at aut numquam,
                        aliquid
                        iusto?
                    </p>
                </article>
            </li>
            <?php endfor ?>
        </ul>
    </div><!-- /#content -->
    <aside><?php require 'partials/sidebar.php' ?></aside>
</section>

<?php require 'templates/blog.footer.php' ?>