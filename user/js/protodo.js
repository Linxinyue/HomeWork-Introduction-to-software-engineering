function delproject() {
	alert("del");
	ajaxContactpro("delete",protitle,"","");
	location.reload();
}
function newproject() {
	// alert(protitle);
	// alert($("#inputprotitle")[0].value);
	// alert($("#inputprojectdesc")[0].value);
	ajaxContactpro("change",protitle,$("#inputprotitle")[0].value,$("#inputprojectdesc")[0].value);
	location.reload();
}

function ajaxContactpro(option,title,newtitle,content){
	$.post("./todo/edittodoserverpro.php",
	{	
		option:option,
		title:title,
		newtitle:newtitle,
		content:content
	},
	function(data,status){
		alert("数据：" + data + "\n状态：" + status);
	});
}