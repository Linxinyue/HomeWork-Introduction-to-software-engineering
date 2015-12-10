var isnew;
var targetbook;
var globletarget;
function seediary(booktitle,diarytitle) {
	window.location.href="./day/editdiary.php?diarytitle="
		+diarytitle+"&booktitle="+booktitle;
}
function deletebook(booktitle) {
	ajaxContact('delete',booktitle,'','');
	location.reload(true);
}


function change (target,address) {
	isnew="change";
	targetbook=address;
	globletarget=target;
	$(function(){
		$("#newbookdiv").show();
		$("#newbookdiv").animate({
	      top:'120px',
	      opacity:'1'
	    });
	});
	$("#newbooktitle")[0].value=$("#title"+target).text();
	$("#newbookdesc")[0].value=$("#desc"+target).text();
}
function changesave() {
	if(isnew=="new"){
		var newbooktitle=$("#newbooktitle")[0].value;
		var newbookdesc=$("#newbookdesc")[0].value;
		// alert(changename+":"+changepasswd+":"+changesecname+":"+changesecwd+":"+changeaddress);
		ajaxContact('new',"",newbooktitle,newbookdesc);
		// changepage();
	}else{
		var newbooktitle=$("#newbooktitle")[0].value;
		var newbookdesc=$("#newbookdesc")[0].value;
		
		ajaxContact('change',targetbook,newbooktitle,newbookdesc);
		$("#title"+globletarget).text(newbooktitle);
		$("#desc"+globletarget).text(newbookdesc);
		changecancel();
	}
	location.reload();
}



function changecancel() {
	$(function(){
		$("#newbookdiv").animate({
	     	 top:'700px',
	     	 opacity:'0.2'
	    });
	});
}

function newbook() {
	isnew="new";
	$("#newbooktitle")[0].value="";
	$("#newbookdesc")[0].value="";
	$(function(){
		$("#newbookdiv").show();
		$("#newbookdiv").animate({
	      top:'120px',
	      opacity:'1'
	    });
	});
}
function ajaxContact(option,booktitle,newbooktitle,bookdescription){
	$.post("./day/editbookserver.php",
	{	
		option:option,
		booktitle:booktitle,
		newbooktitle:newbooktitle,
		bookdescription:bookdescription
	},
	function(data,status){
		alert("数据：" + data + "\n状态：" + status);
	});
}

function changepage() {
	$.get("./lock/editbook.php",function(data){
　　　　$("#maindiv").html(data); 
　　});
}
