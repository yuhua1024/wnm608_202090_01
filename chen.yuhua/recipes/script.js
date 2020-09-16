$(".Selections dt").on("click",function(){
	$(this).next().slideToggle(300).siblings("dd").slideUp();
})