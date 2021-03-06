<?php $directory_uri = get_template_directory_uri(); ?>

<?php get_header(); ?>

<!-- Home -->
<div class="wrapper style1 first">
    <article class="container" id="top">
        <div class="row">
            <div class="4u">
                <span class="image fit"><img src="<?php echo $directory_uri; ?>/images/pic00.jpg" alt="" /></span>
            </div>
            <div class="8u">
                <header>
                    <h1>Hi. I'm <strong>Jane Doe</strong>.</h1>
                </header>
                <p>And this is <strong>Miniport</strong>, a free, fully responsive HTML5 site template designed by <a href="http://n33.co">AJ</a> for <a href="http://html5up.net">HTML5 UP</a> &amp; released under the <a href="http://html5up.net/license">CCA license</a>.</p>
                <a href="#work" class="button big scrolly">Learn about what I do</a>
            </div>
        </div>
    </article>
</div>
<!-- /Home -->

<!-- Work -->
<div class="wrapper style2">
    <article id="work">
        <header>
            <h2>Here's all the stuff I do.</h2>
            <p>Odio turpis amet sed consequat eget posuere consequat.</p>
        </header>
        <div class="container">
            <div class="row">
                <?php
                    $post_manager = new PostManager();
                    $what_i_do = $post_manager->getPosts('what_i_do');
                ?>

                <?php foreach($what_i_do as $what_i_do_item): ?>
                    <div class="4u">
                        <section class="box style1">
                            <span class="icon featured <?php echo $what_i_do_item->element_type; ?>"></span>
                            <h3><?php echo $what_i_do_item->post_title; ?></h3>
                            <p><?php echo $what_i_do_item->description; ?></p>
                        </section>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <footer>
            <p>Lorem ipsum dolor sit sapien vestibulum ipsum primis?</p>
            <a href="#portfolio" class="button big scrolly">See some of my recent work</a>
        </footer>
    </article>
</div>
<!-- /Work -->

<!-- Portfolio -->
<div class="wrapper style3">
    <article id="portfolio">
        <header>
            <h2>Here’s some stuff I made recently.</h2>
            <p>Proin odio consequat  sapien vestibulum consequat lorem dolore feugiat lorem ipsum dolore.</p>
        </header>
        <div class="container">
            <div class="row">
                <div class="4u">
                    <article class="box style2">
                        <a href="#" class="image featured"><img src="<?php echo $directory_uri; ?>/images/pic01.jpg" alt="" /></a>
                        <h3><a href="#">Magna feugiat</a></h3>
                        <p>Ornare nulla proin odio consequat.</p>
                    </article>
                </div>
                <div class="4u">
                    <article class="box style2">
                        <a href="#" class="image featured"><img src="<?php echo $directory_uri; ?>/images/pic02.jpg" alt="" /></a>
                        <h3><a href="#">Veroeros primis</a></h3>
                        <p>Ornare nulla proin odio consequat.</p>
                    </article>
                </div>
                <div class="4u">
                    <article class="box style2">
                        <a href="#" class="image featured"><img src="<?php echo $directory_uri; ?>/images/pic03.jpg" alt="" /></a>
                        <h3><a href="#">Lorem ipsum</a></h3>
                        <p>Ornare nulla proin odio consequat.</p>
                    </article>
                </div>
            </div>
            <div class="row">
                <div class="4u">
                    <article class="box style2">
                        <a href="#" class="image featured"><img src="<?php echo $directory_uri; ?>/images/pic04.jpg" alt="" /></a>
                        <h3><a href="#">Tempus dolore</a></h3>
                        <p>Ornare nulla proin odio consequat.</p>
                    </article>
                </div>
                <div class="4u">
                    <article class="box style2">
                        <a href="#" class="image featured"><img src="<?php echo $directory_uri; ?>/images/pic05.jpg" alt="" /></a>
                        <h3><a href="#">Feugiat aliquam</a></h3>
                        <p>Ornare nulla proin odio consequat.</p>
                    </article>
                </div>
                <div class="4u">
                    <article class="box style2">
                        <a href="#" class="image featured"><img src="<?php echo $directory_uri; ?>/images/pic06.jpg" alt="" /></a>
                        <h3><a href="#">Sed amet ornare</a></h3>
                        <p>Ornare nulla proin odio consequat.</p>
                    </article>
                </div>
            </div>
        </div>
        <footer>
            <p>Lorem ipsum dolor sit sapien vestibulum ipsum primis?</p>
            <a href="#contact" class="button big scrolly">Get in touch with me</a>
        </footer>
    </article>
</div>
<!-- /Portfolio -->

<!-- Contact -->
<div class="wrapper style4">
    <article id="contact" class="container 75%">
        <header>
            <h2>Have me make stuff for you.</h2>
            <p>Ornare nulla proin odio consequat sapien vestibulum ipsum sed lorem.</p>
        </header>
        <div>
            <div class="row">
                <div class="12u">
                    <form method="post" id="feedback-form" action="#">
                        <div>
                            <div class="row">
                                <div class="6u">
                                    <input type="text" name="name" id="name" placeholder="Name" />
                                </div>
                                <div class="6u">
                                    <input type="text" name="email" id="email" placeholder="Email" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="12u">
                                    <input type="text" name="subject" id="subject" placeholder="Subject" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="12u">
                                    <textarea name="message" id="message" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="row 200%">
                                <div class="12u">
                                    <ul class="actions">
                                        <li><input type="submit" id="send-message" value="Send Message" /></li>
                                        <li><input type="reset" value="Clear Form" class="alt" /></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Contact -->

            <?php get_footer(); ?>