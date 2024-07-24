const textEl = document.getElementById('titletext')
const text = 'Stroke of Genius!'
let idx = 1
let speed = 300

writeText()

function writeText() {
    textEl.innerText = text.slice(0, idx)

    idx++

    if(idx > text.length) {
        idx = 1
    }

    setTimeout(writeText, speed)
}
