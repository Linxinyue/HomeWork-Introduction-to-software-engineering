var hi=innerHeight-60;
function todo_selected(selecetedid) {
	document.getElementById(selecetedid).style.background='#F1F1F1';
}
function todo_unselected(selecetedid) {
	document.getElementById(selecetedid).style.background='#FAFAFA';
}
$(document).ready(function(){ 
　　$.get("./contact/newcontact.php",function(data){ //初始將a.html include div#iframe
　　　　$("#right").html(data);
　　});
	$(function(){
	　　$('.left_item').click(function() {
	 　　　　  var $this = $(this);
	 　　　　  clickTab = $this.find('div').attr('title'); // 找到链接a中的targer的值
	 　　　　  $.get(clickTab,function(data){
 　　　　　　  $("#right").html(data); 
 　　　　　　　});
　　　　});
	});
});