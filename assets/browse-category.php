<section class="browseCategoryWrap marginTop_80 marginBottom_80">
    <div class="container">
        <div class="row">
            <div class="col-7 col-lg-8">
                <div class="textTypograph">
                    <h2>browser our hottest <span>category</span></h4>
                </div>
            </div>
            <div class="col-5 col-lg-4">
                <div class="textTypograph">
                    <div class="commonBtnWrap ms-auto">
                        <a href="<?=$root?>" class='commonBtn'>
                            <span>See All</span>
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-5 mb-5 pt-2 pb-2">
                <div class="thumbnailSlider">
                    <div class="owl-carousel owl-theme" id="owl-carousel"> 
                        <?php 
                            for($i = 1; $i <= 7; $i++ ){                             
                                
                                echo"<div class='item'>
                                    <div class='itemImg'>
                                        <img src='".$images."browseItems/1.jpg' alt='' class='img-fluid' />
                                        
                                        <div class='readMoreArrow'>
                                            <a href=''><i class='fas fa-long-arrow-alt-right'></i></a>
                                        </div>
                                    </div>
                                </div>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $('#owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots: false,
        // autoplay: true,
        navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:5,
                nav:true,
                loop:false
            }
        }
    })
</script>