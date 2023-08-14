const form = document.querySelector("#form");
const nomeInput = document.querySelector("#nomedisciplina");
const chInput = document.querySelector("#ch");
const  idprofessorInput= document.querySelector("#idprofessor");

form.addEventListener("submit", (event) => { 
    event.preventDefault();

    if (nomedisciolinaInput.value === "") {
        alert("Por favor, preencha o seu nome da disciplina");
        return;
    }

    if (chInput.value === "") {
        alert("Por favor, preencha o ch");
        return;
    }

    if (idprofessorInput.value === "") {
        alert("Por favor, preencha o sua idade");
        return;
    }
    form.submit();
});

