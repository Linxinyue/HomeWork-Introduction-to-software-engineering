var globleobj;
function showpasswd (target) {
	if (document.getElementById(target+'passwd').type=="text") {
		document.getElementById(target+'passwd').type="password";
	} else{
		document.getElementById(target+'passwd').type="text";
	};
}
function showsecpasswd (target) {
	if (document.getElementById(target+'secwd').type=="text") {
		document.getElementById(target+'secwd').type="password";
	} else{
		document.getElementById(target+'secwd').type="text";
	};
}

function changecancel() {
	$(function(){
		$("#changelock").animate({
	     	 top:'700px',
	     	 opacity:'0.2'
	    });
	});
}
function change (target,address) {
	$(function(){
		$("#changelock").show();
		$("#changelock").animate({
	      top:'120px',
	      opacity:'1'
	    });
	});
	// alert($("#"+target+"name")[0].value);
	// alert($("#"+target+"passwd")[0].value);
	// alert($("#"+target+"secname")[0].value);
	// alert($("#"+target+"secwd")[0].value);
	// alert($("#"+target+"address").text());
	$("#changename")[0].value=$("#"+target+"name")[0].value;
	$("#changepasswd")[0].value=$("#"+target+"passwd")[0].value;
	$("#changesecname")[0].value=$("#"+target+"secname")[0].value;
	$("#changesecwd")[0].value=$("#"+target+"secwd")[0].value;
	$("#changeaddress")[0].value=$("#"+target+"address").text();
	// globleobj=obj
	// document.getElementById('changename').value=document.getElementById(obj+'name').innerHTML;
	// document.getElementById('changepasswd').value=document.getElementById(obj+'password').value;
	// document.getElementById('changeaddress').innerHTML=document.getElementById(obj+'address').innerHTML;
	// if(document.getElementById(obj+"sec").title!="none"){
	// 	//code here
	// 	document.getElementById('changesecname').value=document.getElementById(obj+'secname').innerHTML;
	// 	document.getElementById('changesecpasswd').value=document.getElementById(obj+'secpassword').value;
	// }
	// $("#changdiv").slideToggle();
	// $("#newdiv").hide();

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
function deleteuser(target,address) {
	$("#"+target).fadeOut();
	ajaxContact('delete',address,'accountname','accountpassword','accountsecname','accountsecpasswd');
}