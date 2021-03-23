<?php include 'header.php';?>
<?php include 'function.php';?>

<div class="container-fluid">

    <!-- HEADER -->

    <section id="header">

      <!-- NAVIGATION -->
      <nav class="navbar navbar-fixed-top navbar-default bottom">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#header">Daraz</a>
          </div><!-- /.navbar-header -->

          <div class="collapse navbar-collapse" id="menu">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#header">Home</a></li>
              <li><a href="#about">About</a></li>              
              <li><a href="#portfolio">Portfolio</a></li>
			  <li><a href="#team">Team</a></li>
			  <li><a href="#info">Info</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div> <!-- /.navbar-collapse -->
        </div> <!-- /.container -->
      </nav>

      <!-- SLIDER -->
      <div class="header-slide">
        <section>
          <div id="loader" class="pageload-overlay" data-opening="M 0,0 0,60 80,60 80,0 z M 80,0 40,30 0,60 40,30 z">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none">
              <path d="M 0,0 0,60 80,60 80,0 Z M 80,0 80,60 0,60 0,0 Z"/>
            </svg>
          </div> <!-- /.pageload-overlay -->
          
          <div class="image-slide bg-fixed">
            <div class="overlay">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">

                    <div class="slider-content">
                      <h1></h1>
                      <p>We are a creative agency from the earth of Bandung, Indonesia</p>
                    </div>

                  </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
              </div> <!-- /.container -->
            </div> <!-- /.overlay -->
          </div> <!-- /.image-slide -->

          <nav class="nav-slide">
            <a class="prev" href="#prev">
              <span class="icon-wrap">
                <svg class="icon" width="32" height="32" viewBox="0 0 64 64">
                  <use xlink:href="#arrow-left">
                </svg>
              </span>
              <div>
                <span>Prev Photo</span>
                <h3>...</h3>
                <p>...</p>
                <img alt="Previous thumb">
              </div>
            </a>
            <a class="next" href="#next">
              <span class="icon-wrap">
                <svg class="icon" width="32" height="32" viewBox="0 0 64 64">
                  <use xlink:href="#arrow-right">
                </svg>
              </span>
              <div>
                <span>Next Photo</span>
                <h3>...</h3>
                <p>...</p>
                <img alt="Next thumb">
              </div>
            </a>
          </nav>
        </section>

        <script type="text/javascript">
        var dataHeader = [
                            {
                              bigImage :"images/slide-1.jpg",
                              title : "Minimal & Clean",
							  author : "Templatestock"
                            },
                            {
                              bigImage :"images/slide-2.jpg",
                              title : "I'm A Creative Theme",
                              author : "Templatestock"
                            },
                            {
                              bigImage :"images/slide-3.jpg",
                              title : "Achieve Success",
                              author : "Templatestock"
                            }
                        ],
            loaderSVG = new SVGLoader(document.getElementById('loader'), {speedIn : 600, speedOut : 600, easingIn : mina.easeinout});
            loaderSVG.show()
        </script>

      </div><!-- /.header-slide -->
    </section>

    <!-- HEADER END -->


    <!-- ABOUT -->

    <section id="about" class="light">
      <header class="title">
        <h2>About <span>Us</span></h2>
        <p>Lorem ipsum Esse esse cillum nisi cillum deserunt tempor ut pariatur qui officia. Lorem ipsum Magna eu irure sint <strong>occaecat</strong> cupidatat dolore minim irure cillum.</p>
      </header>

      <div class="container">
        <div class="row table-row">
          <div class="col-sm-6 hidden-xs">
            <div class="section-content">
              <div class="big-image" style="background-image:url(images/1.png)"></div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="section-content">
              <div class="about-content left animated" data-animate="fadeInLeft">
                <div class="about-icon"><i class="fa fa-code"></i></div>
                <div class="about-detail">
                  <h4>Clean Code</h4>
                  <p>Lorem ipsum Ad nisi dolore ut sit do dolor commodo sint ullamco. Lorem ipsum Magna enim eu irure sit eiusmod fugiat et. Lorem ipsum Consequat in cupidatat cupidatat non in non veniam dolore.</p>
                </div>
              </div>

              <div class="about-content left animated" data-animate="fadeInLeft">
                <div class="about-icon"><i class="fa fa-desktop"></i></div>
                <div class="about-detail">
                  <h4>Fully Responsive</h4>
                  <p>Lorem ipsum Ex labore dolor magna in proident ad reprehenderit consequat irure nostrud quis. Lorem ipsum Veniam velit non cupidatat nulla et proident.</p>
                </div>
              </div>

              <div class="about-content left animated" data-animate="fadeInLeft">
                <div class="about-icon"><i class="fa fa-cube"></i></div>
                <div class="about-detail">
                  <h4>Multipurpose Design</h4>
                  <p>Lorem ipsum Ea quis sint sint aliquip qui exercitation commodo non cupidatat do reprehenderit dolor. Lorem ipsum Non et minim incididunt sed labore in amet ea est pariatur.</p>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- /.row table-row -->
      </div> <!-- /.container -->
    </section>
	
	
	    <!-- PORTFOLIO -->

   <section id='portfolio' class='light'>
     <?php
     about_first(); 
     ?>

     <?php
     about_second(); 
     ?>
    </section>

    <!-- TEAM -->

    <section id="team" class="light">
      <header class="title">
        <h2>Creative <span>Team</span></h2>
        <p>Lorem ipsum Dolor et reprehenderit laborum deserunt aliquip incididunt tempor id non. Lorem ipsum Fugiat anim labore cupidatat consequat non in sit dolore anim anim consequat nisi.</p>
      </header>
      <?php
      team_img(); 
      ?>
    </section>
	
	    <!-- INFO -->

    <section id="info" class="dark">
      <header class="title">
        <h2>Our <span>Experties</span></h2>
        <p>Lorem ipsum Nulla in incididunt esse tempor dolore ad voluptate aliquip magna sed in.</p>
      </header>

      <div class="container experties">
        <div class="row">
          <div class="col-md-6">
            <div class="skill">
              <ul class="skill-bar list-unstyled">
                <li><span class="percentage" data-value="50%"></span><em>Branding</em></li>
                <li><span class="percentage" data-value="95%"></span><em>Development</em></li>
                <li><span class="percentage" data-value="22%"></span><em>Social</em></li>
              </ul>
            </div>
          </div>

          <div class="col-md-6">
            <div class="skill">
              <ul class="skill-bar list-unstyled">
                <li><span class="percentage" data-value="63%"></span><em>Graphic Design</em></li>
                <li><span class="percentage" data-value="90%"></span><em>Consulting</em></li>
                <li><span class="percentage" data-value="43%"></span><em>Logo</em></li>
              </ul>
            </div>
          </div>
        </div>
      </div> <!-- /.container -->
    </section>	
	

    <section class="separator blue">
     <?php
     main_last_section(); 
     ?>
    </section>

    <?php include 'footer.php'; ?>