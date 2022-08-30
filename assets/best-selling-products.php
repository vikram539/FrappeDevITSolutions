<section class="sellingProductsWrap  marginTop_80 marginBottom_80">
    <div class="container">
        <div class="row">
            <div class="col-7 col-lg-8">
                <div class="textTypograph">
                    <h2>best Selling Products</h4>
                </div>
            </div>
            <div class="col-5 col-lg-4">
                <div class="textTypograph">
                    
                </div>
            </div>
            <?php 
                for($i = 1; $i <= 3; $i++){
            ?>
                <div class="col-12 col-lg-4  mt-5 mb-5 pt-2 pb-2">
                    <div class="sellingProductImg">
                        <img src="<?=$images?>promotion/<?=$i?>.jpg" alt="" class='img-fluid' />
                        
                    </div>
                </div>
            <?php 
                }
            ?>            
        </div>
    </div>
<section>