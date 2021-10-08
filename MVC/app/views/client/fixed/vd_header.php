<header <?php
        if ($data['page'] == "home") {
            echo "class='pos--fixed w--100pct'";
        }
        ?>>
    <nav id='mobi-nav'>
        <div class='logo-top'>
            <a href=''><span class='U-logo'>U</span><span class='other-logo'>Home</span></a>
        </div>
        <button id='nav-list-btn' title='Menu' onclick='mobileNav()'><i class="fas fa-stream"></i></button>
        <div id='nav-list'>
            <ul>
                <li>
                    <?php
                    if (isset($_SESSION['user_name']))
                        echo "<a href='myaccount'>" . $_SESSION['user_name'] . "</a>";
                    else {
                        echo "<a href='login'>Login</a>";
                    }
                    ?>
                </li>
                <li><a href="pages/tools/">Tools</a></li>
                <li><a href=''>Services</a></li>
                <li><a href=''>Admin</a></li>
                <li><a href=''>Help</a></li>
            </ul>
        </div>
    </nav>

    <!-- =============================================================== -->

    <nav id='desktop-nav'>
        <div class='logo-top'>
            <a href='' title="Home"><span class='U-logo'>U</span><span class='other-logo'>Tools</span></a>
        </div>
        <ul>
            <li><a href="tools">Tools</a></li>
            <li><a href=''>Services</a></li>
            <li><a href=''>none</a></li>
            <li>
                <a href='#' title='Search tool' onclick='hideShowSearchForm()' id='search'><i class="fas fa-search"></i></a>
            </li>
        </ul>
        <ul>
            <li>
                <?php
                if (isset($_SESSION['user_name']))
                    echo "<a href='myaccount'>" . $_SESSION['user_name'] . "</a>";
                else
                    echo "<a href='signin' id='acc'>Sign in</a>";
                ?>
            </li>
        </ul>
    </nav>
    <!-- <div class='search-ctn'>
        <form method='POST' id='search-form'>
            <input type='text' name='tool_name' id='tool_name'
                placeholder='Type &lsquo;all&rsquo; to show all tools' onkeyup='showSearchResult()'>
        </form>
        <div id='search-result'></div>
    </div> -->
</header>
<!-- <li>
    <a href='' title='Calendar'>
    <?php
    /*date_default_timezone_set('Asia/Ho_Chi_Minh');
        echo date("l, d/m/Y");*/
    ?>
    </a>
</li> -->