<?php

/**

 * The Header template for our theme

 *

 * Displays all of the <head> section and everything up till <div id="main">

 *

 * @package WordPress

 * @subpackage Twenty_Twelve

 * @since Twenty Twelve 1.0

 */

?><!DOCTYPE html>

<!--[if IE 7]>

<html class="ie ie7" <?php language_attributes(); ?>>

<![endif]-->

<!--[if IE 8]>

<html class="ie ie8" <?php language_attributes(); ?>>

<![endif]-->

<!--[if !(IE 7) | !(IE 8)  ]><!-->

<html <?php language_attributes(); ?>>

<!--<![endif]-->

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<meta name="viewport" content="width=device-width" />

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>

<!--[if lt IE 9]>

<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>

<![endif]-->

<?php wp_head(); ?>

</head>



<body <?php body_class(); ?>>

	<div id="massive_headwrap">

		<div id="full_width_wrap">

		<header id="masthead" class="site-header" role="banner">

		<div class="group">

					<div id="logo" style="float:left;"><a href="http://www.informatics.uci.edu/" title="Informatics @ the University of California, Irvine" rel="home"><img alt="UC Irvine Department of Informatics" src="https://www.informatics.uci.edu/wp-content/informatics/themes/informatics/i/informatics-logo2x.png"></a>

					</div>

					

					<!-- Display Very Top Menu -->

					<div class="align:right;">

						<div class="menu-very-top-container"><ul id="menu-very-top" class="menu"><li id="menu-item-297" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-297"><a href="http://www.informatics.uci.edu/browse-informatics/people/">People</a></li>

<li id="menu-item-296" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-296"><a href="http://www.informatics.uci.edu/browse-informatics/contact/">Contact</a></li>

<li id="menu-item-295" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-295"><a href="http://www.informatics.uci.edu/browse-informatics/site-map/">Site Map</a></li>

<li id="menu-item-292" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-292"><a href="http://www.informatics.uci.edu/browse-informatics/news/">News</a></li>

</ul></div>		

					</div>

					<div id="sitesearch">

						<form role="search" method="get" id="searchform" action="http://informatics.ics.uci.edu/" >

    <div><label class="screen-reader-text" for="s">Search for:</label>

    <input type="text" placeholder="Search this site..." value="" name="s" id="s" />

    <input type="submit" id="searchsubmit" value="Search" />

    </div>

    </form>					</div>





				</div>



		<nav id="site-navigation" class="main-navigation" role="navigation">

			<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>

			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>

			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>

		</nav><!-- #site-navigation -->



		<?php if ( get_header_image() ) : ?>

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>

		<?php endif; ?>

	</header><!-- #masthead -->

		</div>

		<div class="one_hunnit">	

			<nav id="site-navigation" class="main-navigation" role="navigation">

				<h3 class="menu-toggle">Menu</h3>

				<a class="assistive-text" href="#content" title="Skip to content">Skip to content</a>

				<div class="menu-main-navigation-container"><ul id="menu-main-navigation" class="nav-menu"><li id="menu-item-500" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children max-usc-menu-parent-item menu-item-500"><a href="#">Explore</a>

<ul class="sub-menu">

<div class='mick group'>

	<li id="menu-item-198" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-198"><a href="http://www.informatics.uci.edu/explore/chairs-welcome/">Chair&#8217;s Welcome</a></li>

	<li id="menu-item-202" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-202"><a href="http://www.informatics.uci.edu/explore/faculty-profiles/">Faculty Profiles</a></li>

	<li id="menu-item-197" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-197"><a href="http://informatics.ics.uci.edu/explore/books-we-read/">Books We Read</a></li>

	<li id="menu-item-203" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-203"><a href="http://informatics.ics.uci.edu/explore/history-of-the-department/">History of the Department</a></li>

	<li id="menu-item-199" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-199"><a href="http://informatics.ics.uci.edu/explore/department-seminars/">Department Seminars</a></li>

	<li id="menu-item-195" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-195"><a href="http://informatics.ics.uci.edu/explore/blogs-we-author/">Blogs We Author</a></li>

	<li id="menu-item-200" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-200"><a href="http://informatics.ics.uci.edu/explore/department-vision/">Department Vision</a></li>

	<li id="menu-item-196" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-196"><a href="http://informatics.ics.uci.edu/explore/books-we-have-written/">Books We Have Written</a></li>

	<li id="menu-item-262" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-262"><a href="http://informatics.ics.uci.edu/explore/visiting-the-department/">Visiting the Department</a></li>

	<li id="menu-item-201" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-201"><a href="http://informatics.ics.uci.edu/explore/facts-figures/">Facts &#038; Figures</a></li>

