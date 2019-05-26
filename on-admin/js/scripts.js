// event pada saat link di klik
$('.page-scroll').on('click', function(event){

var tujuan = $(this).attr('href');

var elemenTujuan = $(tujuan);
     
   $('body,html').animate({
      scrollTop: $(this.hash).offset().top - 30
    }, 1250, 'easeInOutExpo' );
  

 event.preventDefault();

});

//paralax
//about
$(window).on('load', function() {

	$('.pkiri').addClass('pmuncul');
	$('.pkanan').addClass('pmuncul');
});

$(window).scroll(function(){
     var windowScroll = $(this).scrollTop();

$('.jumbotron img').css({
	'transform' : 'translate(0px, '+ windowScroll/3 +'%)'
});

$('.jumbotron h1').css({
	'transform' : 'translate(0px, '+ windowScroll/2 +'%)'
});

$('.jumbotron p').css({
	'transform' : 'translate(0px, '+ windowScroll/1.2 +'%)'
});

//portfolio
    if(windowScroll > $('.portfolio').offset().top - 100){

      $('.portfolio .thumbnail').each(function(i){
          setTimeout(function(){
             $('.portfolio .thumbnail').eq(i).addClass('muncul');
      }, 300 * (i+1));
      
      });

    }
   
});