<main>
    <div class="container-fluid main-video" >
        <div id="overlay">
        <img src="<?php echo base_url()?>/optimum/main/images/earth-gif-preloader.gif" style="position:absolute;left:0;right:0;top:0;bottom:0;margin:auto;display:block;" alt="Loading" /><br>
        </div>
        <div class="row w-100 h-100" style="width:100%;">
            <video autoplay muted loop id="myVideo">
              <source src="assets/IMG_5478.mp4" type="video/mp4">
            </video>
        </div>
        <div class="landing-content">
          <div class="landing-wrapper">
            <img src="<?php echo base_url()?>optimum/main/images/Milroc_logo.png" alt="">

             <h5 style="padding-bottom:0px;margin-bottom:0px;">Milroc Good Earth Developers</h5>
             <a href="javascript:void(0)">Discover</a>
          </div>


        </div>
        </div>
    </div>

  <!-- Banner Carousel -->
  <div class="main-home">
  <section class="container-fluid d-none">
    <div class="row">
      <div class="col p-0">
        <!-- carousel code -->
        <div id="homeCarousel" class="carousel slide carousel-fade" data-ride="carousel"  data-interval="2500">
          <ol class="carousel-indicators">
            <?php $count=0;
            $indicators = '';
            foreach($banner as $i => $obj) :
              $count++;
             if ($count === 1)
             {
                $class = 'active';
             }
             else
             {
                $class = '';
             }?>
          <li data-target="#homeCarousel" data-slide-to="<?php echo $i;?>" <?php echo !$i ? ' class="active"' : ''; ?>></li>
            <!-- <li data-target="#homeCarousel" data-slide-to="1"></li>
            <li data-target="#homeCarousel" data-slide-to="2"></li> -->
            <?php endforeach; ?>
          </ol>
          <div class="carousel-inner ">

            <!-- first slide -->
              <?php $count=0;
              $indicators = '';
              foreach($banner as $obj) :
                $count++;
               if ($count === 1)
               {
                  $class = 'active';
               }
               else
               {
                  $class = '';
               }?>
            <div class="carousel-item <?php echo $class; ?>" style="background-image: url('<?php echo site_url(); ?>assets/images/banners/<?php echo $obj['banner_image']; ?>">
            <div class="banner-inner">
              <div class="carousel-caption d-md-block">
                <h1 data-animation="animated fadeInUp">
                <?php echo $obj['banner_title']; ?>
                </h1>
                <p data-animation="animated fadeInUp">
                  <?php echo $obj['banner_details']; ?>
                </p>
                <?php if(!($obj['id'] == 15)): ?><button class="btn btn-hme"  data-animation="animated fadeInDown">View Projects</button> <?php endif; ?>
              </div>
              </div>
            </div>
          <?php endforeach; ?>
          </div>

        </div>
        <div class="viewmore">
        <div class="dwnimg">
             <img src="<?php echo base_url()?>optimum/main/images/down-arrow.png" class="img-fluid" alt="">
        </div>
        </div>
      </div>
    </div>

  </section> 
    <section class="container-fluid relative">
        <div class="row">
                <div class="swiper-container slideshow">
                <div class="swiper-wrapper">
                       <?php 
                        foreach($banner as $i => $obj) :
                        ?>
                    <div class="swiper-slide slide flex-column">
                        <div class="slide-image" style="background-image: url(<?php echo site_url(); ?>assets/images/banners/<?php echo $obj['banner_image']; ?>"></div>
                        <span class="slide-title"><?php echo $obj['banner_title']; ?></span>
                        <p class="carsl_cnt"><?php echo $obj['banner_details']; ?></p>
                        <p class="carsl_btn"><a href="#" class="btn btn-hme">View Project</a></p>
                    </div>
                    <?php endforeach; ?>
                 </div>
                    <div class="slideshow-pagination"></div>
            </div>
                    <div class="viewmore">
        <div class="dwnimg">
             <img src="<?php echo base_url()?>optimum/main/images/down-arrow.png" class="img-fluid" alt="">
        </div>
        </div>
    </section>
 
  <!-- Ends Here -->

  <!-- Philosophy Section Starts Here -->

  <div class="container-fluid" id="philosophy">
    <div class="container">
      <div class="row"  >
        <div class="col-md-6 col-lg-6 col-sm-12 col-12 phil-content align-self-center " data-aos="fade-up">
          <h3 class="text-head"  data-aos="zoom-in-up">The <span>Milroc</span> PHILOSOPHY</h3>
        </div>
        <div class="col-md-1 col-lg-1 col-sm-12 col-12 content-hr p-0" >
            <hr>
        </div>
        <div class="col-md-5 col-lg-5 col-sm-12 col-12" data-aos="fade-up">
           <p>We believe in the power of good and sustainable construction that designs not only a beautiful lifestyle
            and residence, but also enables the life and environment around it to flourish. Our capacity lies within
            the will to build not just better homes, but better futures for generations to come.</p>
          <a href="/aboutus/" class="btn btn-typ1">Know More</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Ends Here -->


    <div class="container-fluid" id="philosophytwo">
      <div class="container">
        <div class="row mb-4">
          <div class="flip-stats-counter w-100 flipClock">
            <div class="col col-md-12 col-sm-12">
                <div class="item">
           <div class="counter flipUnitContainer" data-count="31">
    
        0
        
          </div>
           <p class="lead title">Years'
          <br>
          Expertise</p>
          </div>
          </div>


            <div class="col col-md-4 col-sm-12">
            <div class="item">
            <div class="counter flipUnitContainer" data-count="1500">
   
        0
       
      
           </div>
               <p class="lead title">Happy
              <br> Clients</p>
            </div>
            </div>


              <div class="col col-md-12 col-sm-12">
                <div class="item">
                  <div class="counter flipUnitContainer" data-count="1840397">
        0
               </div>
               <p class="lead title">Area
 <br> Built <span style="font-size:14px;">(Sq.Ft)</span></p>
             </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- Featured Projects Section -->

  <div class="container-fluid" id="featured-projects">
    <div class="container-fluid">
    <div class="row justify-content-center my-4"  data-aos="zoom-in-up">
    <div class="col-12 col-md-10 col-sm-12 col-lg-10 p-md-0 p-lg-0">
      <h3 class=" text-head  mb-1 " > <span> Featured </span> Projects </h3>
      </div>
      </div>
      </div>
           <div class="row">
           <div class="col-12">

                <div class="owl-carousel " id="project">
                  <?php $count=0;
                  foreach($property as $obj) :
                    ?>
                      <a href="<?php echo site_url('/projects/detail/'.$obj['id']); ?>">
                  <div class="slide-item project-card">
                        <div class="col-12">
                            <div class="img-container">
                            <div class="img bg-img-cover" style="background-image:url('<?php echo site_url(); ?>assets/images/properties/<?php echo $obj['property_image']; ?>')"></div>
                            </div>
                            <div class="content">

                            <p class="lead name"><?php echo $obj['title']; ?></p>

                            <?php echo $obj['list_discription']; ?>
                        </div>
                     </div>
                    </div>
                    </a>
                    <?php endforeach; ?>

           </div>
            <div class="col-md-8 view--row"><a href="/projects" class="view-all">View All</a></div>
      </div>
      <div class="row col-12 d-none justify-content-between frst-row aos-init aos-animate"  data-aos="fade-up" >
        <?php $count=0;
        foreach($property as $obj) :
          ?>
        <div class="col-one-pro " data-aos="fade-up"  id="pro--col" href="<?php echo site_url('/projects/'.$obj['id']); ?>">
            <a href="<?php echo site_url('/projects/'.$obj['id']); ?>">
               <div class="img-wrapper" href="<?php echo site_url('/projects/'.$obj['id']); ?>">
                  <div class="pro--col" href="<?php echo site_url('/projects/'.$obj['id']); ?>" style="background-image: url('<?php echo site_url(); ?>assets/images/properties/<?php echo $obj['property_image']; ?>')"> </div>
                  <div class="img-head" href="<?php echo site_url('/projects/'.$obj['id']); ?>">
                    <div>
                    <h6> <?php echo $obj['title']; ?> </h6>
                    </div>
                  </div>
                    <a href="<?php echo site_url('/projects/'.$obj['id']); ?>">
                    <div class="image-wrapper--text" href="<?php echo site_url('/projects/'.$obj['id']); ?>">
                        <h6> <?php echo $obj['title']; ?> </h6>
                        <?php echo $obj['short_description']; ?>

                    </div>
                    </a>
          </div>
          </a>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

  <!-- Ends Here -->

  <!-- Green Solutions Starts Here -->
      <div class="container-fluid green-mobile" id="green-section">
      <div class="container">
            <div class="row mb-4">
                    <div class="col-12">
                    <h3 class="text-head mb-3"><span>Green</span> Solutions</h3>
                     <div class="owl-carousel" id="propertyone">
                         <?php foreach($green_solutions as $obj) : ?>
                        <div class="item">
                                <div class="green-section">
                                <div>
                                    <img src="<?php echo site_url(); ?>assets/images/green_solutions/<?php echo $obj['image']; ?>" class="img-fluid" alt="">
                                </div>
                                <h6><?php echo $obj['title']; ?></h6>
                                </div>
                        </div>
                          <?php endforeach; ?>
                    </div>
                </div>
                </div>

                <div class="row">
                    <div class="col-12">
                    <h3 class="text-head mb-3"><span>Lifestyle</span> Amenities</h3>
                     <div class="owl-carousel" id="propertytwo">
                        <div class="item">
                        <div class="green-section">
                          <div>
                            <img src="<?php echo site_url(); ?>assets/images/green_solutions/swimming.png" class="img-fluid" alt="">
                          </div>
                          <h6>Swimming Pool</h6>
                        </div>
                        </div>
                      
                      <div class="item">
                        <div class="green-section">
                          <div>
                            <img src="<?php echo site_url(); ?>assets/images/green_solutions/Kids.png" class="img-fluid" alt="">
                          </div>
                          <h6>Kids Recreational Area</h6>
                        </div>
                        </div>
                      
                       <div class="item">
                        <div class="green-section">
                          <div>
                            <img src="<?php echo site_url(); ?>assets/images/green_solutions/gym.png" class="img-fluid" alt="">
                          </div>
                          <h6>Gym</h6>
                        </div>
                        </div>
                         
                         <div class="item">
                        <div class="green-section">
                          <div>
                            <img src="<?php echo site_url(); ?>assets/images/green_solutions/Car_Am.png" class="img-fluid" alt="">
                          </div>
                          <h6>Car Parking</h6>
                        </div>
                        </div>
                      
                      <div class="item">
                        <div class="green-section">
                          <div>
                            <img src="<?php echo site_url(); ?>assets/images/green_solutions/game_room.png" class="img-fluid" alt="">
                          </div>
                          <h6>Games Room</h6>
                        </div>
                        </div>
                        
                        <div class="item">
                        <div class="green-section">
                          <div>
                            <img src="<?php echo site_url(); ?>assets/images/green_solutions/Multifunctional.png" class="img-fluid" alt="">
                          </div>
                          <h6>Multifunctional Hall</h6>
                        </div>
                        </div>
                    </div>
            </div>
      </div>
      </div>
      </div>

      </div>



      <div class="container-fluid green-desktop" id="green-section">
      <div class="">

            <div class="row">
                <div class="col-lg-2 col-md-4 offset-lg-1 col-12 main-slider align-self-center">
                    <div class="slider-for">
                    <div><h4><span>Green</span> <br> Solutions</h4></div>
                    <div><h4><span>Lifestyle</span> <br> Amenities</h4></div>
                    </div>
                 </div>
                  <div class="col-lg-9 col-md-8 col-12">
                    <div class="slider-nav">

                    <div>
                    <div class="row">
                        <?php foreach($green_solutions as $obj) : ?>
                            <div class="col-md-6 col-lg-4 col-sm-6 col-12" data-aos="fade-up">
                                <div class="green-section">
                                <div>
                                    <img src="<?php echo site_url(); ?>assets/images/green_solutions/<?php echo $obj['image']; ?>" class="img-fluid" alt="">
                                </div>
                                <h6><?php echo $obj['title']; ?></h6>
                                </div>
                            </div>
                          <?php endforeach; ?>
                       </div>
                    </div>
                        <div>
                        <div class="row">
                             <div class="col-md-6 col-lg-4 col-sm-6 col-12" data-aos="fade-up">
                        <div class="green-section">
                          <div>
                            <img src="<?php echo site_url(); ?>assets/images/green_solutions/swimming.png" class="img-fluid" alt="">
                          </div>
                          <h6>Swimming Pool</h6>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-sm-6 col-12" data-aos="fade-up">
                        <div class="green-section">
                          <div>
                            <img src="<?php echo site_url(); ?>assets/images/green_solutions/Kids.png" class="img-fluid" alt="">
                          </div>
                          <h6>Kids Recreational Area</h6>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-sm-6 col-12" data-aos="fade-up">
                        <div class="green-section">
                          <div>
                            <img src="<?php echo site_url(); ?>assets/images/green_solutions/gym.png" class="img-fluid" alt="">
                          </div>
                          <h6>Gym</h6>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-sm-6 col-12" data-aos="fade-up">
                        <div class="green-section">
                          <div>
                            <img src="<?php echo site_url(); ?>assets/images/green_solutions/Car_Am.png" class="img-fluid" alt="">
                          </div>
                          <h6>Car Parking</h6>
                        </div>
                    </div>
                      <div class="col-md-6 col-lg-4 col-sm-6 col-12" data-aos="fade-up">
                        <div class="green-section">
                          <div>
                            <img src="<?php echo site_url(); ?>assets/images/green_solutions/game_room.png" class="img-fluid" alt="">
                          </div>
                          <h6>Games Room</h6>
                        </div>
                    </div>
                     <div class="col-md-6 col-lg-4 col-sm-6 col-12" data-aos="fade-up">
                        <div class="green-section">
                          <div>
                            <img src="<?php echo site_url(); ?>assets/images/green_solutions/Multifunctional.png" class="img-fluid" alt="">
                          </div>
                          <h6>Multifunctional Hall</h6>
                        </div>
                    </div>

                </div>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>

  <!-- Ends Here -->

  <!-- Testimonial Seection Starts Here -->

  <div class="container-fluid" id="client-testtmonial">
    <div class="container">
        <div class="col-12">
            <h3 class="text-head"> <span>Client</span> Testimonials</h3>
        </div>
      <div class="row">
        <div class="col-12">
          <div id="client-carousel">
            <?php foreach($testimonials as $obj) : ?>
              <div class="client-item ">
                <div class="qm ">
                  <?php echo $obj['message']; ?>
                  <h4><?php echo $obj['name']; ?></h4>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>

  </div>


  <!-- Ends Here -->
  </div>

</main>
<script>
     var counted = 0;
$(window).scroll(function() {

  var oTop = $('section').offset().top - window.innerHeight;
  if (counted == 0 && $(window).scrollTop() > oTop) {
    $('.counter ').each(function() {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },

        {

          duration: 5000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
            //alert('finished');
          }

        });
    });
    counted = 1;
  }

});  
    
</script>
