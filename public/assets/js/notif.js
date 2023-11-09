// Use JavaScript to hide the success message after 3 seconds
setTimeout(function() {
    var successMessage = document.getElementById('success-message');
    if (successMessage) {
        successMessage.style.display = 'none';
    }
}, 3000); // 3000 milliseconds = 3 seconds