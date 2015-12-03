// alert("sdfa");
function  gotoeditdiary (diarytitle) {
	window.location.href="./day/editdiary.php?diarytitle="
		+diarytitle+"&booktitle="+booktitle;
}
function gotonewdiary() {
	window.location.href="./day/newdiary.php?diarytitle="
		+''+"&booktitle="+booktitle;
}