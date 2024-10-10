$.validator.addMethod('toString', function(value, element) {
    return  /^[a-zA-Z]+$/.test(value);
}, "Solo letras");

$('#form-persona').validate({
    rules: {
        Nombre:{
            required: true,
            minlength: 3,
            toString: true
        },
        Apellido:{
            required: true,
            minlength: 3,
            toString: true
        },
        NroDni:{
            required: true,
            minlength: 8,
            maxlength: 8,
            digits: true
        },
    },
    messages: {
        Nombre: {
            required: 'El campo es requerido',
            minlength: 'El campo debe tener al menos 3 caracteres',
            toString: 'Solo letras'
        },
        Apellido: {
            required: 'El campo es requerido',
            minlength: 'El campo debe tener al menos 3 caracteres',
            toString: 'Solo letras'
        },
        NroDni: {
            required: 'El campo es requerido',
            minlength: 'El campo debe tener 8 caracteres',
            maxlength: 'El campo debe tener 8 caracteres',
            digits: 'Solo números',
        },
    }
})