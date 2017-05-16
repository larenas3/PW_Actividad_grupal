function validarNombre(){
	var nom = document.getElementById("nombre").value;
  msg("validando nombre");
	//Validar el campo "nombre"
	if (nom == null || nom.length == 0 || /^\s+$/.test(nom)) {
		$("#nombre").parent().attr("class","error");
		$("#nombre").parent().children("span").show();
		return false;
	}else{
		$("#nombre").parent().children("span").hide();
	}
	return true;
}

function validarCorreo(){
	var mail = document.getElementById("correo").value;
	//Validar el campo "correo"
	if( !(/\S+@\S+\.\S+/.test(mail)) ) {
 		$("#correo").parent().attr("class","error");
		$("#correo").parent().children("span").show();
		return false;
	}else{
		$("#correo").parent().children("span").hide();
	}
	return true;
}

function validarComentario(){
	var coment = document.getElementById("comentarios").value;
	//Validar el campo "comentarios"
	if(coment == null || coment.length == 0 || /^\s+$/.test(coment)) {
 		$("#comentarios").parent().attr("class","error");
		$("#comentarios").parent().children("span").show();
		return false;
	}else{
		$("#comentarios").parent().children("span").hide();
	}
	return true;
}