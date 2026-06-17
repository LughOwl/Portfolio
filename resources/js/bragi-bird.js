// Back to top
const btn = document.getElementById('back-to-top');
if (btn) {
    window.addEventListener('scroll', () => btn.classList.toggle('visible', window.scrollY > 400));
    btn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
}

// Custom audio player
const player  = document.getElementById('bb-player');
const audio   = document.getElementById('bb-audio');
const playBtn = document.getElementById('bb-play-btn');

if (player && audio && playBtn) {
    const iconPlay  = playBtn.querySelector('.bb-icon-play');
    const iconPause = playBtn.querySelector('.bb-icon-pause');
    const fill      = document.getElementById('bb-progress-fill');
    const bar       = document.getElementById('bb-progress-bar');
    const timeCur   = document.getElementById('bb-time-current');
    const timeTotal = document.getElementById('bb-time-total');

    const fmt = s => {
        const m = Math.floor(s / 60);
        const sec = Math.floor(s % 60);
        return `${m}:${sec.toString().padStart(2, '0')}`;
    };

    audio.src = player.dataset.src;

    playBtn.addEventListener('click', () => {
        if (audio.paused) {
            audio.play();
            iconPlay.style.display  = 'none';
            iconPause.style.display = '';
        } else {
            audio.pause();
            iconPlay.style.display  = '';
            iconPause.style.display = 'none';
        }
    });

    audio.addEventListener('timeupdate', () => {
        if (!audio.duration) return;
        const pct = (audio.currentTime / audio.duration) * 100;
        fill.style.width = pct + '%';
        timeCur.textContent = fmt(audio.currentTime);
    });

    audio.addEventListener('loadedmetadata', () => {
        timeTotal.textContent = fmt(audio.duration);
    });

    audio.addEventListener('ended', () => {
        iconPlay.style.display  = '';
        iconPause.style.display = 'none';
        fill.style.width = '0%';
        timeCur.textContent = '0:00';
    });

    bar.addEventListener('click', e => {
        if (!audio.duration) return;
        const rect = bar.getBoundingClientRect();
        audio.currentTime = ((e.clientX - rect.left) / rect.width) * audio.duration;
    });
}
