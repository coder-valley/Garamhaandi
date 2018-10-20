<style type="text/css">
    .navbar-default .navbar-nav>li>a:focus, .navbar-default .navbar-nav>li>a:hover{
        background-color: #29a79c!important;
        color: white!important;
    }
    .navbar-default .navbar-nav>li>a, .navbar-default .navbar-nav>li>a{
        background-color: #0c786b!important;
        color: white!important;
    }

    .dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover{
        background-color: #29a79c!important;
        color: white!important;
    }
    .dropdown-menu>li>a, .dropdown-menu>li>a{
        background-color: #0c786b!important;
        color: white!important;
    }
    .decorationinput{
        
        background-color: transparent;
        color: white;
        border:none;
        outline: none;
        font-size: 15px;
        padding-top: 18px;
        padding-left: 10px;
        width: 100%;
    }
    .decorationinput::-webkit-input-placeholder {
        color: white !important;
    }
    .iconsearch{
        position: absolute;
        margin-top: 21px;
        color: white;
        margin-left: -2px;
    }
    .iconleft{
        margin-left: 8px!important;
    }
</style>


<nav class="navbar navbar-default nav-custom">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="row">
        <div class="col-md-2 col-sm-2">
                <div class="navbar-header" style="width: 100%;">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a href="<?php echo HTTP_ROOT.'/Homes/index'?>"" ><img src="<?php echo HTTP_ROOT?>img/new logoooo.png" style="width: 169px;    padding-left: 20px;" alt="logo"></a>
                </div>
            </div>
            <?php if( $this->params['action'] != 'index'){ ?>
            <div class="col-md-2">
                <?php if($this->Session->check('User')){ ?>
                <form class="form-search" role="search" action="search_box" method="post">
                    <span class="fa fa-map-marker iconsearch" aria-hidden="true"></span>
                    <input class="decorationinput" type="text" autocomplete="off" id="autocomplete" value="<?php echo $ulocation['Location']['location']?>" placeholder="Where you want your food" />

                    <div class="ui-widget" id="seaaaarchlocate" style="margin-top:2em;">
                        <ul class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front mozillafunc1 stylesearch" tabindex="0" id="ul-widget" autocomplete="off" style="width: 80%; margin-top: 16%; margin-left: 9%;">
                        </ul>
                    </div>
                </form>
                <?php } elseif(!$this->Session->check('Kitchen')) {?>
                <span class="fa fa-map-marker iconsearch" aria-hidden="true"></span>
                <input class="decorationinput" type="text" name="" placeholder="Location">
                <?php }?>
            </div>
            <?php } else {?>
            <div class="col-md-2"></div>
            <?php }?>
            <div class="col-md-8 col-sm-10">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          
                  <ul class="nav navbar-nav navbar-right top-nav" style="margin-right: 3px;">
                    
                    <?php if($this->Session->check('Kitchen')){ ?>
                    <!-- <li><a href="<?php echo HTTP_ROOT.'/Homes/menu'?>">Menu</a></li> -->
                    <!-- <li><a href="<?php echo HTTP_ROOT?>">Offers</a></li> -->
                    <li><a href="<?php echo HTTP_ROOT.'/Homes/kitchen_dashboard'?>">Profile</a></li>
                    <li><a href="<?php echo HTTP_ROOT.'/Homes/reffer_friend'?>">Refer Your Friends</a></li>
                    <li><a href="https://play.google.com/store?hl=en">Download App</a></li>
                    <li class="dropdown hoves"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, <?php echo $kitname['Kitchen']['name']; ?><b class="caret iconleft"> </b></a>
                        <ul class="dropdown-menu dropstyle">
                            <li><a href="<?php echo HTTP_ROOT.'/Homes/checkout'?>">Go To Cart</a></li>
                            <li><a href="<?php echo HTTP_ROOT.'/Homes/kitchen_logout'?>">Logout</a></li>
                        </ul>
                    </li>
                    <?php } else if($this->Session->check('User')){ ?>
                    <li>
                        <?php if(!$this->Session->read('ulocate')) { ?>
                        <a data-toggle="modal" data-target="#locate_modal" href="javascript:void(0);">Menu</a>
                        <?php } else{ ?>
                        <a href="<?php echo HTTP_ROOT."/Homes/menu/".base64_encode($ulocation['Location']['id'])?>">Menu</a>
                        <?php }?>
                    </li>
                    <li><a data-toggle="modal" data-target="#offer_modal" href="javascript:void(0);">Offers</a></li>
                    <li><a href="<?php echo HTTP_ROOT.'/Homes/subscribe'?>">Subscribe</a></li>
                    <li><a href="<?php echo HTTP_ROOT.'/Homes/user_dashboard'?>">Profile</a></li>
                    <li><a href="<?php echo HTTP_ROOT.'/Homes/reffer_friend'?>">Refer Your Friends</a></li>
                    <li><a href="https://play.google.com/store?hl=en">Download App</a></li>
                    <li class="dropdown hoves"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, <?php echo $uname['User']['name']; ?><b class="caret"></b></a>
                        <ul class="dropdown-menu dropstyle">
                            <li><a href="<?php echo HTTP_ROOT.'/Homes/checkout'?>">Go To Cart</a></li>
                            <li><a href="<?php echo HTTP_ROOT.'/Homes/user_logout'?>">Logout</a></li>
                        </ul>
                    </li>
                    <?php } else {?>
                    <li><a href="<?php echo HTTP_ROOT?>">Subscribe</a></li>
                    <li><a data-toggle="modal" data-target="#myModal2" href="javascript:void(0);">Kitchen Owner?</a></li>
                    <li><a href="<?php echo HTTP_ROOT.'/Homes/reffer_friend'?>">Refer Your Friends</a></li>
                    <li><a href="https://play.google.com/store?hl=en">Download App</a></li>
                    <li><a data-toggle="modal" data-target="#myModal1" href="javascript:void(0);">Login</a></li>
                    <?php } ?>
                  </ul>
                </div>
            </div>
        </div>
      </div><!-- /.container-fluid -->
    </nav>

<script type="text/javascript">
    $(document).ready(function() {
        $('#seaaaarchlocate').hide();
        $('#autocomplete').keyup(function() {
            var autuo_123 = $('#autocomplete').val();
            // console.log(autuo_123);
            if(autuo_123 !=0)
            {
                $('#seaaaarchlocate').show();
            }
            else
            {
                $('#seaaaarchlocate').hide();
            }
        })
    })
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