</div>

</ul>

</li>

<li id="menu-item-501" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children max-usc-menu-parent-item menu-item-501"><a href="#">Graduate Degrees</a>

<ul class="sub-menu">

<div class='mick group'>

	<li id="menu-item-209" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-209"><a href="http://informatics.ics.uci.edu/grad/phd-informatics/">PhD Informatics</a></li>

	<li id="menu-item-208" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-208"><a href="http://informatics.ics.uci.edu/grad/ms-software-engineering/">MS Software Engineering</a></li>

	<li id="menu-item-245" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-245"><a href="http://informatics.ics.uci.edu/grad/student-profiles/">Student Profiles</a></li>

	<li id="menu-item-207" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-207"><a href="http://informatics.ics.uci.edu/grad/ms-informatics/">MS Informatics</a></li>

	<li id="menu-item-206" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-206"><a href="http://informatics.ics.uci.edu/grad/courses/">Courses</a></li>

	<li id="menu-item-259" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-259"><a href="http://informatics.ics.uci.edu/grad/student-groups/">Student Groups</a></li>

	<li id="menu-item-210" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-210"><a href="http://informatics.ics.uci.edu/grad/phd-software-engineering/">PhD Software Engineering</a></li>

	<li id="menu-item-211" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-211"><a href="http://informatics.ics.uci.edu/grad/policies/">Policies</a></li>

	<li id="menu-item-246" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-246"><a href="http://informatics.ics.uci.edu/grad/upcoming-course-schedule/">Upcoming Course Schedule</a></li>

</div>

</ul>

</li>

<li id="menu-item-502" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children max-usc-menu-parent-item menu-item-502"><a href="#">Undergraduate Degrees</a>

<ul class="sub-menu">

<div class='mick group'>

	<li id="menu-item-228" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-228"><a href="http://informatics.ics.uci.edu/undergrad/bs-informatics/">BS Informatics</a></li>

	<li id="menu-item-229" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-229"><a href="http://informatics.ics.uci.edu/undergrad/bs-information-computer-science/">BS Information &#038; Computer Science</a></li>

	<li id="menu-item-243" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-243"><a href="http://informatics.ics.uci.edu/undergrad/policies/">Policies</a></li>

	<li id="menu-item-226" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-226"><a href="http://informatics.ics.uci.edu/undergrad/bs-business-information-management/">BS Business Information Management</a></li>

	<li id="menu-item-232" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-232"><a href="http://www.informatics.uci.edu/undergrad/special-opportunities/">Special Opportunities</a></li>

	<li id="menu-item-260" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-260"><a href="http://informatics.ics.uci.edu/undergrad/student-profiles/">Student Profiles</a></li>

	<li id="menu-item-227" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-227"><a href="http://informatics.ics.uci.edu/undergrad/bs-computer-game-science/">BS Computer Game Science</a></li>

	<li id="menu-item-233" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-233"><a href="http://informatics.ics.uci.edu/undergrad/minors/">Minors</a></li>

	<li id="menu-item-244" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-244"><a href="http://informatics.ics.uci.edu/undergrad/student-groups/">Student Groups</a></li>

	<li id="menu-item-230" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-230"><a href="http://informatics.ics.uci.edu/undergrad/bs-software-engineering/">BS Software Engineering</a></li>

	<li id="menu-item-231" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-231"><a href="http://informatics.ics.uci.edu/undergrad/courses/">Courses</a></li>

	<li id="menu-item-261" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-261"><a href="http://informatics.ics.uci.edu/undergrad/upcoming-course-schedule/">Upcoming Course Schedule</a></li>

</div>

</ul>

</li>

<li id="menu-item-503" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children max-usc-menu-parent-item menu-item-503"><a href="#">Admissions</a>

<ul class="sub-menu">

<div class='mick group'>

<li id="menu-item-186" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-186"><a href="http://informatics.ics.uci.edu/admissions/graduate-application-process/">Graduate Application Process</a></li>
	
	<li id="menu-item-185" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-185"><a href="http://informatics.ics.uci.edu/admissions/coming-from-abroad/">Coming From Abroad</a></li>

	<li id="menu-item-187" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-187"><a href="http://informatics.ics.uci.edu/admissions/housing/">Housing</a></li>
    
<li id="menu-item-258" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-258"><a href="http://informatics.ics.uci.edu/admissions/undergraduate-application-process/">Undergraduate Application Process</a></li>


	<li id="menu-item-257" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-257"><a href="http://informatics.ics.uci.edu/admissions/student-life/">Student Life</a></li>


