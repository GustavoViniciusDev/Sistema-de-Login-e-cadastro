
function validaCadastro(){
const campoNome = document.getElementById('username');
const campoEmail = document.getElementById('email');
const campoSenha = document.getElementById('password');
const campoConfSenha = document.getElementById('confpassword');


  if(campoNome.value =="" ){
      alert('O campo nome de usuario é obrigatorio');
      return false;
  }
  else if(campoEmail.value == ""){
    alert('O campo email é obrigatorio');
    return false;
  }
  else if(campoSenha.value == ""){
      alert('O campo senha é obrigatorio');
      return false;
  }
  else if(campoConfSenha.value == ""){
      alert('O campo confirmar senha é obrigatorio');
      return false;
  }
  else if (campoSenha.value != campoConfSenha.value) {
    alert('As senhas nao coincidem');
    return false; //Parar a execucao
}
return true;

}

function validaLogin(){
  const campoNome = document.getElementById('username');
  const campoSenha = document.getElementById('password');

  if(campoNome.value =="" ){
    alert('O campo nome de usuario é obrigatorio');
    return false;
  }
  else if(campoSenha.value == ""){
    alert('O campo senha é obrigatorio');
    return false;
  }
  return true;
}






