<?php
function about_first()
{
	echo '<section id="about" class="light">
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
    </section>';
} 

?>
<?php
function about_second()
{
   $img_first_section  = array( 
   	                     array("category" => "branding",
   	                           "image" => "images/p-1.png" , 
                               "title" => "Charming <span>Roxy</span>",
                               "description" => "Lorem ipsum Dolor in minim fugiat ut nisi occaecat fugiat. Lorem ipsum Quis tempor Ut enim officia deserunt consectetur."),
   	                      array("category" => "branding",
   	                           "image" => "images/p-1.png" , 
                               "title" => "Charming <span>Roxy</span>",
                               "description" => "Lorem ipsum Dolor in minim fugiat ut nisi occaecat fugiat. Lorem ipsum Quis tempor Ut enim officia deserunt consectetur."),
   	                       array("category" => "branding",
   	                           "image" => "images/p-1.png" , 
                               "title" => "Charming <span>Roxy</span>",
                               "description" => "Lorem ipsum Dolor in minim fugiat ut nisi occaecat fugiat. Lorem ipsum Quis tempor Ut enim officia deserunt consectetur."),
   	                        array("category" => "branding",
   	                           "image" => "images/p-1.png" , 
                               "title" => "Charming <span>Roxy</span>",
                               "description" => "Lorem ipsum Dolor in minim fugiat ut nisi occaecat fugiat. Lorem ipsum Quis tempor Ut enim officia deserunt consectetur."),
   	                         array("category" => "branding",
   	                           "image" => "images/p-1.png" , 
                               "title" => "Charming <span>Roxy</span>",
                               "description" => "Lorem ipsum Dolor in minim fugiat ut nisi occaecat fugiat. Lorem ipsum Quis tempor Ut enim officia deserunt consectetur."),
   	                          array("category" => "branding",
   	                           "image" => "images/p-1.png" , 
                               "title" => "Charming <span>Roxy</span>",
                               "description" => "Lorem ipsum Dolor in minim fugiat ut nisi occaecat fugiat. Lorem ipsum Quis tempor Ut enim officia deserunt consectetur."),
   	                           array("category" => "branding",
   	                           "image" => "images/p-1.png" , 
                               "title" => "Charming <span>Roxy</span>",
                               "description" => "Lorem ipsum Dolor in minim fugiat ut nisi occaecat fugiat. Lorem ipsum Quis tempor Ut enim officia deserunt consectetur."),
                                array("category" => "branding",
   	                           "image" => "images/p-1.png" , 
                               "title" => "Charming <span>Roxy</span>",
                               "description" => "Lorem ipsum Dolor in minim fugiat ut nisi occaecat fugiat. Lorem ipsum Quis tempor Ut enim officia deserunt consectetur."),
   );
   $box_first="";
   foreach ($img_first_section as $save) {
   	$box_first .= '<div class="container-portfolio">
   	               <script type="text/javascript">
            var portfolio = [
                    {
                      category : "'.$save['category'].'",
                      image : "'.$save['image'].'",
                      title : "'.$save['title'].'",
                      link : "#none",
                      text : "'.$save['description'].'"
                    }
                      ];
            </script>
          
          </div>';
   }

	echo '<section id="portfolio" class="light">
      <header class="title">
        <h2>Portfolio</h2>
        <p>Lorem ipsum Cupidatat sit irure nostrud ut deserunt ad enim id laboris. Lorem ipsum Enim proident et eu et minim voluptate eiusmod ullamco commodo aliqua amet.</p>
      </header>

      <div class="container-fluid">
        <div class="row">
          <ul id="filters" class="list-inline">
            <li data-filter="all" class="filter">All</li>
            <li=".branding" class="filter">Branding</li> 
            <li data-filter=".graphic" class="filter">Graphic</li> 
            <li data-filter=".printing" class="filter">Printing</li> 
            <li data-filter=".video" class="filter">Video</li> 
          </ul>
        </div>
        </div>
        <div class="row">
        
            <!-- PORTFOLIO OBJECT -->
            
               "'.$box_first.'"

            </div>   
      </div>
    </section>';
} 
?>

<?php

