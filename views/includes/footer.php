<footer>
    <div class="container-fluid">

      <h2 class="text-center "  data-toggle="modal" data-target="#homeModal">Get In Touch <span>+</span></h2>
      <hr>
      <div class="row footer--bar">
        <div class="col-md-3 col-lg-3 col-sm-6 col-12"  >
          <h4>Visit Us</h4>
          <address class="">
            <p>Milroc Good Earth Developers 501, 5th Floor, Milroc Lar Menezes, Swami Vivekanand Rd, Panaji,
              Goa 403001</p>
          </address>
        </div>
        <div class="col-md-3 col-lg-3 col-sm-6 col-12">
          <h4>Contact Us</h4>
          <p><a href="mailto:mail@milrocgoodearth.in"><img src="<?php echo base_url()?>optimum/main/images/msg.png" alt="">mail@milrocgoodearth.in</a></p>
          <p><a href="tel:0832 223 0536/6647080"><img src="<?php echo base_url()?>optimum/main/images/call_white.png" alt="">0832 223 0536/6647080</a></p>
        </div>
        <div class="col-md-3 col-lg-3 col-sm-6 col-12"  >
          <h4>Projects</h4>
          <ul class="nav flex-column">
            <li class="nav-item"><a href="/projects/detail/5" class="nav-link" target="”_blank”">Milroc Colina </a>
            </li>
            <li class="nav-item"><a href="/projects/detail/6" class="nav-link" target="”_blank”">Milroc Kadamba</a>
            </li>
            <li class="nav-item"><a href="/projects/detail/7" class="nav-link" target="”_blank”">Milroc Vista do Mar</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 col-lg-3 col-sm-6 col-12 social-icons"  >
          <h4>Follow Us On</h4>
          <a href="#" class="fb d-none"> <span></span></a>
          <a href="#" class="twitter d-none"> <span></span></a>
          <a href="#" class="ytb"> <span></span></a>
        </div>
      </div>
      <hr>

      <div class="row bottom--footer text-center justify-content-center">
        <h4 class="text-center">© 2020 Copyright <span>|</span> <a
            href="#"> Disclaimer</a> <span>|</span> <a
            href="#">Privacy Policy</a></h4>
      </div>

    </div>
  </footer>


  <script src="<?php echo base_url()?>optimum/main/js/jquery.min.js"></script>
  <script src="<?php echo base_url()?>optimum/main/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url()?>optimum/main/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url()?>optimum/main/js/slick.min.js"></script>
  <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
  <script src="<?php echo base_url()?>optimum/main/js/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>

   <script>
 	  AOS.init({
         duration: 600
         });



 class Slideshow {
     constructor(el) {

         this.DOM = {el: el};

         this.config = {
           slideshow: {
             delay: 3000,
             pagination: {
               duration: 6,
             }
           }
         };

         // Set the slideshow
         this.init();

     }
     init() {

       var self = this;

       // Set the slider
       this.slideshow = new Swiper (this.DOM.el, {

           loop: true,
           autoplay: {
             delay: this.config.slideshow.delay,
             disableOnInteraction: false,
           },
           speed: 500,
           preloadImages: true,
           updateOnImagesReady: true,

           // lazy: true,
           // preloadImages: false,

           pagination: {
             el: '.slideshow-pagination',
             clickable: true,
             bulletClass: 'slideshow-pagination-item',
             bulletActiveClass: 'active',
             clickableClass: 'slideshow-pagination-clickable',
             modifierClass: 'slideshow-pagination-',
             renderBullet: function (index, className) {

               var slideIndex = index,
                   number = (index <= 8) ? '0' + (slideIndex + 1) : (slideIndex + 1);

               var paginationItem = '<span class="slideshow-pagination-item">';
               paginationItem += '<span class="pagination-number">' + number + '</span>';
               paginationItem = (index <= 8) ? paginationItem + '<span class="pagination-separator"><span class="pagination-separator-loader"></span></span>' : paginationItem;
               paginationItem += '</span>';

               return paginationItem;

             },
           },

           // Navigation arrows
           navigation: {
             nextEl: '.slideshow-navigation-button.next',
             prevEl: '.slideshow-navigation-button.prev',
           },

           // And if we need scrollbar
           scrollbar: {
             el: '.swiper-scrollbar',
           },

           on: {
             init: function() {
               self.animate('next');
             },
           }

         });

         // Init/Bind events.
         this.initEvents();

     }
     initEvents() {

         this.slideshow.on('paginationUpdate', (swiper, paginationEl) => this.animatePagination(swiper, paginationEl));
         //this.slideshow.on('paginationRender', (swiper, paginationEl) => this.animatePagination());

         this.slideshow.on('slideNextTransitionStart', () => this.animate('next'));

         this.slideshow.on('slidePrevTransitionStart', () => this.animate('prev'));

     }
     animate(direction = 'next') {

         // Get the active slide
         this.DOM.activeSlide = this.DOM.el.querySelector('.swiper-slide-active'),
         this.DOM.activeSlideImg = this.DOM.activeSlide.querySelector('.slide-image'),
         this.DOM.activeSlideTitle = this.DOM.activeSlide.querySelector('.slide-title'),
         this.DOM.activeSlideTitleLetters = this.DOM.activeSlideTitle.querySelectorAll('span');

         // Reverse if prev
         this.DOM.activeSlideTitleLetters = direction === "next" ? this.DOM.activeSlideTitleLetters : [].slice.call(this.DOM.activeSlideTitleLetters).reverse();

         // Get old slide
         this.DOM.oldSlide = direction === "next" ? this.DOM.el.querySelector('.swiper-slide-prev') : this.DOM.el.querySelector('.swiper-slide-next');
         if (this.DOM.oldSlide) {
           // Get parts
           this.DOM.oldSlideTitle = this.DOM.oldSlide.querySelector('.slide-title'),
           this.DOM.oldSlideTitleLetters = this.DOM.oldSlideTitle.querySelectorAll('span');
           // Animate
           this.DOM.oldSlideTitleLetters.forEach((letter,pos) => {
             TweenMax.to(letter, .3, {
               ease: Quart.easeIn,
               delay: (this.DOM.oldSlideTitleLetters.length-pos-1)*.04,
               y: '50%',
               opacity: 0
             });
           });
         }

         // Animate title
         this.DOM.activeSlideTitleLetters.forEach((letter,pos) => {
           TweenMax.to(letter, .6, {
             ease: Back.easeOut,
             delay: pos*.05,
             startAt: {y: '50%', opacity: 0},
             y: '0%',
             opacity: 1
           });
         });

         // Animate background
         TweenMax.to(this.DOM.activeSlideImg, 1.5, {
             ease: Expo.easeOut,
             startAt: {x: direction === 'next' ? 200 : -200},
             x: 0,
         });

         //this.animatePagination()

     }
     animatePagination(swiper, paginationEl) {

       // Animate pagination
       this.DOM.paginationItemsLoader = paginationEl.querySelectorAll('.pagination-separator-loader');
       this.DOM.activePaginationItem = paginationEl.querySelector('.slideshow-pagination-item.active');
       this.DOM.activePaginationItemLoader = this.DOM.activePaginationItem.querySelector('.pagination-separator-loader');

       console.log(swiper.pagination);
       // console.log(swiper.activeIndex);

       // Reset and animate
         TweenMax.set(this.DOM.paginationItemsLoader, {scaleX: 0});
         TweenMax.to(this.DOM.activePaginationItemLoader, this.config.slideshow.pagination.duration, {
           startAt: {scaleX: 0},
           scaleX: 1,
         });


     }

 }

 const slideshow = new Slideshow(document.querySelector('.slideshow'));

 	</script>
  <script src="<?php echo base_url()?>optimum/main/js/script.js"></script>

<script type="text/javascript">
        $(document).ready(function(){
            $(".search").autocomplete({
                source: "/ajaxpro",
                minLength: 2,
                open: function(){
                    setTimeout(function () {
                        $('.ui-autocomplete').css('z-index', 99);
                    }, 0);
                }
              });
        });
</script>
</body>

</html>
