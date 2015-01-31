
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>{pagetitle}</title>
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
        <link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/text.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/lightbox.css" />
    </head>
    <body>
        <a href="/"><img class="banner" src="/data/images/BANNER.png"/></a>
        <nav class="navbar">
            <div class="navbar-inner">
                <span class="brand">AIM GYM</span>
            <ul class="nav">
                <li><a href="/">Home</a></li>
                <li><a href="/About">About</a></li>
                <li><a href="/Membership">Membership</a></li>
                <li><a href="/Programs">Programs</a></li>
                <li><a href="/Faq">FAQ's</a></li>
            </ul>
            </div>
        </nav>
        
        <--start of content-->
        <div class ="wrapper">
            
            {content}

        </div>
        
        <!--footer -->
        <footer>
            <p> &copy; <?=date('Y')?> AIM gym </p>
        </footer>
    </body>
</html>