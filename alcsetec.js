function validarNombre(){
	var nom = document.getElementById("nombre").value;
	//Validar el campo "nombre"
	if (nom == null || nom.length == 0 || /^\s+$/.test(nom)) {
    document.getElementsByClassName("msg")[0].innerHTML="Por favor escriba su nombre";
    return false;
	}else{
    document.getElementsByClassName("msg")[0].innerHTML="";
  }
	return true;
}

function validarCorreo(){
	var mail = document.getElementById("correo").value;
	//Validar el campo "correo"
	if( !(/\S+@\S+\.\S+/.test(mail)) ) {
    document.getElementsByClassName("msg")[1].innerHTML="Por favor escriba un correo electrónico válido";
    return false;
  }else{
    document.getElementsByClassName("msg")[1].innerHTML="";
  }
  return true;
}

function validarComentario(){
	var coment = document.getElementById("comentarios").value;
	//Validar el campo "comentarios"
	if(coment == null || coment.length == 0 || /^\s+$/.test(coment)) {
    document.getElementsByClassName("msg")[2].innerHTML="Por favor escriba su comentario o sugerencia";
    return false;
  }else{
    document.getElementsByClassName("msg")[2].innerHTML="";
  }
	return true;
}

function validacion(){
  var texto = "Faltan los siguientes datos: ";
  var respuesta = true;
  if(!validarNombre()){
    texto = texto.concat("\nNombre");
    respuesta=false;
  }
  if(!validarCorreo()){
    texto = texto.concat("\nCorreo");
    respuesta=false;
  }
  if(!validarComentario()){
    texto = texto.concat("\nComentario");
    respuesta=false;
  }
  /*if(!respuesta){
    alert(texto);
  }*/
  return respuesta;
}