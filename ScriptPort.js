
function validateForm() {
  let x = document.forms["myForm"]["name"].value;
  let y = document.forms["myForm"]["email"].value;
  let z = document.forms["myForm"]["message"].value;
  let a = document.forms["myForm"]["phone"].value;

  if (x, y, z == "") {
    return false;
  } 

  if (a == "") {
    alert ("Mensagem Enviada com Sucesso");
  } else {
    alert ("Mensagem Enviada com Sucesso");
  }
  return true;
}
