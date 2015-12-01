function showpasswd (obj) {
	alert("wr");
	if (document.getElementById(obj+'password').type=="text") {
		document.getElementById(obj+'password').type="password";
	} else{
		document.getElementById(obj+'password').type="text";
	};
}
function showsecpasswd (obj) {
	if (document.getElementById(obj+'secpassword').type=="text") {
		document.getElementById(obj+'secpassword').type="password";
	} else{
		document.getElementById(obj+'secpassword').type="text";
	};
}
function change (obj) {
	document.getElementById('changename').value=document.getElementById(obj+'name').innerHTML;
	document.getElementById('changepasswd').value=document.getElementById(obj+'password').value;
	if(document.getElementById(obj+"sec").title!="none"){
		//code here
		document.getElementById('changesecname').value=document.getElementById(obj+'secname').innerHTML;
		document.getElementById('changesecpasswd').value=document.getElementById(obj+'secpassword').value;
	}
	$("#changdiv").slideToggle();
}
function cancle () {
	$("#changdiv").slideToggle();
}
function save () {
	// 1.后台更新数据库
	
	// 2.更新界面

	// 3.change页面关闭
	$("#changdiv").slideToggle();
}
function addsec() {
	document.getElementById("newplusdiv").style.display="none";
}
function deleteuser(obj) {
	$("#"+obj+"div").fadeOut();
	//后台执行删除操作
	//code here
}