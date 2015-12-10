var targetlcok;
var globletarget;
var isnew;
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

function change (target,address) {
	isnew="change";
	targetlcok=address;
	globletarget=target;
	$(function(){
		$("#changelock").show();
		$("#changelock").animate({
	      top:'120px',
	      opacity:'1'
	    });
	});
	$("#changename")[0].value=$("#"+target+"name")[0].value;
	$("#changepasswd")[0].value=$("#"+target+"passwd")[0].value;
	$("#changesecname")[0].value=$("#"+target+"secname")[0].value;
	$("#changesecwd")[0].value=$("#"+target+"secwd")[0].value;
	$("#changeaddress")[0].value=$("#"+target+"address").text();
}

function changecancel() {
	$(function(){
		$("#changelock").animate({
	     	 top:'700px',
	     	 opacity:'0.2'
	    });
	});
}

function changesave() {
	if(isnew=="new"){
		var changename=$("#changename")[0].value;
		var changepasswd=$("#changepasswd")[0].value;
		var changesecname=$("#changesecname")[0].value;
		var changesecwd=$("#changesecwd")[0].value;
		var changeaddress=$("#changeaddress")[0].value;
		// alert(changename+":"+changepasswd+":"+changesecname+":"+changesecwd+":"+changeaddress);
		ajaxContact('new',"",changeaddress,changename,changepasswd,changesecname,changesecwd);
		changepage();
	}else{
		var changename=$("#changename")[0].value;
		var changepasswd=$("#changepasswd")[0].value;
		var changesecname=$("#changesecname")[0].value;
		var changesecwd=$("#changesecwd")[0].value;
		var changeaddress=$("#changeaddress")[0].value;
		// alert(changename+":"+changepasswd+":"+changesecname+":"+changesecwd+":"+changeaddress);
		
		ajaxContact('change',targetlcok,changeaddress,changename,changepasswd,changesecname,changesecwd);
		
		$("#"+globletarget+"name")[0].value=changename;
		$("#"+globletarget+"passwd")[0].value=changepasswd;
		$("#"+globletarget+"secname")[0].value=changesecname;
		$("#"+globletarget+"secwd")[0].value=changesecwd;
		$("#"+globletarget+"address").text(changeaddress);
		changecancel();
	}
}

function newlock() {
	isnew="new";
	$("#changename")[0].value="";
	$("#changepasswd")[0].value="";
	$("#changesecname")[0].value="";
	$("#changesecwd")[0].value="";
	$("#changeaddress")[0].value="";
	$(function(){
		$("#changelock").show();
		$("#changelock").animate({
	      top:'120px',
	      opacity:'1'
	    });
	});
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

function deleteuser(target,address) {
	$("#"+target).fadeOut();
	ajaxContact('delete',address,'','','','','','');
}
function ajaxContact(option,oldaddress,address,accountname,accountpassword,accountsecname,accountsecpasswd){
	$.post("./lock/lockserver.php",
	{	
		option:option,
		oldaddress:oldaddress,
		address:address,
		accountname:accountname,
		accountpassword:accountpassword,
		accountsecname:accountsecname,
		accountsecpasswd:accountsecpasswd
	},
	function(data,status){
		// alert("数据：" + data + "\n状态：" + status);
	});
}
function changepage() {
	$.get("./lock/baselock.php",function(data){
　　　　$("#maindiv").html(data); 
　　});
}
