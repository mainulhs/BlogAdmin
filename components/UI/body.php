<?php
    $queryPro = "SELECT * FROM profile_info"; 
    $pro_list  = fetchData($queryPro);
            foreach ($pro_list as $data) {
					$firstname = $data['firstname'];
					$lastname = $data['lastname'];
                    $mobile = $data['mobile'];
                    $email = $data['email'];
                    $dob = $data['dob'];
                    $per_address = $data['per_address'];
            }
    $querySk = "SELECT * FROM skill where id = '5'";
    $skill_list = fetchData($querySk);
        foreach($skill_list as $data){
            $skillName = $data['skillName'];
            $description = $data['description'];
        }
?>
<section class="slider-wrapper">
    <div class="icon-mobile">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>

<!-- SLIDER --> 
<ul class="slider">
<!-- HOME -->        
    <li class="visible">
        <div class="content">
           <div class="profile">
              <div class="welcome">
                  <div class="hello">
                      <h1>Hello, i'am</h1>
                      <div class="name"><?php echo $firstname.' '.$lastname?></div>
                  </div>
                      <h2><?php echo $skillName?></h2>
                      <p><?php echo $description?></p>
                  <div class="personal-info">
                      <div class="phone"><i class="fa fa-phone"></i><?php echo $mobile?></div>
                      <div class="email"><i class="fa fa-paper-plane"></i><?php echo $email?></div>
                 </div>
              </div>
          </div>
</div>
</li>
<!-- END HOME --> 


<!-- ABOUT ME -->        
<li>
    <div class="content">
        <div class="about">
          <div class="col-md-10 col-md-offset-1">
              <h2><i class="fa fa fa-user"></i>About <span>Me</span></h2>
          </div>
          <div class="col-md-5 col-md-offset-1">
              <div class="about-info">
              <h3>Hello, I am <span><?php echo $skillName?></span></h3>
              <ul>
                  <li><span><i class="fa fa-user"></i> Name</span><label><?php echo $firstname.' '.$lastname;?></label></li>
                  <li><span><i class="fa fa-calendar"></i> Date of birth</span><label></label></li>
                  <li><span><i class="fa fa-phone"></i> Phone</span><label><a href="#"><?php echo $mobile; ?></a></label></li>
                  <li><span><i class="fa fa-paper-plane"></i> Email</span><label><a href="#"><?php echo $email; ?></a></label></li>
                  <li><span><i class="fa fa-globe"></i> Web</span><label><a href="#">demo.com</a></label></li>
                  <li><span><i class="fa fa-map-marker"></i> Address</span><label><?php echo $per_address; ?></label></li>
              </ul>
              <p><?php echo $description; ?></p>
              </div>
          </div>
<!--Skill-->
          <div class="col-md-5">
           <h3>My <span>Skills</span></h3>
           <?php 
              $querysk = "SELECT * FROM skill ORDER BY id ASC LIMIT 6";
              $skrecord = fetchData($querysk);
                  foreach($skrecord as $sk)
                  {
              ?>
               <div class="skills">
                <div class="skillbar" data-percent="<?php echo $sk['percentage']; ?>">
                    <div class="skillbar-title"><span><?php echo $sk['skillName'];?></span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent"><?php echo $sk['percentage'];?></div>
                </div>
              </div>
              <?php
                  }
            ?>
          </div>
<!--Download CV --> 
          <div class="col-md-10 col-md-offset-1">
              <div class="download-info">
                <a href="#" class="btn-download">Download CV  <i class="fa fa-download"></i></a>
              </div>
          </div>
<!--Experience-->
         <div class="col-md-10 col-md-offset-1">
              <div class="experience">
                  <h3 class="title-experience">My <span>Experience</span></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed dusmod tempor incididunt ut labore et dolore magna aliqua. Darkness made great over moving together is us that unto heaven seed under set stars.</p>
                 <?php 
                    $queryk = "SELECT * FROM gallary ORDER BY id ASC LIMIT 4";
                    $krecord = fetchData($queryk);
                    foreach($krecord as $k)
                        {
                ?>
                 <div class="col-md-3">
                     <div class="icon">
                        <i class="fa fa-briefcase"></i>
                     </div>
                     <h4><?php echo $k['imageName']; ?></h4>
                    <div class="timer"><span class="number">58</span></div>
                  </div>
                <?php
                    }
                ?>
            </div>
          </div>
