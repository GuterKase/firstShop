<!-- CATEGORY-MENU-LIST START -->
<div class="left-category-menu hidden-sm hidden-xs">
    <div class="left-product-cat">
        <div class="category-heading">
            <h2>categories</h2>
        </div>
        <div class="category-menu-list">
            <ul>
                <?php $categories = R::find('main_categories', 'LIMIT 8');
                ?>
                <!-- Single menu start -->
                <li class="arrow-plus">
                    <a href="#"><?php echo $categories['1']['title']; ?></a>
                    <!--  MEGA MENU START -->
<!--                    <div class="cat-left-drop-menu">-->
<!--                        <div class="cat-left-drop-menu-left">-->
<!--                            <a class="menu-item-heading" href="#">Handbags</a>-->
<!--                            <ul>-->
<!--                                <li><a href="#">Blouses And Shirts</a></li>-->
<!--                                <li><a href="#">Clutches</a></li>-->
<!--                                <li><a href="#">Cross Body</a></li>-->
<!--                                <li><a href="#">Satchels</a></li>-->
<!--                                <li><a href="#">Sholuder</a></li>-->
<!--                                <li><a href="#">Toter</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                        <div class="cat-left-drop-menu-left">-->
<!--                            <a class="menu-item-heading" href="#">Tops</a>-->
<!--                            <ul>-->
<!--                                <li><a href="#">Evening</a></li>-->
<!--                                <li><a href="#">Long Sleeved</a></li>-->
<!--                                <li><a href="#">Short Sleeved</a></li>-->
<!--                                <li><a href="#">Sleeveless</a></li>-->
<!--                                <li><a href="#">T-Shirts</a></li>-->
<!--                                <li><a href="#">Tanks And Camis</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                        <div class="cat-left-drop-menu-left">-->
<!--                            <a class="menu-item-heading" href="#">Dresses</a>-->
<!--                            <ul>-->
<!--                                <li><a href="#">Belts</a></li>-->
<!--                                <li><a href="#">Cocktail</a></li>-->
<!--                                <li><a href="#">Day</a></li>-->
<!--                                <li><a href="#">Evening</a></li>-->
<!--                                <li><a href="#">Sundresses</a></li>-->
<!--                                <li><a href="#">Sweater</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                        <div class="cat-left-drop-menu-left">-->
<!--                            <a class="menu-item-heading" href="#">Accessories</a>-->
<!--                            <ul>-->
<!--                                <li><a href="#">Bras</a></li>-->
<!--                                <li><a href="#">Hair Accessories</a></li>-->
<!--                                <li><a href="#">Hats And Gloves</a></li>-->
<!--                                <li><a href="#">Lifestyle</a></li>-->
<!--                                <li><a href="#">Scarves</a></li>-->
<!--                                <li><a href="#">Small Leathers</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
                    <!-- MEGA MENU END -->
                </li>
                <!-- Single menu end -->
                <!-- Single menu start -->
                <li class="arrow-plus">
                    <a href="#"><?php echo $categories['2']['title']; ?></a>
                    <!--  MEGA MENU START -->
<!--                    <div class="cat-left-drop-menu">-->
<!--                        <div class="cat-left-drop-menu-left">-->
<!--                            <a class="menu-item-heading" href="#">BAGS</a>-->
<!--                            <ul>-->
<!--                                <li><a href="#">Blazers</a></li>-->
<!--                                <li><a href="#">Bootees Bags</a></li>-->
<!--                                <li><a href="#">Jackets</a></li>-->
<!--                                <li><a href="#">Shoes</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                        <div class="cat-left-drop-menu-left">-->
<!--                            <a class="menu-item-heading" href="#">CLOTHING</a>-->
<!--                            <ul>-->
<!--                                <li><a href="#">Blazers</a></li>-->
<!--                                <li><a href="#">Bootees Bags</a></li>-->
<!--                                <li><a href="#">Jackets</a></li>-->
<!--                                <li><a href="#">Shoes</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                        <div class="cat-left-drop-menu-left">-->
<!--                            <a class="menu-item-heading" href="#">LINGERIE</a>-->
<!--                            <ul>-->
<!--                                <li><a href="#">Blazers</a></li>-->
<!--                                <li><a href="#">Bootees Bags</a></li>-->
<!--                                <li><a href="#">Jackets</a></li>-->
<!--                                <li><a href="#">Shoes</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                        <div class="cat-left-drop-menu-left">-->
<!--                            <a class="menu-item-heading" href="#">Shoes</a>-->
<!--                            <ul>-->
<!--                                <li><a href="#">Blazers</a></li>-->
<!--                                <li><a href="#">Bootees Bags</a></li>-->
<!--                                <li><a href="#">Jackets</a></li>-->
<!--                                <li><a href="#">Shoes</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
                    <!-- MEGA MENU END -->
                </li>
                <!-- Single menu end -->
                <!-- Single menu start -->
                <li class="arrow-plus">
                    <a href="#"><?php echo $categories['3']['title']; ?></a>
                    <!--  MEGA MENU START -->
<!--                    <div class="cat-left-drop-menu cat-left-drop-menu-photo-contain">-->
<!--                        <div class="cat-left-drop-menu-left">-->
<!--                            <a class="menu-item-heading" href="#">Women</a>-->
<!--                            <ul>-->
<!--                                <li><a href="#">Belts</a></li>-->
<!--                                <li><a href="#">Jewelry</a></li>-->
<!--                                <li><a href="#">Socks</a></li>-->
<!--                                <li><a href="#">Sunglasses</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                        <div class="cat-left-drop-menu-left">-->
<!--                            <a class="menu-item-heading" href="#">CLOTHING</a>-->
<!--                            <ul>-->
<!--                                <li><a href="#">Boots</a></li>-->
<!--                                <li><a href="#">Brands We Love</a></li>-->
<!--                                <li><a href="#">Casuals</a></li>-->
<!--                                <li><a href="#">Gifts And Tech</a></li>-->
<!--                                <li><a href="#">Gifts And Tech</a></li>-->
<!--                                <li><a href="#">Slippers</a></li>-->
<!--                                <li><a href="#">Speakers</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                        <div class="cat-left-drop-menu-left cat-left-drop-menu-photo">-->
<!--                            <a href="#"><img src="img/megamenu/vmega_blog1.jpg" alt="Product"></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                     MEGA MENU END -->
                </li>
                <!-- Single menu end -->
                <!-- Single menu start -->
                <li>
                    <a href="#"><?php echo $categories['4']['title']; ?></a>
                </li>
                <!-- Single menu end -->
                <!-- Single menu start -->
                <li><a href="#"><?php echo $categories['5']['title']; ?></a></li>
                <!-- Single menu end -->
                <!-- Single menu start -->
                <li><a href="#"><?php echo $categories['6']['title']; ?></a></li>
                <!-- Single menu end -->
                <!-- Single menu start -->
                <li><a href="#"><?php echo $categories['7']['title']; ?></a></li>
                <!-- Single menu end -->

            </ul>
        </div>
    </div>
</div>
<!-- END CATEGORY-MENU-LIST -->
