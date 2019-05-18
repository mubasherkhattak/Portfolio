<?php
/**
* Template Name: Home Page
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="UTF-8">
	<?php
    wp_head();
    ?>
	<!--[if lt IE 8]>
	<style type="text/css">
		li a {display:inline-block;}
		li a {display:block;}
	</style>
	<![endif]-->
</head>
<body>

<div id="main-bg">
	<div id="wrapper_sec">
		<div id="masthead">
			<a href="index-2.html"><div class="logo"></div></a>

			<div class="slogan">

			</div>

			<div class="clear"></div>
			<div class="navigation">
				<div id="smoothmenu1" class="ddsmoothmenu">
                    <?php
                    wp_nav_menu(array(
	                    'theme_location' => 'primary',
	                    'menu_id' => 'topmenu',
	                    'container' => " ",
	                    'menu_class' => 'navbar-nav',
                    ));
                    ?>

						<br style="clear: left" />
				</div>

			</div>
		</div>
		<div class="clear"></div>


		<div id="content_sec">

			<div id="top-news">

				<div class="highlights"><?php _e("Highlights","sydney");?></div>
                <?php
                $highlights = new WP_Query(
	                array(
		                'meta_key' => 'highlights',
		                'meta_value' => '1',
		                'post_per_page' => 3
	                )
                );
                ?>
				<div class="latest"> <ul>
						<marquee onmouseout="this.start();" onmouseover="this.stop();" scrollamount="5" behavior="scroll" style="display:inline-block;">
                            <?php
                            while($highlights->have_posts()){
	                            $highlights->the_post();
	                            ?>
                                <a href="<?php the_permalink();?>" style="margin-left: 10px"><font color='#FFFFFF', size='2'><?php the_title();?></font></a>
                                <?php

                            }
                            ?>


						</marquee>
					</ul>

				</div>
			</div>
			<div class="col1">
				<div class="news">
					<div class="featured_news">
						<div class="cont">
                            <?php
                            the_post();
                            the_content();
                            ?>
						</div>
					</div>



				</div>

			</div>
			<div class="col2" style="width:300px">
				<div class="upcoming_events">
					<?php
                    if (is_active_sidebar("sidebar-1")){
                        dynamic_sidebar("sidebar-1");
                    }
                    ?>
				</div>


			</div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
</div>
<div id="footer-big">
	<div id="footer" align="center">
		<small>
            <?php
            if (is_active_sidebar("copyright")){
                dynamic_sidebar("copyright");
            }
            ?>
		</small>
	</div>

</div>

</div>
<?php wp_footer(); ?>
</body>

</html>

