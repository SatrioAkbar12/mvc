<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up | - SanberBook - </title>
    </head>
    <body>
        <h1>Buat Account Baru!</h1>

        <h3>Sign Up Form</h3>
        <form action="/welcome" method="post">
            {{ csrf_field() }}
            <p>First name:</p>
                <input type="text" name="first_name" required>

            <p>Last name:</p>
                <input type="text" name="last_name" required>

            <p>Gender:</p>
                <input type="radio" name="gender" value="male" id="male" required>
                    <label for="male">Male</label><br>
                <input type="radio" name="gender" value="female" id="female" required>
                    <label for="female">Female</label><br>
                <input type="radio" name="gender" value="other" id="other" required>
                    <label for="other">Other</label><br>

            <p>Nationality:</p>
                <select id="nationality" name="nationality" required>
                    <option value="indonesian" selected>Indonesian</option>
                    <option value="singaporean">Singaporean</option>
                    <option value="malaysian">Malaysian</option>
                    <option value="australian">Australian</option>
                </select>

            <p>Language Spoken:</p>
                <input type="checkbox" name="language" value="indonesia" id="indonesia">
                    <label for="indonesia">Bahasa Indonesia</label><br>
                <input type="checkbox" name="language" value="english" id="english">
                    <label for="english">English</label><br>
                <input type="checkbox" name="language" value="other" id="other">
                    <label for="other">Other</label>

            <p>Bio:</p>
                <textarea name="bio" rows="10" cols="30" required></textarea>

            <br><input type="submit" value="Sign Up">
        </form>
    </body>
</html>
