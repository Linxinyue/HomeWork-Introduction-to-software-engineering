function change() {
	if($("#change").text()=="修改"){
		$("#change").text("取消");
		$("#discard").fadeIn();
		// alert($("#birthday").text());
		$("#inputusername")[0].value=$("#username").text();
		$("#inputbirthday")[0].value=$("#birthday").text();
		$("#inputsex")[0].value=$("#sex").text();
		$("#inputbloodtype")[0].value=$("#bloodtype").text();
		$("#inputbirthplace")[0].value=$("#birthplace").text();
		$("#inputliveplace")[0].value=$("#liveplace").text();
		$("#inputinformation")[0].value=$("#simpleinformation").text();
		$(".subitem2").hide();
		$(".subitem3").fadeIn();
	}else{
		$("#change").text("修改");
		$("#discard").fadeOut();
		$(".subitem3").hide();
		$(".subitem2").fadeIn();
	}
	
}
function changemore() {
	if($("#change").text()=="修改"){
		$("#change").text("取消");
		$("#discard").fadeIn();
		// alert($("#birthday").text());
		$("#inputfig")[0].value=$("#fig").text();
		$("#inputmar")[0].value=$("#mar").text();
		$("#inputhai")[0].value=$("#hab").text();
		$("#inputcha")[0].value=$("#cha").text();
		$("#inputedu")[0].value=$("#edu").text();
		$("#inputjob")[0].value=$("#job").text();
		$("#inputcon")[0].value=$("#con").text();
		$(".subitem2").hide();
		$(".subitem3").fadeIn();
	}else{
		$("#change").text("修改");
		$("#discard").fadeOut();
		$(".subitem3").hide();
		$(".subitem2").fadeIn();
	}
	
}

function save() {
	var inputname=$("#inputusername")[0].value;//document.getElementById('input_name').value;
	var inputbirthday=$("#inputbirthday")[0].value;//document.getElementById('input_birthday').value;
	var inputsex=$("#inputsex")[0].value;//document.getElementById('input_sex').value;
	var inputbloodtype=$("#inputbloodtype")[0].value;//document.getElementById('input_bloodtype').value;
	var inputbirthplace=$("#inputbirthplace")[0].value;//document.getElementById('input_birthplace').value;
	var inputliveplace=$("#inputliveplace")[0].value;//document.getElementById('input_liveplace').value;
	var inputinformation=$("#inputinformation")[0].value;//document.getElementById('input_information').value;

	ajaxContact(inputname,inputbirthday,inputsex,inputbloodtype,inputbirthplace,inputliveplace,inputinformation);

	$("#username").text(inputname);
	$("#birthday").text(inputbirthday);
	$("#sex").text(inputsex);
	$("#bloodtype").text(inputbloodtype);
	$("#birthplace").text(inputbirthplace);
	$("#liveplace").text(inputliveplace);
	$("#simpleinformation").text(inputinformation);

	$("#change").text("修改");
	$("#discard").fadeOut();
	$(".subitem3").hide();
	$(".subitem2").fadeIn();
}
function savemore() {
	var inputfig=$("#inputfig")[0].value;//document.getElementById('input_name').value;
	var inputmar=$("#inputmar")[0].value;//document.getElementById('input_birthday').value;
	var inputhai=$("#inputhai")[0].value;//document.getElementById('input_sex').value;
	var inputcha=$("#inputcha")[0].value;//document.getElementById('input_bloodtype').value;
	var inputedu=$("#inputedu")[0].value;//document.getElementById('input_birthplace').value;
	var inputjob=$("#inputjob")[0].value;//document.getElementById('input_liveplace').value;
	var inputcon=$("#inputcon")[0].value;//document.getElementById('input_information').value;

	ajaxContactmore(inputfig,inputmar,inputhai,inputcha,inputedu,inputjob,inputcon);

	$("#fig").text(inputfig);
	$("#mar").text(inputmar);
	$("#hai").text(inputhai);
	$("#hab").text(inputcha);
	$("#cha").text(inputedu);
	$("#job").text(inputjob);
	$("#con").text(inputcon);

	$("#change").text("修改");
	$("#discard").fadeOut();
	$(".subitem3").hide();
	$(".subitem2").fadeIn();
}


function ajaxContact(realname,birthday,sex,bloodtype,birthplace,liveplace,simpleinformation){
	$.post("./ppf/ppfServerBase.php",
    {	
      name:names,
      realname:realname,
      birthday:birthday,
      sex:sex,
      bloodtype:bloodtype,
      birthplace:birthplace,
      liveplace:liveplace,
      simpleinformation:simpleinformation
    },
    function(data,status){
      alert("数据：" + data + "\n状态：" + status);
    });
}
function ajaxContactmore(figure,marriage,habits,character,education,currentjob,contactphone){
	$.post("./ppf/ppfServerDatailed.php",
    {	
      name:names,
      figure:figure,
      marriage:marriage,
      habits:habits,
      character:character,
      education:education,
      currentjob:currentjob,
      contactphone:contactphone
    },
    function(data,status){
      alert("数据：" + data + "\n状态：" + status);
    });
}