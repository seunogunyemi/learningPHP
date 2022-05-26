<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zuri Form</title>
</head>
<body>
    <div style="">
    <h1>PHP FORM</h1>
    <h4>Zuri Assignment</h4>
    <form method="POST" action="user_data.php" >

        <label for="name">Name</label>
        <input name="name" type="name" placeholder="enter your name here..." style="margin: 4px; width: 200px; height: 16px;" required><br>

        <label for="email">Email</label>
        <input name="email" type="email" placeholder="enter your email here..." style="margin: 4px; width: 200px; height: 16px;" required><br>

        <label for="DOB">Date of Birth</label>
        <input name="DOB"  placeholder="DDMMYYYY" style="margin: 4px; width: 200px; height: 16px;" required><br>

        <label for="gender">Gender</label>
        <select style="margin: 4px; width: 200px; height: 24px;" required name="gender">
                            <option>
                                please select gender
                            </option>
                            <option>
                                Male
                            </option>
                            <option>
                                Female
                            </option>
                            <option>
                                Transgender
                            </option>
                            <option>
                                Prefer not to say
                            </option>
        </select><br>
        <label for="country">Country</label>
        <input name="country" type="country" placeholder="enter your country here..." style="margin: 4px; width: 200px; height: 16px;"><br>

        <button name="submit" type="submit" style="background-color: rgb(61, 110, 4); border: none; height: 24px; margin: 8px; color: white; cursor:pointer; border-radius: 2px;">Register</button>
        <button style="height: 24px;"><a href="form.html" style="text-decoration: none; color:rgb(68, 70, 71)">Cancel</button>

    </form> <br>

                   
    </div>
</body>
</html>