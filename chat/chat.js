const chat = document.querySelector('#chat');
const message = document.querySelector('#message');
const baseUrl = 'http://localhost/chat';

function readChat() {
    fetch(`${baseUrl}/chat-read.php`)
        .then(res => res.text())
        .then(res => {
            chat.value = res;
        });
    setTimeout(readChat, 1000);

}

readChat();

message.addEventListener('keyup', e => {
    if (e.keyCode === 13) {
        console.log(message.value);
        fetch(`${baseUrl}/chat-write.php`, {
            method: 'post',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: `text=${message.value}`
        });
        message.value = '';
    }
});