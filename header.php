<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      
      <link rel="shortcut icon" href="<?php bloginfo("template_directory"); ?>/_/img/favicon.ica">
      
    <title> 
        <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>

      
      
    </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="responsive.css"/>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,800" rel="stylesheet">  
    <link rel="stylesheet" href="style.css"/><!-- should always be at bottom -->
<?php wp_head(); ?> <!--very important that this is added. tells wordpress this is header. cant be any spaces before it -->
      
  </head>
  
  <body>
      
    <header class="container-fluid herobg">
                <!-- Collapsible nav bar -->
      <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span class="josh"> JOSH </span><span class="orange"> WHITKIN </span></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">HOME</a></li>
                    <!-- word doc said to add -->
                    
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Page 1-1</a></li>
                                <li><a href="#">Page 1-2</a></li>
                                <li><a href="#">Page 1-3</a></li>
                            </ul>
                        </li>
                    <li><a href="#">Page2</a></li>
                    <li><a href="#">Page3</a></li>
                    
                    <!-- end of word doc -->
                    <li><a href="#">PROJECTS</a></li>
                    <li><a href="#">PUBLICATIONS</a></li>
                    <li><a href="#">CV</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </div>
        </div>
      </nav>
            <!-- End Collapsible nav bar -->


        <div class="container">
            <h1>Games Design For the Future</h1>  
        </div>
    </header><!-- no spaces after this cause it will break php>
      
      
  </body>
</html>