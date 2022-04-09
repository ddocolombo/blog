<?php require 'helper.php' ?>
<?php require 'templates/blog.header.php' ?>

<section id="home">
    <ul>
        <?php for ($i = 0; $i < 10; $i++): ?>
        <li>
            <article>
                <h1><a href="#">Lorem ipsum dolor sit</a></h1>
                <figure>
                    <a href="#">
                        <img src="./images/<?php echo image() ?>" alt="" />
                    </a>
                </figure>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos vero neque ab, nesciunt pariatur
                    laudantium, quas non a quia nisi quidem necessitatibus molestiae magni eum at aut numquam, aliquid
                    iusto?
                </p>
            </article>
        </li>
        <?php endfor ?>
    </ul>
</section>

<?php require 'templates/blog.footer.php' ?>