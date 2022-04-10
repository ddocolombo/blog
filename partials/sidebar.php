<!-- Recent Posts -->
<section id="trend-content">
    <h3>Trends</h3>
    <ul>
        <?php for ($i = 0; $i < 10; $i++): ?>
        <li>
            <figure>               
                <a href="#" class="badge" style="background: #<?php echo random_color() ?>;">Sports</a>
                <img src="./storage/<?php echo urlencode(image()) ?>" alt="" />
                <h2><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing eli</a></h2>
            </figure>
            
        </li>
        <?php endfor ?>
    </ul>
</section>

<!-- Archive -->
<section id="hot-content">
    <h3>Hot</h3>
    <ul>
        <?php for ($i = 0; $i < 10; $i++): ?>
        <li>
            <h2><a href="#">Eio repellat quisquam deserunt consequuntur tempore earum</a></h2>
        </li>
        <?php endfor ?>
    </ul>
</section>