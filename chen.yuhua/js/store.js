$(".tab-group .tab").on("click",function(){
			let id = $(this).index();
		$(this).addClass("active")
		.siblings().removeClass("active");
		$(this).closest(".tab-group")
		.find(".content").eq(id).addClass("active")
		.siblings().removeClass("active")
	})


$(()=>{
   $(".image-thumbs img").on("mouseenter",function(e){
      let src = $(this).attr("src");
      $(".image-main img").attr("src",src);
   })
})