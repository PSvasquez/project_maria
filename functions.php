<?php
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>
<!DOCTYPE HTML>
<html lang = "en">
<head>
  <title>Newtown Senior Center</title>
  <meta charset = "UTF-8" />
</head>
<body>
<div id="left"></div>
<div id="right"></div>
<div id="top"></div>
<div id="bottom"></div> 
 
      </div>
    </div>
  </nav>
</div>
</body>
</html>
