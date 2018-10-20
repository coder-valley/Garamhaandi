<style>
    .products-1 {
        border: 1px solid #e1e1e1;
        float: left;
        position: relative;
        width: 100%;
        background: #fff;
    }
    .product-text-div {
        float: left;
        padding: 20px;
        width: 100%;
    }
    .product-image-div {
        padding: 20px;
        position: relative;
    }
    .product-options-div {
        background: rgba(0, 0, 0, 0.8) none repeat scroll 0 0;
        height: 100%;
        padding-top: 48%;
        position: absolute;
        text-align: center;
        top: 0;
        width: 100%;
        transform: scale(0);
        transition: all 0.5s ease 0s;
        left: 0;
    }
    .product-options-div a {
        color: #454545;
        background: #f1f1f1 none repeat scroll 0 0;
        border-radius: 50%;
        font-size: 28px;
        line-height: 100%;
        min-width: 50px;
        padding: 10px 15px;
    }
    .products-1:hover .product-options-div {
        transform: scale(1);
        transition: all 0.5s ease 0s;
    }
    .item {
        margin-left: 5px;
    }
    @-moz-document url-prefix() {
        .mozillafunc {
            padding-top: 4.8% !important;
        }
    }
    @-moz-document url-prefix() {
        .mozillafunc1 {
            top: 66px!important;
        }
    }
    .garamhaandiimage {
        width: 100%!important;
        float: unset;
    }
    #successMessage {
        width: 50%!important;
        margin-left: 26%;
    }
    #errormasge {
        text-align: center;
        color: white;
        background-color: #AD3234;
        width: 50%;
        font-size: 18px;
        margin-left: 26%;
        margin-top: 3%;
    }
    .stylesearch {
        display: block;
        width: 91.3%;
        top: 43px;
        left: 0px;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
    }
    .indexback {
        background-image: url("<?php echo HTTP_ROOT?>/img/slide6.jpg");
        min-height: 500px;
    }
    
</style>

<section>
    <div class="row indexback">

        <div class="col-md-3">

        </div>
        <div class="col-md-6" style="padding-top: 175px;">
            <h1 style="color: white; text-align: center;"><b>"Food is to eat, not to frame and hang on the wall"</b></h1>
            <br>
            <br>
            <br>
            <div class="row mediarowindex">
                <div class="col-md-2 col-sm-2 col-xs-2">

                </div>
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <form class="searchbox" method="post">
                        <div id="search-form" class="search-form js-search-form">
                            <form class="form-search" role="search" action="search_box" method="post">
                                <div class="input-group">
                                    <label for="autocomplete"> </label>
                                    <input class="barheight" autocomplete="off" id="autocomplete" type="text" class="form-control" placeholder=" Where you want your food" />
                                    <span class="input-group-btn mozillafunc">
                                      <button class="btn btn-info buttonstylesearch" id="btnsearch" type="button">
                                        <i class="fa fa-search"></i>
                                      </button>
                                    </span>
                                </div>
                                <div class="ui-widget" id="seaaaarchlocate" style="margin-top:2em;">
                                    <ul class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front mozillafunc1 stylesearch" tabindex="0" id="ul-widget" autocomplete="off" style="width: 90%;">
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </form>
                </div>
                <div class="col-md-2">

                </div>
            </div>
        </div>
        <div class="col-md-3">

        </div>
    </div>
</section>
<div id="successMessage">
    <?php if($myvar=$this->Session->flash()){ ?>
    <div class="response-msg success ui-corner-all">
        <?php echo $myvar;?>
    </div>
    <?php } ?>
</div>
<div id="errormasge">
    <?php if($this->Session->check('error')){ ?>
    <div style="padding: 10px;">
        <span></span>
        <?php echo $this->Session->read('error');?>
    </div>
    <?php CakeSession::delete( 'error'); ?>
    <?php } else if($this->Session->check('success')){?>
    <div class="response-msg success ui-corner-all">
        <span>Success message</span>
        <?php echo $this->Session->read('success');?>
    </div>
    <?php CakeSession::delete( 'success'); ?>
    <?php }?>
