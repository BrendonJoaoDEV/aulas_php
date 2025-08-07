document.addEventListener('DOMContentLoaded', () => {
    const formulario = document.getElementById('formulario');
    const primeiroNumero = document.getElementById('primeiro-numero');
    const segundoNumero = document.getElementById('segundo-numero');
    const operacao = document.getElementById('escolha-operacao');
    const saidaErro = document.getElementById('erro');

    formulario.addEventListener('submit', (event) => {
        event.preventDefault();
        let validacao = validarCalculo(primeiroNumero.value, segundoNumero.value, operacao.value);
        saidaErro.value = validacao.erro;
        formulario.submit();
    });
});

function validarCalculo(numero1, numero2, operacao) {
    if (!numero1 || numero1.trim() === "") {
        return {valido: false, erro: "Por favor preencha o primeiro campo!"}
    }

    if (!numero2 || numero2.trim() === "") {
        return {valido: false, erro: "Por favor preencha o segundo campo!"}
    }

    if (numero1 == Number(numero1)) {
        if (numero2 == Number(numero2)) {
            if (numero2 == 0 && operacao === "divisao") {
                return {valido: false, erro: "Divisão por zero não permitida!"}
            } else {
                return {valido: true, erro: "Tudo certo!"}
            }
        } else {
            return {valido: false, erro: "Por favor preencha o segundo campo com um número!"}
        }
    } else {
        return {valido: false, erro: "Por favor preencha o primeiro campo com um número!"}
    }
}