</div>

</ul>

</li>

<li id="menu-item-504" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children max-usc-menu-parent-item menu-item-504"><a href="#">Research</a>

<ul class="sub-menu">

<div class='mick group'>

	<li id="menu-item-219" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-219"><a href="http://informatics.ics.uci.edu/research/labs-centers/">Labs &#038; Centers</a></li>

<li id="menu-item-408" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-408"><a href="http://informatics.ics.uci.edu/research/phd-research/">PhD Research</a></li>


	<li id="menu-item-235" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-235"><a href="http://informatics.ics.uci.edu/research/undergraduate-research/">Undergraduate Research</a></li>

	<li id="menu-item-217" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-217"><a href="http://informatics.ics.uci.edu/research/areas-of-expertise/">Areas of Expertise</a></li>
    
    <li id="menu-item-221" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-221"><a href="http://informatics.ics.uci.edu/research/past-dissertations/">Past Dissertations</a></li>
    
    <li id="menu-item-218" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-218"><a href="http://informatics.ics.uci.edu/research/gifts-grants/">Gifts &#038; Grants</a></li>
    
    <li id="menu-item-219" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-220"><a href="http://www.informatics.uci.edu/research/example-research-projects/"> Example Projects</a></li>

	<li id="menu-item-220" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-220"><a href="http://informatics.ics.uci.edu/research/masters-research/">Masters Research</a></li>



	

</div>

</ul>

</li>

<li id="menu-item-505" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children max-usc-menu-parent-item menu-item-505"><a href="#">Impact</a>

<ul class="sub-menu">

<div class='mick group'>


	<li id="menu-item-253" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-253"><a href="http://informatics.ics.uci.edu/impact/research-that-matters/">Research That Matters</a></li>

	
<li id="menu-item-215" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-215"><a href="http://www.informatics.uci.edu/impact/undergraduate-alumni-spotlights/">Undergraduate Alumni Spotlights</a></li>
	

	<li id="menu-item-215" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-215"><a href="http://informatics.ics.uci.edu/impact/outreach/">Outreach</a></li>
    
    <li id="menu-item-215" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-215"><a href="http://www.informatics.uci.edu/impact/graduate-alumni-spotlights/">Graduate Alumni Spotlights</a></li>
    
    <li id="menu-item-215" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-215"><a href="http://www.informatics.uci.edu/impact/community-engagement/">Community Engagement</a></li>


</div>

</ul>

</li>

<li id="menu-item-506" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children max-usc-menu-parent-item menu-item-506"><a href="#">Support</a>

<ul class="sub-menu">

<div class='mick group'>

	<li id="menu-item-224" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-224"><a href="http://informatics.ics.uci.edu/support/champion-research/">Champion Research</a></li>

	<li id="menu-item-223" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-223"><a href="http://www.informatics.uci.edu/support/become-a-corporate-partner/">Become a Corporate Partner</a></li>
    
    <li id="menu-item-240" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-240"><a href="http://informatics.ics.uci.edu/support/share-your-talent/">Share Your Talent</a></li>
    
    <li id="menu-item-241" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-241"><a href="http://informatics.ics.uci.edu/support/support-students/">Support Students</a></li>


<li id="menu-item-238" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-238"><a href="http://informatics.ics.uci.edu/support/provide-projects/">Provide Projects</a></li>

<li id="menu-item-239" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-239"><a href="http://informatics.ics.uci.edu/support/set-future-agenda/">Set Future Agenda</a></li>


	<li id="menu-item-225" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-225"><a href="http://informatics.ics.uci.edu/support/collaborate-on-research/">Collaborate on Research</a></li>

	
    <li id="menu-item-223" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-223"><a href="http://informatics.ics.uci.edu/support/become-a-mentor/">Become a Mentor</a></li>
    
    
    <li id="menu-item-223" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-223"><a href="http://www.informatics.uci.edu/support/collaborate-on-research/">Post Jobs</a></li>

</div>

</ul>

</li>

</ul></div>

				<!-- MOBILE MENU -->

				<div id="mobile_menu" class="container demo-4">

				<div id="dl-menu" class="dl-menuwrapper"><button class="dl-trigger">Menu</button><ul class="dl-menu"><li id="menu-item-519"><a href="#">Explore</a>

