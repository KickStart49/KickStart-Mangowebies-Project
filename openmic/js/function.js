jQuery(function($){
	 $("#link1").click(function(){
		$path=$("#home").offset().top;
		$('body').animate({scroollTop:$path},5000);
		});
    $("#link2").click(function(){
		$path=$("#aboutus").offset().top;
		$('body').animate({scroollTop:$path},5000);
		});
     $("#link3").click(function(){
		$path=$("#gallery").offset().top;
		$('body').animate({scroollTop:$path},5000);
		});
		 	
	
	$("#intro-video").click(function() {
		$.fancybox({
			'padding'		: 0,
			'autoScale'		: false,
			'transitionIn'	: 'none',
			'transitionOut'	: 'none',
			'title'			: this.title,
			'width'			: 640,
			'height'		: 385,
			'href'			: this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
			'type'			: 'swf',
			'swf'			: {
			'wmode'				: 'transparent',
			'allowfullscreen'	: 'true'
			}
		});
		return false;
	});

	$("#item").fancybox();	
	$("#owl-demo").owlCarousel({
		autoPlay: 4000, //Set AutoPlay to 3 seconds
		itemsDesktop : [1199,3],
      	itemsDesktopSmall : [979,3],
      	itemsTablet:[768,2],
      	itemsMobile: [479,1],
        slideSpeed : 200,
        items : 4,
 	});

	$('#toggle-menu').click(function(){
      $('.header-right').slideToggle("slow");
    });

    var images = ["abt-bg-1.jpg", "abt-bg-2.jpg", "abt-bg-3.jpg", "abt-bg-4.jpg", "abt-bg-5.jpg"];
    var i = 0;
    $("#abt-bg").css("background-image", "url(images/" + images[i] + ")");
    setInterval(function () {
                i++;
                if (i == images.length) {
                    i = 0;
                }
                $("#abt-bg").fadeOut("slow", function () {
                    $(this).css("background-image", "url(images/" + images[i] + ")");
                    $(this).fadeIn("slow");
                });
    }, 5000);


   

});
 




