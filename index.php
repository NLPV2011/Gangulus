<?php
    include "./includes/header.php"; 
?>
    <div class = 'Posting'>
        <?php
            include './includes/PostBar.php';
        ?>
    </div>
<?php
    include "./includes/SideBar.php"
?>
    <div id = "PageBody">
        <?php
            include './includes/ShortVideos.php';
        ?>
        <br><br>

        <div class = 'PostListBar'>
            <div class = "PostingInformation">
                <a><img class = 'PostingAvatar' src = './includes/images/header/Logo.png' width= 50px; style = 'padding-top: 10px;'/></a>
                <a>Gangulus</a><h5>They changed their profile picture</h5>
            </div>
            <h4>#NewAvatar</h4>       
            <h4>#AnhHoSoMoi</h4> 
            <h3>This is our new Avatar!</h3>
            <img src = './includes/images/header/Logo.png' width=200px/> 
        </div>
        <br>
        <br>
        <div class = 'PostListBar'>
            <div class = "PostingInformation">
                <a><img class = 'PostingAvatar' src = './includes/images/header/Logo.png' width= 50px; style = 'padding-top: 10px;'/></a>
                <a>Gangulus</a><h5>They changed their profile picture</h5>

            </div>
            <h4>#NewAvatar</h4>       
            <h4>#AnhHoSoMoi</h4> 
            <h3>This is our new Avatar!</h3>
            <img src = './includes/images/header/Logo.png' width=200px/> 
        </div>
        <br>
    </div>
<?php
    include "./includes/footer.php"; 
?>