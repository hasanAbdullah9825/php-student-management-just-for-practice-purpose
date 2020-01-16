;(function ($) {
 
$(document).ready(function(){

$("#log_reg").hide();	

$("#login").on('click',function(){
$("#form01 h3").html("Login!");

$("#log_reg").show();

$("#name").hide();
$("#cgpa").hide();
$("#sex").hide();
$("#action").val("login");
});

$("#registration").on('click',function(){
$("#form01 h3").html("Sign in!");

$("#log_reg").show();
$("#name").show();
$("#cgpa").show();
$("#sex").show();

});

$("#top10cgpa").hide();
$("#top10Malecgpa").hide();
$("#top10Femalecgpa").hide();

$("#top10cgpabutton").on('click',function(){
	$("#introduction").hide();
	$("#top10Malecgpa").hide();
	$("#top10Femalecgpa").hide();
    $("#top10cgpa").show();
});

$("#top10Malecgpabutton").on('click',function(){
	$("#introduction").hide();
	$("#top10cgpa").hide();
	$("#top10Femalecgpa").hide();
	$("#top10Malecgpa").show();
	
});

$("#top10Femalecgpabutton").on('click',function(){
	$("#introduction").hide();
	$("#top10cgpa").hide();
	$("#top10Malecgpa").hide();
	$("#top10Femalecgpa").show();
});



});

})(jQuery);





