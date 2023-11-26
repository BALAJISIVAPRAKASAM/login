// profile.js
$(document).ready(function() {
    // Fetch and display user profile details
    $.ajax({
        type: "POST",
        url: "php/profile.php",
        dataType: "json",
        success: function(profileData) {
            // Display the user profile details
            $("#profileDetails").html("<p>Age: " + profileData.age + "</p>" +
                                      "<p>DOB: " + profileData.dob + "</p>" +
                                      "<p>Contact: " + profileData.contact + "</p>");
        },
        error: function(error) {
            console.error(error);
        }
    });

    // Update profile button click event
    $("#updateProfile").click(function() {
        // Add logic to handle profile updates
        alert("Update Profile clicked!");
    });
});
