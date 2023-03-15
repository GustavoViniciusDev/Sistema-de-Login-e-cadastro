

const campoNome = document.getElementById('username');
const campoEmail = document.getElementById('email');
const campoSenha = document.getElementById('password');
const campoConfSenha = document.getElementById('confpassword');
const btn_cadastrar = document.getElementById('cadastrar');

btn_cadastrar.addEventListener('click', function(){
  if(campoNome.value =="" ){
      alert('O campo nome de usuario é obrigatorio');
      return;
  }
  else if(campoEmail.value == ""){
    alert('O campo email é obrigatorio');
    return;
  }
  else if(campoSenha.value == ""){
      alert('O campo senha é obrigatorio');
      return;
  }
  else if(campoConfSenha.value == ""){
      alert('O campo confirmar senha é obrigatorio');
      return;
  }
})
