function seediary(booktitle,diarytitle) {
	window.location.href="./day/editdiary.php?diarytitle="
		+diarytitle+"&booktitle="+booktitle;
}
function deletebook(booktitle) {
	ajaxContact('delete',booktitle,'','');
	location.reload(true);
}

function newbook() {
	$("#newbookdiv").fadeOut();
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