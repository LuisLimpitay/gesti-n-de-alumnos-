// mediante el dom
/*
function  validarForm(form){
    var alerta = document.getElementById("divAlerta");
    
    if(form.textApellido.value === "")
    {
       //alert("Ingrese el apellido");
       
        
       while(alerta.hasChildNodes()) {
           alerta.removeChild(alerta.firstChild);
       }
       
       var strong = document.createElement("strong");
       strong.appendChild(document.createTextNode("Mensaje:"));
       alerta.appendChild(strong);
       alerta.appendChild(document.createTextNode(" Ingrese el apellido"));
       
       //alerta.style.display = "block";
       alerta.setAttribute("style","display:block;");
       
        form.textApellido.focus();
        return false;
    }
    else if(form.textApellido.value === "2")
    {
      alert("debe ingresar entre 3 y 8 caracteres ");
      form.textApellido.focus();
      return false;

    }

    /////////////////////////////////////////////////////////
    else if(form.textNombre.value==""){
        
        while(alerta.hasChildNodes()) {
           alerta.removeChild(alerta.firstChild);
       }
       
       var strong = document.createElement("strong");
       strong.appendChild(document.createTextNode("Mensaje:"));    
       alerta.appendChild(strong);
       alerta.appendChild(document.createTextNode(" Ingrese el Nombre"));
        
        //alerta.style.display = "block";
       alerta.setAttribute("style","display:block;");
        
        form.textNombre.focus();
        return false;
    }
    
    //////////////////////////////////////////////////////////////////
    else if(form.textUsuario.value==""){
        
        while(alerta.hasChildNodes()) {
           alerta.removeChild(alerta.firstChild);
       }
       
       var strong = document.createElement("strong");
       strong.appendChild(document.createTextNode("Mensaje:"));    
       alerta.appendChild(strong);
       alerta.appendChild(document.createTextNode(" Ingrese el Nombre de Usuario"));
        
        //alerta.style.display = "block";
       alerta.setAttribute("style","display:block;");
        
        form.textUsuario.focus();
        return false;
    }
  }
  /*
    //////////////////////////////////////////////////////////////////
    
    //////////////////////////////////////////////////////////////////////
    if(form.contraseña.value === ""){
       // alert("Ingrese el apellido");
       
       while(alerta.hasChildNodes()) {
           alerta.removeChild(alerta.firstChild);
       }
       
       var strong = document.createElement("strong");
       strong.appendChild(document.createTextNode("Mensaje:"));
       alerta.appendChild(strong);
       alerta.appendChild(document.createTextNode(" Ingrese la contraseña"));
       
       //alerta.style.display = "block";
       alerta.setAttribute("style","display:block;");
       
        contraseña.focus();
        return false;
    }

}
/*
  //-------------------------------------------------------  
    
    let form = document.forms['formUsuario'];
    if(form.textApellido.value==""){
        alert("Ingrese el apellido");
        textApellido.focus();
        return false;
    }
    if(form.textNombre.value==""){
        alert("Ingrese el Nombre");
        form.textNombre.focus();
        return false;
    }
 //   ------------------------------------------------------
    
    var textApellido = document.getElementById("textApellido");
    if(textApellido.value==""){
        alert("Ingrese el apellido");
        textApellido.focus();
        return false;
    }
    var textNombre = document.getElementById("textNombre");
    if(textApellido.value==""){
        alert("Ingrese el nombre");
        return false;
    
    
    return true;
}
*/
//VALIDAR CAMPOS DE TEXTOS DONDE SE DEBE REGISTRAR USUARIO
function validacion(){
let apellido = document.getElementById("textApellido").value;

let nombre = document.getElementById("textNombre").value;

let cuenta = document.getElementById("textUsuario").value;

let pass = document.getElementById("contraseña").value;

let pass2 = document.getElementById("contraseña2").value;

let email= document.getElementById("correo").value;

let email2= document.getElementById("correo2").value;
///////////////////////////////////////////////////
if(apellido===""){
  alert("Debe ingresar el Apellido/s");  
  return false;
}
else if (apellido.length < 1 || apellido.length > 60)
{
  alert("Debe ingresar entre 1 y 60 CARACTERES");
  return false;
}
//////////////////////////////////////////////////////
if(nombre===""){
  alert("Debe ingresar el Nombre");  
  return false;
}
else if (nombre.length < 1 || nombre.length > 60)
{
  alert("Debe ingresar entre 1 y 60 CARACTERES");
  return false;
}
///////////////////////////////////////////////////////
if(cuenta===""){
  alert("Debe ingresar una Cuenta de Usuario");  
  return false; 
}
else if (cuenta.length < 6 || cuenta.length > 30)
{
  alert("Debe ingresar entre 6 y 30 caracteres para el NOMBRE DE USUARIO");
  return false;
}
///////////////////////////////////////////////////////////////
if(pass===""){
  alert("Debe Ingresar una Contraseña");  
  return false;
}
else if (pass.length < 8 || pass.length > 15)
{
  alert("Debe ingresar entre 8 y 15 CARACTERES para la Contraseña");
  return false;
}
////////////////////////////////////////////////////////
if(pass2===""){
  alert("Debe confirmar la contraseña");  
  return false;
}
else if (pass2.length < 8 || pass2.length > 15)
{
  alert("Debe ingresar entre 8 y 15 CARACTERES para confirmar la Contraseña");
  return false;
}
///////////////////////////////////////////////////////////
if(email===""){
  alert("Ingrese su Correo electronico");  
  return false;
}
else if (email.length < 4 || email.length > 120)
{
  alert("Debe ingresar entre 4 y 120 CARACTERES para confirmar la Contraseña");
  return false;
}
////////////////////////////////////////////////////////////
if(email2===""){
  alert("Debe Confirmar su Correo electronico");  
  return false;
}
else if (email2.length < 8 || email2.length > 15)
{
  alert("Debe ingresar entre 8 y 15 caracteres para confirmar el CORREO ");
  return false;
}
}


// cantidad de caracteres min y max
