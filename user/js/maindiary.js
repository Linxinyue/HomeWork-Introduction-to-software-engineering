var hi=innerHeight-105;
function todo_selected(selecetedid) {
	document.getElementById(selecetedid).style.background='#BACAC1';
}
function todo_unselected(selecetedid) {
	document.getElementById(selecetedid).style.background='#DCE5E3';
}

$(document).ready(function(){ 
	$.get("./day/editbook.php",function(data){ //初始將a.html include div#iframe
		$("#right").html(data);
	});
	$(function(){
		$('.left_item').click(function() {
			// 找出 li 中的超链接 href(#id)
			var $this = $(this);
			clickTab = $this.find('div').attr('title'); // 找到链接a中的targer的值
			$.get(clickTab,function(data){
				$("#right").html(data); 
			});
		});
	});
});

function newdiarybook() {
	//alert("hello world");
}