// require('./bootstrap');
// scripts.js

document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    // Collect form data
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;
    
    // Simple form validation
    if (name && email && message) {
        alert('Message sent successfully!');
        // Here you can add code to send the form data to your server
        document.getElementById('contact-form').reset();
    } else {
        alert('Please fill in all fields.');
    }
});