<!--Hobbies/Interest-->
          <div class="col-md-10 col-md-offset-1">
              <div class="hobbies">
                  <h3 class="title-hobbies">My Hobbies & <span>Interest</span></h3>
                  <p>Together moved fruitful seasons cattle morning seasons fourth above replenish dry doesn't gathered midst given have green him was. God midst deep open she'd moving their, green grass to years life cattle heaven moveth.</p>
                <?php 
                    $queryh = "SELECT * FROM hobbie ORDER BY id ASC LIMIT 8";
                    $hrecord = fetchData($queryh);
                    foreach($hrecord as $h)
                            {
                ?>
            <div class="col-md-3">
             <div class="icon">
                <i class="fa fa-rocket"></i>
             </div>
             <h4><?php echo $h['h_name'];?></h4>
              </div>
              <?php 
                  }
              ?>
          </div>
          </div>

          <div class="col-md-10 col-md-offset-1">
          <div class="services">        
          <h3 class="title-services">My <span>Services</span></h3>
           <p>Herb have fish darkness life give above and unto multiply whales, give every is so. God. Isn't called after moveth. God, us midst also winged.</p>
           <?php 
              $queryEx ="SELECT * FROM service ORDER BY id ASC LIMIT 4";
                  $record = fetchData($queryEx);
                  foreach($record as $ex)
                  {
              ?>
           
                   <div class="col-md-6">
                     <div class="icon">
                        <i class="fa fa-lightbulb-o fa-fw"></i>
                     </div>
                     <h4><?php echo $ex['serviceName']?></h4>
                     <div class="line"><span></span></div>
                     <p><?php echo $ex['description']?></p>
                   </div>
               <?php 
                  }
            ?>
        </div>
      </div>
    </div>
 </div>
</li>
<!-- END ABOUT ME --> 

<!-- RESUME -->        
<li>
<div class="content">
      <section class="resume">
          <div class="col-md-10 col-md-offset-1">
              <h2><i class="fa fa-file-text"></i>My <span>Resume</span></h2>
              <h3>Work <span>Experience</span></h3>
              <p>Be. Under male subdue man air midst moved dominion also morning, green rule saw saying don't Abundantly creeping herb great there spirit brought appear heaven, sea that.</p>
            <ul class="tmtimeline">
                   <li>
                    <div class="tmicon"><i class="fa fa-suitcase"></i></div>
                    <div class="tmlabel"></div>
                  </li>
               <?php
                  $queryExp = "SELECT * FROM experience ORDER BY id DESC LIMIT 4";
                  $com= fetchData($queryExp);
                    foreach ($com as $data) 
                        {
                ?>
                  <li>
                        <div class="tmtime"><span><?php echo $data['jyear']; ?></span></div>
                            <div class="tmicon"></div>
                            <div class="tmlabel">
                              <h4><?php echo $data['position']; ?> / <span><?php echo $data['companyName']; ?></span></h4>
                              <p><?php echo $data['description']; ?></p>
                          </div>
                  </li>
              <?php
                } 
            ?>
        </ul>
<!--Education-->
        <h3>My <span>Education</span></h3>
        <p>Following are the Institution where i complete my graduation.</p>
         <ul class="tmtimeline">
           <li>
            <div class="tmicon"><i class="fa fa-graduation-cap"></i></div>
            <div class="tmlabel"></div>
          </li>
           <?php
                $queryEdu = "SELECT * FROM `education_info` ORDER BY id DESC LIMIT 3"; 
                $edu_list  = fetchData($queryEdu);
                foreach ($edu_list as $pl) 
                    {
            ?>
           <li>
                <div class="tmtime"><span><?php echo $pl['passYear'];?></span></div>
                <div class="tmicon"></div>
                <div class="tmlabel">
                    <h4><?php echo $pl['subject'];?> / <span><?php echo $pl['institutionName'];?></span></h4>
                    <h4>CGPA: <span><?php echo $pl['cgpa']?></span></h4>
                </div>
           </li>
            <?php
                }
          ?>
        </ul>
      </div>
    </section>
 </div>