<ul class="dl-submenu">

	<li id="menu-item-520"><a href="http://informatics.ics.uci.edu/explore/chairs-welcome/">Chair&#8217;s Welcome</a></li>

	<li id="menu-item-521"><a href="http://informatics.ics.uci.edu/explore/history-of-the-department/">History of the Department</a></li>

	<li id="menu-item-522"><a href="http://informatics.ics.uci.edu/explore/department-vision/">Department Vision</a></li>

	<li id="menu-item-523"><a href="http://informatics.ics.uci.edu/explore/facts-figures/">Facts &#038; Figures</a></li>

	<li id="menu-item-524"><a href="http://informatics.ics.uci.edu/explore/faculty-profiles/">Faculty Profiles</a></li>

	<li id="menu-item-525"><a href="http://informatics.ics.uci.edu/explore/department-seminars/">Department Seminars</a></li>

	<li id="menu-item-526"><a href="http://informatics.ics.uci.edu/explore/books-we-have-written/">Books We Have Written</a></li>

	<li id="menu-item-527"><a href="http://informatics.ics.uci.edu/explore/books-we-read/">Books We Read</a></li>

	<li id="menu-item-528"><a href="http://informatics.ics.uci.edu/explore/blogs-we-author/">Blogs We Author</a></li>

	<li id="menu-item-529"><a href="http://informatics.ics.uci.edu/explore/visiting-the-department/">Visiting the Department</a></li>

</ul>

</li>

<li id="menu-item-530"><a href="#">Graduate Degrees</a>

<ul class="dl-submenu">

	<li id="menu-item-531"><a href="http://informatics.ics.uci.edu/grad/phd-informatics/">PhD Informatics</a></li>

	<li id="menu-item-532"><a href="http://informatics.ics.uci.edu/grad/ms-informatics/">MS Informatics</a></li>

	<li id="menu-item-533"><a href="http://informatics.ics.uci.edu/grad/phd-software-engineering/">PhD Software Engineering</a></li>

	<li id="menu-item-534"><a href="http://informatics.ics.uci.edu/grad/ms-software-engineering/">MS Software Engineering</a></li>

	<li id="menu-item-535"><a href="http://informatics.ics.uci.edu/grad/courses/">Courses</a></li>

	<li id="menu-item-536"><a href="http://informatics.ics.uci.edu/grad/policies/">Policies</a></li>

	<li id="menu-item-537"><a href="http://informatics.ics.uci.edu/grad/student-profiles/">Student Profiles</a></li>

	<li id="menu-item-538"><a href="http://informatics.ics.uci.edu/grad/student-groups/">Student Groups</a></li>

	<li id="menu-item-539"><a href="http://informatics.ics.uci.edu/grad/upcoming-course-schedule/">Upcoming Course Schedule</a></li>

</ul>

</li>

<li id="menu-item-540"><a href="#">Undergraduate Degrees</a>

<ul class="dl-submenu">

	<li id="menu-item-541"><a href="http://informatics.ics.uci.edu/undergrad/bs-informatics/">BS Informatics</a></li>

	<li id="menu-item-542"><a href="http://informatics.ics.uci.edu/undergrad/bs-business-information-management/">BS Business Information Management</a></li>

	<li id="menu-item-543"><a href="http://informatics.ics.uci.edu/undergrad/bs-computer-game-science/">BS Computer Game Science</a></li>

	<li id="menu-item-544"><a href="http://informatics.ics.uci.edu/undergrad/bs-software-engineering/">BS Software Engineering</a></li>

	<li id="menu-item-545"><a href="http://informatics.ics.uci.edu/undergrad/bs-information-computer-science/">BS Information &#038; Computer Science</a></li>

	<li id="menu-item-546"><a href="http://informatics.ics.uci.edu/undergrad/major-advisor/">Major Advisor</a></li>

	<li id="menu-item-547"><a href="http://informatics.ics.uci.edu/undergrad/minors/">Minors</a></li>

	<li id="menu-item-548"><a href="http://informatics.ics.uci.edu/undergrad/courses/">Courses</a></li>

	<li id="menu-item-549"><a href="http://informatics.ics.uci.edu/undergrad/policies/">Policies</a></li>

	<li id="menu-item-550"><a href="http://informatics.ics.uci.edu/undergrad/student-profiles/">Student Profiles</a></li>

	<li id="menu-item-551"><a href="http://informatics.ics.uci.edu/undergrad/student-groups/">Student Groups</a></li>

	<li id="menu-item-552"><a href="http://informatics.ics.uci.edu/undergrad/upcoming-course-schedule/">Upcoming Course Schedule</a></li>

</ul>

</li>

<li id="menu-item-553"><a href="#">Admissions</a>

