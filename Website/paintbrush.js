const brush = document.querySelector('.brush');
let left = 0;
const interval = setInterval(() => {
  brush.style.left = `${left}px`;
  left += 5;
  if (left + brush.offsetWidth > window.innerWidth - 20) {
    brush.style.display = 'none'; // Add this line to hide the brush
    clearInterval(interval);
  }
}, 11);