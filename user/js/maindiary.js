var hi=innerHeight-105;
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

function seemore(url) {
	$.get(url,function(data){
		$("#right").html(data); 
	});
}
