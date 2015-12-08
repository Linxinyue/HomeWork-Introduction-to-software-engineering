var divcount=0;
function addtodo() {
	var html=$("#contentdiv").html();
	var addcontent="<div class='singletodo' id='singletodo"+divcount+"'>\
	<div class='isdone' onclick=\"done('singletodo"+divcount+"','doneimage"+divcount+"')\">\
					<img src='./img/done.jpg' class='doneimage' id='doneimage"+divcount+"'/>\
				</div>\
	<div id='todo"+divcount+"' title='./todo/edittodo.php' onclick='mytest()'>\
	<div class='title' >完成网站"+divcount+"</div>\
	<div class='content'>添加少许效果</div>\
	<div class='project'>工程导论1</div>\
	<div class='date'>4010/5/25</div></div></div>";
	$("#contentdiv").html(html+addcontent);
	divcount+=1;
}
function done(divid,imageid){
	$("#"+imageid).toggle();
	$("#"+divid).fadeOut();
}
function keyDown(e){
	var ev=window.event||e;
	if(ev.keyCode==13){
		addtodo();
	}
}

function replacediv(url) {
	$.get(url,function(data){
	　　$("#maindiv").html(data); 
　　});
}

// $('.singletodo').click(function() {
// 	// var $this = $(this);
// 	clickTab = $("#todos").attr('title');
// 	alert("clickTab");
// });

// $(function(){
// 	// $('.singletodo').click(function() {
// 		// alert("798");
// // 　　　  var $this = $(this);
// // 　　　  clickTab = $this.attr('title');
// // 　　　  $.get(clickTab,function(data){
// // 	　　　  $("#maindiv").html(data); 
// // 　　　　});
// // 　　});
// });