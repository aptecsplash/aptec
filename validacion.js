function validar(){
  var nombres,apellidos,email,sucursal,monto,ticket;
  nombres = document.getElementById('nombres').value;
  apellidos = document.getElementById('apellidos').value;

  var expresion = /\w+@\w+\.+[a-z]/;
  if(nombres ===""||apellidos ===""){
    alert("Todos los campos son obligatorios")
    return false;
  }
  else if(nombres.length>20){
  alert("el nombre es muy largo");
  return false;
  }
  else if(apellidos.length>20){
  alert("el apellidos es muy largo");
  return false;
  }
}
