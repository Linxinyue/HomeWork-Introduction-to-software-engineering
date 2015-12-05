var oldname=$("#contactname").text();
function change() {
	// var s=$("#inputcompany").children("input")[0].value;
	// alert(s);
	if($("#chatools").text()=="编辑"){
		$("#chatools").html("保存");
		$("#deltools").html("取消");

		$("#inputcompany").children("input")[0].value=$("#companycontent").text();
		$("#inputphone").children("input")[0].value=$("#phonecontent").text();
		$("#inputnote").children("textarea")[0].value=$("#notecontent").text();
		$("#inputname").children("input")[0].value=$("#contactname").text();
	}else{
		$("#chatools").html("编辑");
		$("#deltools").html("删除");

		var companycontent=$("#inputcompany").children("input")[0].value;
		var inputphone=$("#inputphone").children("input")[0].value;
		var inputnote=$("#inputnote").children("textarea")[0].value;
		var inputname=$("#inputname").children("input")[0].value;

		$("#companycontent").html(companycontent);
		$("#phonecontent").html(inputphone);
		$("#notecontent").html(inputnote);
		$("#contactname").html(inputname);
		ajaxContact("change",oldname,inputname,companycontent,inputphone,inputnote);
	}

	$("#contactname").toggle();
	$("#phonecontent").toggle();
	$("#companycontent").toggle();
	$("#notecontent").toggle();
		
	$("#inputname").toggle();
	$("#inputphone").toggle();
	$("#inputcompany").toggle();
	$("#inputnote").toggle();
}
function deletecon(){
	if($("#deltools").text()=="删除"){
		ajaxContact("delete",oldname,'','','','');
		location.reload(true);
	}else{
		$("#chatools").html("编辑");
		$("#deltools").html("删除");
		$("#phonecontent").toggle();
		$("#companycontent").toggle();
		$("#notecontent").toggle();
			
		$("#inputphone").toggle();
		$("#inputcompany").toggle();
		$("#inputnote").toggle();
	}
}
function newcontact() {
	var companycontent=$("#newcompany").children("input")[0].value;
	var inputphone=$("#newphone").children("input")[0].value;
	var inputnote=$("#newnote").children("textarea")[0].value;
	var inputname=$("#newname").children("input")[0].value;

	ajaxContact("new","",inputname,companycontent,inputphone,inputnote);
	location.reload(true);
}


function ajaxContact(option,oldname,inputname,companycontent,inputphone,inputnote){
	$.post("./contact/contactserver.php",
	{	
		option:option,
		oldname:oldname,
		inputname:inputname,
		companycontent:companycontent,
		inputphone:inputphone,
		inputnote:inputnote
	},
	function(data,status){
		alert("数据：" + data + "\n状态：" + status);
	});
}