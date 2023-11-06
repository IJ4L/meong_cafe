const turntable = document.getElementById('turntable');
const music = document.getElementById('music');
let isPlaying = false;
let animationId = null;

turntable.addEventListener('click', () => {
    if (isPlaying) {
        pauseMusic();
    } else {
        playMusic();
    }
});

function playMusic() {
    isPlaying = true;
    turntable.classList.add('playing');
    music.play();
    animateTurntable();
}

function pauseMusic() {
    isPlaying = false;
    turntable.classList.remove('playing');
    music.pause();
    cancelAnimationFrame(animationId);
}

function animateTurntable() {
    const rotationSpeed = 0.1;
    const currentTime = Date.now();
    const degrees = (currentTime / rotationSpeed) % 360;
    turntable.style.transform = `rotate(${degrees}deg)`;
    animationId = requestAnimationFrame(animateTurntable);
}

