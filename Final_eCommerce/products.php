<!------------Product------------>
<?php
    $item_id = $_GET['item_id'] ?? 1;
    foreach ($product->getData() as $item) :
        if ($item['item_id'] == $item_id) :
?>
<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item['item_image'] ?? "images/Eden.jpeg" ?>" alt="product" class="img-fluid">
                <div class="form-row pt-4 font-size-16 font-baloo">
                    
                    <div class="col">
                        <!--   Add to Cart Button  -->
                        <form method="post">
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                            <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                       <?php
                        if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                            echo '<button type="submit" disabled class="btn btn-success font-size-16 form-control">In the Cart</button>';
                        }else{
                            echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-16 form-control">Add to Cart</button>';
                        }
                        ?>
                         </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                <small>by <?php echo $item['item_brand'] ?? "Brand"; ?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                    </div>
                    <a href="#" class="px-2 font-rale font-size-14"></a>
                </div>
                <hr class="m-0">

                <!------------Price------------>
                <table class="my-3">
                    
                    <tr class="font-rale font-size-14">
                        <td>Price:</td>
                        <td class="font-size-20 ">$<span><?php echo $item['item_price'] ?? 0; ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;Plus Taxes</small></td>
                    </tr>
                    
                </table>
                <!------------Price------------>

                <!------------Perks------------>
                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-retweet border p-3 rounded-pill"></span>
                            </div>                    
                            <small class="text-dark font-size-12">&nbsp;&nbsp;10 Plus <br> Wears</small>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-truck  border p-3 rounded-pill"></span>
                            </div>
                            <small class="text-dark font-size-12">&nbsp;&nbsp;Fast <br> Shipping</small>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-check-double border p-3 rounded-pill"></span>
                            </div>
                            <small class="text-dark font-size-12">&nbsp;&nbsp;2 Week <br> Returns</small>
                        </div>
                    </div>
                </div>
                <!------------Perks------------>
                <hr>

                <!------------Details------------>
                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                    <small>In Stock</small>
                    <small>One Week Delivery</small>
                </div>
                <!------------Details------------>

                <div class="row">
                    <div class="col-6">          
                    </div>
                    <div class="col-6">

                        <!------------Product Qty Not Used------------>
                        <div class="qty d-flex"> </div>
                        <!------------Product Qty Not Used------------>

                    </div>
                </div>

                


            </div>

            <div class="col-12">
                <h6 class="font-rubik">Description</h6>
                <hr>
                <p class="font-rale font-size-14">Lashed 3D Mink Magnetic Lash. Each lash has 5 magnets per lash that securely attach to the Lashed Magnetic Liner for all-day wear. These lashes can be worn up to 10+ times with proper care. </p>
                <p class="font-rale font-size-14">Our black magnetic liner comes within a tube with a brush applicator for easy and precise application. </p>
                <p class="font-rale font-size-14">When customers order they will receive the lashes and liner all within a lash box that can be used to store lashes when not in use. A spoolie brush is also provided to maintain lashes. </p>
                <p class="font-rale font-size-14">Magnetic Liner Ingredients: Ipon Powder, Acrylates Copolymer, Water, D&C Black No.2, Propylene Gycol, Ethylhexyl Glycerin, Phenoxyethanol 
</p>
            </div>
        </div>
    </div>
</section>
<!------------Product------------>
<?php
        endif;
        endforeach;
?>