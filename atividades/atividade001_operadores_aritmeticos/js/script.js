document.addEventListener('DOMContentLoaded', () => {
    const formulario = document.getElementById('formulario');
    const primeiroNumero = document.getElementById('primeiro-numero');
    const segundoNumero = document.getElementById('segundo-numero');
    const saidaErro = document.getElementById('erro')

    formulario.addEventListener('submit', (event) => {
        let validacao = validarNumero(primeiroNumero);
        if (!validacao.valido) {
            saidaErro.textContent = validacao.erro;
        }

        validacao = validarNumero(segundoNumero);
        if (!validacao.valido) {
            saidaErro.textContent = validacao.erro;
        }
    })
})

function validarNumero(numero) {
    if (numero == Number(numero)) {
        return {valido: true, erro: "Tudo certo!"}
    } else {
        return {valido: false, erro: "Por favor digite um número!"}
    }
}