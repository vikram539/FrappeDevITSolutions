<section class='addCart'>
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-2 col-lg-2">
                <div class="headerLogo">
                    <a href="<?= $root ?>">
                        <img src="<?= $images ?>logo.png" alt="<?= $name ?>" class="img-fluid" />
                        <p>
                            <span>delicacy</span>
                            <span>organic</span> 
                        </p>
                    </a>
                </div>
            </div>
            <div class="col-5 col-lg-7">
                <div class="headerMiddleSection">
                    <ul>
                        <li>
                            <p>delivery to</p>
                        </li>
                        <li>
                            <p class='address'>
                                <i class="fas fa-map-marker-alt"></i>                                
                                <span>Address line1, address line2</span>
                            </p>
                        </li>
                        <li>
                            <form method="post" class='searchForm'>
                                <input type="text" class="form-control searchInput" placeholder="What are you looking for?" />
                                <i class="fas fa-search"></i>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-5 col-lg-3">
                <div class="headerRightSection">
                    <ul>
                        <li class='favorite'>
                            <p>
                                <i class="far fa-heart"></i>
                            </p>
                        </li>
                        <li class='myCart'>
                            <p>
                                <span>My Cart <lable>$255.00</label></span>  
                                <i class="fas fa-chevron-down"></i>                              
                            </p>
                        </li>
                        <li class='userProfile'>
                            <p> 
                                <i class="far fa-user-circle"></i>  
                                <span>User Name <i class="fas fa-chevron-down"></i></span>                             
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>