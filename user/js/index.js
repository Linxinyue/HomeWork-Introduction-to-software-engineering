var hi=innerHeight-60;
function todo_selected(selecetedid) {
	document.getElementById(selecetedid).style.background='#E9E9E9';
}
function todo_unselected(selecetedid) {
	document.getElementById(selecetedid).style.background='#FAFAFA';
}

$(function(){
	$("#all_project").click(function(){
		$("#projects").slideToggle("slow");
	});
	$("#finnash").click(function(){
		$("#finnashes").slideToggle("slow");
	});
	$("#focus").click(function(){
		$("#focuses").slideToggle("slow");
	});
	/////////////////////////////////
	$.get("./todo/todo.php?select=basket",function(data){ //初始將a.html include div#iframe
　　　　$("#right").html(data);
　　});
　　$('.left_item').click(function() {
　　　  var $this = $(this);
　　　  clickTab = $this.attr('title'); // 找到链接a中的targer的值
　　　  $.get(clickTab,function(data){
	　　　  $("#right").html(data); 
　　　　});
　　});
});