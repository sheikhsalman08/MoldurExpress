$("document").ready(function(){
  
	$("#drag_img1").draggable();
	$("#drag_img2").draggable();
	$("#drag_img3").draggable();
	$("#drag_img4").draggable();
	$("#drag_img5").draggable();
	
	$("#articale").accordion({
	  animate : 1000,
		active: 1,
		collapsible: true,
		event: "click",
		heighStyle: "content"
	});
	$("#tab").tabs({
		event: "click",
		show: "fadeIn",
		hide: "fadeOut",
		active: 0,
		collapsible: true,
		heightStyle: "content"
	});
	
});