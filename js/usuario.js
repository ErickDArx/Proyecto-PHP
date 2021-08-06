
const $usuario = document.querySelector("#usuario"),
$contrasena = document.querySelector("#contrasena"),
$btnGuardar = document.querySelector("#btnGuardar");

$btnGuardar.onclick = async () => {
    const usuario = $usuario.value,
        contrasena = $contrasena.value;
    // Pequeña validación, aunque debería hacerse del lado del servidor igualmente, aquí es pura estética
    if (!usuario) {
        return Swal.fire({
            icon: "error",
            text: "Escribe el usuario",
            timer: 700, // <- Ocultar dentro de 0.7 segundos
        });
    }
    if (!contrasena) {
        return Swal.fire({
            icon: "error",
            text: "Escribe la contraseña",
            timer: 700, // <- Ocultar dentro de 0.7 segundos
        });
    }

    // Lo que vamos a enviar a PHP
    const cargaUtil = {
        usuario: usuario,
        contrasena: contrasena,
        // Nota: podríamos hacerlo más simple, y escribir:
        // nombre,
        // En lugar de:
        // nombre: nombre
        // Pero eso podría confundir al principiante
    };
    // Codificamos...
    const cargaUtilCodificada = JSON.stringify(cargaUtil);
    // Enviamos
    try {
        const respuestaRaw = await fetch("guardar_usuario.php", {
            method: "POST",
            body: cargaUtilCodificada,
        });
        // El servidor nos responderá con JSON
        const respuesta = await respuestaRaw.json();
        if (respuesta) {

            // Y si llegamos hasta aquí, todo ha ido bien
            Swal.fire({
                icon: "success",
                text: "Te has registrado",
                timer: 700, // <- Ocultar dentro de 0.7 segundos
            });
            // Limpiamos el formulario
            $usuario.value = $contrasena.value;
        } else {
            Swal.fire({
                icon: "error",
                text: "El servidor no envió una respuesta exitosa",
            });
        }
    } catch (e) {
        // En caso de que haya un error
        Swal.fire({
            icon: "error",
            title: "Error de servidor",
            text: "Inténtalo de nuevo. El error es: " + e,
        });
    }
};