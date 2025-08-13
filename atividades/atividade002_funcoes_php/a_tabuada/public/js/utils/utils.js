export function validarVazio(valor, campo) {
    if (!valor || valor.trim() === "") {
        return {valido: false, erro: `Por favor preencha o campo "${campo}"!`}
    } else {
        return {valido: true, erro: "Tudo certo!"}
    }
}

export function validarNumero(valor, campo) {
    if (valor == Number(valor)) {
        return {valido: true, erro: "Tudo certo!"}
    } else {
        return {valido: false, erro: `Por favor digite um número em "${campo}"!`}
    }
}