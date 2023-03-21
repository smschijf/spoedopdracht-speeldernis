$(document).ready(function(){

  var $body       = $('body');
  var $header     = $('header');
  var $headerImage = $header.find('.wrapper-background-image');

  var windowWidth;

  // Scenes
  //var controller;

  // Initial functions
  getOffsets();
  updateScenes();

  $(window).resize(function() {
        getOffsets();
        updateScenes();
    });

    function getOffsets() {
    // windowHeight  = window.innerHeight;
    windowWidth   = $(window).outerWidth();
    // wrapperHeight = $wrapper.outerHeight();  
    // bookletHeight = $booklet.outerHeight();
    // pageHeight     = $page.outerHeight();
    // productTextHolderHeight = $productTextHolder.outerHeight();
    // navHeight = $nav.outerHeight();
    //headerHeight = $header.outerHeight(); 
    }

    function updateScenes() {

      // if ( typeof controller !== 'undefined') {controller.destroy(true);}
      // controller  = new ScrollMagic.Controller();

      // if($body.hasClass('home')) {animateHome();}
      // if($body.hasClass('single-product')) {animateProductDetail();}
      // if($body.hasClass('archive')) {animateShopOverview();}

      // new ScrollMagic.Scene({
      //   triggerElement: '',
      //     triggerHook: 0,
      //     offset: 0,
      //     duration: '100%'
      // })
      // .setTween($headerImage, 0.5, {yPercent: -10, ease:Linear.easeNonee, force3D:true})
      // .addTo(controller);

    }

  

  $('img.svg').each(function(){
    var $img     = $(this);
    var imgID    = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL   = $img.attr('src');

    $.get(imgURL, function(data) {
      var $svg = $(data).find('svg');
      if (typeof imgID != 'undefined') {
        $svg = $svg.attr('id', imgID);
      }
      if (typeof imgClass != 'undefined') {
        $svg = $svg.attr('class', imgClass + ' replaced-svg');
      }
      $svg = $svg.removeAttr('xmlns:a');
      $img.replaceWith($svg);
    });
  });

  $('.btn-menu').click(function() {
    $body.toggleClass('menu-show');
  });

  $('.seperator a').click(function() {
    $body.toggleClass('menu-active');
  });

  $(window).scroll(function(){
      if(windowWidth > 767) {
        $body.removeClass('menu-active');
      }
    });

});