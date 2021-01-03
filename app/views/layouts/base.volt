<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>myITS Academics</title>

        <!-- Load CSS -->
        {{ assets.outputCss() }}

    </head>
    <body>

        <header class="header-section header-normal">

        <!-- Logo -->
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">      
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <div class="logo">
                                    <a href="/">
                                        <img src="{{ url("img/icons/logo.PNG") }}" alt="">
                                    </a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </header>

        <!-- Content -->
        {% block content %} {% endblock %}

        <!-- Load JS -->
        {{ assets.outputJs() }}

    </body>
</html>