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
				
				

	
	//���Ƚ�#back-to-top����
	$("#back-to-top").hide();
	//����������λ�ô��ھඥ��100��������ʱ����ת���ӳ��֣�������ʧ
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
		//�������ת���Ӻ󣬻ص�ҳ�涥��λ��
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
	},8000) //ÿ4�����л�һ��������Ը�����Ҫ����		
});


			



