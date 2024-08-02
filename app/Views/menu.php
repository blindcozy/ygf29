<?php if ($ismobile === false) { ?>
    <div class="tm-header" style="z-index:2;" uk-header>
        <div class="uk-navbar-container" style="background: transparent;">
            <div class="uk-container uk-container-expand" style="padding-top:15px; padding-bottom:15px;">
                <nav uk-navbar>
                    <div class="uk-navbar-left">
                        <img src="images/komunitas-gayam.svg" style="height:70px;"/>
                    </div>
                    <div class="uk-navbar-center">
                        <ul class="uk-navbar-nav">
                            <li><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li><a href="about">About</a></li>
                            <!--<li><a href="schedule">Schedule</a></li>
                            <li><a href="artist">Artist</a></li>-->
                            <li><a href="program">Program</a></li>
                            <li><a href="news">News</a></li>
                            <!-- <li><a href="galeri">Gallery</a></li>
                            <li><a href="merchandise">Merchandise</a></li> -->
                            <li><a href="partners">Partners</a></li>
                        </ul>
                    </div>
                    <div class="uk-navbar-right">
                        <a href="<?php echo base_url(); ?>"><img src="images/ygf.svg" style="height:75px;"/></a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
<?php } else { ?>
    <div class="tm-header-mobile uk-light" style="z-index:2;">
        <div>
            <div class="uk-navbar-container" style="background-color:transparent;">
                <nav uk-navbar>
                    <div class="uk-navbar-left">
                        <a class="uk-navbar-toggle" href="#offcanvas" uk-toggle uk-navbar-toggle-icon></a>
                    </div>
                    <div class="uk-navbar-center">
                        <img src="images/komunitas-gayam.svg" style="height:40px;" uk-svg/>
                    </div>
                    <div class="uk-navbar-right">
                        <a href="<?php echo base_url(); ?>"><img src="images/ygf.svg" style="height:40px;" uk-svg/></a>
                    </div>
                </nav>
            </div>
            <div id="offcanvas" uk-offcanvas mode="push" overlay>
                <div class="uk-offcanvas-bar uk-flex">
                    <button class="uk-offcanvas-close" type="button" uk-close></button>
                    <div class="uk-margin-auto-vertical uk-width-1-1">
                        <div class="uk-child-width-1-1" uk-grid>
                            <div>
                                <div class="uk-panel" id="module-menu-mobile">
                                    <ul class="uk-nav uk-nav-primary">
                                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                                        <li><a href="about">About</a></li>
                                        <!--<li><a href="schedule">Schedule</a></li>
                                        <li><a href="artist">Artist</a></li>-->
                                        <li><a href="program">Program</a></li>
                                        <li><a href="news">News</a></li>
										<!-- <li><a href="galeri">Gallery</a></li>
										<li><a href="merchandise">Merchandise</a></li> -->
                                        <li><a href="partners">Partners</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>