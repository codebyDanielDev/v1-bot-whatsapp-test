const socket = io();

socket.on('qr', (qr) => {
    const qrImage = document.getElementById('qr-code-container');
    qrImage.innerHTML = `<img src="${qr}" alt="QR Code">`;
});

socket.on('log', (message) => {
    const statusDiv = document.getElementById('status');
    statusDiv.innerHTML = message;
});

socket.on('qrstatus', (status) => {
    const qrStatus = document.getElementById('qr-code-container');
    qrStatus.innerHTML = `<img src="${status}" alt="Status">`;
});
