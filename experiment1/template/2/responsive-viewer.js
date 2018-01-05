

jQuery(document).ready(function(){

  /* ----------------------------------------------------------- */
  /*  1. VIEWER HEADER TOGGLE
  /* ----------------------------------------------------------- */  

    jQuery('#viewr-toggle-btn').click(function(e){
      e.preventDefault();
      jQuery('#aa-viewer-header').toggleClass('header-hide');      
      jQuery(this).find(".fa").toggleClass("fa-close fa-plus");
      jQuery('#content').toggleClass('content_top');
      jQuery('#aa-related-templates').toggleClass('aa-related-template-top');
      jQuery(this).toggleClass("viewr-toggle-btn2");
    });   


  /* ----------------------------------------------------------- */
  /*  2. RELATED TEMPLATE SLIDE 
  /* ----------------------------------------------------------- */


    jQuery('#aa-category-btn').click(function(e){
      e.preventDefault();
      jQuery('#aa-related-templates').slideToggle( "slow" ); 

      // SLIC SLIDER CALL      
      jQuery('.aa-related-template-nav').slick({
        dots: false,
        infinite: true,
        arrows: true,
        speed: 1000,
        autoplay: false, 
        autoplaySpeed: 4000,
        accessibility: false,
        slidesPerRow: 3,             
        rows: 2,
        adaptiveHeight:false,          
        slidesToShow: 1,
        cssEase: 'linear'
      });         
    }); 	 
 
  
  /* ----------------------------------------------------------- */
  /*  3. RESPONSIVE IFRAM 
  /* ----------------------------------------------------------- */

    var height = jQuery(window).height();

    jQuery('#ifram').css('height',height);

    jQuery('.desktop').click(function(e){
      e.preventDefault();
      jQuery('.content_area').css('width','100%');
      jQuery('.content_area').removeClass('mobile-portrait mobile-landscape-view ipad-landscape ipad-portrait');
      jQuery('.content_area').css('margin-top','0%');
      jQuery('.content_area').css('margin-bottom','0%');
      jQuery('#ifram').css('height',height);
      jQuery('#content').css('overflow', 'hidden');
      jQuery('#aa-related-templates').fadeOut(); 
    });

    jQuery('.tablet').click(function(e){
      e.preventDefault();
      jQuery('.content_area').css('width','768px');
      jQuery('.content_area').css('margin-top','2%');
      jQuery('.content_area').css('margin-bottom','5%');
      jQuery('#ifram').css('height','1024px');
      jQuery('.content_area').addClass('ipad-portrait');
      jQuery('.content_area').removeClass('mobile-portrait mobile-landscape-view ipad-landscape');
      jQuery('#content').css('overflowY', 'auto');
      jQuery('#aa-related-templates').fadeOut(); 
    });

    jQuery('.tablet_landscape').click(function(e){
      e.preventDefault();
      jQuery('.content_area').css('width','1024px');
      jQuery('.content_area').css('margin-top','2%');
      jQuery('.content_area').css('margin-bottom','5%');
      jQuery('#ifram').css('height','768px');
      jQuery('.content_area').addClass('ipad-landscape');
      jQuery('.content_area').removeClass('mobile-portrait mobile-landscape-view ipad-portrait');
      jQuery('#content').css('overflowY', 'auto');
      jQuery('#aa-related-templates').fadeOut(); 
    });
    
    jQuery('.mobile').click(function(e){
      e.preventDefault();
      jQuery('.content_area').css('width','320px');
      jQuery('.content_area').css('margin-top','2%');
      jQuery('.content_area').css('margin-bottom','5%');      
      jQuery('#ifram').css('height','480px');
      jQuery('.content_area').removeClass('mobile-landscape-view ipad-portrait ipad-landscape');
      jQuery('.content_area').addClass('mobile-portrait');
      jQuery('#content').css('overflowY', 'auto');
      jQuery('#aa-related-templates').fadeOut(); 
    });

    jQuery('.mobile-landscape').click(function(e){
      e.preventDefault();
      jQuery('.content_area').css('width','480px');
      jQuery('.content_area').css('margin-top','7%');
      jQuery('.content_area').css('margin-bottom','5%');      
      jQuery('#ifram').css('height','322px');
      jQuery('.content_area').addClass('mobile-landscape-view');
      jQuery('.content_area').removeClass('mobile-portrait ipad-portrait ipad-landscape');
      jQuery('#content').css('overflowY', 'auto');
      jQuery('#aa-related-templates').fadeOut(); 
    });

     
   
  /* ----------------------------------------------------------- */
  /*  4. BOOTSTRAP TOOLTIP
  /* ----------------------------------------------------------- */ 
    
    jQuery('.aa-viewer-header-right [data-toggle="tooltip"]').tooltip(); 
    jQuery('.aa-viewer-header-left [data-toggle="tooltip"]').tooltip(); 
     


  /* ----------------------------------------------------------- */
  /*  5. DROPDOWN MENU
  /* ----------------------------------------------------------- */

   // for hover dropdown menu
    jQuery('.aa-viewer-area').hover(function() {
      jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
    }, function() {
      jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
    });

  });
