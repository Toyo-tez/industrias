$(document).ready(function() {
    $('#login-form').submit(function(event) {
      event.preventDefault();
      var username = $('#username').val();
      var password = $('#password').val();
      // Validate the input fields
      if (username === '' || password === '') {
        alert('Please fill in all fields');
        return;
      }
      // Submit the form data to the server
      $.ajax({
        type: 'POST',
        url: '/login',
        data: {username: username, password: password},
        success: function(data) {
          // Handle the response from the server
          if (data.success) {
            window.location.href = '/dashboard';
          } else {
            alert('Invalid username or password');
          }
        }
      });
    });
  });