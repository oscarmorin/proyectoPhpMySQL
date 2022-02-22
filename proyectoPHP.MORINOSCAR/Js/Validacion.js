// Validaciones Formulario

function CheckForm() {

	//Mensaje y control de error

	var mensaje  = "ATENCION!!!...\n";
	var error = false;

	//capturar datos del Formulario

	var nombre    	   = document.getElementById("name").value; 
	var edad  	 	   = document.getElementById("edad").value; 
	var origen         = document.getElementById("value").value; 
	var disciplina	   = document.getElementById("disciplina").value; 

	if (nombre=="" || edad=="" || origen=="" || disciplina=="") {
		mensaje = mensaje + "Todos los campos son obligatorios\n";
		error = true;
	} 
	
	if (nombre.length > 50) {
		mensaje = mensaje + "El nombre no puede ser mayor a 50 caracteres\n";
		error = true;
	}
	
	if (edad.length > 2) {
		mensaje = mensaje + "La edad no puede ser mayor a 2 caracteres\n";
		error = true;
	}

	// Controlar error formulario

	if (error){
		window.alert(mensaje);
	} else {
		var msj = 'Felicidades...!!! Registro Exitoso';
		alert(msj);
		document.getElementById("Registrarse").submit();
		
	}

}

function MoDis (){

	//control de error
	var error = false;

	//capturar datos del Formulario

	var modificar2    	   = document.getElementById("Dis").value; 

		if (modificar2=="") {
		mensaje = "ATENCION!!!... El campo Disciplinas no puede estar vacío\n";
		error = true;
	}

	if (error){
		window.alert(mensaje);
	} else {
		var msj = 'Felicidades...!!! Se ha modificado la disciplina correctamente';
		alert(msj);
		document.getElementById("Registrarse").submit();
		
	}
}

function Bus (){

	//control de error

	var error = false;

	//capturar datos del Formulario

	var buscar    	   = document.getElementById("ID").value;

		if (buscar=="") {
		mensaje = "ATENCION!!!...El campo ID Atleta no puede estar vacío\n";
		error = true;
	}

	if (error){
		window.alert(mensaje);
	} else {
		document.getElementById("Registrarse").submit();
	}
}

function Bus2 (){

	//control de error
	var error = false;

	//capturar datos del Formulario

	var buscar    	   = document.getElementById("ID").value;

		if (buscar=="") {
		mensaje = "ATENCION!!!...El campo ID Disciplina no puede estar vacío\n";
		error = true;
	}

	if (error){
		window.alert(mensaje);
	} else {
		document.getElementById("Registrarse").submit();
	}
}

function Borrar (){

	// solicita confirmación para eliminar
    var confirma = window.confirm("Desea realmente modificar el estado del Atleta?");
    // evaluar confirmación
    if (confirma) {
        // enviar formulario
        
        var msj = 'Felicidades...!!! Se ha modificado el estado del Atleta correctamente';
		alert(msj);
		document.getElementById("Registrarse").submit();
    } // endif
}

function Act (){

	//control de error
	var error = false;

	//capturar datos del Formulario

	var id    	   = document.getElementById("idr").value;
	var nom    	   = document.getElementById("Nom").value;
	var ed    	   = document.getElementById("Edad").value;
	var ori    	   = document.getElementById("value").value;
	var dis    	   = document.getElementById("disciplina").value;

		if (id=="" || nom=="" || ed=="" || ori=="" || dis=="") {
		mensaje = "ATENCION!!!...Todos los campos son obligatorios para modificar\n";
		error = true;
	}

	if (error){
		window.alert(mensaje);
	} else {

	var confirma = window.confirm("¿Desea realmente modificar los datos del Atleta?");
    // evaluar confirmación
    if (confirma) {
        // enviar formulario
        
        var msj = 'Felicidades...!!! Se ha modificado el Atleta correctamente';
		alert(msj);
		document.getElementById("Registrarse").submit();
    } // endif
}

}

// Funciones de los Botones Redireccionar `

function Ingresar() {
	window.location.href="Registrarse.php";	
}

function NewDis() {
	window.location.href="NewDis.php";	
}

function Modificar() {
	window.location.href="Modificar.php";	
}

function Modificar2() {
	window.location.href="Modificar2.php";	
}

function Atletas() {
	window.location.href="Atletas.php";	
}

function Disciplinas () {
	window.location.href="Disciplinas.php";	
}

function Eliminar() {
	window.location.href="Eliminar.php";	
}

function Regresar (){

	window.location.href="Consultas.php";
}
function Inicio (){

	window.location.href="Inicio.php";
}
function Md (){

	window.location.href="Modificar.php";
}