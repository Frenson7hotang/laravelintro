<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
    </head>

    <body>
        <div class="form">
            <h1>Buat Account Baru!</h1>
            <div class="name">
                <h4>Sign Up Form</h4>
                <form action="/halaman" method="post">
                    @csrf
                    <label for="first_name">First name:</label> <br><br>
                    <input type="text" name="nama1"> <br><br>
                    <label for="last_name">Last name:</label> <br><br>
                    <input type="text" name="nama2"> <br><br>

                    <label for="gender">Gender:</label><br><br>
                    <input type="radio" name="kelamin" value="male"> Male <br>
                    <input type="radio" name="kelamin" value="female">
                    Female <br>
                    <input type="radio" name="kelamin" value="other">
                    Other <br><br>

                    <label for="nationality">Nationality:</label><br><br>
                    <select name="nationality" id="nationality">
                        <option value="Name"></option>
                        <option value="1">Tokyo</option>
                        <option value="2">Indonesia</option>
                        <option value="3">Japanese</option>
                    </select><br><br>
                    
                    <label for="language">Language Spoken:</label><br><br>
                    <input type="checkbox">Indonesia <br>
                    <input type="checkbox">England<br>
                    <input type="checkbox">Brittis<br><br>

                    <label for="bio">Bio:</label><br><br>
                    <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br>

                    <input type="submit" value="Sign Up">
                
                </form>

                
            </div>
        </div>
    </body>
</html>