<main>
    <article class='form-ctn '>
        <div class='logo-top'>
            <a href='./' title='Home'><span class='U-logo'>U</span><span class='other-logo'>Sign up</span></a>
        </div>
        <form method="post" action="signup/adduser">
            <div class='form-ctn__input-ctn'>
                <i class="far fa-user"></i>
                <input type='text' name='user_name' id="user_name" placeholder='Username'>
            </div>
            <p id="user_name_msg"></p>

            <div class='form-ctn__input-ctn'>
                <i class="far fa-envelope"></i>
                <input type='text' name='email' id="email" placeholder='Email'>
            </div>
            <p id="email_msg"></p>

            <div class='form-ctn__input-ctn'>
                <i class="fas fa-key"></i>
                <input type='password' name='password' id="password" placeholder='Password'>
            </div>
            <p id="password_msg"></p>

            <div class='form-ctn__input-ctn'>
                <i class="fas fa-check"></i>
                <input type='password' name='re_password' id="re_password" placeholder='Confirm password'>
            </div>
            <p id="re_password_msg"></p>

            <input type='submit' name='submit' id="submit" value='Sign up'>
            <div class='form-ctn__other-ctn'>
                <a href='signin' id="signin">Sign in now</a>
            </div>
        </form>
    </article>
</main>