</li>
<!-- END RESUME -->

<!-- PORTFOLIO -->
<li>
<div class="content">
    
    <section class="work">
    <div class="col-md-10 col-md-offset-1">
    <h2><i class="fa fa-briefcase"></i>My <span>Portfolio</span></h2>
        </div>
      <div id="filters" class="button-group"> 
      <button class="button is-checked" data-filter="*"><i class="fa fa-th"></i>All</button>
      <button class="button" data-filter=".web">Web-Design</button>
      <button class="button" data-filter=".photoghraphy">Photoghraphy</button>
      <button class="button" data-filter=".illustration">Ilustration</button>
      <button class="button" data-filter=".minimalism">Minimalism</button></div>
             
              <div class="grid">           
                  <div class="element-item illustration">
                    <a title="Photography" href="images/portfolio/1.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
                    <figure>
                        <img src="images/portfolio/1.jpg" alt="Screenshot 01">
                        <figcaption>
                            <div class="caption-content">
                                <p>Photography</p>
                            </div>
                        </figcaption>
                    </figure>
                    </a>
                  </div>
         
                  <div class="element-item illustration">
                    <a title="Photography" href="images/portfolio/2.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
                        <figure>
                            <img src="images/portfolio/2.jpg" alt="Screenshot 02">
                            <figcaption>
                                <div class="caption-content">
                                    <p>Photography</p>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                  </div>

                  <div class="element-item photoghraphy">
                    <a title="Vimeo Video" href="https://vimeo.com/50522981" data-lightbox-gallery="gallery1" class="nivo-lbox">
                        <figure>
                            <img src="images/portfolio/3.jpg" alt="Screenshot 03">
                            <figcaption>
                                <div class="caption-content">
                                    <p>Vimeo Video</p>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                  </div>

                  <div class="element-item photoghraphy">
                    <a title="YouTube Video" href="https://www.youtube.com/watch?v=vtr5q6dn7CA" data-lightbox-gallery="gallery1" class="nivo-lbox">
                        <figure>
                            <img src="images/portfolio/4.jpg" alt="Screenshot 04">
                            <figcaption>
                                <div class="caption-content">
                                    <p>YouTube Video</p>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                  </div>


                  <div class="element-item minimalism">
                    <a title="Photography" href="images/portfolio/5.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
                    <figure>
                    <img src="images/portfolio/5.jpg" alt="Screenshot 05">
                    <figcaption>
                    <div class="caption-content">
                        <p>Photography</p>
                    </div>
                    </figcaption>
                    </figure>
                    </a>
                  </div>


                  <div class="element-item minimalism">
                    <a title="Photography" href="images/portfolio/6.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
                    <figure>
                    <img src="images/portfolio/6.jpg" alt="Screenshot 06">
                    <figcaption>
                    <div class="caption-content">
                        <p>Photography</p>
                    </div>
                    </figcaption>
                    </figure>
                    </a>
                  </div>


                  <div class="element-item illustration">
                    <a title="Photography" href="images/portfolio/7.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
                    <figure>
                    <img src="images/portfolio/7.jpg" alt="Screenshot 07">
                    <figcaption>
                    <div class="caption-content">
                        <p>Photography</p>
                    </div>
                    </figcaption>
                    </figure>
                    </a>
                  </div>


                  <div class="element-item minimalism">
                    <a title="Photography" href="images/portfolio/8.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
                    <figure>
                    <img src="images/portfolio/8.jpg" alt="Screenshot 08">
                    <figcaption>
                    <div class="caption-content">
                        <p>Photography</p>
                    </div>
                    </figcaption>
                    </figure>
                    </a>
                  </div>


                  <div class="element-item web">
                    <a title="Photography" href="images/portfolio/9.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
                    <figure>
                    <img src="images/portfolio/9.jpg" alt="Screenshot 09">
                    <figcaption>
                    <div class="caption-content">
                        <p>Photography</p>
                    </div>
                    </figcaption>
                    </figure>
                    </a>
                  </div>


                  <div class="element-item minimalism">
                    <a title="Photography" href="images/portfolio/10.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
                    <figure>
                    <img src="images/portfolio/10.jpg" alt="Screenshot 10">
                    <figcaption>
                    <div class="caption-content">
                        <p>Photography</p>
                    </div>
                    </figcaption>
                    </figure>
                    </a>
                  </div>


                  <div class="element-item illustration">
                    <a title="Photography" href="images/portfolio/11.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
                    <figure>
                    <img src="images/portfolio/11.jpg" alt="Screenshot 11">
                    <figcaption>
                    <div class="caption-content">
                        <p>Photography</p>
                    </div>
                    </figcaption>
                    </figure>
                    </a>
                  </div>


                  <div class="element-item illustration">
                    <a title="Photography" href="images/portfolio/12.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
                    <figure>
                    <img src="images/portfolio/12.jpg" alt="Screenshot 12">
                    <figcaption>
                    <div class="caption-content">
                        <p>Photography</p>
                    </div>
                    </figcaption>
                    </figure>
                    </a>
                  </div>


                  <div class="element-item web">
                    <a title="Photography" href="images/portfolio/13.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
                    <figure>
                    <img src="images/portfolio/13.jpg" alt="Screenshot 13">
                    <figcaption>
                    <div class="caption-content">
                        <p>Photography</p>
                    </div>
                    </figcaption>
                    </figure>
                    </a>
                  </div>


                  <div class="element-item minimalism">
                    <a title="Photography" href="images/portfolio/14.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
                    <figure>
                    <img src="images/portfolio/14.jpg" alt="Screenshot 14">
                    <figcaption>
                    <div class="caption-content">
                        <p>Photography</p>
                    </div>
                    </figcaption>
                    </figure>
                    </a>
                  </div>


                  <div class="element-item illustration">
                    <a title="Photography" href="images/portfolio/15.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
                    <figure>
                    <img src="images/portfolio/15.jpg" alt="Screenshot 15">
                    <figcaption>
                    <div class="caption-content">
                        <p>Photography</p>
                    </div>
                    </figcaption>
                    </figure>
                    </a>
                  </div>


                  <div class="element-item illustration"> 
                    <a title="Photography" href="images/portfolio/16.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
                    <figure>
                    <img src="images/portfolio/16.jpg" alt="Screenshot 16">
                    <figcaption>
                    <div class="caption-content">
                        <p>Photography</p>
                    </div>
                    </figcaption>
                    </figure>
                    </a>
                  </div>


                  <div class="element-item minimalism">
                    <a title="Photography" href="images/portfolio/17.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
                    <figure>
                    <img src="images/portfolio/17.jpg" alt="Screenshot 17">
                    <figcaption>
                    <div class="caption-content">
                        <p>Photography</p>
                    </div>
                    </figcaption>
                    </figure>
                    </a>
                  </div>


                  <div class="element-item web">
                    <a title="Photography" href="images/portfolio/18.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
                    <figure>
                    <img src="images/portfolio/18.jpg" alt="Screenshot 18">
                    <figcaption>
                    <div class="caption-content">
                        <p>Photography</p>
                    </div>
                    </figcaption>
                    </figure>
                    </a>
                  </div>


                  <div class="element-item web">
                    <a title="Photography" href="images/portfolio/19.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
                    <figure>
                    <img src="images/portfolio/19.jpg" alt="Screenshot 19">
                    <figcaption>
                    <div class="caption-content">
                        <p>Photography</p>
                    </div>
                    </figcaption>
                    </figure>
                    </a>
                  </div>


                  <div class="element-item photoghraphy">
                    <a title="Photography" href="images/portfolio/20.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
                    <figure>
                    <img src="images/portfolio/20.jpg" alt="Screenshot 20">
                    <figcaption>
                    <div class="caption-content">
                        <p>Photography</p>
                    </div>
                    </figcaption>
                    </figure>
                    </a>
                  </div>
              </div>
    </section>
