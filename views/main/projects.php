<main>
<div class="container-fluid banner--header project-banner">
        <div class="container">
            <div class="row">
                <div class="col-12">

                </div>

                  <div class="col-12 align-self-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="">Projects</a></li>
                                </ol>
                            </nav>
                        <div class="main--head">
                            <h3>Projects</h3>
                              <!-- <form class="location-down" action="index.html" method="post">
                                <select class="location-wrapper" name="location">
                                  <option value="All locations">All Locations</option>
                                  <option value="Bangalore">Bangalore</option>
                                  <option value="Goa">Goa</option>
                                  <option value="Mumbai">Mumbai</option>
                                </select>
                              </form> -->
                            </div>
                        </div>
                    </div>
            </div>


        </div>

    </div>
    <div class="container-fluid main-head">
    <div class="container">
      <div class="row">
        <div class="col-12">
                  <div class="sort--list">
                              <ul class="nav">
                                <li <?php if ($_SERVER['REQUEST_URI'] == '/projects/'):?> class='active' <?php endif;?> >
                                  <a href="/projects/" id="all-proj"><span>All Projects</span></a>
                                </li>
      
                                <li <?php if ($_SERVER['REQUEST_URI'] == '/projects/status/current'):?> class='active' <?php endif;?> >
                                  <a href="/projects/status/current" id="current"><span>Current projects</span></a>
                                </li>
                                <li <?php if ($_SERVER['REQUEST_URI'] == '/projects/status/past'):?> class='active' <?php endif;?>>
                                  <a href="/projects/status/past"  id="past"><span>Past projects</span></a>
                                </li>
                                <li <?php if ($_SERVER['REQUEST_URI'] == '/projects/status/sales_rentals'):?> class='active' <?php endif;?>>
                                  <a href="/projects/status/sales_rentals" id="past"><span>Sales/Rentals</span></a>
                                </li>
                              </ul>
        </div>
      </div>
    </div>
    </div>
    <div class="container-fliud projects-wrapper">
        <div class="container">
                <div class="row  justify-content-between">
                <?php $count=0;
                  foreach($property as $obj) :
                    ?>
                    <div class="col-12 col-md-6 col-sm-12 col-lg-6 mb-5" href="<?php echo site_url('/projects/detail/'.$obj['id']); ?>">
                      <a href="<?php echo site_url('/projects/detail/'.$obj['id']); ?>">
                    <div class="slide-item project-card" href="<?php echo site_url('/projects/detail/'.$obj['id']); ?>">
                       <div class="col-12 p-0" href="<?php echo site_url('/projects/detail/'.$obj['id']); ?>">
                       <div class="img-container" href="<?php echo site_url('/projects/detail/'.$obj['id']); ?>">
                        <div class="img bg-img-cover" href="<?php echo site_url('/projects/detail/'.$obj['id']); ?>" style="background-image: url('<?php echo site_url(); ?>assets/images/properties/<?php echo $obj['property_image']; ?>');"></div>
                      </div>

                      <div class="content" >
                       <p class="lead name"><?php echo $obj['title']; ?></p>
                        <?php echo $obj['list_discription']; ?>
                     </div>

                    </div>
                 </div>
            </div>
            </a>
           <?php endforeach; ?>
        </div>
    </div>
</main>
