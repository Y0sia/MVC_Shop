<?php $curr = \shop\App::$app->getProperty('currency'); ?>
<?php $count = 0; ?>
<?php if(!empty($products)): ?>
    <?php foreach($products as $product): ?>
        <?php if($count % 3 == 0 || $count == 0): ?>
            <div class="product-one">
        <?php endif; ?>
        <div class="col-md-4 product-left p-left">
            <div class="product-main simpleCart_shelfItem">
                <a href="product/<?=$product->alias;?>" class="mask"><img class="img-responsive zoom-img" src="public/images/<?=$product->img;?>" alt="" /></a>
                <div class="product-bottom">
                    <h3><?=$product->title;?></h3>
                    <p>Explore Now</p>
                    <h4>
                        <a data-id="<?=$product->id;?>" class="add-to-cart-link" href="cart/add?id=<?=$product->id;?>"><i></i></a> <span class=" item_price"><?=$curr['symbol_left'];?><?=$product->price * $curr['value'];?><?=$curr['symbol_right'];?></span>
                        <?php if($product->old_price): ?>
                            <small><del><?=$curr['symbol_left'];?><?=$product->old_price * $curr['value'];?><?=$curr['symbol_right'];?></del></small>
                        <?php endif; ?>
                    </h4>
                </div>
                <?php if($product->old_price != 0): ?>
                    <div class="srch srch1">
                        <span>-<?=($product->old_price - $product->price)?>%</span>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php $count++; ?>
        <?php if($count % 3 == 0): ?>
            <div class="clearfix"></div>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
    <div class="text-center">
        <p>(<?=count($products)?> товара(ов) из <?=$total;?>)</p>
        <?php if($pagination->countPages > 1): ?>
            <?=$pagination;?>
        <?php endif; ?>
    </div>
<?php else: ?>
    <h3>Товар отсутсвует</h3>
<?php endif; ?>