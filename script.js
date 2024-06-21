document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('myModal');
    const span = document.getElementsByClassName('close')[0];
    const modalMessage = document.getElementById('modal-message');

    // Check if there is a message to display in the modal
    const params = new URLSearchParams(window.location.search);
    if (params.has('message')) {
        modalMessage.innerText = params.get('message');
        modal.style.display = 'flex';

        // Remove the message parameter from the URL
        const newURL = window.location.protocol + "//" + window.location.host + window.location.pathname;
        window.history.replaceState({}, document.title, newURL);
    }

    // Close the modal
    span.onclick = function() {
        modal.style.display = 'none';
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }
});
