<style>
    body{
        background-image: linear-gradient(to bottom right, aqua, chocolate);
        text-align: center;
        margin-top: 10%;
    }
    div{
        border: 1px solid black;
        background-color: antiquewhite;
        border-radius: 10px;
        margin-left: 24%;
        margin-right: 20%;
    }
</style>
<?php
session_start();

// Check if the session variable exists, if not, initialize it to 0
if (!isset($_SESSION['page_views'])) {
    $_SESSION['page_views'] = 0;
}

// Increment the page views count on each visit
$_SESSION['page_views']++;

// Display the page views count on the web page
echo "<html>
        <head>
            <title>Page Views Counter</title>
        </head>
        <body>
        <div>
            <h1>Welcome to the Page Views Counter</h1>
            <p>This page has been visited " . $_SESSION['page_views'] . " times.</p>
        </div>    
        </body>
      </html>";
?>