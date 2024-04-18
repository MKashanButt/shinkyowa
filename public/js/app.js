function updateTime() {
    var now = new Date().toLocaleString('en-US', { timeZone: 'Asia/Tokyo' });
    document.getElementById('current-time').textContent = now.split(',')[1];
}

updateTime();
setInterval(updateTime, 1000);

function toggleDisplay() {
    let dialog = document.getElementById('contactDialog');
    if (dialog.style.display == "none") {
        dialog.style.display = "block"
        dialog.style.display = "flex"
    } else {
        dialog.style.display = "none"
    }
}