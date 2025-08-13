import { validarVazio, validarNumero } from './utils/utils.js';

document.addEventListener('DOMContentLoaded', () => {
    const etrNumero = document.getElementById('etr-numero');
    const saidaErro = document.getElementById('erro');
    const btnCalcular = document.getElementById('btn-calcular');

    btnCalcular.addEventListener('click', (event) => {
        // event.preventDefault();

        let validacao = validarVazio(etrNumero.value);
        if (!validacao.valido) {
            saidaErro.textContent = validacao.erro;
        }
    
        validacao = validarNumero(etrNumero.value);
        if (!validacao.valido) {
            saidaErro.textContent = validacao.erro;
        } 
    });
});