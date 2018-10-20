<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.3/datepicker.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.3/datepicker.js"></script>

<style type="text/css">
  .btn-primary
  {
    background-color: #0C786B;
    border-color: #0C786B;
    display: inline-block;
    padding: 2px 6px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    border-radius: 3px;
    cursor: pointer;
    vertical-align: middle;
  }
  .cstm
  {
    width: 100%;
    display: block;
  }
  .cstm1
  {
    width: 40%;
    display: inline-block;
  }
  .cstm2
  {
    width: 40%;
    display: inline-block;
  }
  .event-datepicker
  {
    width: 90%;
  }
</style>


<div id="sub-nav">
  <div class="page-title">
    <h1>ADD CATEGORY</h1>
  </div>
</div>
<div id="page-layout">
  <div id="page-content">       
    <div id="page-content-wrapper">   
    <a style="margin-bottom:10px;" onclick="history.go(-1);"  class="ui-state-default ui-corner-all float-right ui-button">Back</a> 
    <div class="inner-page-title">
        <h2>Add Coupons</h2>
        <span></span>
      </div>
    <?php echo $this->Session->flash();?>
      <div class="content-box content-box-header">
        <div class="column-content-box">
          <div class="ui-state-default ui-corner-top ui-box-header">
            <span class="ui-icon float-left ui-icon-notice"></span>
            Add Coupons
          </div>
            
          <div class="content-box-wrapper">
          <form enctype="multipart/form-data" name="myform" id="tableForm" class="pager-form" method="post">
          <fieldset>
              <ul>
                  <li class="cstm">
                    <div class="cstm2">
                      <label class="desc" >Coupon Code<em style="color:red;">*</em></label>
                      <input class="form-control code required" placeholder="Code" name="data[Coupon][code]" type="text" style="width: 90%;" />
                    </div>
                    <div class="cstm1">
                      <label class="desc" >Generate Code<em style="color:red;">*</label>
                      <button type="button" class="btn btn-primary get-code">Generate Code</button>
                      <div style="color:red;float:left;" id="respon"></div> 
                    </div>
                </li>
                <li class="cstm">
                  <div class="cstm1">
                    <label>Valid From</label>
                    <i class="fa input-error"></i>
                    <input class="form-control required event-datepicker" placeholder="Valid From" name="data[Coupon][valid_from]" value="">
                  </div>
                  
                  <div class="cstm2">
                    <label>Valid To</label>
                    <i class="fa input-error"></i>
                    <input class="form-control required event-datepicker" placeholder="Valid To" name="data[Coupon][valid_to]" value="">
                  </div>
                </li>
                <li>
                  <label for="exampleInputPassword1">Coupon Category</label>
                  <i class="fa input-error"></i>
                  <select class="form-control required" name="data[Coupon][category]">
                    <option value="">Select Coupon Category</option>
                    <option value="1" <?php echo  @$coupon['Coupon']['category'] == '1' ? 'selected' : '';?>>Percent Discount</option>
                    <option value="0" <?php echo  @$coupon['Coupon']['category'] == '0' ? 'selected' : '';?>>Flat Discount</option>
                  </select>
                </li>
                <li>
                  <label for="exampleInputPassword1">Amount/Percentage</label>
                  <i class="fa input-error"></i>
                  <input class="form-control required number" placeholder="Coupon amount" name="data[Coupon][amount]" value="">
                </li>
               
               <li>
                     <input type="submit" id="btnsub" value="Submit">                 
               </li>                          
              </ul>
            </fieldset>
          </form> 
          </div>                        

        </div>
      </div>
      
    </div>
    <div class="clear"></div>
  </div>
</div>
<div class="clear"></div>
<script>
  $(function() {
     $( ".event-datepicker" ).datepicker();
  });
 </script>
<script>
  $(document).ready(function(){
    $('.get-code').on('click',function(){
      $.ajax({
                  type : 'post',
                  url : "<?php echo HTTP_ROOT.'Users/getCode/'?>",
                  success : function(response){
                          console.log(response);
                          $('.code').val(response)
                       },
                async: false
              });
    });
    $('#tableForm').validate();
  
  });
</script>