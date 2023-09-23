const form = document.querySelector("form");
const fields = document.querySelectorAll("[required]")

if (form) {
  form.addEventListener("submit", event => {
    for (field of fields) {
        const validation = ValidateField(field);
        if (validation()){
         var error=true;
         event.preventDefault();
        }
      }
      if (!error) 
      {
        form.action="processa_formulario.php";
      }
  });
}

function ValidateField(field) {
  
  // logica para verificar se existem erros
  function verifyErrors() {
    let foundError = false;
    
    for (let error in field.validity) {
    
      if (field.validity[error] && !field.validity.valid) {
        foundError = error
        return foundError;
      }
    }

    if (field.name == 'pass') {
      var senha = field.value;
      var regex = /^(?=(?:.*?[a-zA-Z]){1})(?=(?:.*?[0-9]){1})(?=(?:.*?[!@#$%*()_+^&}{:;?.]){1})(?!.*\s)[0-9a-zA-Z!@#$%;*(){}_+^&]*$/;
      if (senha.length < 8) {
        foundError = 'erroPassMatch';
        return foundError;
      }
      else if (!regex.exec(senha)) {
        foundError = 'erroPassMatch';
        return foundError;
      }
    }

    if (field.name == 'pass-confirm') {
      var senhaConfirmacao = field.value;
      var senha = document.getElementById('pass').value

      if (senha != senhaConfirmacao) {
        foundError = 'erroPassConfirm';
        return foundError;
      }
    }

    if (field.name == 'usuario') {
      var usuario = field.value;
      var regex = /^(?=(?:.*?[a-zA-Z]){1})(?=(?:.*?[0-9]){1})(?!.*\s)[0-9a-zA-Z!@#$%;*(){}_+^&]*$/;

      if (!regex.exec(usuario)) {
        foundError = 'erroUserMatch';
        return foundError;

      }

    }

    return foundError;
  }

  //cria e obtem msg de erro
  function customMessage(typeError) {
    const messages = {
      nome: {
        valueMissing: "campo obrigatório!"
      },
      sobrenome: {
        valueMissing: "campo obrigatório!"
      },
      usuario: {
        valueMissing: "campo obrigatório!",
        'erroUserMatch': "usuário deve conter letras e numeros"
      },
      email: {
        valueMissing: "campo obrigatório!",
        typeMismatch: "preencha um email válido!"
      },
      'telefone-1': {
        valueMissing: "campo obrigatório!",
        typeMismatch: "preencha um telefone válido!",
        'erroTelMatch': "preencha um telefone válido!",
      },
      'telefone-2': {
        valueMissing: "campo obrigatório!",
        typeMismatch: "preencha um telefone válido!"
      },
      'telefone-3': {
        valueMissing: "campo obrigatório!",
        typeMismatch: "preencha um telefone válido!"
      },
      pass: {
        valueMissing: "campo obrigatório!",
        'erroPassMatch': "mínimo 8 caracteres, com letras, números e caractere especial!"
      },
      'pass-confirm': {
        valueMissing: "campo obrigatório!",
        'erroPassConfirm': "senhas estão diferentes!",
      }
    }

    return messages[field.name][typeError]
  }

  function setCustomMessage(message) {
    const spanError = field.parentNode.querySelector("span.erro-input")

    if (message) {
      spanError.innerHTML = message;
    } else {
      spanError.innerHTML = ""
    }
  }

  return function () {

    const error = verifyErrors()

    const message = customMessage(error)

    if (error) {
      console.log(error);
      console.log(message);
      field.style.borderColor = "rgba(231, 71, 71, 0.8)";
      setCustomMessage(message);
      return error
    } else {
      field.style.borderColor = "green"
      setCustomMessage()
      return false
    }
  }
}

function customValidation(event) {

  const field = event.target
  const validation = ValidateField(field)

  validation()
}

for (field of fields) {
  field.addEventListener("invalid", event => {
    event.preventDefault()

    customValidation(event)
  })
  field.addEventListener("blur", customValidation)
}

function editarTelefone(event) {
  let input = event.target
  input.value = telefone(input.value)
}

function telefone(value) {
  if (!value) return ""
  value = value.replace(/\D/g, '')
  value = value.replace(/(\d{2})(\d)/, "($1) $2")
  value = value.replace(/(\d)(\d{4})$/, "$1-$2")
  return value
}

function aparecerObrigatorio(event) {
  let tag = event.target
  let id = tag.id
  document.getElementById(id).innerText = "Campo Obrigatório!"
}
function desaparecer(event) {
  let tag = event.target
  let id = tag.id
  document.getElementById(id).innerText = "*";
}

function addTelefone(event) {

  let tagBotao = event.target;
  let divTelefone = tagBotao.parentElement;
  let id = divTelefone.id

  let seqTelefone = divTelefone.children[3].name.replace("telefone-", "");
  let novaSeqTelefone = parseInt(seqTelefone) + 1;

  if (novaSeqTelefone < 4) {
    let novaDivTelefone = document.getElementById(id).cloneNode(true);

    novaDivTelefone.id = "telefone-input-" + novaSeqTelefone;

    inputTel = novaDivTelefone.children[3]

    inputTel.name = "telefone-" + novaSeqTelefone;
    inputTel.value = "";
    inputTel.removeAttribute("required");
    inputTel.style.borderColor = "";

    p = novaDivTelefone.children[0];
    p.textContent = "Telefone " + novaSeqTelefone;

    span = novaDivTelefone.children[4];
    span.innerHTML = "";

    document.getElementById(id).after(novaDivTelefone);

    let botaoMenos = document.getElementById("menos");
    divTelefone.removeChild(tagBotao);
    divTelefone.removeChild(botaoMenos);
    divTelefone.className = divTelefone.className + " added";
  }
  else {
    alert("Inrforme no máximo 3 números de telefone!");
  }

}

function removerTelefone(event) {

  let tagBotao = event.target;
  let divTelefone = tagBotao.parentElement;

  let seqTelefone = divTelefone.children[3].name.replace("telefone-", "");

  if (seqTelefone != 1) {
    botaoMais = divTelefone.children[1];
    botaoMenos = divTelefone.children[2];

    let seqAnteriorTelefone = parseInt(seqTelefone) - 1;
    let idTelefoneAnterior = "telefone-input-" + seqAnteriorTelefone;

    divTelefoneAnterior = document.getElementById(idTelefoneAnterior)
    divTelefoneAnterior.children[0].after(botaoMais);
    divTelefoneAnterior.children[1].after(botaoMenos);
    divTelefoneAnterior.className = divTelefoneAnterior.className.replace(" added", "")


    document.getElementById("formCadastro").removeChild(divTelefone);
  }

}