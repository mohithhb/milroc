<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Milroc Good Earth Developers</title>
  <link rel="stylesheet" href="<?php echo base_url()?>optimum/main/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>optimum/main/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>optimum/main/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>optimum/main/css/aos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>optimum/main/css/slick.css">
  <link rel="stylesheet" href="<?php echo base_url()?>optimum/main/css/style.css">
  <link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"></link>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css">
        <script>!function(e){"undefined"==typeof module?this.charming=e:module.exports=e}(function(e,n){"use strict";n=n||{};var t=n.tagName||"span",o=null!=n.classPrefix?n.classPrefix:"char",r=1,a=function(e){for(var n=e.parentNode,a=e.nodeValue,c=a.length,l=-1;++l<c;){var d=document.createElement(t);o&&(d.className=o+r,r++),d.appendChild(document.createTextNode(a[l])),n.insertBefore(d,e)}n.removeChild(e)};return function c(e){for(var n=[].slice.call(e.childNodes),t=n.length,o=-1;++o<t;)c(n[o]);e.nodeType===Node.TEXT_NODE&&a(e)}(e),e});
    </script>

</head>
<body <?php if ($_SERVER['REQUEST_URI'] != 'mirlocbeta.epizy.com'):?> class='hme-pages' <?php endif;?>>
  <header class=" sticky">
    <div class="container-fluid">
      <div class="row top--header">
        <div class="col-md-2 col-lg-2 col-sm-2 col-2">
          <a href="/" class="navbar-brand">
            <img src="<?php echo base_url()?>optimum/main/images/Milroc_logo.png" alt="Logo">
          </a>
        </div>
        <div class="col-md-10 col-lg-10 col-sm-10 col-10 desktop-menu pr-md-0 pr-lg-0">
          <ul class="nav justify-content-end left--col ">
            <li class="nav-item mail"><a class="nav-link" href="mailto:mail@milrocgoodearth.in"><span></span>mail@milrocgoodearth.in </a> </li>
            <li class="nav-item tel"><a class="nav-link" href="tel:0832 223 0536"><span></span>0832 223
                0536/6647080</a></li>
          </ul>
          <ul class="nav justify-content-end right-col">
            <li class="nav-item <?php if ($_SERVER['REQUEST_URI'] === '/' ):?> active <?php endif;?>"><a class="nav-link" href="/">Home</a> </li>
            <li class="nav-item dropdown <?php if ($_SERVER['REQUEST_URI'] === '/projects/' ):?> active <?php endif;?>"><a class="nav-link " href="/projects/" >Projects</a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="/projects/detail/5">Mirloc Colina</a>
                <a class="dropdown-item" href="/projects/detail/6">Mirloc Kadamba</a>
                <a class="dropdown-item" href="/projects/detail/7">Mirloc Vista Do Mar</a>
                <a class="view-all" href="/projects/">View All</a>
            </div>
            </li>
            <li class="nav-item <?php if ($_SERVER['REQUEST_URI'] == '/aboutus/'):?> active <?php endif;?>"><a class="nav-link" href="/aboutus/">About Us</a></li>
            <li class="nav-item <?php if ($_SERVER['REQUEST_URI'] == '/contact/'):?> active <?php endif;?>"><a class="nav-link" href="/contact/">Contact Us</a></li>
            <li class="nav-item relative"><span class="srch"></span>
                                  <div class="header-search-modal-wrapper">

			<!-- <form role="search" method="get" class="header-search-modal header-search-form" action="<?php echo base_url('main/search') ?>">
				                                  <span class="close-frm">
            <img src="<?php echo base_url()?>optimum/main/images/close.png" alt="Logo">
                                  </span>
                <label>
					<span class="screen-reader-text">Search for:</span>
					<input type="search" class="form-control search" placeholder="Search ..." value="" name="search" title="Search for:">
				</label>
				<button type="submit" class="btn">
					<svg aria-hidden="true" focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21">
						<path fill="currentColor" fill-rule="evenodd" d="M12.514 14.906a8.264 8.264 0 0 1-4.322 1.21C3.668 16.116 0 12.513 0 8.07 0 3.626 3.668.023 8.192.023c4.525 0 8.193 3.603 8.193 8.047 0 2.033-.769 3.89-2.035 5.307l4.999 5.552-1.775 1.597-5.06-5.62zm-4.322-.843c3.37 0 6.102-2.684 6.102-5.993 0-3.31-2.732-5.994-6.102-5.994S2.09 4.76 2.09 8.07c0 3.31 2.732 5.993 6.102 5.993z"></path>
					</svg>
				</button>
			</form> -->
      <div class="box">
      <form role="search" method="get" action="<?php echo base_url('main/search') ?>">
							  <div class="container-2">
								  <span class="icon"></span>
								  <input type="search" class="search" id="search" placeholder="Search..." value="" name="search">
							  </div>
                              </form>
			</div>
		</div>
            </li>
            <li class="nav-item"><a class="nav-link head-btn contactmodal">Let’s Talk</a></li>
          </ul>
        </div>
        <div class="col-md-10 col-lg-10 col-sm-10 col-10 mobile-menu align-self-center pr-md-0 pr-lg-0">
          <ul class="nav justify-content-end left--col">
            <li class="nav-item"><a class="nav-link" href="mailto:mail@milrocgoodearth.in"><img src="<?php echo base_url()?>optimum/main/images/msg.png"
                  alt="">mail@milrocgoodearth.in </a> </li>
            <li class="nav-item"><a class="nav-link" href="tel:0832 223 0536"><img src="<?php echo base_url()?>optimum/main/images/call.png" alt="">0832 223
                0536/6647080</a></li>
          </ul>
          <ul class="nav justify-content-end mobile-menu md-d-none lg-d-none">

             <li class="nav-item">
                  <a href="javascript:void(0)" onclick="openNav();" class="nav-menu"><img src="<?php echo base_url()?>optimum/main/images/nav.svg" alt="nav"></a>
            </li>
          </ul>
        </div>
      </div>

    </div>

  </header>


  <div id="mySidenav" class="sidenav" style="width: 0px;">
  <div class="mb-inner">
    <div class="row justify-content-between">
        <img src="<?php echo base_url()?>optimum/main/images/Milroc_logo.png" alt="nav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">Close</a>
    </div>
    <div class="mob-submenu">
    <a href="/home/" target="_blank">Home </a>
    <a href="/projects/" target="_blank">Projects </a>
    <a href="/aboutus/">About Us</a>
    <a href="/contact/">Contact Us</a>
    </div>
    <div class="mobile-social">
        <a href="tel:0832 223 0536" class=""><img src="<?php echo base_url()?>optimum/main/images/phone_black.png" alt=""><span>0832 223 0536</span></a>
        <a href="mailto:mail@milrocgoodearth.in" class=""><img src="<?php echo base_url()?>optimum/main/images/email_black.png" alt=""><span>mail@milrocgoodearth.in</span></a>
    </div>
  </div>
    </div>


    <div class="letstalk">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <img src="<?php echo base_url()?>optimum/main/images/close.svg" alt="">
        </button>
        <div class="modal-head">
          <h5 class="modal-title">Let's talk about your need</h5>
          <p>Set Up a session with one of our custom space Managers</p>
        </div>

        <form action="<?php echo base_url('main/contactcreate') ?>" method='post' class="homecontact">
          <div class="form-group">
            <label for="fullname">Full Name</label>
            <input type="text" class="form-control" name="full_name" id="fullname" placeholder="Enter Full Name">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Best email to contact you">
          </div>
          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" class="form-control" id="phone" name="phone_no" placeholder="+91 000 000 0000">
          </div>
          <div class="form-group">
            <label for="additional">Additional Note</label>
            <textarea class="form-control" id="additional"  name="additional_note" placeholder="Anything else we should know?"
              rows="3"></textarea>
          </div>
          <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
          <div class="form-group">
            <button class="btn btn-contact" type="submit">Submit</button>
          </div>
        </form>
      </div>

    </div>
  </div>
<div class="modal homemodal fade" id="homeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
         <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <img src="<?php echo base_url()?>optimum/main/images/close.svg" alt="">
        </button>
        <div class="modal-head">
          <h5 class="modal-title">Contact Us</h5>
        </div>

        <form action="<?php echo base_url('main/contactcreate') ?>" method='post' class="homecontact">
          <div class="form-group">
            <label for="fullname">Full Name</label>
            <input type="text" class="form-control" name="full_name" id="fullname" placeholder="Enter Full Name">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Best email to contact you">
          </div>
          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" class="form-control" id="phone" name="phone_no" placeholder="+91 000 000 0000">
          </div>
          <div class="form-group">
            <label for="additional">Additional Note</label>
            <textarea class="form-control" id="additional"  name="additional_note" placeholder="Anything else we should know?"
              rows="3"></textarea>
          </div>
          <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
          <div class="form-group">
            <button class="btn btn-contact" type="submit">Submit</button>
          </div>
        </form>
      </div>

  </div>
</div>
