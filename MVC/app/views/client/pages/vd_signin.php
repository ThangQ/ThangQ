<main>
    <article class='form-ctn '>
        <div class='logo-top'>
            <a href='./' title='Home'><span class='U-logo'>U</span><span class='other-logo'>Sign in</span></a>
        </div>
        <form method="post" action="signin/acceptuser">
            <div class='form-ctn__input-ctn'>
                <i class="far fa-user"></i>
                <input type='text' name='user' placeholder='Username/ email'>
            </div>
            <div class='form-ctn__input-ctn'>
                <i class="fas fa-lock"></i>
                <input type='password' name='password' placeholder='Password'>
            </div>
            <div class='form-ctn__checkbox-ctn'>
                <input type='checkbox' name='checkbox' value='true' id='checkbox'>
                <label for='checkbox'>Keep login</label>
            </div>
            <input type='submit' name='submit' id="submit" value='Login'>
            <div class='form-ctn__other-ctn'>
                <a href='signup' id="signup">Sign up now</a>
                <a href=''>Forgot password?</a>
            </div>
        </form>
    </article>
</main>