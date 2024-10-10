$.validator.addMethod("RequiredDni", function(value, element) {
    return /^[0-9]{8}$/.test(value);
}, "Por favor, ingrese un DNI valido.");

$.validator.addMethod("soloLetras", function(value, element) {
    return /^[a-zA-Z]+$/.test(value);
}, "Por favor, ingrese solo letras.");

$("#form-persona").validate({
        rules:{
            
            nombre: {
                required: true ,
                minlenght : 3 ,
                maxlenght : 20 , 
                soloLetras:true
            },

            apellido: {
                required: true,
                minlenght : 2 ,
                maxlenght : 20 ,
                soloLetras:true
            },

            dni:{
                number :true,
                RequiredDni:true
            }
        },
        messages:{

            nombre:{
                required: "Porfavor,Ingresa tu nombre" ,
                minlenght: "Tu nombre debe tener al menos 3 caracteres" ,
                maxlenght: "Tu nombre no tiene que tener mas de 20 caracteres" ,
                soloLetras: "Ingrese un campo de texto"
            },

            apellido:{
                required:"Por favor , ingresa su apellido",
                minlenght: "Tu apellido debe tener al menos 2 caracteres" ,
                maxlenght: "Tu apellido no tiene que tener mas de 20 caracteres" ,
                soloLetras: "Ingrese un campo de texto"
            },

            dni:{
                number : "Por favor , Ingresa un campo numerico",
                RequiredDni: "Por favor , Ingresa un DNI valido"
            }
        }
});


