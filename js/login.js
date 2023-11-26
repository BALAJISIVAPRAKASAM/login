// login.js

function submitLogin() {
    // Get form data
    var username = $("#username").val();
    var password = $("#password").val();

    // Validate input (add additional validation if needed)

    // Make AJAX request for login
    $.ajax({
        type: "POST",
        url: "php/login.php", // Update the URL based on your server setup
        data: {
            username: username,
            password: password
        },
        dataType: "text",
        success: function(response) {
            alert(response); // Display the response (for testing purposes)
            // Redirect to the profile page on successful login
            window.location.href = "profile.html";
        },
        error: function(error) {
            console.error(error);
            alert("An error occurred during login.");
        }
    });
}
