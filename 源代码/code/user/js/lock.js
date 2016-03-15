var hi=innerHeight-105;
$(function(){
	$.get("./lock/baselock.php",function(data){ //初始將a.html include div#iframe
	　　　　$("#right").html(data);
	});
	$('.left_item').click(function() {
　　　　var $this = $(this);
　　　　clickTab = $this.find('div').attr('title'); // 找到链接a中的targer的值
　　　　$.get(clickTab,function(data){
　　　　　　$("#right").html(data); 
　　　　});
　　});
	$('.left_item').mouseover(function() {
	　　var $this = $(this);
		$this.css("background-color","#F1F1F1");
	});
	$('.left_item').mouseout(function() {
	　　var $this = $(this);
		$this.css("background-color","#FAFAFA");
	});
});
