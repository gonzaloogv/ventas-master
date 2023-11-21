boton = document.getElementById("btnSubmit");
fechasalida = document.getElementById("inputCheckIn");
fechavuelta = document.getElementById("inputCheckOut");


function fechaDisponible(event) {
    event.preventDefault();
    var disponible= document.getElementById("btnSubmit").value;
    let guardardisponible = disponible+" Tiene disponibilidad"
    console.log(guardardisponible)
    if (guardardisponible.trim() !=='') {
        document.getElementById("btnSubmit").innerText = guardardisponible;
    } else {
        alert("Por favor ingrese las fechas");
    }


}
function guardarCodigoPostal(event) {
    event.preventDefault();
    // Obtener el valor del input
    var codigoPostal = document.getElementById("codigoPostalInput").value;
    let cpguardado = "CP: "+codigoPostal;
    console.log(cpguardado);
    // Verificar si se ingresó un código postal
    if (cpguardado.trim() !== '') {
        // Mostrar el código postal en la página
        document.getElementById('codigoPostalMostrado').innerText = cpguardado;
    } else {
        alert('Por favor, ingrese un código postal válido.');
    }

}