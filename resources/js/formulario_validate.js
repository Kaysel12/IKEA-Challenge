// const inputs = document.querySelectorAll(".formulario__input");
// const botonEnvio = document.querySelector(".submit");

const expresiones = {
    // Expresion que puede llevar letras, espacios y asentos
    nombre: /^[a-zA-Zá-Ÿ\s]{1,20}$/,
    // Expresion que puede llevar letras, espacios y asentos
    apellido: /^[a-zA-Zá-Ÿ\s]{5,}$/,
    // Expresion para los telefonos, 15 numeros
    telefono: /^\d{15}$/,
    // Expresion para un correo
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z8-9-]+[a-zA-Z0-9-.]+$/,
    // Expresion desde 2 digitos
    edad: /^\d{2}$/
};

let campos = {
    nombre: false,
    apellido: false,
    telefono: false,
    correo: false,
    edad: false
};

let funcionParametros = (expresion, contadorInputs, campo) => {
    // if (expresion.test(contadorInputs.value)) {
    //     document.querySelector(`#validacion-${campo}`).classList.remove("error-aviso", "fa-times-circle");
    //     document.querySelector(`#validacion-${campo}`).classList.add("valido", "fa-check-circle");
    //     document.querySelector(`#grupo-${campo}`).classList.remove("error", "error-aviso");
    //     document.querySelector(`.formulario__error-${campo}`).classList.remove("display");
    //     campos[campo] = true;
    // } else {
    //     document.querySelector(`#validacion-${campo}`).classList.remove("valido", "fa-check-circle");
    //     document.querySelector(`#validacion-${campo}`).classList.add("error-aviso", "fa-times-circle");
    //     document.querySelector(`#grupo-${campo}`).classList.add("error", "error-aviso");
    //     document.querySelector(`.formulario__error-${campo}`).classList.add("display");
    //     campos[campo] = false;
    // };

    if (expresion.test(contadorInputs.value)) {
        document.querySelector(`#`)
    } else {
        
    }
};

let validarInputs = (e) => {
    // switch (e.target.name) {
    //     case "nombre":
    //         funcionParametros(expresiones.nombre, inputs[0], "nombre");
    //         break;
    //     case "apellido":
    //         funcionParametros(expresiones.apellido, inputs[1], "apellido");
    //         break;
    //     case "telefono":
    //         funcionParametros(expresiones.telefono, inputs[2], "telefono");
    //         break;
    //     case "correo":
    //         funcionParametros(expresiones.correo, inputs[3], "correo");
    //         break;
    //     case "edad":
    //         funcionParametros(expresiones.edad, inputs[4], "edad");
    //         break;
    //     default:
    //         break;
    // };
};

inputs.forEach(input => {
    input.addEventListener("keyup", validarInputs);
    input.addEventListener("blur", validarInputs);
});

// botonEnvio.addEventListener("click", (e) => {
    // e.preventDefault();
    // let check = document.querySelector("#checkbox");

    // if (campos.nombre && campos.usuario && campos.password && campos.telefono && campos.correo && campos.password2 && check.checked) {
    //     document.querySelector(".formulario__aviso").classList.remove("display2");
    //     document.querySelector(".enviado").classList.add("display2");
    //     inputs.forEach(input => {
    //         input.value = "";
    //     });
    // }else{
    //     document.querySelector(".enviado").classList.remove("display2");
    //     document.querySelector(".formulario__aviso").classList.add("display2");
    // };
// });