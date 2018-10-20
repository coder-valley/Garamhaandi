$(document).ready(function(){

  $(document).on('click','.dish-id',function(){
    var id = $(this).attr('id');
    $.ajax({
      type : 'post',
      data : {id : id},
      url : 'dishAjax',
      success : function(res)
                {
                  $('#dish-div').html(res);
                 },
      error : function(res)
              {
                alert('Server error.');
              }                    
    });
  });


  $(document).on('keyup','#search-dish',function(){
    var search = $(this).val();
    $.ajax({
      type : 'post',
      data : {key : search},
      url : 'ajaxSearch',
      success : function(res)
                {
                  $('#dish-div').html(res);
                 },
      error : function(res)
              {
                alert('Server error.');
              }                    
    });
    
  });
  var dish = [];
  $(document).on('click','.add-dish',function(){   
    var dishid = $(this).attr('id');
    
    
  });

  /*$(document).on('click','#order',function(){
    var data = JSON.stringify(dish);
    window.location.replace("order/"+data);
  });*/
  var i=0;
  $(document).on('click','.dish-add',function(){
    var price = parseInt($(this).attr('price'));
    var name = $(this).attr('dish');
    var typeno = $(this).attr('type');
    var src = $(this).attr('sr');
    var id = $(this).attr('dish-id');
      dish.push(id);
    
    
    var total_price = parseInt($('#total-price').text());
    $('#cart-count').text(dish.length);
    total_price = total_price+price;
    $('#total-price').text(total_price);
    if(typeno == '0'){
      var  type = 'fa fa-dot-circle-o vegs pull-right';
    }else{
      var type = 'fa fa-dot-circle-o nonvegs pull-right';
    }
    var append = '<div class="cart-items"><div class="del-item-div" price="'+price+'" dish-id="'+id+'"><i class="fa fa-close del-item"></i></div><div class="cartitemr1"><img src="'+src+'"><span>'+name+'</span><i class="'+type+'"></i></div><div class="cartitemr2"><input type="number" class="quantity" dish-id="'+id+'" value="1" min="1" price="'+price+'" name="data['+i+'][quantity]"><input type="hidden" name="data['+i+'][dish_id]" value="'+id+'"><input type="hidden" name="data['+i+'][dish]" value="'+name+'"><input type="hidden" name="data['+i+'][price]" value="'+price+'"> &nbsp;&nbsp;&nbsp; x &nbsp;&nbsp;&nbsp;<span>Rs.'+price+'</span>&nbsp;&nbsp;&nbsp; = &nbsp;&nbsp;&nbsp;Rs.<span class="pull-right m-t-15 '+id+'">'+price+'</span></div></div>';
    $('.order-list').append(append);    
    $("#"+id).css({'display':'block'}); 
    i++;
  });
  
  $(document).on('click','.del-item-div',function(){
    var id = $(this).attr('dish-id');
   // var price = parseInt($(this).attr('price'));
    var price_minus = parseInt($('.'+id).text());
    var total_price = parseInt($('#total-price').text());
    total_price = total_price-price_minus;
    $('#total-price').text(total_price);
      dish = jQuery.grep(dish, function(value) {
        return value != id;
      });
    $('#cart-count').text(dish.length);
    $("#"+id).css({'display':'none'}); 
    $(this).parent().remove();
  });

  $(document).on('change','.quantity',function(){
    var id = $(this).attr('dish-id');
    var quantity = parseInt($(this).val());
    var price = parseInt($(this).attr('price'));
    var total_price = parseInt($('#total-price').text());
    var price_plus = quantity*price;
    var price_minus = parseInt($('.'+id).text());
    $('.'+id).text(price_plus);    
    total_price = total_price-price_minus;
    var total_price = total_price+price_plus;

    $('#total-price').text(total_price);
  });

 <!---index jQuery (necessary for Bootstrap's JavaScript plugins)-->
  // $('.flexslider').flexslider({
  //           animation: "fade",
  //           animationLoop: true,
  //           slideshowSpeed: 7000,
  //           animationSpeed: 600,
  //           directionNav: false,
  //           controlNav: false
  //         });
          
  // <!------------->
  
  
});