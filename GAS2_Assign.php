<!DOCTYPE html>
<html lang="en">
<head>
    <title>MMOG Central Account Details</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <h1>Welcome to MMOG Central</h1>
    <br>
    <!-- PHP OUTPUT -->
    <?php
    // **User information variables**
        // Name
        $firstName = $_POST['firstname'];
        $middleInitial = $_POST['middle'];
        $lastName = $_POST['lastname'];
        // Address
        $address = $_POST['address'];
        $state = $_POST['state'];
        $country = $_POST['country'];
        // Email
        $email = $_POST['email'];
    
        // Game Info
        // Character Name
        $charName = $_POST['charname'];
        // Game
        $game = $_POST['game'];
        
        // Login Info
        $loginName = $_POST['login'];
        $password = $_POST['pword'];
    
    
        // Function for outputting user profile
        function PrintUserProfile ($firstName, $middleInitial, $lastName, $address, $state, $country, $email, $charName, $game, $loginName) {
            echo '<div id="profilePage">';
            printf ("<h1>%s's Profile Page</h1>", $loginName);
            echo '<h2>User name:</h2>';
            echo '<ul class="profileList">';
            printf("<li>First Name: %s</li><li>Middle Initial: %s</li><li>Last Name: %s</li>", $firstName, $middleInitial, $lastName);
            echo '</ul>';
            echo '<h2>Contact Info</h2>';
            echo '<ul class="profileList">';
            printf("<li>Address: %s</li><li>State: %s</li><li>Country: %s</li><li>Email: %s</li>", $address, $state, $country, $email);
            echo '</ul>';
            echo '<h2>Game Info</h2>';
            echo '<ul class="profileList">';
            printf("<li>Game: %s</li><li>Character Name: %s</li>", $game, $charName);
            echo '</ul>';
            echo '</div>';
        }
    
        // Call function to display page
        PrintUserProfile($firstName, $middleInitial, $lastName, $address, $state, $country, $email, $charName, $game, $loginName);
        
    ?>

</body>
</html>