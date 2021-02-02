<!--start-breadcrumbs-->
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">
                <?=$breadcrumbs?>
            </ol>
        </div>
    </div>
</div>
<!--end-breadcrumbs-->
<!--start-single-->
<div class="single contact">
    <div class="container">
        <div class="single-main">
            <?php
            $curr = \shop\App::$app->getProperty('currency');
            $cats = \shop\App::$app->getProperty('cats');
            ?>
            <div class="col-md-9 single-main-left">
                <div class="sngl-top">
                    <?php if($gallery): ?>
                    <div class="col-md-5 single-top-left">
                        <div class="flexslider">
                            <ul class="slides">
                                <?php foreach($gallery as $item): ?>
                                <li data-thumb="public/images/<?=$item->img?>">
                                    <div class="thumb-image"> <img src="public/images/<?=$item->img?>" data-imagezoom="true" class="img-responsive" alt=""/> </div>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php else: ?>
                        <div class="col-md-3 single-top-left">
                            <img src="public/images/<?=$product->img?>" alt="">
                        <?php endif; ?>
                    </div>
                    <div class="col-md-7 single-top-right">
                        <div class="single-para simpleCart_shelfItem">
                            <h2><?=$product->title?></h2>
                            <div class="star-on">
                                <ul class="star-footer">
                                    <li><a href="#"><i> </i></a></li>
                                    <li><a href="#"><i> </i></a></li>
                                    <li><a href="#"><i> </i></a></li>
                                    <li><a href="#"><i> </i></a></li>
                                    <li><a href="#"><i> </i></a></li>
                                </ul>
                                <div class="review">
                                    <a href="#"> 1 customer review </a>

                                </div>
                                <div class="clearfix"> </div>
                            </div>

                            <h5 class="item_price" id="base-price" data-base="<?=($product->price * $curr['value'])?>"><?=$curr['symbol_left'];?><?=($product->price * $curr['value'])?><?=$curr['symbol_right'];?></h5>
                            <?php if($product->old_price != 0): ?>
                                <del class="item_old_price" data-base="<?=($product->old_price * $curr['value'])?>"><?=$curr['symbol_left'];?><?=($product->old_price * $curr['value'])?><?=$curr['symbol_right'];?></del>
                            <?php endif; ?>
                            <p><?=$product->description?></p>
                            <div class="available">
                                <ul>
                                    <li>Color
                                        <select>
                                            <option>Выберать цвет</option>
                                            <?php foreach($mods as $mod): ?>
                                                <option data-title="<?=$mod->title;?>" data-price="<?=$mod->price * $curr['value'];?>" value="<?=$mod->id;?>"><?=$mod->title;?></option>
                                            <?php endforeach; ?>
                                        </select></li>
                                    <div class="clearfix"> </div>
                                </ul>
                            </div>
                            <ul class="tag-men">
                                <li>
                                    <span>Category : </span>
                                    <span><a href="category/<?=$cats[$product->category_id]['alias']?>"><?=$cats[$product->category_id]['title']?></a></span>
                                </li>
                            </ul>
                            <div class="quantity">
                                <input type="number" size="4" value="1" min="1" step="1">
                            </div>
                                <a id="productAdd" data-id="<?=$product->id?>" href="cart/add?id=<?=$product->id?>" class="add-cart item_add add-to-cart-link">ADD TO CART</a>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="latestproducts">
                    <div class="product-one">
                        <h3>С этим товаром также покупают: </h3>
                        <?php if($related): ?>
                        <?php foreach($related as $item): ?>
                        <div class="col-md-4 product-left p-left">
                            <div class="product-main simpleCart_shelfItem">
                                <a href="product/<?=$item['alias']?>" class="mask"><img class="img-responsive zoom-img" src="public/images/<?=$item['img']?>" alt="" /></a>
                                <div class="product-bottom">
                                    <h3><?=$item['title']?></h3>
                                    <p>Explore Now</p>
                                    <h4><a href="cart/add?id=<?=$item['id']?>" class="item_add add-to-cart-link"><i></i></a>
                                        <span class="item_price"><?=$curr['symbol_left'];?><?=($item['price'] * $curr['value'])?><?=$curr['symbol_right'];?></span>
                                        <?php if($item['old_price'] != 0): ?>
                                            <span class="item_old_price"><?=$curr['symbol_left'];?><?=($item['old_price'] * $curr['value'])?><?=$curr['symbol_right'];?></span>
                                        <?php endif; ?>
                                    </h4>
                                </div>
                                <?php if($item['old_price'] != 0): ?>
                                <div class="srch">
                                    <span>-<?=($item['old_price'] - $item['price'])?>%</span>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endforeach;?>
                        <?php endif; ?>
                        <div class="clearfix"></div>
                    </div>
                </div>
                    <div class="latestproducts">
                        <div class="product-one">
                            <h3>Недавно просмотренные: </h3>
                            <?php if($recentlyViewed): ?>
                                <?php foreach($recentlyViewed as $item): ?>
                                    <div class="col-md-4 product-left p-left">
                                        <div class="product-main simpleCart_shelfItem">
                                            <a href="product/<?=$item['alias']?>" class="mask"><img class="img-responsive zoom-img" src="public/images/<?=$item['img']?>" alt="" /></a>
                                            <div class="product-bottom">
                                                <h3><?=$item['title']?></h3>
                                                <p>Explore Now</p>
                                                <h4><a href="cart/add?id=<?=$item['id']?>" class="item_add add-to-cart-link"><i></i></a>
                                                    <span class="item_price"><?=$curr['symbol_left'];?><?=($item['price'] * $curr['value'])?><?=$curr['symbol_right'];?></span>
                                                    <?php if($item['old_price'] != 0): ?>
                                                        <span class="item_old_price"><?=$curr['symbol_left'];?><?=($item['old_price'] * $curr['value'])?><?=$curr['symbol_right'];?></span>
                                                    <?php endif; ?>
                                                </h4>
                                            </div>
                                            <?php if($item['old_price'] != 0): ?>
                                                <div class="srch">
                                                    <span>-<?=($item['old_price'] - $item['price'])?>%</span>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endforeach;?>
                            <?php endif; ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
            </div>
            <div class="col-md-3 single-right">
                <div class="w_sidebar">
                    <section  class="sky-form">
                        <h4>Catogories</h4>
                        <div class="row1 scroll-pane">
                            <div class="col col-4">
                                <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>All Accessories</label>
                            </div>
                            <div class="col col-4">
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Women Watches</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Kids Watches</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Men Watches</label>
                            </div>
                        </div>
                    </section>
                    <section  class="sky-form">
                        <h4>Brand</h4>
                        <div class="row1 row2 scroll-pane">
                            <div class="col col-4">
                                <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>kurtas</label>
                            </div>
                            <div class="col col-4">
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Sonata</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Titan</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Casio</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Omax</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>shree</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Fastrack</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Sports</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Fossil</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Maxima</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Yepme</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Citizen</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Diesel</label>
                            </div>
                        </div>
                    </section>
                    <section class="sky-form">
                        <h4>Colour</h4>
                        <ul class="w_nav2">
                            <li><a class="color1" href="#"></a></li>
                            <li><a class="color2" href="#"></a></li>
                            <li><a class="color3" href="#"></a></li>
                            <li><a class="color4" href="#"></a></li>
                            <li><a class="color5" href="#"></a></li>
                            <li><a class="color6" href="#"></a></li>
                            <li><a class="color7" href="#"></a></li>
                            <li><a class="color8" href="#"></a></li>
                            <li><a class="color9" href="#"></a></li>
                            <li><a class="color10" href="#"></a></li>
                            <li><a class="color12" href="#"></a></li>
                            <li><a class="color13" href="#"></a></li>
                            <li><a class="color14" href="#"></a></li>
                            <li><a class="color15" href="#"></a></li>
                            <li><a class="color5" href="#"></a></li>
                            <li><a class="color6" href="#"></a></li>
                            <li><a class="color7" href="#"></a></li>
                            <li><a class="color8" href="#"></a></li>
                            <li><a class="color9" href="#"></a></li>
                            <li><a class="color10" href="#"></a></li>
                        </ul>
                    </section>
                    <section class="sky-form">
                        <h4>discount</h4>
                        <div class="row1 row2 scroll-pane">
                            <div class="col col-4">
                                <label class="radio"><input type="radio" name="radio" checked=""><i></i>60 % and above</label>
                                <label class="radio"><input type="radio" name="radio"><i></i>50 % and above</label>
                                <label class="radio"><input type="radio" name="radio"><i></i>40 % and above</label>
                            </div>
                            <div class="col col-4">
                                <label class="radio"><input type="radio" name="radio"><i></i>30 % and above</label>
                                <label class="radio"><input type="radio" name="radio"><i></i>20 % and above</label>
                                <label class="radio"><input type="radio" name="radio"><i></i>10 % and above</label>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--end-single-->
