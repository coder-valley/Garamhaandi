<div class="categwrap">
  <h4><?php echo count($categories);?> Results Found</h4>
  <div class="row m-t-15">
    <?php foreach($categories as $dish){?>
      <div class="col-md-3 p-0 add-dish" dishId="<?php echo @$dish['id'];?>" price="<?php echo @$dish['price'];?>">
        <div class="menucategitem">
          <img alt="spiceegarden" class="img-responsive" src="<?php echo HTTP_ROOT?>img/dish/<?php echo $dish['Menu']['image'];?>">
          <h3><?php echo @$dish['Menu']['dish'];?></h3>
          <h5>₹ <?php echo @$dish['Menu']['price'];?></h5>
        </div>
      </div>    
    <?php }?>        
  </div>
</div>
