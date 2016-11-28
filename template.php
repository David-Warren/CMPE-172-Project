<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css" />
    </head>
    <body>
        <div id="wrapper">
            <div id="banner">
                 
                 </div>
            
            <nav id="navigation">
                <ol id="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="Team.php">Team</a></li>
                    <li><a href="project.html">Project</a></li>
                    <li><a href="comments.php">Comments</a></li>
        </ol>
            </nav>
            
            <div id="content_area">
                <?php echo $content; ?>
            </div>
            
            <div id="sidebar">
            
            </div>
            
            <footer>
                <p>All rights reserved</p>    
            </footer>
        </div>
    </body>
</html>