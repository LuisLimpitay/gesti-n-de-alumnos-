// lo mismo pero usando json
onsubmit return 
let usuario={
    "info":{"apellido":"","nombres":"","cuenta":"","email":""},
    "resetear":function (){
        usuario.info.apellido = usuario.info.nombres = usuario.info.cuenta = usuario.info.email = "";
    
    },
    "validar":function(form){
        usuario.info.apellido = form.textApellido.value;
        usuario.info.nombres = form.textNombre.value;
        
        if(usuario.info.apellido === ""){
            let alerta = document.getElementById("divAlerta");
            while(alerta.hasChildNodes()) {
                alerta.removeChild(alerta.firstChild);
            }
            let strong = document.createElement("strong");
            strong.appendChild(document.createTextNode("Mensaje:"));
            alerta.appendChild(strong);
            alerta.appendChild(document.createTextNode(" Ingrese el apellido"));
            alerta.setAttribute("style","display:block;");
            textApellido.focus();
            return false;
        }
        if(usuario.info.nombres === ""){
            let alerta = document.getElementById("divAlerta");
            while(alerta.hasChildNodes()) {
                alerta.removeChild(alerta.firstChild);
            }
            let strong = document.createElement("strong");
            strong.appendChild(document.createTextNode("Mensaje:"));
            alerta.appendChild(strong);
            alerta.appendChild(document.createTextNode(" Ingrese el nombre"));
            alerta.setAttribute("style","display:block;");
            textNombre.focus();
            return false;
        }
    }
};