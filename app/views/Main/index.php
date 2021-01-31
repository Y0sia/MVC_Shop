<!--banner-starts-->
<div class="bnr" id="home">
    <div  id="top" class="callbacks_container">
        <ul class="rslides" id="slider4">
            <li>
                <img src="public/images/bnr-1.jpg" alt=""/>
            </li>
            <li>
                <img src="public/images/bnr-2.jpg" alt=""/>
            </li>
            <li>
                <img src="public/images/bnr-3.jpg" alt=""/>
            </li>
        </ul>
    </div>
    <div class="clearfix"> </div>
</div>
<!--banner-ends-->
<!--about-starts-->
<div class="about">
    <div class="container">
        <?php if($brands): ?>
        <div class="about-top grid-1">
            <?php foreach($brands as $brand): ?>
            <div class="col-md-4 about-left">
                <figure class="effect-bubba">
                    <img class="img-responsive" src="public/images/<?=$brand->img;?>" alt=""/>
                    <figcaption>
                        <h2><?=$brand->title;?></h2>
                        <p><?=$brand->description;?></p>
                    </figcaption>
                </figure>
            </div>
            <?php endforeach; ?>
            <div class="clearfix"></div>
        </div>
        <?php endif; ?>
    </div>
</div>
<!--about-end-->
<!--product-starts-->
<div class="product">
    <div class="container">
        <?php if($hits): ?>
        <?php $curr = \shop\App::$app->getProperty('currency'); ?>
        <?php $count = 0; ?>
        <div class="product-top">
            <?php foreach($hits as $hit): ?>
                <?php $count++; ?>
            <?php if($count % 4 == 0 && $count != 0): ?>
            <div class="product-one">
                <?php endif; ?>
                <div class="col-md-3 product-left">
                    <div class="product-main simpleCart_shelfItem">
                        <a href="product/<?=$hit->alias?>" class="mask"><img class="img-responsive zoom-img" src="public/images/<?=$hit->img?>" alt="" /></a>
                        <div class="product-bottom">
                            <h3><?=$hit->title?></h3>
                            <p>Explore Now</p>
                            <h4><a class="item_add" href="product/<?=$hit->alias?>"><i></i></a> <span class=" item_price"><?=$curr['symbol_left'];?><?=($hit->price * $curr['value'])?><?=$curr['symbol_right'];?><?php if($hit->old_price != 0): ?></span> <span class=" item_price item_old_price"><?=$curr['symbol_left'];?><?=($hit->old_price * $curr['value'])?><?=$curr['symbol_right'];?></span><?php endif; ?></h4>
                        </div>
                        <?php if($hit->old_price != 0): ?>
                        <div class="srch">
                            <span>-<?=($hit->old_price - $hit->price)?>%</span>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if($count % 4 == 0 && $count != 0): ?>
                <div class="clearfix"></div>
            </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</div>
<!--product-end-->
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