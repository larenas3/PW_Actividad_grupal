//Configuración del mashup de GoogleMaps
var myCenter = new google.maps.LatLng(4.6829523,-74.1363097);
function initialize() {
  var mapProp = {
    center:myCenter,
    zoom:12,
    scrollwheel:false,
    draggable:false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };

  var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

  var marker = new google.maps.Marker({
    position:myCenter,
  });

  marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);


//Se selecciona y oculta el div que muestra los mensajes al usuario
var mensaje = $("#mensaje");
mensaje.hide();

//Enviar el formulario de logueo
$("#acceso").on("submit", function(e){
   //Evitamos que se envíe por defecto
   e.preventDefault();
   alert("hola");
   //Creamos un FormData con los datos del mismo formulario
   var formData = new FormData(document.getElementById("acceso"));

   //Llamamos a la función AJAX de jQuery
   $.ajax({
      //Definimos la URL del archivo al cual vamos a enviar los datos
      url: "acceso.php",
      //Definimos el tipo de método de envío
      type: "POST",
      //Definimos el tipo de datos que vamos a enviar y recibir
      dataType: "HTML",
      //Definimos la información que vamos a enviar
      data: formData,
      //Deshabilitamos el caché
      cache: false,
      //No especificamos el contentType
      contentType: false,
      //No permitimos que los datos pasen como un objeto
      processData: false
   }).done(function(echo){
      //Una vez que recibimos respuesta
      //comprobamos si la respuesta no es vacía
      if (echo !== "") {
         //Si hay respuesta (error), mostramos el mensaje
         mensaje.html(echo);
         mensaje.slideDown(500);
      } else {
         //Si no hay respuesta, redirecionamos a donde sea necesario
         //Si está vacío, recarga la página
         window.location.replace("");
      }
   });
});

//Enviar datos de registro
$("#registro").on("submit", function(e){
   //Evitamos que se envíe por defecto
   e.preventDefault();
   //Creamos un FormData con los datos del mismo formulario
   var formData = new FormData(document.getElementById("registro"));

   //Llamamos a la función AJAX de jQuery
   $.ajax({
      //Definimos la URL del archivo al cual vamos a enviar los datos
      url: "registrar.php",
      //Definimos el tipo de método de envío
      type: "POST",
      //Definimos el tipo de datos que vamos a enviar y recibir
      dataType: "HTML",
      //Definimos la información que vamos a enviar
      data: formData,
      //Deshabilitamos el caché
      cache: false,
      //No especificamos el contentType
      contentType: false,
      //No permitimos que los datos pasen como un objeto
      processData: false
   }).done(function(echo){
      //Cuando recibamos respuesta, la mostramos
      mensaje.html(echo);
      mensaje.slideDown(500);
   });
});