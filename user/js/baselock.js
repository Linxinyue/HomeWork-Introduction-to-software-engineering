var globleobj;
function showpasswd (obj) {
	//alert("wr");
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
	globleobj=obj
	document.getElementById('changename').value=document.getElementById(obj+'name').innerHTML;
	document.getElementById('changepasswd').value=document.getElementById(obj+'password').value;
	document.getElementById('changeaddress').innerHTML=document.getElementById(obj+'address').innerHTML;
	if(document.getElementById(obj+"sec").title!="none"){
		//code here
		document.getElementById('changesecname').value=document.getElementById(obj+'secname').innerHTML;
		document.getElementById('changesecpasswd').value=document.getElementById(obj+'secpassword').value;
	}
	$("#changdiv").slideToggle();
	$("#newdiv").hide();

}
function cancle () {
	$("#changdiv").slideToggle();
}
function newlock() {
	$("#changdiv").hide();
	$("#newdiv").slideToggle();
}
function newsave (argument) {
	var address=document.getElementById('newaddress').value;
	var accountpassword=document.getElementById('newpasswd').value;
	var accountname=document.getElementById('newname').value;
	var accountsecname=document.getElementById('newsecname').value;
	var accountsecpasswd=document.getElementById('newsecpasswd').value;
	ajaxContact('new',address,accountname,accountpassword,accountsecname,accountsecpasswd);
	location.reload(true);
}
function newcancle (argument) {
	$("#newdiv").slideToggle();
}
function ajaxContact(option,address,accountname,accountpassword,accountsecname,accountsecpasswd){
	$.post("./lock/lockserver.php",
	{	
		option:option,
		address:address,
		accountname:accountname,
		accountpassword:accountpassword,
		accountsecname:accountsecname,
		accountsecpasswd:accountsecpasswd
	},
	function(data,status){
		alert("数据：" + data + "\n状态：" + status);
		//document.getElementById("target").innerHTML=data;
	});
	// setTimeout("document.getElementById('target').innerHTML='保存成功！'",3000);
	// setTimeout("document.getElementById('target').innerHTML=''",5000);
}
function save () {
	// 1.后台更新数据库
	var address=document.getElementById('changeaddress').innerHTML;
	var accountpassword=document.getElementById('changepasswd').value;
	var accountname=document.getElementById('changename').value;
	var accountsecname=document.getElementById('changesecname').value;
	var accountsecpasswd=document.getElementById('changesecpasswd').value;
	ajaxContact('change',address,accountname,accountpassword,accountsecname,accountsecpasswd);
	// 2.更新界面
	document.getElementById(globleobj+'password').value=document.getElementById('changepasswd').value;
	document.getElementById(globleobj+'address').innerHTML=document.getElementById('changeaddress').innerHTML;
	document.getElementById(globleobj+'secname').innerHTML=document.getElementById('changesecname').value;
	document.getElementById(globleobj+'secpassword').value=document.getElementById('changesecpasswd').value;
	// 3.change页面关闭
	$("#changdiv").slideToggle();
}
function addsec() {
	document.getElementById("newplusdiv").style.display="none";
}
function deleteuser(obj) {
	$("#"+obj+"div").fadeOut();
	//后台执行删除操作
	var address=document.getElementById(obj+'address').innerHTML;
	ajaxContact('delete',address,'accountname','accountpassword','accountsecname','accountsecpasswd');
}