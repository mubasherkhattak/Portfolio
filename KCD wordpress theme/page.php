
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
        <div class="crumb">

        </div>
        <div class="clear"></div>
        <div id="content_sec">
            <div class="col1-new">
                <div class="col2-new">

                    <div class="archives">
                        <h4 class="heading colr">Quick Links</h4>

<?php
                        wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_id' => 'topmenu',
                        'container' => " ",
                        'menu_class' => 'navbar-nav',
                        ));
                        ?></div>
                    <div class="clear"></div>
                </div>
                <div class="shop">
                    <ul class="shoplist">

<?php
the_post();
?>
                        <li>
                            <h6><?php the_title();?></h6>
                            <?php if (has_post_thumbnail()){
                                the_post_thumbnail("small");
                            }?>
                            <div class="shoplinks">
	                            <?php the_content();?>

                            </div>
                        </li>




                    </ul>
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
