<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php qode_startit_wp_title(); ?>
    <?php
    /**
     * @see qode_startit_header_meta() - hooked with 10
     * @see qode_user_scalable - hooked with 10
     */
    ?>
	<?php do_action('qode_startit_header_meta'); ?>

	<?php wp_head(); ?>
	<?php if(is_front_page()){ ?>
		<link  rel="dns-prefetch"href="//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700italic,700,900,900italic" type="text/css">
		<link rel="dns-prefetch"  href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/wp-content/themes/startit/assets/css/awesomplete.css';  ?>"  type="text/css"/>
		<script   src="//code.jquery.com/jquery-1.12.4.min.js"></script>
		<script   src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script> 
		<script   src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/wp-content/themes/startit/assets/js/search-script.js'; ?>"></script>
		<!--<script   src="<?php //echo 'http://'.$_SERVER['SERVER_NAME'].'/wp-content/themes/startit/assets/js/awesomplete.js'; ?>"></script>-->
		<script   src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/wp-content/themes/startit/assets/js/slick.min.js'; ?>"></script>
  <?php } ?>
  <!-- Global Site Tag (gtag.js) - Google Analytics -->
  <script rel="dns-prefetch" async src="https://www.googletagmanager.com/gtag/js?id=UA-76984622-1"></script>
  <script src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/wp-content/themes/startit/assets/js/custom.js'; ?>"></script>
  <link href="//static2cdn.hubspot.com/hubspot.com/static-1.4334/_hsg-ss/build/icons/hsg-icons.css" rel="stylesheet">
  <link href="//static2cdn.hubspot.com/hubspot.com/static-1.4334/_hsg-ss/build/css/hsg.css" rel="stylesheet">
  <link href="/wp-content/themes/startit/assets/css/makersite.css" rel="stylesheet">

<!-- Google Analytics + Optimize -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-76984622-1', 'auto');
  ga('require', 'GTM-K5Z2LS2');
  ga('send', 'pageview');
</script>

<!-- Google Tag Manager -->
<script>
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push( {'gtm.start': new Date().getTime(),event:'gtm.js'} );var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src= 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-5M2G9QN');
</script>
	
<!-- Hotjar Tracking Code for staging.makersite.net -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:741719,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>

<style>.async-hide { opacity: 0 !important} </style>

<script>(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
(a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
})(window,document.documentElement,'async-hide','dataLayer',4000,
{'GTM-K5Z2LS2':true});</script>
	
</head>

<body <?php body_class(); ?>>
<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5M2G9QN" height="0" width="0" style="display:none;visibility:hidden"></iframe>
<?php qode_startit_get_side_area(); ?>

<div class="qodef-wrapper">
    <div class="qodef-wrapper-inner">
        <?php qode_startit_get_header(); ?>

        <?php if(qode_startit_options()->getOptionValue('show_back_button') == "yes") { ?>
            <a id='qodef-back-to-top'  href='#'>
                <span class="qodef-icon-stack">
                     <?php
                        qode_startit_icon_collections()->getBackToTopIcon('font_awesome');
                    ?>
                </span>
            </a>
        <?php } ?>
        <?php qode_startit_get_full_screen_menu(); ?>

        <div class="qodef-content" <?php qode_startit_content_elem_style_attr(); ?>>
 <div class="qodef-content-inner">
	 
   
<!--Show the intercom only on contact page and Subscribe page-->  

 <?php 
 $page_title = $wp_query->post->post_title;
 //echo $page_title;
   
 if($page_title=="Subscription" || $page_title =="Contact"){
  
 }
 else{
   //remove_action( 'wp_footer', 'add_intercom_snippet' );
   //add_action('wp_footer','my_custom_logic_function');
 }
 
  ?>
   
   