function validarYEnviar(event) {
    var email = document.getElementById("email").value;
    var terms = document.getElementById("terms").checked;
    var errores = [];

    if (email.trim() === "") {
        errores.push("El campo de correo electrónico es obligatorio.");
    }

    if (!terms) {
        errores.push("Debes aceptar nuestros términos legales.");
    }

    if (errores.length > 0) {
        var mensajeError = errores.join("\n");
        console.log("Errores en el formulario:");
        console.log(mensajeError);
        alert(mensajeError);
        event.preventDefault(); 
    } else {
        console.log("Formulario validado con éxito. Enviando datos al servidor.");
        window.location.href = "http://testeamos.com/cf14092023/suscripcion-exitosa=?";
        event.preventDefault();
    }
}
