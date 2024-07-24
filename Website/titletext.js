const textEl = document.getElementById('titletext');
const text = 'Stroke of Genius!';
let idx = 1;
let speed = 275;

writeText();

function writeText() {
    textEl.innerText = text.slice(0, idx);

    idx++;

    if (idx > text.length) {
        let blinkInterval = setInterval(() => {
            textEl.style.visibility = textEl.style.visibility === 'visible' ? 'hidden' : 'visible';
        }, 400); // Toggle visibility every 500ms to create a blinking effect

        setTimeout(() => { // Wait for 3 seconds before restarting
            clearInterval(blinkInterval); // Stop blinking
            textEl.style.visibility = 'visible'; // Ensure text is visible before restarting
            idx = 1;
            writeText();
        }, 3500); 
    } else {
        setTimeout(writeText, speed);
    }
}
