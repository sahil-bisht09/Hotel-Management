document.getElementById('orderForm').addEventListener('submit', function(event) {
    event.preventDefault();
  
    // Validate form inputs
    var name = document.getElementById('name').value.trim();
    var contact = document.getElementById('contact').value.trim();
    var menuItems = document.getElementById('menuItems').selectedOptions;
  
    if (name === '') {
      alert('Please enter your name.');
      return;
    }
  
    if (contact === '') {
      alert('Please enter your contact information.');
      return;
    }
  
    if (menuItems.length === 0) {
      alert('Please select at least one menu item.');
      return;
    }
  
    // Submit the form
    this.submit();
  });
  
  document.getElementById('feedbackForm').addEventListener('submit', function(event) {
    event.preventDefault();
  
    // Validate form inputs
    var feedbackName = document.getElementById('feedbackName').value.trim();
    var email = document.getElementById('email').value.trim();
    var message = document.getElementById('message').value.trim();
  
    if (feedbackName === '') {
      alert('Please enter your name.');
      return;
    }
  
    if (email === '') {
      alert('Please enter your email.');
      return;
    }
  
    if (message === '') {
      alert('Please enter your message.');
      return;
    }
  
    // Submit the form
    this.submit();
  });
  
  function displayErrorMessage(message) {
    var errorDiv = document.getElementById('error');
    errorDiv.innerText = message;
    errorDiv.style.display = 'block';
  
    // Scroll to the error message
    errorDiv.scrollIntoView({ behavior: 'smooth' });
  
    // Clear the error message after 3 seconds
    setTimeout(function() {
      errorDiv.innerText = '';
      errorDiv.style.display = 'none';
    }, 3000);
  }
  