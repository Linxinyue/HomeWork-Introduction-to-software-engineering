var divcount=0;
function addtodo() {
	var html=$("#contentdiv").html();
	var addcontent="<div class='singletodo' id='todo"+divcount+"'>\
	<div class='isdone' onclick=\"done('todo"+divcount+"','doneimage"+divcount+"')\">\
					<img src='./img/done.jpg' class='doneimage' id='doneimage"+divcount+"'/>\
				</div>\
	<div class='title'>完成网站"+divcount+"</div>\
	<div class='content'>添加少许效果</div>\
	<div class='project'>工程导论1</div>\
	<div class='date'>4010/5/25</div></div>";
	$("#contentdiv").html(html+addcontent);
	divcount+=1;
}
function done(divid,imageid){
	$("#"+imageid).toggle();
	$("#"+divid).fadeOut();
}