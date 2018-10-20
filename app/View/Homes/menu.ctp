<style type="text/css">
    .col-big {
        position: relative;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
        width: 20%;
    }
    * {
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }
    .item11 {
        position: relative;
        margin: 2%;
        overflow: hidden;
    }
    .item11 .img11 {
        max-width: 100%;
        -moz-transition: all 0.3s;
        -webkit-transition: all 0.3s;
        transition: all 0.3s;
    }
    .item11:hover .img11 {
        -moz-transform: scale(1.1);
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
    }
    .whole:hover {
        box-shadow: 3px 3px 3px 3px lightgrey;
        transition: all 0.5s;
    }
    .reviewsanchor {
        color: black!important;
        text-decoration: none!important;
    }
    .rating {
        unicode-bidi: bidi-override;
        direction: rtl;
        font-size: 25px;
        padding-top: 23px;
    }
    .rating > span {
        display: inline-block;
        position: relative;
        width: 1.1em;
    }
    .rating > span:hover:before,
    .rating > span:hover ~ span:before {
        content: "\2605";
        position: absolute;
    }
    .reviewlogin {
        background-color: transparent;
        border: solid 1px lightgrey;
        border-radius: 8px;
        margin-left: 9%;
        color: black;
        font-weight: 700;
        font-size: 18px;
        margin-top: -9%;
        margin-bottom: 1.9%;
        text-align: center;
    }
    .rvwlgn {
        color: black;
        text-decoration: none;
        outline: none!important;
    }
    .rvwlgn:hover {
        color: black;
        text-decoration: none;
    }
    .validation-message {
        color: red;
        font-weight: 700;
        list-style: none;
        float: left;
        margin-left: -12%;
    }
    form[name=reviewuser] input[type=text].validation-passed {
        border: 1px solid #090;
        color: #090;
    }
    form[name=reviewuser] input[type=text].validation-failed {
        border: 1px solid red;
        color: red;
    }
    .product-item {
        padding: 15px;
        background: #fff;
        margin-top: 20px;
        position: relative;
    }
    .product-item:hover {
        box-shadow: 5px 5px rgba(234, 234, 234, 0.9);
    }
    .product-item:after {
        content: ".";
        display: block;
        height: 0;
        clear: both;
        visibility: hidden;
        font-size: 0;
        line-height: 0;
    }
    .sticker {
        position: absolute;
        top: 0;
        left: 0;
        width: 63px;
        height: 63px;
    }
    .sticker-new {
        background: url("<?php echo HTTP_ROOT?>img/new.png") no-repeat;
        left: auto;
        right: 0;
    }
    .pi-img-wrapper {
        position: relative;
    }
    .pi-img-wrapper div {
        background: rgba(0, 0, 0, 0.3);
        position: absolute;
        left: 0;
        top: 0;
        display: none;
        width: 100%;
        height: 100%;
        text-align: center;
    }
    .product-item:hover>.pi-img-wrapper>div {
        display: block;
    }
    .pi-img-wrapper div .btn {
        padding: 3px 10px;
        color: #fff;
        border: 1px #fff solid;
        margin: -13px 5px 0;
        background: transparent;
        text-transform: uppercase;
        position: relative;
        top: 50%;
        line-height: 1.4;
        font-size: 12px;
    }
    .product-item .btn:hover {
        background: #e84d1c;
        border-color: #c8c8c8;
    }
    .product-item h3 {
        font-size: 14px;
        font-weight: 300;
        padding-bottom: 4px;
        text-transform: uppercase;
    }
    .product-item h3 a {
        color: #3e4d5c;
    }
    .product-item h3 a:hover {
        color: #E02222;
    }
    .pi-price {
        color: #0c786b;
        font-size: 18px;
        float: left;
        padding-top: 1px;
    }
    .product-item .add2cart {
        float: right!important;
        color: #a8aeb3;
        border: 1px #29a79c solid;
        padding: 3px 10px;
        text-transform: uppercase;
        border-radius: 50%;
    }
    .add2cart
    {
        outline: none!important;
    }
    .product-item .add2cart:hover {
        color: #fff;
        background: #29a79c;
        border-color: #29a79c;
    }
    .minhw {
        min-height: 300px;
        min-width: 329px;
    }
</style>

<script type="text/javascript" src="/GaramHaandi/ValidationJs/jqeryvlidate.js"></script>
<script type="text/javascript" src="/GaramHaandi/ValidationJs/verify.prompt.min.js"></script>

<script type="text/javascript">
    var id = '';

    function add_cart(id) {
        console.log(id);
        var values = document.getElementById('123').innerHTML;
        console.log(id);
        var cart = parseInt(values);
        cart = cart + 1;
        document.getElementById('123').innerHTML = cart;
        //alert('Hello');
    }
</script>

