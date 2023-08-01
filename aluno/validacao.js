const form = document.querySelector("#form");
const nomeInput = document.querySelector("#nome");
const idadeInput = document.querySelector("#idade");
const enderecoInput = document.querySelector("#endereco");
const datanascimentoInput = document.querySelector("#datanascimento");
const  estatusInput= document.querySelector("#estatus");
const  matriculaInput= document.querySelector("#matricula");

form.addEventListener("submit", (event) => { 
    event.preventDefault();

    if (nomeInput.value === "") {
        alert("Por favor, preencha o seu nome");
        return;
    }

    if (idadeInput.value === "") {
        alert("Por favor, preencha o seu idade");
        return;
    }

    if (matriculaInput.value === "") {
        alert("Por favor, preencha o sua matrícula");
        return;
    }
    form.submit();
});

