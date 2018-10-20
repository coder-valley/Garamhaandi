<div class="categwrap">
  <h4><?php echo $categories['Category']['title'];?></h4>
  <div class="row m-t-15">
    <?php foreach($categories['Menu'] as $dish){?>
      <div class="col-md-3 p-0 add-dish" dishId="<?php echo @$dish['id'];?>" price="<?php echo @$dish['price'];?>">
        <div class="menucategitem">
          <img alt="spiceegarden" class="img-responsive" src="<?php echo HTTP_ROOT?>img/dish/<?php echo $dish['image'];?>">
          <h3><?php echo @$dish['dish'];?></h3>
          <h5>₹ <?php echo @$dish['price'];?></h5>
        </div>
      </div>    
    <?php }?>        
  </div>
</div>
