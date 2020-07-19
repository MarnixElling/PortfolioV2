
    <div class="signup">
        <div class="formulier">
        <h3>Account - Registreren</h3><br>
            <div class="labels">
                <label>Gebruikersnaam </label><br>
                <label>E-mail </label><br>
                <label>Wachtwoord </label><br>
                <label>Wachtwoord herhalen </label>
            </div>
            <form action="{{url('signup')}}" method="post" class="registreren">
                : <input type="text" name="name" placeholder="John Williams"><br>
                : <input type="text" name="mail" placeholder="abc@example.com"><br>
                : <input type="password" name="password"><br>
                : <input type="password" name="password-repeat"><br>
                <button class="button" type="submit" name="signup-submit">Registreer</button>
            </form>
        </div>
    </div>