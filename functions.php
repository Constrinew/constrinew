<?php
add_action( 'wp_enqueue_scripts', 'constrinew_enqueue_styles' );

function constrinew_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_footer', 'constrinew_sales_iq' );

function constrinew_sales_iq() { ?>
<script type="text/javascript">
var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || 
{widgetcode:"9d7f62c56e44f94fbece887ed87746eb8d3d9ae24fa29a73c4028e54d1fb88ba1ae8f1fad19a9cd711e6a573d78b8bf3", values:{},ready:function(){}};
var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;
s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);d.write("<div id='zsiqwidget'></div>");
</script>
<?php
}


