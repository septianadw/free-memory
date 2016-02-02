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
		<!--<div class="page-map"><a href=""></a>-->
		   <?php //the_title(
		  /* '<a href="'.esc_url( home_url( '/' ) ).'" rel="home">
		    <img src="'.get_template_directory_uri().'/images/home.png">
		   </a><p>', '</p>' );*/?>
		<!--</div>-->
		<div class="row" id="breadcumb_nav">
	    	<ul id="breadcrumbs" class="breadcrumbs">
	    		<li class="item-home">
	    			<a class="bread-link bread-home" href="http://homestead.app" title="Home"><span class="breadcrums_homepage">Home</span></a>
	    		</li>
	    		<li class="separator separator-home"> </li>
	    		<li class="item-current item-archive"><span class="bread-current bread-archive"><?php the_title('<a href="'.esc_url( home_url( '/' ) ).'" rel="home"></a>' ); ?></span></li>
	    	</ul>
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
	</header><!-- .entry-header -->

	<div class="entry-content">
		<h3>Submit Inquiry</h3>
		<form method="POST" action="" class="forming">
		<font color="red">Market *</font> <em>fields are required</em>
		<div class="form-group"><label for="group"><font color="red">I belong to the following group*</font></label>
		<select id="group" name="group">
		<option value="volvo">Volvo</option>
		<option value="saab">Saab</option>
		<option value="mercedes">Mercedes</option>
		<option value="audi">Audi</option>
		</select></div>
		<div class="form-group"><label for="salutation">Salutation</label>
		<input id="salutation" name="salutation" type="text" /></div>
		<div class="form-group"><label for="group"><font color="red">First Name *</font></label>
		<input id="fname" name="fname" type="text" /></div>
		<div class="form-group"><label for="lname"><font color="red">Last Name *</font></label>
		<input id="lname" name="lname" type="text" /></div>
		<div class="form-group"><label for="email"><font color="red">Email *</font></label>
		<input id="email" name="email" type="email" /></div>
		<div class="form-group"><label for="address">Address</label>
		<input id="address" name="address" type="text" /></div>
		<div class="form-group"><label for="city">City</label>
		<input id="city" name="city" type="text" /></div>
		<div class="ginput_container ginput_container_checkbox"><ul class="gfield_checkbox" id="input_1_12">
			<ul><li class="gchoice_1_12_1">
				<input name="input_12.1" type="checkbox" value="Ich stimme der Datenschutzerklarung zu." id="choice_1_12_1" tabindex="8">
				<label for="choice_1_12_1" id="label_1_12_1">Ich stimme der Datenschutzerklarung zu.</label>
			</li>
			<li class="gchoice_1_12_2">
				<input name="input_12.2" type="checkbox" value="Newsletter Abonnieren" id="choice_1_12_2" tabindex="9">
				<label for="choice_1_12_2" id="label_1_12_2">Newsletter Abonnieren</label>
			</li></ul>
		</div>
		<div><input type="reset" name="cancel"></div><br>
		<div><input type="submit" name="save"></div>
		</form>
	</div><!-- .entry-content -->


</article><!-- #post-## -->

	<footer class="entry-footer">
		<h5> <?php //indosoft_entry_footer(); ?> </h5>
	</footer><!-- .entry-footer -->