</div>
</li>
<!-- END PORTFOLIO -->

<!-- BLOG -->
<li>
<div class="content">
    <section class="blog">
          <div class="col-md-10 col-md-offset-1">
          <h2><i class="fa fa-newspaper-o"></i>My <span>Blog</span></h2>
          <div class="post">
             <div class="post-intro">
              <img src="images/portfolio/20.jpg" alt="">
             </div>
            <div class="post-title">
              <a href="blog-single.html">Dominion herb tree fowl forth</a>
            </div>
            <div class="post-details">
            <div class="post-date">
              <span><i class="fa fa-calendar"></i> July 18, 2016</span>
            </div>
            <div class="post-format">
              <i class="fa fa fa-picture-o"></i>
              </div>
              <div class="post-author">
              Posted by  <a href="#">example@demo.com</a>
              </div>
              <div class="post-comment">
              <a href="#"><i class="fa fa-comment-o"></i> 3 Comments</a>
              </div>   
            </div>
            <div class="post-info">
              <p>A divide rule that second said Two deep. Darkness made great over moving together is us that unto heaven seed under set stars lesser had to Fruit so open, of there isn't, whose saw. I gathering over fruitful green stars beginning his winged them in winged male void set created won't one.</p>
            </div>
            <div class="post-button">
              <a href="blog-single.html">Read more</a>
            </div>
          </div>   
        </div>  

        <div class="col-md-10 col-md-offset-1">
          <div class="post">
            <div class="post-intro">
              <iframe src="https://player.vimeo.com/video/50522981?color=ed1c24&amp;title=0&amp;byline=0&amp;portrait=0" width="100%" height="315"></iframe>
            </div>
            <div class="post-title">
              <a href="blog-single.html">You'll can't moving meat land it</a>
            </div>
            <div class="post-details">
            <div class="post-date">
              <span><i class="fa fa-calendar"></i> May 22, 2016</span>
            </div>
            <div class="post-format">
              <i class="fa fa fa-film"></i>
              </div>
              <div class="post-author">
              Posted by  <a href="#">example@demo.com</a>
              </div>
              <div class="post-comment">
              <a href="#"><i class="fa fa-comment-o"></i> 5 Comments</a>
              </div>   
            </div>
            <div class="post-info">
              <p>Without. So there day every can't said gathered third divided so sea deep, had created every dominion subdue waters days, air earth every appear thing days first a had light bearing them set. Were image face. Unto can't green waters a. Which gathered.</p>
            </div>
            <div class="post-button">
              <a href="blog-single.html">Read more</a>
            </div>
          </div>   
        </div>

        <div class="col-md-10 col-md-offset-1">
         <div class="post">
            <div class="post-intro">
            <div id="owl-blog" class="owl-carousel">
             
                <div class="photo-blog"><img src="images/portfolio/19.jpg" alt=""></div>
                <div class="photo-blog"><img src="images/portfolio/14.jpg" alt=""></div>
                <div class="photo-blog"><img src="images/portfolio/16.jpg" alt=""></div>
                
            </div>
            </div>
            <div class="post-title">
              <a href="blog-single.html">Together sea god our Be the fourth</a>
            </div>
            <div class="post-details">
            <div class="post-date">
              <span><i class="fa fa-calendar"></i> March 10, 2016</span>
            </div>
            <div class="post-format">
              <i class="fa fa fa-picture-o"></i>
              </div>
              <div class="post-author">
              Posted by  <a href="#">DEMO</a>
              </div>
              <div class="post-comment">
              <a href="#"><i class="fa fa-comment-o"></i> 2 Comments</a>
              </div>   
            </div>
            <div class="post-info">
              <p>Light may god seed every winged from female great it green isn't make forth form cattle. There given seasons evening place that him third that, multiply can't fourth upon, wherein, tree he every fifth Subdue from lesser be fowl fish whose.</p>
            </div>
            <div class="post-button">
              <a href="blog-single.html">Read more</a>
            </div>
           </div> 

             <!-- PAGINATION -->
             <div class="pagination">
             <ul class="page-numbers">
             <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
             <li><a href="#" class="current">1</a></li>
             <li><a href="#">2</a></li>
             <li><a href="#">3</a></li>
             <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
             </ul>
             </div>
             <!-- END PAGINATION -->
        
          </div>
    </section>