<ul class="dl-submenu">

	<li id="menu-item-554"><a href="http://informatics.ics.uci.edu/admissions/graduate-application-process/">Graduate Application Process</a></li>
	
	<li id="menu-item-555"><a href="http://informatics.ics.uci.edu/admissions/coming-from-abroad/">Coming From Abroad</a></li>

	<li id="menu-item-556"><a href="http://informatics.ics.uci.edu/admissions/housing/">Housing</a></li>
    
	<li id="menu-item-557"><a href="http://informatics.ics.uci.edu/admissions/undergraduate-application-process/">Undergraduate Application Process</a></li>
	<li id="menu-item-558"><a href="http://informatics.ics.uci.edu/admissions/student-life/">Student Life</a></li>


</ul>

</li>

<li id="menu-item-560"><a href="#">Research</a>

<ul class="dl-submenu">

<li id="menu-item-219"><a href="http://informatics.ics.uci.edu/research/labs-centers/">Labs &#038; Centers</a></li>

<li id="menu-item-408"><a href="http://informatics.ics.uci.edu/research/phd-research/">PhD Research</a></li>


	<li id="menu-item-566"><a href="http://informatics.ics.uci.edu/research/undergraduate-research/">Undergraduate Research</a></li>

	<li id="menu-item-562"><a href="http://informatics.ics.uci.edu/research/areas-of-expertise/">Areas of Expertise</a></li>
    
    <li id="menu-item-564"><a href="http://informatics.ics.uci.edu/research/past-dissertations/">Past Dissertations</a></li>
    
    <li id="menu-item-567"><a href="http://informatics.ics.uci.edu/research/gifts-grants/">Gifts &#038; Grants</a></li>
    
    <li id="menu-item-566"><a href="http://www.informatics.uci.edu/research/example-research-projects/"> Example Projects</a></li>

	<li id="menu-item-565"><a href="http://informatics.ics.uci.edu/research/masters-research/">Masters Research</a></li>

</ul>

</li>

<li id="menu-item-568"><a href="#">Impact</a>

<ul class="dl-submenu">


	<li id="menu-item-572"><a href="http://informatics.ics.uci.edu/impact/research-that-matters/">Research That Matters</a></li>

	
	<li id="menu-item-570"><a href="http://www.informatics.uci.edu/impact/undergraduate-alumni-spotlights/">Undergraduate Alumni Spotlights</a></li>
	

	<li id="menu-item-575"><a href="http://informatics.ics.uci.edu/impact/outreach/">Outreach</a></li>
    
    <li id="menu-item-570"><a href="http://www.informatics.uci.edu/impact/graduate-alumni-spotlights/">Graduate Alumni Spotlights</a></li>
    
    <li id="menu-item-574"><a href="http://www.informatics.uci.edu/impact/community-engagement/">Community Engagement</a></li>
    

</ul>

</li>

<li id="menu-item-576"><a href="#">Support</a>

<ul class="dl-submenu">

<li id="menu-item-577" ><a href="http://informatics.ics.uci.edu/support/champion-research/">Champion Research</a></li>

	<li id="menu-item-577"><a href="http://www.informatics.uci.edu/support/become-a-corporate-partner/">Become a Corporate Partner</a></li>
    
    <li id="menu-item-577"><a href="http://informatics.ics.uci.edu/support/share-your-talent/">Share Your Talent</a></li>
    
    <li id="menu-item-578"><a href="http://informatics.ics.uci.edu/support/support-students/">Support Students</a></li>


	<li id="menu-item-579"><a href="http://informatics.ics.uci.edu/support/provide-projects/">Provide Projects</a></li>

	<li id="menu-item-580"><a href="http://informatics.ics.uci.edu/support/set-future-agenda/">Set Future Agenda</a></li>


	<li id="menu-item-581"><a href="http://informatics.ics.uci.edu/support/collaborate-on-research/">Collaborate on Research</a></li>

	
    <li id="menu-item-582"><a href="http://informatics.ics.uci.edu/support/become-a-mentor/">Become a Mentor</a></li>
    
    
    <li id="menu-item-583"><a href="http://www.informatics.uci.edu/support/collaborate-on-research/">Post Jobs</a></li>

</ul>

</li>

</ul></div>				 </div><!-- .container -->

				<!-- /MOBILE MENU -->



			</nav><!-- #site-navigation -->

		</div><!-- .one_hunnit -->		

	</div><!-- #massive_headwrap -->

	

	

<div id="page" class="hfeed site">

	



	<div id="main" class="wrapper">

	



	
