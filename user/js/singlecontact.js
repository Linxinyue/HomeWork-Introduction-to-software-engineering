function change() {
	// var s=$("#inputcompany").children("input")[0].value;
	// alert(s);

	if($("#chatools").text()=="编辑"){
		$("#chatools").html("保存");
		$("#deltools").html("取消");

		$("#inputcompany").children("input")[0].value=$("#companycontent").text();
		$("#inputphone").children("input")[0].value=$("#phonecontent").text();
		$("#inputnote").children("textarea")[0].value=$("#notecontent").text();
	}else{
		$("#chatools").html("编辑");
		$("#deltools").html("删除");

		

		$("#companycontent").html($("#inputcompany").children("input")[0].value);
		$("#phonecontent").html($("#inputphone").children("input")[0].value);
		$("#notecontent").html($("#inputnote").children("textarea")[0].value);
	}
	$("#phonecontent").toggle();
	$("#companycontent").toggle();
	$("#notecontent").toggle();
		
	$("#inputphone").toggle();
	$("#inputcompany").toggle();
	$("#inputnote").toggle();
}
function deletecon(){
	alert("7498");
}