<?php require 'helper.php' ?>
<?php require 'templates/blog.header.php' ?>

<section id="post">
    <nav>
        <h2>Table of content</h2>
        <ul>
            <li><a href="#">Introdução</a></li>
            <li><a href="#">Subtitulo One</a></li>
            <li><a href="#">Subtitulo One</a></li>
            <li><a href="#">Subtitulo One</a></li>
            <li><a href="#">Subtitulo One</a></li>
            <li><a href="#">Fonte</a></li>
        </ul>
    </nav>
    <article>
        <h1><a href="#">Lorem ipsum dolor sit</a></h1>
        <figure>
            <a href="#">
                <img src="./images/<?php echo image() ?>" alt="" />
            </a>
        </figure>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos vero neque ab, nesciunt pariatur laudantium, quas non a quia nisi quidem necessitatibus molestiae magni eum at aut numquam, aliquid iusto?</p>
        
        <div id="content-creator">
            <div class="video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/ZMLzeQ7QM4M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <ul>
                <li><a href="Cooley">Coooley</a></li>
                <li>
                    (photo)
                    <!--
                    <img width="48" height="48" src="https://yt3.ggpht.com/apdemvuAf64bql3VNRsJ8bfIHUk3jwjom3lTwXSKHUIQI3DdL_RExv7qOp7ON5K-RhFHHtNu=s48-c-k-c0x00ffffff-no-rj" alt="Coooley" />
                    -->
                </li>
                <li><p>What's my Jewel worth in D2R? If you've ever wondered what the most valuable jwls in the game are, we break all the abilities down here for Diablo 2 Resurrected jewelry (HLD and LLD, as well).</p></li>
                <li><a href="#">Youtube channel</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Facebook</a></li>
            </ul>
        </div>    
        
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
    </article>

    <div id="related-content">
        <h3>Related content</h3>
        <ul>
            <?php for ($i = 0; $i < 2; $i++): ?>
            <li>
                <h4><a href="#">Sed ut perspiciatis unde omnis</a></h4>
                <figure>
                    <img src="./images/<?php echo image() ?>" alt="" />
                </figure>
            </li>
            <?php endfor ?>
        </ul>
    </div>

    <form action="post">
        <fieldset>
            <legend>Comment</legend>
            <ul>
                <li><label for="name">Name</label></li>
                <li><input type="text" id="name" name="name" /></li>

                <li><label for="email">E-mail</label></li>
                <li><input type="text" id="email" name="email" /></li>

                <li><label for="comment">Comment</label></li>
                <li><textarea id="comment" name="comment"></textarea></li>
            </ul>
        </fieldset>
    </form>

    <div id="comments">
        <h2>Comments</h2>
        <ul>
            <?php for ($i = 0; $i < 10; $i++): ?>
            <li>
                <a href="#">Lorem ipsum dolor sit</a>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos vero neque ab, nesciunt pariatur laudantium, quas non a quia nisi quidem</p>
            </li>
            <?php endfor ?>
        </ul>
    </div>
</section>

<?php require 'templates/blog.footer.php' ?>