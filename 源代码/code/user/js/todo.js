var divcount=0;
function addtodo(){
	if($("#inputtodo")[0].value!=""){
		var html=$("#contentdiv").html();
		var addcontent="<div class='singletodo' id='singleallnew"+divcount+"'>\
						<div class='isdone' onclick=\"done('singleallnew"+divcount+"','donenewimgage"+divcount+"')\">\
							<img src='./img/done.jpg' class='doneimage' id='donenewimgage"+divcount+"'/></div>\
						<div class='todoall' onclick=\"replacediv('./todo/edittodo.php?title="+$("#inputtodo")[0].value+"&select="+select+"')\">\
							<div class='title'>"+$("#inputtodo")[0].value+"</div>\
							<div class='content'></div>\
							<div class='project'></div>\
							<div class='date'></div></div></div>";
		$("#contentdiv").html(html+addcontent);
		
		ajaxContact("new",$("#inputtodo")[0].value,"","","","","","")
		divcount+=1;
		$("#inputtodo")[0].value="";
	}
}
function done(divid,imageid,title){
	$("#"+imageid).toggle();
	$("#"+divid).fadeOut();
	ajaxContact("done",$("#"+title).text(),"","","","","","")
}
function undone(divid,imageid,title){
	$("#"+imageid).toggle();
	$("#"+divid).fadeOut();
	ajaxContact("undone",$("#"+title).text(),"","","","","","")
}
function undel(divid,imageid,title){
	$("#"+divid).fadeOut();
	ajaxContact("undel",$("#"+title).text(),"","","","","","")
}
function keyDown(e){
	var ev=window.event||e;
	if(ev.keyCode==13){
		if($("#inputtodo")[0].value!=""){
			addtodo();
			$("#inputtodo")[0].value="";
		}
	}
}

function replacediv(url) {
	$.get(url,function(data){
	　　$("#maindiv").html(data); 
　　});
}
function replacedivpro(url) {
	$.get(url,function(data){
	　　$("#maindiv").html(data); 
　　});
}

function ajaxContact(option,title,newtitle,content,tododate,project,isdone,isdele){
	$.post("./todo/edittodoserver.php",
	{	
		option:option,
		title:title,
		newtitle:newtitle,
		content:content,
		tododate:tododate,
		project:project,
		isdone:isdone,
		isdele:isdele
	},
	function(data,status){
		alert("数据：" + data + "\n状态：" + status);
	});
}