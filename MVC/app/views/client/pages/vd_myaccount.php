<main class='row'>
    <article class='col-s4 list-to-manage'>
        <section class='item-top'>
            <div class='avt-ctn col-s7'>
                <div class='show-avt'>
                    <img src='./public/images/avt.jpg' alt="avatar">
                    <form method='POST' class='upload-avt-form'>
                        <label class='virtual-avt-upload-btn' for='avt-upload-btn' title='Upload avatar'><i class="fas fa-camera"></i></label>
                        <input type='file' name="avt_upload" id='avt-upload-btn' hidden>
                    </form>
                </div>
                <h3 class='username'>
                    <?php
                    if (isset($_SESSION['user_name']))
                        echo $_SESSION['user_name'];
                    ?>
                </h3>
            </div>
            <div class='user-leave-ctn col-s5'>
                <a href="myaccount/logout">Logout</a>
                <a href="myaccount/delAcc">Delete account</a>
            </div>
        </section>

        <section class='list-manage-item'>
            <h2>Setting</h2><br>
            <p>Interface, notification,...</p>
            <a href="myaccount/setting" title='View' id='setting_btn' class="center"><i class="fas fa-arrow-right"></i></a>
        </section>

        <section class='list-manage-item'>
            <h2>Edit profile</h2><br>
            <p>User name, phone number, email... </p>
            <a href="myaccount/profile" title='View' id='profile_btn' class="center"><i class="fas fa-arrow-right"></i></a>
        </section>

        <section class='list-manage-item'>
            <h2>Security</h2><br>
            <p>Password, 2-factor authentication</p>
            <a href="myaccount/security" title='View' id='security_btn' class="center"><i class="fas fa-arrow-right"></i></a>
        </section>

        <section class='list-manage-item'>
            <h2>Support</h2><br>
            <p>Get help or give feedback about our tools</p>
            <a href="myaccount/support" title='View' id='support_btn' class="center"><i class="fas fa-arrow-right"></i></a>
        </section>
    </article>

    <article class='col-s8 manager-space'>
        <?php require_once "childs/vdc_" . $data["item"] . ".php"; ?>
    </article>
</main>
<footer class='end-footer'>
    <!-- <div class='logo-bottom'>
		<a href=""><span class='U-logo'>U</span><span class='other-logo'>niversal Tools</span></a>
	</div> -->
</footer>