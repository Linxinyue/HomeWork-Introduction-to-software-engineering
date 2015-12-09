var hi=innerHeight;
var wid=innerWidth-175;
function showcolor(){
	$("#count").hide();
	$("#color").show();
}
function showcount(){
	$("#color").hide();
	$("#count").show();
}
$(function(){
	$('.left_item').mouseover(function() {
	　　var $this = $(this);
		$this.css("background-color","#F1F1F1");
	});
	$('.left_item').mouseout(function() {
	　　var $this = $(this);
		$this.css("background-color","#FAFAFA");
	});
});
