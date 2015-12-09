var hi=innerHeight-105;
function todo_selected(selecetedid) {
	document.getElementById(selecetedid).style.background='#F1F1F1';
}
function todo_unselected(selecetedid) {
	document.getElementById(selecetedid).style.background='#FAFAFA';
}
$(document).ready(function(){ 
　　$.get("./ppf/baseinformation.php",function(data){ //初始將a.html include div#iframe
　　　　$("#right").html(data);
　　});
	$(function(){
	　　$('.left_item').click(function() {
	  　　// 找出 li 中的超链接 href(#id)
	 　　　　var $this = $(this);
	 　　　　_clickTab = $this.find('div').attr('title'); // 找到链接a中的targer的值
	 　　　　$.get(_clickTab,function(data){
	 　　　　　　$("#right").html(data); 
	 　　　　});
	　　　});
	});
});