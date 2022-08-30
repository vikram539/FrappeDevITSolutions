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
                for($i = 1; $i <= 4; $i++){
            ?>
                <div class="col-12 col-lg-3  mt-5 mb-5 pt-2 pb-2 d-flex">
                    <div class="sellingProductImg">                        
                        <div class="discountSection row">
                            <div class="col-6">
                                <div class="like">
                                    <i class="far fa-heart"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="discount">
                                    <div class="ribbon-2">-25%</div>
                                </div>
                            </div>
                        </div>
                        <a class="nsbbox" title="" href="<?=$images?>selling-products/<?=$i?>.jpg">
                            <img src="<?=$images?>selling-products/<?=$i?>.jpg" alt="" class='img-fluid' />
                        </a>
                        <div class="details row">
                            <div class="col-12">
                                <h4>vegetables</h4>
                                <h3>farm fresh organic fruites 250g</h3>
                                <p class='amount'>$79.00<sub><span>/kg</span></sub></p>
                            </div>
                            <div class="col-7">
                                <div class="quantity">
                                    <form id='myform' method='POST' action='#'>
                                        <input type='button' value='-' class='qtyminus' field='quantity' />
                                        <input type='text' name='quantity' value='0' class='qty' />
                                        <input type='button' value='+' class='qtyplus' field='quantity' />
                                    </form>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="shopping-bag">
                                    <a href=""><i class="fas fa-shopping-bag"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php 
                }
            ?>            
        </div>
    </div>
</section>
<script>
    jQuery(document).ready(function(){
    // This button will increment the value
    $('.qtyplus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $('input[name='+fieldName+']').val(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
    // This button will decrement the value till 0
    $(".qtyminus").click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one
            $('input[name='+fieldName+']').val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
});

</script>
