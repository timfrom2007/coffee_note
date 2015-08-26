
// $(document).ready(function(){ 
 
// });
$(document).ready(function(){
  // alert("document is ready");
  $("#smileface").on("mouseenter",function(){
    $("#smileface-check").removeClass('is-hidden');
  });
  

  // if($("#smileface-check").on("click")){ 
  //   $("#sosoface-check").addClass('is-hidden'); 
  //   $("badface-check").addClass('is-hidden');
  // }else{
  //   $("#smileface-check").on("mouseleave",function(){
  //   $("#smileface-check").addClass('is-hidden');
  //   });
  // }

 $("#smileface-check").on("click",function(){
    $("#sosoface-check").addClass('is-hidden'); 
    $("badface-check").addClass('is-hidden');
  });


  $("#sosoface").on("mouseenter",function(){
    $("#sosoface-check").removeClass('is-hidden');
  });

 $("#sosoface-check").on("click",function(){
    $("#smileface-check").addClass('is-hidden'); 
    $("#badface-check").addClass('is-hidden');
  });


  $("#badface").on("mouseenter",function(){
    $("#badface-check").removeClass('is-hidden');
  });
  // $("#badface-check").on("mouseleave",function(){
  //   $("#badface-check").addClass('is-hidden');
  // });
  $("#badface-check").on("click",function(){
    $("#smileface-check").addClass('is-hidden'); 
    $("#sosoface-check").addClass('is-hidden');
  });
});



  