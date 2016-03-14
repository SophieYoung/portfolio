// $(function(){

// 	console.log("It's working");
	$(document).on('ready', function() {  
  	var winHeight = $(window).height(), 
      docHeight = $(document).height(),
      progressBar = $('progress'),
      max, value;

  /* Set the max scrollable area */
  max = docHeight - winHeight;
  progressBar.attr('max', max);

  $(document).on('scroll', function(){
     value = $(window).scrollTop();
     progressBar.attr('value', value);
  });
 if (window.innerWidth > 580) {
  $('a').smoothScroll({
    speed:400,
    offset:-66
  });
 


  } else {
  $('a').smoothScroll({
    speed:400,
    offset:-90
  });

  }


});

// });