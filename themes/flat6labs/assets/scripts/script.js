$(document).ready(function () {

  $(".left").click(function(){
  	$(this).css({
  		backgroundColor:"#b40016",
  	})

  	$(this).children().css("color","white");

  	$(this).next().css({
  		backgroundColor:"white",
  		border:"1px solid #b40016"
  	})

  	$(this).next().children().css("color","#b40016");

  })

  $(".right").click(function(){
  	$(this).css({
  		backgroundColor:"#b40016"
  	})

  	$(this).children().css("color","white");

  	$(this).prev().css({
  		backgroundColor:"white",
  		border:"1px solid #b40016"
  	})

  	$(this).prev().children().css("color","#b40016");

  })

  $(".left-arrow").click(function(){
  	if($(".second-rule").hasClass("show")){
  		$(".last-rule").addClass("hide").fadeOut(150,function(){
  			  	$(".first-rule").addClass("col-sm-pull-5").addClass("show").removeClass("col-sm-2").addClass("col-sm-3");
  			  	$(".second-rule").removeClass("show").removeClass("col-sm-pull-1").addClass("col-sm-pull-6");
  				$("rule-1-img").attr("src","assest/images/rule-3.png");
  				$(".rule-3-img-spec").addClass("hidden");
  				$(".rule-3-img").removeClass("hidden");

  				$(".rule-1-img-spec").removeClass("hidden");
  				$(".rule-1-img").addClass("hidden");
  		});
  	}

  	if($(".last-rule").hasClass("show")){
	  	$(".first-rule").fadeIn(150,function(){
	  		$(".last-rule").removeClass("col-sm-push-1").removeClass("show");
	  		$(".second-rule").addClass("show").removeClass("col-sm-pull-6").removeClass("col-sm-push-4").addClass("col-sm-pull-1");
	  		$(".first-rule").fadeIn().removeClass("col-sm-pull-5").removeClass("hide").addClass("col-sm-2").removeClass("col-sm-3");
	  		$(".rule-3-img-spec").addClass("hidden");
  			$(".rule-3-img").removeClass("hidden");

  			$(".rule-1-img-spec").addClass("hidden");
  			$(".rule-1-img").removeClass("hidden");
	  	})
  	}
  })

 $(".right-arrow").click(function(){
  	if($(".second-rule").hasClass("show")){
  		$(".first-rule").addClass("hide").fadeOut(150,function(){
  			  	$(".last-rule").addClass("col-sm-push-1").addClass("show").removeClass("col-sm-2").addClass("col-sm-3");
  			  	$(".second-rule").removeClass("show").removeClass("col-sm-pull-6").removeClass("col-sm-pull-1").addClass("col-sm-push-4");
  				$(".rule-3-img-spec").removeClass("hidden");
  				$(".rule-3-img").addClass("hidden");

  				$(".rule-1-img-spec").addClass("hidden");
  				$(".rule-1-img").removeClass("hidden");
  		});
  	}

  	if($(".first-rule").hasClass("show")){
	  	$(".last-rule").fadeIn(150,function(){
	  		$(".last-rule").removeClass("col-sm-push-1").removeClass("hide").addClass("col-sm-2").removeClass("col-sm-3");
	  		$(".second-rule").addClass("show").removeClass("col-sm-pull-6").removeClass("col-sm-push-4").addClass("col-sm-pull-1");
	  		$(".first-rule").removeClass("col-sm-pull-5").removeClass("show");
	  		$(".rule-3-img-spec").addClass("hidden");
  			$(".rule-3-img").removeClass("hidden");

  			$(".rule-1-img-spec").addClass("hidden");
  			$(".rule-1-img").removeClass("hidden");
	  	})
  	}
  })

 $(".right-box-2").click(function(){
 	if(!$(".active").hasClass("last-news")){
 		$(".active").addClass("hidden").removeClass("active").next().addClass("active").removeClass("hidden");
 	}
 })

 $(".left-box-2").click(function(){
 	if(!$(".active").hasClass("first-news")){
 		$(".active").addClass("hidden").removeClass("active").prev().addClass("active").removeClass("hidden");
 	}
 })
});


