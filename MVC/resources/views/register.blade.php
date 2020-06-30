<!DOCTYPE html>
<html lang="en">    
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- <link href="css/style.css" rel="stylesheet" type="text/css" /> -->
        <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

        <title>Yok MVC yok</title>

    <style type="text/css">
        header {
            margin: 40px;
        }
    </style>

    </head>
    <body>
        <h1>Buat Account Baru!</h1>
        <h3>Sign Up Form</h3>

        <form action="/welcome">
            <label>First name:</label><br>
            <input type="text" id="firstname" name="firstname"><br>
            <label>Last name:</label><br>
            <input type="text" id="lastname" name="lastname"><br><br>

            <label>Gender:</label><br>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label><br><br>

            <label>Nationality:</label><br>
            <select id="nationality" name="nationality">
                <option value="indonesian">Indonesian</option>
                <option value="singaporean">Singaporean</option>
                <option value="malaysian">Malaysian</option>
                <option value="australian">Australian</option>
            </select>

            <br><br><label>Gender:</label><br>
            <input type="checkbox" id="indonesia" name="indonesia" value="Indonesia">
            <label for="indonesia">Indonesia</label><br>
            <input type="checkbox" id="english" name="english" value="English">
            <label for="english">English</label><br>
            <input type="checkbox" id="otherlang" name="otherlang" value="OtherLang">
            <label for="otherlang">Other</label>

            <br><br><label>Bio:</label><br>
            <textarea name="bio" rows="10" cols="30"></textarea><br><br>

            <input type="submit" value="Sign Up">
        </form>
    </body>
</html>