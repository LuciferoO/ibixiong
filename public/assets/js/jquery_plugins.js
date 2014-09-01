$(document).ready(function(){
	$('#sharebutton').click(function(event){
		$("#sharemodal").modal({
				"backdrop" : "static",
				"keyboard" : true,
				"show" : true // this parameter ensures the modal is shown immediately
				}
				)
	});	
				
	$('#loginbutton').click(function(event){
		$("#loginmodal").modal({
				"backdrop" : "static",
				"keyboard" : true,
				"show" : true // this parameter ensures the modal is shown immediately
				}
				)
	});	
	$('#registerbutton').click(function(event){
		$("#registermodal").modal({
			"backdrop" : "static",
			"keyboard" : true,
			"show" : true // this parameter ensures the modal is shown immediately
		}
		)
	});
				
				

	
	//首先将#back-to-top隐藏
	$("#back-to-top").hide();
	//当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失
	$(function () {
		$(window).scroll(function(){
			if ($(window).scrollTop()>100){
				$("#back-to-top").fadeIn(1500);
			}
			else
			{
				$("#back-to-top").fadeOut(1500);
			}
		});
		//当点击跳转链接后，回到页面顶部位置
		$("#back-to-top").click(function(){
			$('body,html').animate({scrollTop:0},1000);
			return false;
		});
	});
			
	$("#rollsItem li:not(:first)").css("display","none");
	var B=$("#rollsItem li:last");
	var C=$("#rollsItem li:first");
	setInterval(function(){
		if(B.is(":visible")){
			C.fadeIn(1000).addClass("in");B.hide()
		}else{
			$("#rollsItem li:visible").addClass("in");
			$("#rollsItem li.in").next().fadeIn(1000);
			$("li.in").hide().removeClass("in")}
	},8000) //每4秒钟切换一条，你可以根据需要更改		
});


			