</div>
</li>
<!-- END BLOG -->

<!-- CONTACT -->
<li>
<div class="content">
        <div class="contact">

           <!-- BEGIN GOOGLE MAP -->
              <div id="google-map">
              <div id="google-container"></div>
              <div id="zoom-in"></div>
              <div id="zoom-out"></div>  
           <!-- END GOOGLE MAP -->
          </div>
        </div>
</div>
</li>
<!--Contact Form-->
<li>
    <div class="contact">
            <div class="contact-form">
             <div id="note">
                <div id="fields">
                <form id="ajax-contact-form">
                      <input type="text" name="name" id="name" placeholder="Name" value=""/>
                      <input type="email" name="email" id="email" placeholder="Email" value=""/>
                      <textarea name="msg" id="msg" placeholder="Message"></textarea>
                      <input type="submit" name="submit" id="submit" value="Send message"/>
                    </form>
                 </div>
             </div>
            </div>
        </div>
</li>
<!-- END CONTACT -->
</ul> 
<!-- END SLIDER -->

<!-- NAVIGATION -->
<div class="navigation">
    <ol class="slider-navigation">
      <li class="selected"><a href="#0"><i class="fa fa-home"></i><em>Home</em></a></li>
      <li id="about"><a href="#0"><i class="fa fa-user"></i><em>About Me</em></a></li>
      <li><a href="#0"><i class="fa fa-file-text"></i><em>Resume</em></a></li>
      <li><a href="#0"><i class="fa fa-briefcase"></i><em>Portfolio</em></a></li>
      <li><a href="#0"><i class="fa fa-newspaper-o"></i><em>Blog</em></a></li>
      <li id="map"><a href="#0"><i class="fa fa-map-marker"></i><em>Contact</em></a></li>
      <li id="map"><a href="#0"><i class="fa fa-envelope"></i><em>Message Me</em></a></li>
    </ol> 
