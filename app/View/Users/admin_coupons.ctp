<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css">

<div id="sub-nav">
    <div class="page-title">
    <h1>Coupons</h1>
    </div>
</div>
<div id="page-layout">

  <div id="page-content">
        <div id="page-content-wrapper" class="no-bg-image wrapper-full">           
            
      <?php if($myvar = $this->Session->flash()){ ?>
        <div class="response-msg success ui-corner-all">
          <?php echo $myvar;?>
        </div>
        
      <?php } ?>
            <div class="hastable">
             <table id="sort-table"> 
                 <thead> 
          <tr>
              <th align="left" style="text-align:left;" colspan="7"><span style="font-size: 14px">List of Coupons
              </span></th>
              <th>
              <span style="font-size: 14px" class="ui-state-default ui-corner-all float-right ui-button">
              <?php echo $this->Html->link('Add Coupons',array('controller' => 'Users', 'action' => 'add_coupons'));?>
              </span>
              </th>
          </tr> 
          
              
      </thead>
      
       </table>
            <br>  
        <div class="hastable" style="text-align:center;">
          <form name="myform" class="pager-form" method="post" action="">
            <table id="sort-table"> 
            <thead> 
            <tr>
                            <th title="Sort">Sr.No</th>
                            <th title="Sort">Code</th>
                            <th title="Sort">Valid From</th>
                            <th title="Sort">Valid To</th>
                            <th title="Sort">Amount</th>
                            <th title="Sort">Category</th>
                            <!-- <th title="Sort">Gender</th> -->
                            <!-- <th title="Sort">Address</th> -->
                            <!-- <th title="Sort">Image</th> -->
                            <!-- <th title="Sort">Status</th> -->
              <td style="cursor:text;width:200px">Action</td> 
            </tr> 
            </thead> 
            <tbody> 
            <?php $i=1; foreach($coupon as $detail):?>      
               <tr>
                <td style="text-align:center"><?php echo $i; ?></td>
                <td style="text-align:center"><?php echo $detail['Coupon']['code']?></td> 
                <td style="text-align:center"><?php echo $detail['Coupon']['valid_from']?></td>
                <td style="text-align:center"><?php echo $detail['Coupon']['valid_to']?></td>
                <td style="text-align:center"><?php echo $detail['Coupon']['amount']?></td> 
                <td style="text-align:center"><?php echo $detail['Coupon']['category'] == '0' ? 'Flat' : 'Percentage';?></td>
                <td style="width:150px">

                  <a title="Delete_Coupon" href="<?php echo HTTP_ROOT.'admin/users/coupon/'.$detail['Coupon']['id']?>" onclick = "if(!confirm('Are you sure, you want to delete this Coupon?')){return false;}" class="ui-state-default ui-corner-all float-left ui-button tooltip"><i class="fa fa-trash" aria-hidden="true"></i></a>
                  
                  <a class="ui-state-default ui-corner-all float-left ui-button" title="Edit" href="<?php echo HTTP_ROOT.'admin/users/Coupons_edit/'.$detail['Coupon']['id']?>" >
                  <i class="fa fa-edit" aria-hidden="true"></i>
                  </a>
                </td>
            </tr> 
            <?php $i++; endforeach;?>
            
            </tbody>
            </table>
          </form>   
                    
          <div class="clear"></div>
        </div>            
      <div class="clear"></div>
      
          </div>
      
        </div>
        <div class="clear"></div>     
    </div>
</div>
