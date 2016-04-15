<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#page-top">
              <?php
                srand((float) microtime() * 10000000);
                $input = array("agenda.png", "book.png", "coffee-cup.png", "cup.png", "layout.png", "owl.png", "longico-07-128.png", "Web_Programming-128.png", "tag.png");
                $rand_keys = array_rand($input, 2);
                echo '<img src="img/icons/'.$input[$rand_keys[0]].'" alt="Roberto Nicoletti" class="logo" />';
              ?>
              <span class="author">Roberto Nicoletti <br> Front-end</span>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="#portifolio">Portfolio</a>
                </li>
                <li class="page-scroll">
                    <a href="#about">Sobre mim</a>
                </li>
                <li class="page-scroll">
                    <a href="#contact">Contato</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