</div>
<section>
    <div class="container">
        <div class="row categories">
            <div class="col-md-12">
                <h4 class="text-center reviewhead m-t-50 m-b-20">"We Love to Serve quality food"</h4>
                <p class="m-b-50 p-b-20 text-center">Good food and a warm kitchen are what makes a house a home. I always tried to make my home like my mother's, because Mom was magnificent at stretching a buck when it came to decorating and food. Like a true Italian, she valued beautification in every area of her life, and I try to do the same.</p>
            </div>

        </div>
    </div>
    <div class="row" style="padding-bottom: 40px;">
        <div class="col-md-8">
            <img class="garamhaandiimage" alt="How it works" src="<?php echo HTTP_ROOT.'img/garamhaandi_image_index.png'; ?>">
        </div>
        <div class="col-md-4">
            <div class="bodybox col-md-offset-4" style="margin-left: 0%!important;margin-right: 5%">
                <h3 style="padding-bottom: 10px;margin-top: -5px;"><b>Get Garamhaandi App</b></h3>
                <input type="text" class="form-control" placeholder="Enter Your Mobile Number" name="">
                <button type="button" class="btn buttonindexpage" style="background-color: #29a79c !important; color: white!important;margin-top: 24px;">Submit</button>
                <br>
                <br>
                <div class="row">

                    <div class="col-md-12">
                        <a href="https://play.google.com/store?hl=en"><img style="margin-top: 0px!important;" class="googleimage" src="<?php echo HTTP_ROOT.'img/google_app.jpg'; ?>"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>
<!--Search display Show and Hide START-->
<script type="text/javascript">
    $(document).ready(function() {
        $('#seaaaarchlocate').hide();
        $('#autocomplete').keyup(function() {
            $('#seaaaarchlocate').show();
        })
    })
</script>

<!--Search display Show and Hide END-->
<script>
    function myFunction() {
        // Declare variables
        var input, filter, ul, li, a, i;
        input = document.getElementById('myInput');
        filter = input.value.toUpperCase();
        ul = document.getElementById("myUL");
        li = ul.getElementsByTagName('li');

        // Loop through all list items, and hide those who don't match the search query
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }
</script>

<script type="text/javascript">
    $(document).ready(function() {
        setTimeout(function() {
            $('#successMessage').fadeOut('fast');
        }, 3000); // time in milliseconds
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        setTimeout(function() {
            $('#errormasge').fadeOut('fast');

        }, 3000); // time in milliseconds
    });
</script>

<script type="text/javascript">
    /* $(document).ready(function(){
        $('#autocomplete').autocomplete({
          source: function(request, response){
            var letter = document.getElementById("autocomplete").value;
            $.ajax({
                    dataType: "json",
                    type:"post",
                    url: "<?php echo HTTP_ROOT.'homes/search_box/'?>"+letter,
                    success: function(data) 
                    {
                      var res = data;
                      //var res = JSON.parse(resp);
                      response(data);
                      $("#ul-widget").append(res);
                    }
                    // success: function(resp)
                    // {
                    //   var res = JSON.parse(resp);
                    //   $(".ui-widget").html(res);
                    //   console.log(res);
                    // }
                });
          },
                //select: function( event, ui ) {
            //log( "Selected: " + ui.item.value + " aka " + ui.item.id );
          //}
        });
      })*/
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#autocomplete').keyup(function() {

            var letter = document.getElementById("autocomplete").value;
            if (letter != '') {
                $.ajax({
                    url: "<?php echo HTTP_ROOT.'homes/search_box/'?>" + letter,
                    success: function(resp) {
                        //var res = JSON.parse(resp);
                        //console.log(resp);
                        $("#ul-widget").html(resp);
                    }
                });
            } else {
                $('#ul-widget').children().remove();
            }
            //console.log(letter);
        })
    })
</script>