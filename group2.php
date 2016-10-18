<!DOCTYPE html>
<html lang="en">
<head>
    <title>MMOG Central</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <?php
    
    function printForm() {
        print <<< FORMOUTPUT
        <h1>Play The Top Online Games created by MMOG Central</h1>
        <hr>
        <h2>Please provide some basic details about yourself:</h2>
        <!-- Start of the Form, reistration fields -->   
        <form name='userinfo' method='post' id='userinfo' action='GAS2_Assign.php'>

            First Name: <input type='text' name='firstname' id='firstname' size=15 required='required'>
            Middle Initial: <input type='text' name='middle' id='middle' size=5> 
            Last Name: <input type='text' name='lastname' id='lastname' size=15 required='required'>
            <br>
            <br>
            Address: <input type='text' name='address' id='address' size=30 required='required'>
            State/Provence: <input type='text' name='state' id='state' size=10 required='required'>
            Country: <input type='text' name='country' id='country' size=10 required='required'>
            <br>
            <br>
            Email: <input type='text' name='email' id='email' size=25 required='required'>
            <br>
            <br>
            You must be 18 years or older to register. By checking the box you can prove 18 years and older or have the approval of a guardian if proof is requested.<br>
            <input type='checkbox' name='ageverify' id='ageverify' value='yes'>Yes, I can prove 18 years and older have guardian approval.<br>
            <hr>
            <!--Game setup-->
            <h2>Setup your character and online game:</h2>
            Character Name: <input type='text' name='charname' id='charname' size=15 required='required'>
            <p>Choose your online game:<br/>
              <select name='game' id='game' size='3'>
                <option value='Tribal Wars'>Tribal Wars</option>
                <option value='Call of War'>Call of War</option>
                <option value='Warthune'>Warthune</option>
                <option value='Forge of Emprires'>Forge of Empires</option>
                <option value='Drakensang Online'>Drakensang Online</option>
                <option value='Fiesta Online'>Fiesta Online</option>
              </select></p>
            <p>You will be able to customize your charater further when you sign in to the online game of choice.</p>
            <hr>
            <!--Login and password setup-->
            <h2>Setup your login and password:</h2>
            Login: <input type='text' name='login' id='login' size=15 required='required'><br>
            <br>
            Password: <input type='password' name='pword' id='pword' size=10 required='required' title='At least 8 characters, no spaces' pattern='.{8,}'><br>
            <br>
            Submit: <input type='submit'><br>
            <br>
            Reset: <input type='reset'>
            <hr>
        </form>
FORMOUTPUT;
    }
    
    printForm();
    ?>
</body>
</html>
