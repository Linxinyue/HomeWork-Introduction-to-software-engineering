
function cancle () {
	window.history.back(-1); 
}
function change() {
	// body...
	content=document.getElementById("inputcontent").value;
	newdiarytitle=document.getElementById("inputtitle").value;
	// alert(newdiarytitle);
	ajaxContact('change',diarytitle,booktitle,content,newdiarytitle);
	window.history.back(-1);
}
function newdiary() {
	content=document.getElementById("inputcontent").value;
	newdiarytitle=document.getElementById("inputtitle").value;
	// alert(newdiarytitle);
	ajaxContact('new',diarytitle,booktitle,content,newdiarytitle);
	window.history.back(-1);
	// body...
}
function deletediary() {
	ajaxContact('delete',diarytitle,booktitle,'','');
	window.history.back(-1);
}
function ajaxContact(option,diarytitle,booktitle,content,newdiarytitle){
	$.post("./editdayserver.php",
	{	
		option:option,
		diarytitle:diarytitle,
		booktitle:booktitle,
		content:content,
		newdiarytitle:newdiarytitle
	},
	function(data,status){
		alert("数据：" + data + "\n状态：" + status);
		//document.getElementById("target").innerHTML=data;
	});
	// setTimeout("document.getElementById('target').innerHTML='保存成功！'",3000);
	// setTimeout("document.getElementById('target').innerHTML=''",5000);
}