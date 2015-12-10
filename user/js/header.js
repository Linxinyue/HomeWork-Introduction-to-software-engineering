function showchoose() {
	$("#chooose").fadeToggle();
}
function selected (idstr) {
	document.getElementById(idstr).style.background='#2E69F2';
}
function unselected (idstr) {
	document.getElementById(idstr).style.background='#2EB7F2';
}