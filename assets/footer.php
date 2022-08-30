<footer class='marginTop_150'>

</footer>
<script src="<?= $root ?>bootstrap5/js/bootstrap.bundle.min.js"></script>
<!-- javascript -->
<script>
    $(document).ready(function(){
        var path = window.location.href;
        var target = $(document).find('nav #navbarNav ul li a[href="'+path+'"]').closest("li");            
        target.addClass('active');
    })
</script>
<script src="https://kit.fontawesome.com/3fd486c100.js" crossorigin="anonymous"></script>
<script src="<?=$root?>js/app.js" type="text/javascript"></script>
<script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots: false,
        autoplay: true,
        navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
</script>