const form = document.querySelector("#form");
const nomeInput = document.querySelector("#nome");
const cpfInput = document.querySelector("#cpf");
const  matriculaInput= document.querySelector("#matricula");

form.addEventListener("submit", (event) => { 
    event.preventDefault();

    if (nomeInput.value === "") {
        alert("Por favor, preencha o seu nome");
        return;
    }

    if (cpfInput.value === "") {
        alert("Por favor, preencha o seu cpf");
        return;
    }


    if (matriculaInput.value === "") {
        alert("Por favor, preencha a sua matrícula");
        return;
    }
    form.submit();
});