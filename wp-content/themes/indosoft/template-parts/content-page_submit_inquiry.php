<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package indosoft
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<div class="row" id="breadcumb_nav">
	    	<!-- <ul id="breadcrumbs" class="breadcrumbs">
	    		<li class="item-home">
	    			<a class="bread-link bread-home" href="http://homestead.app" title="Home"><span class="breadcrums_homepage">Home</span></a>
	    		</li>
	    		<li class="separator separator-home"> </li>
	    		<li class="item-current item-archive"><span class="bread-current bread-archive"><?php the_title('<a href="'.esc_url( home_url( '/' ) ).'" rel="home"></a>' ); ?></span></li>
	    	</ul> -->

        	<?php custom_breadcrumbs(); ?>

	    </div>
		<div class="login-inf">
			   <?php
			   global $current_user;
			        get_currentuserinfo();
			   if ( $user_ID ) { ?>
			    <span>Welcome back <?php echo $current_user->user_login ?> | if you are not <?php echo $current_user->user_login ?>, <a href="<?php echo wp_logout_url( $redirect ); ?> ">click here</a></span>
			   <?php } else {   ?>
			   <?php } ?>
		  </div>
		  <div>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<h3>Submit Inquiry</h3>
		<form class="forming" action="" method="POST"><span style="color: red;">Market *</span> <em>fields are required</em>
		<div class="form-group"><label for="group"><span style="color: red;">I belong to the following group*</span></label>
		<select id="group" name="group">
		<option value="volvo">Volvo</option>
		<option value="saab">Saab</option>
		<option value="mercedes">Mercedes</option>
		<option value="audi">Audi</option>
		</select></div>
		<div class="form-group"><label for="salutation">Salutation</label>
		<input id="salutation" name="salutation" type="text" /></div>
		<div class="form-group"><label for="group"><span style="color: red;">First Name *</span></label>
		<input id="fname" name="fname" type="text" /></div>
		<div class="form-group"><label for="lname"><span style="color: red;">Last Name *</span></label>
		<input id="lname" name="lname" type="text" /></div>
		<div class="form-group"><label for="email"><span style="color: red;">Email *</span></label>
		<input id="email" name="email" type="email" /></div>
		<div class="form-group"><label for="address">Address</label>
		<input id="address" name="address" type="text" /></div>
		<div class="form-group"><label for="city">City</label>
		<input id="city" name="city" type="text" /></div>
		<div class="form-group"><input id="" tabindex="8" name="" type="checkbox" value="Ich stimme der Datenschutzerklarung zu." /><span style="line-height: 1.5;">Ich stimme der Datenschutzerklarung zu.</span></div>
		<div class="form-group"><input id="" tabindex="8" name="" type="checkbox" value="Newsletter Abonnieren" /><span style="line-height: 1.5;">Newsletter Abonnieren</span></div>
		<div><input name="cancel" type="reset" /></div>
		&nbsp;
		<div><input name="save" type="submit" /></div>
		</form>
	</div><!-- .entry-content -->


</article><!-- #post-## -->

	<footer class="entry-footer">
		<h5> <?php //indosoft_entry_footer(); ?> </h5>
	</footer><!-- .entry-footer -->

