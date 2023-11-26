// register.js

function submitRegistration() {
    // Get form data
    var username = $("#username").val();
    var password = $("#password").val();
    var age = $("#age").val();
    var dob = $("#dob").val();
    var contact = $("#contact").val();

    // Validate input (add additional validation if needed)

    // Make AJAX request for registration
    $.ajax({
        type: "POST",
        url: "php/register.php",
        data: {
            username: username,
            password: password,
            age: age,
            dob: dob,
            contact: contact
        },
        dataType: "text",
        success: function(response) {
            alert(response); // Display the response (for testing purposes)

            // Check the response and provide user feedback
            if (response.includes("successful")) {
                // Registration successful
                window.location.href = "login.html";
            } else {
                // Registration failed
                alert("Registration failed. Please try again later.");
            }
        },
        error: function(error) {
            console.error(error);
            alert("An error occurred during registration.");
        }
    });
}
