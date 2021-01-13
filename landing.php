<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mirloc Good Earth Properties</title>
    <link rel="stylesheet" href="<?php echo base_url()?>optimum/main/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>optimum/main/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>optimum/main/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url()?>optimum/main/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url()?>optimum/main/css/slick.css">
    <link href="<?php echo base_url()?>optimum/main/css/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url()?>optimum/main/css/style.css">
</head>
<style>

#particles-js {
  position: absolute;
  width: 100%;
  height: 100%;
  background-repeat: no-repeat;
  background-size: cover;
  z-index: 1;
  background-position: 50% 50%;
}

/* ---- stats.js ---- */
#myVideo
{
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
}

#stats,
.count-particles{
  -webkit-user-select: none;
}
div#overlay {
    position: fixed;
    width: 100%;
    height: 100%;
    background-color: #4f5703;
    top: 0;
    right: 0;
    left: 0;
    margin: 0 auto;
    z-index: 1;
    display: flex;
    align-self: center;
    justify-content: center;
}
div#overlay img {
    width: 50px;
    height: 50px;
    align-self: center;
}
#stats{
  border-radius: 3px 3px 0 0;
  overflow: hidden;
}

.count-particles{
  border-radius: 0 0 3px 3px;
}
h4
{
  color: #fff;
}
</style>
<body>



    <div class="container-fluid">
      <div id="overlay">
        <img src="http://mirlocbeta.epizy.com/optimum/main/images/earth-gif-preloader.gif" style="position:absolute;left:0;right:0;top:0;bottom:0;margin:auto;display:block;" alt="Loading" /><br>
    </div>
        <div class="row w-100" style="width:100%;">
            <div id="homeSlide" class="carousel slide carousel-fade" data-ride="carousel">
                <!-- <div class="carousel-inner">
                    <div class="carousel-item active" style="background:url('<?php echo base_url()?>optimum/main/images/landing1.png')">
                    </div>
                    <div class="carousel-item" style="background:url('<?php echo base_url()?>optimum/main/images/landing1.png')">
                    </div>
                    <div class="carousel-item" style="background:url('<?php echo base_url()?>optimum/main/images/landing1.png')">
                    </div>
            </div> -->
            <!-- The video -->
            <video autoplay muted loop id="myVideo">
              <source src="assets/IMG_5478.mp4" type="video/mp4">
            </video>
        </div>
        </div>
        <div class="landing-content">
          <div class="landing-wrapper">
            <img src="<?php echo base_url()?>optimum/main/images/Milroc_logo.png" alt="">

             <h5 style="padding-bottom:0px;margin-bottom:0px;">Milroc Good Earth Developers</h5>
             <a href="/home/">Discover</a>
          </div>


        </div>

    </div>

    <script src="<?php echo base_url()?>optimum/main/js/jquery.min.js"></script>
    <script src="<?php echo base_url()?>optimum/main/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function () {
        $("#homeSlide .carousel-item").css("height", $(window).height());
            setTimeout(function(){
                $('.landing-content').css("display", "table"), $('#overlay').fadeOut()},10130
            );
    });
    $(window).resize(function () {
        $('#homeSlide .carousel-item').css('height', $(window).height());
    });
    
        $(window).load(function(){
            $('#overlay').fadeOut();
        });
    </script>
</body>

</html>
