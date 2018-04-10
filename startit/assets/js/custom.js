jQuery(document).ready(function($){


//Custom link 
$(".custom-link").on("click",function(){
<<<<<<< HEAD
    var page='/marketplace';
    window.location.href=page;
});
=======
    var page='/get-premium';
    window.location.href=page;
})
>>>>>>> 4db6aced3ec8746824065e121616ff868ad459b3

 $(".pricing-slider-info").css('visibility', 'hidden');
 $(".pricing-slider-info").height("20");
 
 $("#1510645514990-4").on("click",function(){
     $(".pricing-slider-info").css('visibility', 'visible');
     $(".pricing-slider-info").height("782");
     if ($(window).width() <= 375){ 
       $(".pricing-slider-info").height("1030");
     }
    
 });
 
  $("#1510645514871-0").on("click",function(){
     $(".pricing-slider-info").css('visibility', 'hidden');
     $(".pricing-slider-info").height("20");
  });


  $(".freetab").on("click", function(){
    $unit=$(this).text(); 
    var currency_symbols = {
     'USD': '$', // US Dollar
     'EUR': '€', // Euro
     'CRC': '₡', // Costa Rican Colón
     'GBP': '£', // British Pound Sterling
     'ILS': '₪', // Israeli New Sheqel
     'INR': '₹', // Indian Rupee
     'JPY': '¥', // Japanese Yen
     'KRW': '₩', // South Korean Won
     'NGN': '₦', // Nigerian Naira
     'PHP': '₱', // Philippine Peso
     'PLN': 'zł', // Polish Zloty
     'PYG': '₲', // Paraguayan Guarani
     'THB': '฿', // Thai Baht
     'UAH': '₴', // Ukrainian Hryvnia
     'VND': '₫', // Vietnamese Dong
     'AUD': 'AU$',
     'SGD': 'S$'
   };
    
   $unit=$unit.toUpperCase();
   $currency_name = $unit;
   if(currency_symbols[$currency_name]!==undefined) {
      $unit_code=currency_symbols[$currency_name];
    }
    
    $(".free-pack .qodef-value").empty();
    $(".free-pack .qodef-value").append($unit_code); 
    $("#currency").empty();
    $("#currency").append($unit_code);
    
 });
 
 $(".ecodesign_currency").on("click",function(){
   
   //Change the color of active text 
   var $this = $(this);
   $unit=$(this).text(); 
   $unit=$unit.toUpperCase();
   
   var currency_symbols = {
    'USD': '$', // US Dollar
    'EUR': '€', // Euro
    'CRC': '₡', // Costa Rican Colón
    'GBP': '£', // British Pound Sterling
    'ILS': '₪', // Israeli New Sheqel
    'INR': '₹', // Indian Rupee
    'JPY': '¥', // Japanese Yen
    'KRW': '₩', // South Korean Won
    'NGN': '₦', // Nigerian Naira
    'PHP': '₱', // Philippine Peso
    'PLN': 'zł', // Polish Zloty
    'PYG': '₲', // Paraguayan Guarani
    'THB': '฿', // Thai Baht
    'UAH': '₴', // Ukrainian Hryvnia
    'VND': '₫', // Vietnamese Dong
    'AUD': 'AU$',
    'SGD': 'S$'
  };
  
  $(".ecodesign-price .qodef-pricing-info .qodef-pricing-info-pricing").addClass('premium_tab');

  var tab = $(".pricing-tab .ecodesign-pack .qodef-pricing-info:nth-child(1)").nextAll('.qodef-pricing-info').addClass('premium_tab');
  if(currency_symbols[$unit]!==undefined) {
     $unit_code=currency_symbols[$unit];
     $(".ecodesign-pack .qodef-value").empty();
     $(".ecodesign-pack .qodef-value").append($unit_code);
     $(".currency_html").empty();
     $(".currency_html").append("<sup>"+$unit_code+"</sup>");
     $(".currency_sign").empty();
     $(".currency_sign").append("<sup>"+$unit_code+"<sup>");
     
     if($unit_code=="$"){
          $price_usd="119";
          $(".premium_tab .qodef-price").empty();
          $(".premium_tab .qodef-price").append($price_usd);
          $(".pack_value").empty();
          $(".pack_value").append($price_usd);
          $(".kBoCxo").empty();
          $(".kBoCxo").append($price_usd);          
     }
     else if($unit_code=="£"){
           $price_gbp="89";
           $(".premium_tab .qodef-price").empty();
           $(".premium_tab .qodef-price").append($price_gbp);
           $(".pack_value").empty();
           $(".pack_value").append($price_gbp); 
           $(".kBoCxo").empty();
           $(".kBoCxo").append($price_gbp);    
     }
     else{
       $price_eur="99";
       $(".premium_tab .qodef-price").empty();
       $(".premium_tab .qodef-price").append($price_eur);
       $(".pack_value").empty();
       $(".pack_value").append($price_eur);
       $(".kBoCxo").empty();
       $(".kBoCxo").append($price_eur);   
     }
 
 
   }
 
 })
   
   $(".hdjnVJ").on("click",function(){ 
     $cnt=$('.hdjnVJ').val();
     $cnt=parseInt($cnt);
     
     var currency=$(".currency_sign").text();
     currency=currency.charAt(0)
     if(currency=="$"){
        $pack_price=119;
        $price_per_user=$cnt*$pack_price; 
     }else if(currency=="£"){
        $pack_price=89;
        $price_per_user=$cnt*$pack_price; 
     }
     else{
        $pack_price=99;
        $price_per_user=$cnt*$pack_price; 
     }
     
     $(".kBoCxo").empty();
     $(".kBoCxo").append($price_per_user);
   })
     

	// $(".umbrella-tab-content").hide();
	$(".umbrella-tab-content").css("display","none");
    $(".subscription-plan-types ul li:first-child").addClass("selected");
	$(".subscription-plan-types ul li h3").css("color","#24292e !important");
	$(".subscription-plan-types ul li h4").css("color","#24292e");
	$(".subscription-plan-types ul li p").css({"color":"#24292e !important","font-size":"12px !important"});
	$(".icon_description_text p").css("font-size","12px !important");
   
   $(".subscription-plan-types ul li").on("click", function(){
	   $(".subscription-plan-types ul li.selected").removeClass("selected");
	   $(this).addClass("selected");
		var tab_title = $("li.selected h3").text();
		if(tab_title == "Open"){
      
      $(".icon_list_item .icon_description h3").css({"color":"black" });
      $(".icon_list_item .icon_description_text span").css({"color":"black" });
        
       $(".selected .icon_description h3").css({"color":"white" });
       $(".selected .icon_description_text span").css({"color":"white" });
       
  
			 $(".open-tab").show();
			 $(".premium-tabs").hide();  
       //$(".icon_description h3").css({"color":"black" });
       
		}else{
      
      $(".icon_list_item .icon_description h3").css({"color":"black" });
      $(".icon_list_item .icon_description_text span").css({"color":"black" });
        
      $(".selected .icon_description h3").css({"color":"white" });
      $(".selected .icon_description_text span").css({"color":"white" });
      $(".premium-tabs").show();  
			$(".open-tab").hide();
		}
   });
   
   $(".icon_list_item .icon_description h3").css({"color":"black" });
   $(".icon_list_item .icon_description_text span").css({"color":"black" });

   $(".selected .icon_description h3").css({"color":"white" });
   $(".selected .icon_description_text span").css({"color":"white" });
   $(".premium-tabs").hide();
<<<<<<< HEAD
   
=======

     
>>>>>>> 4db6aced3ec8746824065e121616ff868ad459b3
});