$.getScript('./js/jquery.DatePicker.js', function(){
	$('#date_picker_demo').datePicker({
		followOffset : [0, 24]
	});
});
$(function(){
	$('.back').click(function() {
　　　  var $this = $(this);
　　　  clickTab = $this.attr('title'); // 找到链接a中的targer的值
　　　  $.get(clickTab,function(data){
	　　　  $("#mainedit").html(data); 
　　　　});
　　});
	$('.projectls').click(function() {
　　　  var $this = $(this);
　　　  clickTab = $this.text();
		$("#nowproject").text(clickTab);
		$("#otherprojcet").fadeOut();
　　});
	$('.projectls').mouseover(function() {
　　　  var $this = $(this);
		$this.css("background-color","#ececec");
　　});
	$('.projectls').mouseout(function() {
　　　  var $this = $(this);
		$this.css("background-color","#ffffff");
　　});
});
function chooseeproject() {
	$("#otherprojcet").fadeIn();
}

