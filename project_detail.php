  <main>
    <section class="container-fluid" id="projects-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/home/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/projects/">Projects</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href=""><?php echo $properties['title']; ?></a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>


    <section class="container-fluid" id="project-details-two">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-lg-3 col-12 side--nav">
                <nav>
                    <ul>
                        <li class="dot active"><a  href="#project-deatail-one">OVERVIEW</a></li>
                        <?php if(!empty($properties['features'])): ?>
                        <li class="dot" ><a  href="#project-detail-three">PROJECT FEATURES</a></li>
                        <?php endif; ?>
                        <?php if(!empty($properties['site_plan'])): ?>
                        <li class="dot"><a  href="#project-detail-four" >SITE PLAN</a></li>
                        <?php endif; ?>
                        <?php if(!empty($properties['location_map'])): ?>
                        <li class="dot"><a href="#project-detail-five" >LOCATION MAP</a></li>
                        <?php endif; ?>
                    <?php if(!empty($floorplan_banner)): ?>
                        <li class="dot"><a  href="#project-detail-six" >FLOOR PLAN</a></li>
                        <?php endif; ?>
                    </ul>
                </nav>
                </div>

                <div class="col-md-9 col-lg-9 col-sm-12 col-12 content-navigation">
                    <section class="section-wrap pt-0" id="project-deatail-one">
                        <div class="video-sec relative">
                            <div id="proj-car" class="carousel slide" data-ride="carousel">
                              <ol class="carousel-indicators d-none">
                                <?php $count=0;
                                $indicators = '';
                                foreach($properties_banner as $i => $obj) :
                                  $count++;
                                 if ($count === 1)
                                 {
                                    $class = 'active';
                                 }
                                 else
                                 {
                                    $class = '';
                                 }?>
                                <li data-target="#proj-car" data-slide-to="<?php echo $i;?>" <?php echo !$i ? ' class="active"' : ''; ?>></li>
                                <?php endforeach; ?>
                              </ol>
                              <div class="carousel-inner">
                                <?php $count=0;
                                $indicators = '';
                                foreach($properties_banner as $obj) :
                                  $count++;
                                 if ($count === 1)
                                 {
                                    $class = 'active';
                                 }
                                 else
                                 {
                                    $class = '';
                                 }?>
                                <div class="carousel-item <?php echo $class; ?>">
                                <a data-fancybox="preview" href="<?php echo site_url(); ?>assets/images/properties/<?php echo $obj['image']; ?>">
                                  <img src="<?php echo site_url(); ?>assets/images/properties/<?php echo $obj['image']; ?>" class="img-fluid w-100">
                                </a>
                                </div>
                                <div class="play--btn modal-videos"
                                      href="https://s2.q4cdn.com/482484005/files/videos/EOP_REIT_August-2019_BestVersion.mp4">
                                      <span>VIDEO</span>
                                    </div>
                                <?php endforeach; ?>
                                <!-- <div class="carousel-item">
                                  <img src="<?php echo base_url()?>optimum/main/images/kadamba.png" class="img-fluid w-100">
                                </div>
                                <div class="carousel-item">
                                  <img src="<?php echo base_url()?>optimum/main/images/kadamba.png" class="img-fluid w-100">
                                </div> -->
                              </div>
                                      <a class="carousel-control-prev" href="#proj-car" role="button" data-slide="prev">
                                    <img src="<?php echo base_url()?>optimum/main/images/right_arrow.png" alt="">
                                    </a>
                                    <a class="carousel-control-next" href="#proj-car" role="button" data-slide="next">
                                    <img src="<?php echo base_url()?>optimum/main/images/left_arrow.png" alt="">
                                    </a>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="custom-project-col new-col-one"  >
                              <h3><?php echo $properties['title']; ?></h3>
                                <?php echo $properties['short_description']; ?>
                            </div>
                            <div class="custom-project-col new-col-two">
                                <a href="#">
                                    <img src="<?php echo site_url(); ?>assets/images/properties/<?php echo $properties['logo']; ?>" class="img-fluid" alt="">
                    <?php if(!empty($properties['site_link'])): ?>
                                    <span><a href="<?php echo $properties['site_link']; ?>" target="_blank">GO TO SITE</a></span>
                    <?php endif; ?>

                                </a>
                            </div>
                            <?php echo $properties['description']; ?>
                        </div>
                    </section>


                    <?php if(!empty($properties['features'])): ?>
                    <section class="section-wrap" id="project-detail-three">
                        <h4>PROJECT FEATURES</h4>
                        <?php echo $properties['features']; ?>
                    </section>
                    <?php endif; ?>

                    <?php if(!empty($properties['site_plan'])): ?>
                    <section class="section-wrap" id="project-detail-four">
                        <h4>SITE PLAN</h4>
                        <img src="<?php echo site_url();?>assets/images/properties/<?php echo $properties['site_plan']; ?>" class="img-fluid" alt="">
                    </section>

                    <?php endif; ?>

                    <?php if(!empty($properties['location_map'])): ?>
                    <section class="section-wrap" id="project-detail-five">
                        <h4>LOCATION MAP</h4>
                        <?php echo $properties['location_map']; ?>
                    </section>
                    <?php endif; ?>


                    <?php if(!empty($floorplan_banner)): ?>
                    <div class="section-wrap" id="project-detail-six">
                        <h4>FLOOR PLAN</h4>
                        <div class="row justify-content-between">
                        <?php foreach($floorplan_banner as $obj) : ?>
                            <div class="site-pan">
                            <a href="<?php echo site_url(); ?>assets/images/properties/<?php echo $obj['image']; ?>" data-fancybox="images">
                                <img src="<?php echo site_url(); ?>assets/images/properties/<?php echo $obj['image']; ?>"  class="img-fluid w-100"/>
                            </a>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>
</main>
