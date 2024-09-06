
function validaTexto(id,error,largo){
	var er ="";
	document.getElementById(id).style.background = "#FFFFFF";
	if(document.getElementById(id).value ==""){
		document.getElementById(id).style.background = "#F8C2BA";
		er=error;
	}
	return er;
}























