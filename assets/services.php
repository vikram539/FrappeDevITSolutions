<section class="servicesWrap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <?php
                $textArray = [1=>"product from Organic farm", 2=>"Free home Delivery", 3=>"Promotion of the week", 4=>"-20% discount on all vegitables"];

                for($i = 1; $i <= 4; $i++){
                    echo'<div class="col-12 col-lg-3">
                        <div class="servicesBlock">
                            <ul class="list-unstyled d-flex m-0 p-0 align-items-center justify-content-around">
                                <li>
                                    <object data="'.$images.'services/'.$i.'.svg"></object>
                                </li>
                                <li class="productName"><a href="">'.$textArray[$i].'</a></li>
                            </ul>
                        </div>
                    </div>';
                }
            ?>
        </div>
    </div>
</section>