<!--information-starts-->
<div class="information">
    <div class="container">
        <div class="infor-top">
            <div class="col-md-3 infor-left">
                <h3>Follow Us</h3>
                <ul>
                    <li><a href="#"><span class="fb"></span><h6>Facebook</h6></a></li>
                    <li><a href="#"><span class="twit"></span><h6>Twitter</h6></a></li>
                    <li><a href="#"><span class="google"></span><h6>Google+</h6></a></li>
                </ul>
            </div>
            <div class="col-md-3 infor-left">
                <h3>Information</h3>
                <ul>
                    <li><a href="#"><p>Specials</p></a></li>
                    <li><a href="#"><p>New Products</p></a></li>
                    <li><a href="#"><p>Our Stores</p></a></li>
                    <li><a href="contact.html"><p>Contact Us</p></a></li>
                    <li><a href="#"><p>Top Sellers</p></a></li>
                </ul>
            </div>
            <div class="col-md-3 infor-left">
                <h3>My Account</h3>
                <ul>
                    <li><a href="account.html"><p>My Account</p></a></li>
                    <li><a href="#"><p>My Credit slips</p></a></li>
                    <li><a href="#"><p>My Merchandise returns</p></a></li>
                    <li><a href="#"><p>My Personal info</p></a></li>
                    <li><a href="#"><p>My Addresses</p></a></li>
                </ul>
            </div>
            <div class="col-md-3 infor-left">
                <h3>Store Information</h3>
                <h4>The company name,
                    <span>Lorem ipsum dolor,</span>
                    Glasglow Dr 40 Fe 72.</h4>
                <h5>+955 123 4567</h5>
                <p><a href="mailto:example@email.com">contact@example.com</a></p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--information-end-->