function team()
{
   $team_sec = array (
   	            array("image" => "images/team-1.png",
   	            	  "name" => "John Doe",
   	            	  "position" => "Creative Director",
   	            	  "description" => "Lorem ipsum Proident incididunt sint dolor cupidatat pariatur dolore magna pariatur in ea aliqua.",
                      "fblink" => "facebook.com",
                      "linkedin" => "linkedin.com",
                      "twitter" => "twitter.com",
                      "google" => "google.com"),
   	            array("image" => "images/team-1.png",
   	            	  "name" => "John Doe",
   	            	  "position" => "Creative Director",
   	            	  "description" => "Lorem ipsum Proident incididunt sint dolor cupidatat pariatur dolore magna pariatur in ea aliqua.",
                      "fblink" => "facebook.com",
                      "linkedin" => "linkedin.com",
                      "twitter" => "twitter.com",
                      "google" => "google.com"),
   	            array("image" => "images/team-1.png",
   	            	  "name" => "John Doe",
   	            	  "position" => "Creative Director",
   	            	  "description" => "Lorem ipsum Proident incididunt sint dolor cupidatat pariatur dolore magna pariatur in ea aliqua.",
                      "fblink" => "facebook.com",
                      "linkedin" => "linkedin.com",
                      "twitter" => "twitter.com",
                      "google" => "google.com"),
   	            array("image" => "images/team-1.png",
   	            	  "name" => "John Doe",
   	            	  "position" => "Creative Director",
   	            	  "description" => "Lorem ipsum Proident incididunt sint dolor cupidatat pariatur dolore magna pariatur in ea aliqua.",
                      "fblink" => "facebook.com",
                      "linkedin" => "linkedin.com",
                      "twitter" => "twitter.com",
                      "google" => "google.com"),
   	            
   );
   $empty_section="";
   foreach ($team_sec as $saved) {
   	$empty_section .=' <div class="col-md-3 col-sm-6 text-center">
            <div class="wrap animated" data-animate="fadeInDown">
              <div class="img-team">
                <img src="'.$saved['image'].'"," alt="" class="img-circle">
              </div>

              <h3>'.$saved['name'].',</h3>
              <h5>'.$saved['position'].',</h5>

              <p>'.$saved['description'].',</p>

              <div class="team-social">
                <ul class="list-inline social-list">
                  <li><a href="'.$saved['twitter'].'"  class="fa fa-twitter"></a></li>
                  <li><a href="'.$saved['linkedin'].'" class="fa fa-linkedin"></a></li>
                  <li><a href="'.$saved['fblink'].'" class="fa fa-facebook"></a></li>
                  <li><a href="'.$saved['google'].'"  class="fa fa-google-plus"></a></li>
                </ul> 
              </div>                
            </div>
          </div>';
   }
	echo '<section id="team" class="light">
      <header class="title">
        <h2>Creative <span>Team</span></h2>
        <p>Lorem ipsum Dolor et reprehenderit laborum deserunt aliquip incididunt tempor id non. Lorem ipsum Fugiat anim labore cupidatat consequat non in sit dolore anim anim consequat nisi.</p>
      </header>
      
      <div class="container">
        <div class="row">
         "'.$empty_section.'"  
          </div>

         
      </div> <!-- /.container -->
    </section>';
}
 ?>


<?php
function info_section()
{
	 // $$info_details = array('' => , );
	echo '<section id="info" class="dark">
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
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="counter animated" data-animate="fadeInUp" data-delay="0">
              <div class="counter-icon">
                <i class="fa fa-group"></i>
              </div>
              <div class="counter-content">
                <span class="value" data-from="0" data-to="43"></span>
                <small>Clients</small>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="counter animated" data-animate="fadeInUp" data-delay="500">
              <div class="counter-icon">
                <i class="fa fa-leaf"></i>
              </div>
              <div class="counter-content">
                <span class="value" data-from="0" data-to="20"></span>
                <small>Awards</small>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="counter animated" data-animate="fadeInUp" data-delay="1000">
              <div class="counter-icon">
                <i class="fa fa-gears"></i>
              </div>
              <div class="counter-content">
                <span class="value" data-from="0" data-to="34"></span>
                <small>Projects</small>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="counter animated" data-animate="fadeInUp" data-delay="1500">
              <div class="counter-icon">
                <i class="fa fa-inbox"></i>
              </div>
              <div class="counter-content">
                <span class="value" data-from="0" data-to="1298"></span>
                <small>Mail</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>';
} 
?>