<section>
    <div class="row marginrightzero">
        <div class="col-md-12">


            <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 101.1%">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="<?php echo HTTP_ROOT?>img/paralax.jpg">
                    </div>

                    <div class="item">
                        <img src="<?php echo HTTP_ROOT?>img/paralax.jpg">
                    </div>

                    <div class="item">
                        <img src="<?php echo HTTP_ROOT?>img/paralax.jpg">
                    </div>
                </div>
            </div>
            <br>
            <br>
        </div>
    </div>
</section>
<section>
    <div class="row marginrightzero">
        <div class="col-md-12">
            <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
            <div id="mySidenav" class="sidenav">
                <div class="container" style="background-color: #2874f0; padding-top: 10px;">
                    <span class="sidenav-heading">Home</span>
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                </div>

            </div>
        </div>
    </div>
</section>

<section>
    <div class="hoverbutton" style="float: right; position: fixed; z-index: 99999999; display: none; margin-bottom: 10%;">
        <a href="<?php echo HTTP_ROOT.'/Homes/checkout2'?>">
            <button class="btn btn-primary buttonhover" id="btncart">
                <span id="cart-count" class="item-number" style="margin-left: -41px; margin-right: -11px;">
                    <?php echo count($this->Session->read('cart'));?>
                </span>
                <span style="margin-right: 5%" id="cart-count" class="fa fa-shopping-cart item-number"> Your Cart</span>
            </button>
        </a>
    </div>
    <div class="row txtcenter marginrightzero">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="row paddleft">

                <div class="container">
                    <div class="row">
                        <?php $va=count($food); foreach($food as $pr_list) { ?>
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="minhw">
                                        <div class="item11" style="min-height: 300px;">
                                            <img src="<?php echo HTTP_ROOT.'img/food/'.$pr_list['Food']['image'] ?>" class="imgwid img-responsive img11">
                                        </div>
                                        <div class="item-overlay top"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6" style="text-align: left!important;">
                                            <h3><b><?php echo $pr_list['Food']['title']?></b></h3>
                                        </div>
                                        <div class="col-md-6" style="text-align: right!important;">
                                            <?php if($pr_list['Food']['type'] == 0){?>
                                            <img style="width: 16%; padding-top: 14px;" data-toggle="tooltip" data-placement="top" title="Vegetarian" src="<?php echo HTTP_ROOT?>img/veg.png">
                                            <?php } else{?>
                                            <img style="width: 16%; padding-top: 14px;" data-toggle="tooltip" data-placement="top" title="Non-Vegetarian" src="<?php echo HTTP_ROOT?>img/non-veg.png">
                                            <?php }?>
                                        </div>
                                    </div>

                                    <div class="pi-price">₹<?php echo $pr_list['Food']['price']?></div>
                                    <button class="btn add2cart quantity-right-plus additem" id="<?php echo $pr_list['Food']['id']?>" > + </button> &nbsp
                                    <input class="inoutbox" type="hidden" id="quantity_<?php echo $pr_list['Food']['id']?>" name="quantity" class="form-control input-number" value="0" min="1" readonly >
                                    <button style="margin-right: 10px!important;padding-left: 12px!important;" href="javascript:;" class="btn add2cart quantity-left-minus additem" id="<?php echo $pr_list['Food']['id']?>"> - </button> &nbsp
                                    <!-- <div class="sticker sticker-new"></div> -->
                                </div>
                            </div>
                        <?php $va--; } ?> 
                    </div>
                </div>
                <br>
                <br>
                <!--<div class="productprice">
                                    <div class="pull-right" style="margin-right: -12%;">
                                        <button class="buttoninout quantity-left-minus btn btn-number additem" data-type="minus" data-field="" id="<?php echo $pr_list['Food']['id']?>">-</button>
                                        <span>
                    <input class="inoutbox" type="text" id="quantity_<?php echo $pr_list['Food']['id']?>" name="quantity" class="form-control input-number" value="0" min="1" readonly >
                  </span>

                                        <button class="buttoninout quantity-right-plus btn btn-number additem" id="<?php echo $pr_list['Food']['id']?>" data-type="plus" data-field="">+</button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </form>-->
            </div>
        </div>
        <div class="col-md-1">
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row" style="padding-top: 40px; margin-bottom: -40px;padding-left: 22px;">
            <h2><a class="reviewsanchor" href="#" data-toggle="tooltip" title="Click to see all reviews!">Reviews</a></h2>

        </div>
    </div>
    <div class="carousel-reviews broun-block">
        <div class="container">
            <div class="row">
                <?php //pr($rvw);?>
                <div id="carousel-reviews" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">

                        <div class="item active">
                            <?php for($i=0 ;$i<3;$i++){?>
                            <div class="col-md-4 col-sm-6">
                                <div class="block-text rel zmin">
                                    <a title="" href="#">
                                        <?php echo $rvw[$i][ 'Review'][ 'title']?>
                                    </a>
                                    <div class="mark">My rating:
                                        <?php echo $rvw[$i][ 'Review'][ 'rating']?>
                                    </div>
                                    <p>
                                        <?php echo $rvw[$i][ 'Review'][ 'comment']?>
                                    </p>
                                    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                </div>
                                <div class="person-text rel">
                                    <!-- <img class="imagedash img-circle" style="width: 30%!important;" src="<?php echo HTTP_ROOT?>img/usereimg/HQwHI.jpg"> -->
                                    <p>
                                        <?php echo $rvw[$i][ 'User'][ 'name']?>
                                    </p>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                        <div class="item">
                            <?php for($i=3 ;$i<6;$i++){?>
                            <div class="col-md-4 col-sm-6">
                                <div class="block-text rel zmin">
                                    <a title="" href="#">
                                        <?php echo $rvw[$i][ 'Review'][ 'title']?>
                                    </a>
                                    <div class="mark">My rating:
                                        <?php echo $rvw[$i][ 'Review'][ 'rating']?>
                                    </div>
                                    <p>
                                        <?php echo $rvw[$i][ 'Review'][ 'comment']?>
                                    </p>
                                    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                </div>
                                <div class="person-text rel">
                                    <!-- <img class="imagedash img-circle" style="width: 30%!important;" src="<?php echo HTTP_ROOT?>img/usereimg/HQwHI.jpg"> -->
                                    <p>
                                        <?php echo $rvw[$i][ 'User'][ 'name']?>
                                    </p>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>

                    <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if($this->Session->check('User')){?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="reviewsanchor">Write Your Review</h2>
            </div>
        </div>
        <div class="row yourorder">
            <div class="col-md-2" style="text-align: center;">
                <img class="imagedash img-circle" style="width: 60%!important;" src="<?php echo HTTP_ROOT.'img/usereimg/'.$uname['User']['image'] ?>">
                <h4><?php echo $uinfo['User']['name']; ?></h4>
                <br>
                <form method="post" name="reviewuser">
                    <!-- <div class="row lead" style="padding-left: 9%">
                        <div id="stars example-fontawesome" name="data[Review][rating]" class="starrr"></div>
                    </div> -->
                <div class="star-ratings start-ratings-main" style="padding-top:45px; padding-left:25px">
                    <form method="post" name="reviewuser">
                        <div class="star-ratings start-ratings-main">
                            <div class="stars stars-example-fontawesome">
                                <select id="example-fontawesome" name="data[Review][rating]" autocomplete="off">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <br>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-md-10 yourorder1">
                <div class="form-group">
                    <label for="comment">Title:</label>
                    <textarea class="form-control" rows="1" required="" name="data[Review][title]" id="title"></textarea>
                    <label for="comment">Comment:</label>
                    <textarea class="form-control" required="" rows="4" id="comment" name="data[Review][comment]"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 10%; margin-left: 18%; background-color: #29a79c; border-color: #29a79c">Submit</button>
            <button type="button" class="btn btn-primary" style="width: 10%; background-color: #990002; border-color: #990002">Cancel</button>
            </form>
        </div>
    </div>
    </div>
</section>
<?php } else{?>
<div class="col-md-10 yourorder1 reviewlogin">
    <a class="rvwlgn" data-toggle="modal" data-target="#myModal1" href="javascript:void(0);">Please login to write your Review.</a>
</div>
<?php }?>
</div>

<!--SCRIPT TAG START-->

<!--Validation START-->
<script type="text/javascript">
    $(function() {
        $('form[name=reviewuser]').nextVal({});
    });
</script>
<!--Validation END-->

<script type="text/javascript">
    function openNav() {
        document.getElementById("mySidenav").style.width = "70%";
        // document.getElementById("flipkart-navbar").style.width = "50%";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.body.style.backgroundColor = "rgba(0,0,0,0)";
    }
</script>

<script>
    $(document).ready(function() {

        var quantitiy = 0;
        $('.quantity-right-plus').click(function(e) {

            // Stop acting like a button
            e.preventDefault();
            var id = $(this).attr('id');
            // Get the field name
            var quantity = parseInt($('#quantity_' + id).val());

            // If is not undefined

            if (quantity == 0) 
            {
                $('#quantity_' + id).val(quantity + 1);
                $(".hoverbutton").show();
            } 
            else 
            {
                if (quantity > 0) 
                {
                    $('#quantity_' + id).val(quantity + 1);
                    $(".hoverbutton").css("display", "block");
                }
            }


        });

        $('.quantity-left-minus').click(function(e) {
            // Stop acting like a button
            e.preventDefault();
            var id = $(this).attr('id');
            // Get the field name
            var quantity = parseInt($('#quantity_' + id).val());

            // If is not undefined

            // Increment
            if (quantity > 0) 
            {
                $('#quantity_' + id).val(quantity - 1);
            } 
            else 
            {
                if (quantity < 1) 
                {
                    // $(".hoverbutton").hide();
                }
            }
        });

    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $(".additem").click(function() {
            var id = $(this).attr('id');
            var quantity = ($('#quantity_' + id).val());
            // console.log(quantity);
            $.ajax({
                data: 
                {id: id, quantity: quantity},
                type: 'post',
                url: "<?php echo HTTP_ROOT.'homes/getcartitem/'?>" + id,
                success: function(resp) 
                {
                    //alert(resp);
                    //var res = JSON.parse(resp);
                    // console.log(resp);
                    if(resp == 0)
                    {
                        // console.log('hi');
                        $(".hoverbutton").hide();
                    }
                    //  $("#cnt").children().remove();
                    $("#cart-count").text(resp);
                }
            });
        })
    })
</script>

<script type="text/javascript">
    $(document).ready(function(){
        
        var cart = $('#cart-count').val();
        // console.log(cart);
        if(cart == 0)
        {
            // console.log('hi');
            $(".hoverbutton").hide();
        }
        else
        {
            // console.log('hello');
            // $(".hoverbutton").show();
        }
    })
</script>

<!-- Star rating js start -->
<script type="text/javascript">
    // Starrr plugin (https://github.com/dobtco/starrr)
    var __slice = [].slice;

    (function($, window) {
        var Starrr;

        Starrr = (function() {
            Starrr.prototype.defaults = {
                rating: void 0,
                numStars: 5,
                change: function(e, value) {}
            };

            function Starrr($el, options) {
                var i, _, _ref,
                    _this = this;

                this.options = $.extend({}, this.defaults, options);
                this.$el = $el;
                _ref = this.defaults;
                for (i in _ref) {
                    _ = _ref[i];
                    if (this.$el.data(i) != null) {
                        this.options[i] = this.$el.data(i);
                    }
                }
                this.createStars();
                this.syncRating();
                this.$el.on('mouseover.starrr', 'span', function(e) {
                    return _this.syncRating(_this.$el.find('span').index(e.currentTarget) + 1);
                });
                this.$el.on('mouseout.starrr', function() {
                    return _this.syncRating();
                });
                this.$el.on('click.starrr', 'span', function(e) {
                    return _this.setRating(_this.$el.find('span').index(e.currentTarget) + 1);
                });
                this.$el.on('starrr:change', this.options.change);
            }

            Starrr.prototype.createStars = function() {
                var _i, _ref, _results;

                _results = [];
                for (_i = 1, _ref = this.options.numStars; 1 <= _ref ? _i <= _ref : _i >= _ref; 1 <= _ref ? _i++ : _i--) {
                    _results.push(this.$el.append("<span class='glyphicon .glyphicon-star-empty'></span>"));
                }
                return _results;
            };

            Starrr.prototype.setRating = function(rating) {
                if (this.options.rating === rating) {
                    rating = void 0;
                }
                this.options.rating = rating;
                this.syncRating();
                return this.$el.trigger('starrr:change', rating);
            };

            Starrr.prototype.syncRating = function(rating) {
                var i, _i, _j, _ref;

                rating || (rating = this.options.rating);
                if (rating) {
                    for (i = _i = 0, _ref = rating - 1; 0 <= _ref ? _i <= _ref : _i >= _ref; i = 0 <= _ref ? ++_i : --_i) {
                        this.$el.find('span').eq(i).removeClass('glyphicon-star-empty').addClass('glyphicon-star');
                    }
                }
                if (rating && rating < 5) {
                    for (i = _j = rating; rating <= 4 ? _j <= 4 : _j >= 4; i = rating <= 4 ? ++_j : --_j) {
                        this.$el.find('span').eq(i).removeClass('glyphicon-star').addClass('glyphicon-star-empty');
                    }
                }
                if (!rating) {
                    return this.$el.find('span').removeClass('glyphicon-star').addClass('glyphicon-star-empty');
                }
            };

            return Starrr;

        })();
        return $.fn.extend({
            starrr: function() {
                var args, option;

                option = arguments[0], args = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
                return this.each(function() {
                    var data;

                    data = $(this).data('star-rating');
                    if (!data) {
                        $(this).data('star-rating', (data = new Starrr($(this), option)));
                    }
                    if (typeof option === 'string') {
                        return data[option].apply(data, args);
                    }
                });
            }
        });
    })(window.jQuery, window);

    $(function() {
        return $(".starrr").starrr();
    });

    $(document).ready(function() {

        $('#stars').on('starrr:change', function(e, value) {
            $('#count').html(value);
        });

        $('#stars-existing').on('starrr:change', function(e, value) {
            $('#count-existing').html(value);
        });
    });
</script>
<!-- Star rating js end -->