$.getScript('./js/jquery.DatePicker.js', function(){
	$('#date_picker_demo').datePicker({
		followOffset : [0, 24]
	});
});
$(function(){
	$('.projectls').click(function() {
　　　  var $this = $(this);
　　　  clickTab = $this.text();
		$("#nowproject").text(clickTab);
		$("#otherprojcet").fadeOut();
　　});
	$('.projectls').mouseover(function() {
　　　  var $this = $(this);
		$this.css("background-color","#ececec");
　　});
	$('.projectls').mouseout(function() {
　　　  var $this = $(this);
		$this.css("background-color","#ffffff");
　　});
});

function back(){
	var url="./todo/todo.php?select="+select;
	$.get(url,function(data){
		$("#mainedit").html(data); 
　　});
}
function backpro(){
	var url="./todo/projecttodo.php?protitle="+protitle;
	$.get(url,function(data){
		$("#mainedit").html(data); 
　　});
}

// $('.back').click(function() {
// 　　　  var $this = $(this);
// 　　　  clickTab = $this.attr('title'); // 找到链接a中的targer的值
// 　　　  $.get(clickTab,function(data){
// 	　　　  $("#mainedit").html(data); 
// 　　　　});
// 　　});
function chooseeproject() {
	$("#otherprojcet").fadeIn();
}


function save(){
	// alert($("#date_picker_demo")[0].value);
	// alert($("#nowproject").text());
	// alert($("#inputtitle")[0].value);
	// alert($("#inputdesc")[0].value);
	// alert(title);
	var project=$("#nowproject").text();
	if(project=="请选择项目"){
		project="";
	}
	ajaxContact("change",title,$("#inputtitle")[0].value,$("#inputdesc")[0].value,$("#date_picker_demo")[0].value,project,"0","0");
	
}
function deletetodo(){
	ajaxContact("delete",title,"","","","","","1");
	setTimeout(back(),500);
}

function editdone() {
	$("#editdoneimage").fadeIn();
	ajaxContact("done",title,"","","","","1","");
	setTimeout(back(),500);
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
