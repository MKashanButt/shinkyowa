function updateTime() {
    var now = new Date().toLocaleString('en-US', { timeZone: 'Asia/Tokyo' });
    document.getElementById('current-time').textContent = now.split(',')[1];
}

updateTime();
setInterval(updateTime, 1000);