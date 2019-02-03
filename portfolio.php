<?php

include "_includes/config.php";

include  ABSOLUTE_PATH . "/_includes/header.php";
include ABSOLUTE_PATH . "/_includes/main_nav.php";

?>

<div class="headerText">My Work</div>
</div> <!-- ENDS HEADER -->


<div id="portfolioPageWrapper">


    <a href="http://www.buckaroos.com" target="_blank" class="projLink">
        <div id="buckaroos" class="project need-picture">
            <div class="buckaroos description">
                <div class="title">Buckaroos Online Store</div>
                <div class="code">Wordpress, PHP, JavaScript</div>
            </div>
        </div>
    </a>

    <a href="http://humanlibrary.us" target="_blank" class="projLink">
        <div id="humanlibrary" class="project need-picture">
            <div class="humanlibrary description">
                <div class="title">Human Library App</div>
                <div class="code">PHP, JavaScript, Sass, NPM</div>
            </div>
        </div>
    </a>

    <a href="<?= URL_ROOT ?>/projects/react-weather/index.html" target="_blank" class="projLink">
        <div id="react-weather" class="project need-picture">
            <div class="react-weather description">
                <div class="title">React + Redux Weather app</div>
                <div class="code">React + Redux, Bootstrap, 3rd Party API</div>
            </div>
        </div>
    </a>

    <a href="<?= URL_ROOT ?>/projects/react-crud/index.html" target="_blank" class="projLink">
        <div id="react-crud" class="project need-picture">
            <div class="react-crud description">
                <div class="title">React + Redux CRUD App</div>
                <div class="code">React + Redux, Bootstrap, 3rd Party API</div>
            </div>
        </div>
    </a>

    <a href="<?= URL_ROOT ?>/projects/tictactoe/dist/index.html" target="_blank" class="projLink">
        <div id="tictactoe" class="project">
            <div class="tictactoe description">
                <div class="title">React.js Tic Tac Toe</div>
                <div class="code">HTML, CSS, React</div>
            </div>
        </div>
    </a>

    

    <!-- needs work, might not be able to use -->
    


    <a href="<?= URL_ROOT ?>/projects/memory/index.html" target="_blank" class="projLink">
        <div id="memory" class="project">
            <div class="memory description">
                <div class="title">Javascript Memory</div>
                <div class="code">HTML, CSS, JS</div>
            </div>
        </div>
    </a>

    <a href="<?= URL_ROOT ?>/projects/scoreboard/index.html" target="_blank" class="projLink">
        <div id="scoreboard" class="project">
            <div class="scoreboard description">
                <div class="title">React.Js Scoreboard</div>
                <div class="code">React</div>
            </div>
        </div>
    </a>

    

    

    

</div>

<?php

include  ABSOLUTE_PATH . "/_includes/footer.php";

?>
