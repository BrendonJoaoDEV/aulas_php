import { validarVazio, validarNumero } from './utils/utils.js';

document.addEventListener('DOMContentLoaded', () => {
    const etrNumero = document.getElementById('etr-numero');
    const saidaErro = document.getElementById('erro');
    const btnCalcular = document.getElementById('btn-calcular');
    const form = document.getElementById('formulario');

    btnCalcular.addEventListener('click', (event) => {
        event.preventDefault();

        let validacao = validarVazio(etrNumero.value, "número");
        if (!validacao.valido) {
            return saidaErro.textContent = validacao.erro;
        } 
    
        validacao = validarNumero(etrNumero.value, "número");
        if (!validacao.valido) {
            return saidaErro.textContent = validacao.erro;
        }

        if (validacao.valido) {
            return form.submit();
        }
    });
});