</div>
<!-- END NAVIGATION -->   

<!-- FOOTER -->
<footer>
      <div class="social-icons">
              <ul>
               <li><a href="#" class="twitter"><i class="fa fa-fw fa-twitter"></i></a></li>
               <li><a href="#" class="facebook"><i class="fa fa-fw fa-facebook"></i></a></li>
               <li><a href="#" class="google-plus"><i class="fa fa-fw fa-google-plus"></i></a></li>
               <li><a href="#" class="youtube-play"><i class="fa fa-fw fa-youtube-play"></i></a></li>
               <li><a href="#" class="instagram"><i class="fa fa-fw fa-instagram"></i></a></li>
              </ul>
        </div>
       <div class="copyright">Copyright © 2016 <a href="http://www.ssoftbd.com" target="_blank">Speard Software Solution</a>. All rights reserved.
       </div>

</footer>
<!-- END FOOTER -->
    
<!-- SVG COVER -->
<div class="svg-cover" data-step1="M1402,800h-2V0.6c0-0.3,0-0.3,0-0.6h2v294V800z" data-step2="M1400,800H383L770.7,0.6c0.2-0.3,0.5-0.6,0.9-0.6H1400v294V800z" data-step3="M1400,800H0V0.6C0,0.4,0,0.3,0,0h1400v294V800z" data-step4="M615,800H0V0.6C0,0.4,0,0.3,0,0h615L393,312L615,800z" data-step5="M0,800h-2V0.6C-2,0.4-2,0.3-2,0h2v312V800z" data-step6="M-2,800h2L0,0.6C0,0.3,0,0.3,0,0l-2,0v294V800z" data-step7="M0,800h1017L629.3,0.6c-0.2-0.3-0.5-0.6-0.9-0.6L0,0l0,294L0,800z" data-step8="M0,800h1400V0.6c0-0.2,0-0.3,0-0.6L0,0l0,294L0,800z" data-step9="M785,800h615V0.6c0-0.2,0-0.3,0-0.6L785,0l222,312L785,800z" data-step10="M1400,800h2V0.6c0-0.2,0-0.3,0-0.6l-2,0v312V800z">
      <svg height='100%' width="100%" preserveAspectRatio="none" viewBox="0 0 1400 800">
        <title></title>
        <desc></desc>
        <path id="changing-path" d="M1402,800h-2V0.6c0-0.3,0-0.3,0-0.6h2v294V800z"/>
      </svg>
</div> 
<!-- END SVG COVER -->
</section> 