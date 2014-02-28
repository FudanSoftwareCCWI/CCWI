$(document).ready(function(){
	$("#panel_enroll").bind("click",enroll);
	$("input").bind("click",hide_error);
});

function enroll(){
	var r = true;
	var inputs = $(".must input");
	//console.log(inputs);
	for(var i=0;i<inputs.length;i++){
		var ip = inputs[i];
		if($(ip).val()==""){
			$(ip).siblings(".error").text("不能为空");
			$(ip).siblings(".error").css("display","block");
			//console.log($(ip).siblings(".error"));
			r = false;
		}
	}
	var birthday =$("#datepicker").val();
	var mobile = $("#id_mobile").val();
	var email = $("#id_email").val();
	
	var birthday_test = /^[0-1]?[0-9]{1}\/[0-1]?[0-9]{1}\/[0-9]{4}$/;
	var mobile_test = /^[0-9]*$/;
	var email_test = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/;
		
	if(!birthday_test.test(birthday)){
		$("#datepicker").siblings(".error").text("日期格式错误，应为DD/MM/YYYY");
		$("#datepicker").siblings(".error").css("display","block");
		r = false;
	}
	if(!mobile_test.test(mobile) || mobile.length!=11){
		$("#id_mobile").siblings(".error").text("请填写十一位的手机号");
		$("#id_mobile").siblings(".error").css("display","block");
		r = false;
	}
	if(!email_test.test(email)){
		$("#id_email").siblings(".error").text("请填写正确地邮箱");
		$("#id_email").siblings(".error").css("display","block");
		r = false;
	}
	return r;
}

function hide_error(){
	$(this).siblings(".error").css("display","none");
}