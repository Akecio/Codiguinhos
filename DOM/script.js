const button = document.getElementById('button')
const notificacao = document.getElementById('notificacoes')

const mensagen = [
    'Tá de bobs ?',
    'Que é gostoso ?',
    'Oh porra ein',
]

button.addEventListener('click', () => criarNotificacao())

function criarNotificacao() {
    const noti = document.createElement('div')
    noti.classList.add('notificacao')

    noti.innerText = getRandomMensagem()

    notificacao.appendChild(noti)

    setTimeout(() => {
        noti.remove()
    }, 3000)
}


function getRandomMensagem() {
    return mensagen[Math.floor(Math.random() * mensagen.length)]
}