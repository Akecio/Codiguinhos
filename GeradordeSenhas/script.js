const resultadoEl = document.getElementById('resultado')

function gerarSenha() {
    resultadoEl.innerText = Math.random().toString(36).slice(2) +
    Math.random().toString(36).toUpperCase().slice(2)
}

gerador.addEventListener('click', gerarSenha)

copiar.addEventListener('click', () => {
const textArea = document.createElement('textArea')
const senha = resultadoEl.innerText

textArea.value = senha
document.body.appendChild(textArea)
textArea.select()
document.execCommand('copy')
textArea.remove()
alert('Senha Copiada !')
})

