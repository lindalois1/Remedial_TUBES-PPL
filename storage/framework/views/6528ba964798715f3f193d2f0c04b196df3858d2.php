
<?php $__env->startSection('contents'); ?>
    <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <style>
        @import  url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700;900&display=swap');

        :root{
            --white-light: rgba(255, 255, 255, 0.5);
            --alice-blue: #f8f9fa;
            --carribean-green: #40c9a2;
            --gray: #ededed;
        }
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            font-family: 'Quicksand', sans-serif;
        }

        /* Utility stylings */
        img{
            width: 100%;
            display: block;
        }
        .container{
            width: 88vw;
            margin: 0 auto;
        }
        .lg-title,
        .md-title,
        .sm-title{
            font-family: 'Roboto', sans-serif;
            padding: 0.6rem 0;
            text-transform: capitalize;
        }
        .lg-title{
            font-size: 2.5rem;
            font-weight: 500;
            text-align: center;
            padding: 1.3rem 0;
            opacity: 0.9;
        }
        .md-title{
            font-size: 2rem;
            font-family: 'Roboto', sans-serif;
        }
        .sm-title{
            font-weight: 300;
            font-size: 1rem;
            text-transform: uppercase;
        }
        .text-light{
            font-size: 1rem;
            font-weight: 600;
            line-height: 1.5;
            opacity: 0.5;
            margin: 0.4rem 0;
        }

        /* product section */
        .products{
            background: var(--alice-blue);
            padding: 3.2rem 0;
        }
        .products .text-light{
            text-align: center;
            width: 70%;
            margin: 0.9rem auto;
        }
        .product{
            margin: 2rem;
            position: relative;
        }
        .product-content{
            background: var(--gray);
            padding: 3rem 0.5rem 2rem 0.5rem;
            cursor: pointer;
        }
        .product-img{
            background: var(--white-light);
            box-shadow: 0 0 20px 10px var(--white-light);
            width: 300px;
            height: 400px;
            margin: 0 auto;
            border-radius: 50%;
            transition: background 2.5s ease;
        }
        .product-btns{
            display: flex;
            justify-content: center;
            margin-top: 1.4rem;
            opacity: 0;
            transition: opacity 0.6s ease;
        }
        .btn-cart, .btn-buy{
            background: transparent;
            border: 1px solid black;
            padding: 0.8rem 0;
            width: 125px;
            font-family: inherit;
            text-transform: uppercase;
            cursor: pointer;
            border: none;
            transition: all 0.6s ease;
        }
        .btn-cart{
            background: black;
            color: white;
        }
        .btn-cart:hover{
            background: var(--carribean-green);
        }
        .btn-buy{
            background: white;
        }
        .btn-buy:hover{
            background: var(--carribean-green);
            color: #fff;
        }
        .product-info{
            background: white;
            padding: 2rem;
        }
        .product-info-top{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .rating span{
            color: var(--carribean-green);
        }
        .product-name{
            color: black;
            display: block;
            text-decoration: none;
            font-size: 1rem;
            text-transform: uppercase;
            font-weight: bold;
        }
        .product-price{
            padding-top: 0.6rem;
            padding-right: 0.6rem;
            display: inline-block;
        }
        .product-price:first-of-type{
            text-decoration: line-through;
            color: var(--carribean-green);
        }
        .product-img img{
            transition: transform 0.6s ease;
        }
        .product:hover .product-img img{
            transform: scale(1.1);
        }
        /*.product:hover .product-img{*/
        /*    background: var(--carribean-green);*/
        /*}*/
        .product:hover .product-btns{
            opacity: 1;
        }
        .off-info .sm-title{
            background: var(--carribean-green);
            color: white;
            display: inline-block;
            padding: 0.5rem;
            position: absolute;
            top: 0;
            left: 0;
            writing-mode: vertical-lr;
            transform: rotate(180deg);
            z-index: 1;
            letter-spacing: 3px;
            cursor: pointer;
        }

        /* product collection */
        /*.product-collection{*/
        /*    padding: 3.2rem 0;*/
        /*}*/
        /*.product-collection-wrapper{*/
        /*    padding: 3.2rem 0;*/
        /*}*/
        /*.product-col-left{*/
        /*    background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3)), url("images/fashion-img-1.jpg") center/cover no-repeat;*/
        /*}*/
        /*.product-col-r-top{*/
        /*    background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3)), url("images/fashion-img-2.png") center/cover no-repeat;*/
        /*}*/
        /*.flex{*/
        /*    display: flex;*/
        /*    justify-content: center;*/
        /*    align-items: flex-end;*/
        /*    height: 50vh;*/
        /*    padding: 2rem 1.5rem 3.2rem;*/
        /*    margin: 5px;*/
        /*}*/
        /*.product-col-r-bottom > div:first-child{*/
        /*    background: #eaa001;*/
        /*}*/
        /*.product-col-r-bottom > div:last-child{*/
        /*    background: #0090ff;*/
        /*}*/
        /*.product-col-content{*/
        /*    text-align: center;*/
        /*    color: white;*/
        /*}*/
        /*.product-collection .text-light{*/
        /*    opacity: 1;*/
        /*    font-size: 0.8;*/
        /*    font-weight: 400;*/
        /*    line-height: 1.7;*/
        /*}*/
        /*.btn-dark{*/
        /*    background: black;*/
        /*    color: white;*/
        /*    outline: 0;*/
        /*    border-radius: 25px;*/
        /*    padding: 0.7rem 1rem;*/
        /*    border: 0;*/
        /*    margin-top: 1rem;*/
        /*    cursor: pointer;*/
        /*    transition: all 0.6s ease;*/
        /*    font-size: 1rem;*/
        /*    font-family: inherit;*/
        /*}*/
        /*.btn-dark:hover{*/
        /*    background: var(--carribean-green);*/
        /*}*/







        /* Media Queries */
        @media  screen and (min-width: 992px){
            .product-items{
                display: grid;
                grid-template-columns: repeat(2, 1fr);
            }
            .product-col-r-bottom{
                display: grid;
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media  screen and (min-width: 1200px){
            .product-items{
                grid-template-columns: repeat(3, 1fr);
            }
            .product{
                margin-right: 1rem;
                margin-left: 1rem;
            }
            .products .text-light{
                width: 50%;
            }
        }

        @media  screen and (min-width: 1336px){
            .product-items{
                grid-template-columns: repeat(2, 1fr);
            }
            .product-collection-wrapper{
                display: grid;
                grid-template-columns: repeat(2, 1fr);
            }
            .flex{
                height: 60vh;
            }
            .product-col-left{
                height: 121.5vh;
            }
        }
    </style>

    <?php if(session()->has('message')): ?>  
    <div class="alert alert-<?php echo e(session('type')); ?>">
        <?php echo e(session('message')); ?>

    </div>
    <?php endif; ?>


    <div class = "products">
        <div class = "container">
            <h1 class = "lg-title"><i>Your delicious experience starts here</i></h1>


            <div class = "product-items">
                <!-- single product -->
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class = "product">
                    <div class = "product-content">
                        <div class = "product-img">
                            <?php if(is_file('uploads/products/'.$product->image_prod)): ?>
                                <img src="<?php echo e(asset('/uploads/products/'.$product->image_prod)); ?>" alt="product image">
                            <?php else: ?>
                                <img src="<?php echo e(url($product->image_prod)); ?>" width="280px" height="370px" alt="product image">
                            <?php endif; ?>
                        </div>
                        <div class = "product-btns">
                            <form method="POST" action="<?php echo e(route('cart.addToCart')); ?>">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                            <button type = "submit" class = "btn-cart"> add to cart
                                <span><i class = "fas fa-plus"></i></span>
                            </button>
                            </form>
                            <form method="POST" action="<?php echo e(route('cart.buynow')); ?>">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                            <button type = "submit" class = "btn-buy"> buy now
                                <span><i class = "fas fa-shopping-cart"></i></span>
                            </button>
                            </form>
                        </div>
                    </div>

                    <div class = "product-info">
                        <div class = "product-info-top">
                            <h2 class = "sm-title"><?php echo e($product->category->cat_name); ?></h2>
                            <div class = "rating">
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "far fa-star"></i></span>
                            </div>
                        </div>
                        <a href = "<?php echo e(route('products.show', $product->id)); ?>" class = "product-name"><?php echo e($product->title); ?></a>
                        <?php if($product->sale_price >0): ?>
                            <p class = "product-price">BDT <?php echo e($product->price); ?></p>
                            <p class = "product-price">BDT <?php echo e($product->sale_price); ?></p>
                        <?php else: ?>
                            <p class = "product-price">BDT <?php echo e($product->price); ?></p>
                        <?php endif; ?>
                    </div>

                    <div class = "off-info">
                        <h2 class = "sm-title">25% off</h2>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!-- end of single product -->
                <div class="row">
                    <div class="col-md-6 blog-main">
                        <?php echo e($products->links()); ?>

                    </div>

            </div>
        </div>
    </div>


    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_website_cake_shop_project\resources\views/product/productshopgeneral.blade.php ENDPATH**/ ?>