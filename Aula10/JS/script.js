// Função de Validação do Formulario

function validarFormulario(){
    const nome = document.getElementById("nome").Value;
    const email = document.getElementById("email").Value;
    const senha = document.getElementById("senha").Value;
    const mensagem = document.getElementById("mensagem");
}

// Verifica se todos os campos estão preenchidos

if(nome == "" || email == "" || senha == ""){
    mensagem.textContent = "Por Favor, Preencha todos os campos!";
    return false;
}

mensagem.textContent = " "; // Limpa a mensagem de erro
return true; // Permite o envio do formulario