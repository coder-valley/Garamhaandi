<style>
.cms a:hover{ text-decoration:underline;}
</style>
<div id="page-header-wrapper">

    <div id="top">
    
    <!-- <div class="admin_logo">
        <a href="<?php echo HTTP_ROOT?>"><img src="<?php echo HTTP_ROOT?>img/layout/logo.png" alt="logo"></a>
   
    </div>  -->
    <!-- <span class="logo"><?php echo HTTP_ROOT?></span> -->
        <div class="welcome">
                    <span class="note" style="font-weight:bold"><a style="color: #FFFFFF;"><?php echo 'Welcome';?> <?php echo $this->Session->read('Admin.username');?></a></span>
               <a class="btn ui-state-default ui-corner-all" style="color:#FFF" href="<?php echo HTTP_ROOT ?>admin/Users/logout">
                  <span class="ui-icon ui-icon-power"></span>
                       Logout
               </a>                     
  </div>
    </div>
    <ul id="navigation">

          <li>
            <a href="<?php echo HTTP_ROOT;?>admin/Users/dashboard" class="sf-with-ul" >Dashboard</a>                 
       </li>
       <li class="">
              <a class="sf-with-ul" href="javascript:void(0)">Users Management<span class="ui-icon-carat-1-s ui-icon"> »</span></a>
             <ul style="visibility: hidden; display: none;" class="">
                          <li class=""><a href="<?php echo HTTP_ROOT.'admin/Users/user' ?>">Users</a></li>
                          <li class=""><a href="<?php echo HTTP_ROOT.'admin/Users/business' ?>">Business Owners</a></li>
                      </ul>
         </li>
            <li>
            <a href="javascript:void(0)" class="sf-with-ul" >Email Template</a>
             <ul>
                   <li>
                <a class="sf-with-ul" href="<?php echo HTTP_ROOT.'admin/Users/email_template' ?>">Email Template</a>                 
             </li>
           </ul>
       </li>
     <li class=""> 
            <a class="sf-with-ul" href="javascript:void(0)">Cms<span class="ui-icon-carat-1-s ui-icon"> »</span></a>
            <ul style="visibility: hidden; display: none;" class="">
                

<li class="">
                    <a href="<?php echo HTTP_ROOT.'admin/Users/faq';?>">FAQ</a>
                </li>
<li class=""><a href="<?php echo HTTP_ROOT.'admin/Users/contacts'; ?>">Contacts</a></li>
                <li class="">
                  <a href="<?php echo HTTP_ROOT.'admin/Users/about_us';?>">About Us</a>
                </li>

                <li class="">
                  <a href="<?php echo HTTP_ROOT.'admin/Users/privacy_policy';?>">Privacy Policy</a>
                </li>
                <li class="">
                  <a href="<?php echo HTTP_ROOT.'admin/Users/term';?>">Terms and Conditions</a>
                </li>
                <li class="">
                    <a href="<?php echo HTTP_ROOT.'admin/Users/manage_informations';?>">Manage Information</a>
                </li>
 <!--                <li class="">
                    <a href="<?php echo HTTP_ROOT.'admin/Users/dashboard_detail';?>">Dashboard Detail</a>
                </li>
<li class="">
                    <a href="<?php echo HTTP_ROOT.'admin/Users/buyer_tip';?>">Safety Tip</a>
                </li>
                <li class="">
                    <a href="<?php echo HTTP_ROOT.'admin/Users/safety_image';?>">Safety Tip Image</a>
                </li>
<li class="">
                    <a href="<?php echo HTTP_ROOT.'admin/Users/informational_video';?>">Manage Website Informational Video</a>
                </li>
<li class="">
                    <a href="<?php echo HTTP_ROOT.'admin/Users/followus';?>">Manage Follow Us Links</a>
                </li> -->
            </ul>      
        </li>       
        
     <li class=""> 
            <a class="sf-with-ul" href="javascript:void(0)">Manage Banner<span class="ui-icon-carat-1-s ui-icon"> »</span></a>
            <ul style="visibility: hidden; display: none;" class="">
                <li class="">
                    <a href="<?php echo HTTP_ROOT.'admin/Users/manage_banners';?>">Manage Banner</a>
                </li>
            </ul>      
        </li>   


 <li class=""> 
            <a class="sf-with-ul" href="javascript:void(0)">Manage Ads<span class="ui-icon-carat-1-s ui-icon"> »</span></a>
            <ul style="visibility: hidden; display: none;" class="">
                <li class="">
                    <a href="<?php echo HTTP_ROOT.'admin/Users/manage_products1';?>">Manage Products</a>
                </li>
                        <li class="">
                    <a href="<?php echo HTTP_ROOT.'admin/Users/manage_offers1';?>">Manage Offers</a>
                </li>
            </ul>      
        </li>
 
         <li class=""> 
            <a class="sf-with-ul" href="javascript:void(0)">Product Category<span class="ui-icon-carat-1-s ui-icon"> Â»</span></a>
            <ul style="visibility: hidden; display: none;" class="">
                <li class="">
                    <a href="<?php echo HTTP_ROOT.'admin/Users/manage_category';?>">Manage Product Category</a>
                </li>
             </ul>      
        </li>
<li class=""> 
            <a class="sf-with-ul" href="javascript:void(0)">Business Category<span class="ui-icon-carat-1-s ui-icon"> »</span></a>
            <ul style="visibility: hidden; display: none;" class="">
                <li class="">
                    <a href="<?php echo HTTP_ROOT.'admin/Users/business_category';?>">Business Category</a>
                </li>
             </ul>      
        </li>
<li class=""> 
            <a class="sf-with-ul" href="javascript:void(0)">Messages(<?php echo @$count_messages;?>)<span class="ui-icon-carat-1-s ui-icon"> »</span></a>
            <ul style="visibility: hidden; display: none;" class="">
                <li class="">
                    <a href="<?php echo HTTP_ROOT.'admin/Users/messages';?>">All Messages</a>
                </li>
                        <li class="">
                    <a href="<?php echo HTTP_ROOT.'admin/Users/messages2';?>">Unanswerd Messages</a>
                </li>
             </ul>      
        </li>


<li class=""> 
            <a class="sf-with-ul" href="javascript:void(0)">Newsletter<span class="ui-icon-carat-1-s ui-icon"> »</span></a>
            <ul style="visibility: hidden; display: none;" class="">
                <li class="">
                    <a href="<?php echo HTTP_ROOT.'admin/Users/manage_newsletter';?>">Manage Newsletter</a>
                </li>
                <li class="">
                    <a href="<?php echo HTTP_ROOT.'admin/Users/newsletter_subcribers';?>">Newsletter subscriber's list</a>
                </li>
                
             </ul>      
        </li>
<li class=""> 
            <a class="sf-with-ul" href="javascript:void(0)">Email Conversation<span class="ui-icon-carat-1-s ui-icon"> »</span></a>
            <ul style="visibility: hidden; display: none;" class="">
                <li class="">
                    <a href="<?php echo HTTP_ROOT.'admin/Users/business_mail';?>">Email Conversation</a>
                </li>
                
             </ul>      
        </li>
<li class=""> 
            <a class="sf-with-ul" href="javascript:void(0)">Manage Transaction<span class="ui-icon-carat-1-s ui-icon"> »</span></a>
            <ul style="visibility: hidden; display: none;" class="">
                <li class="">
                    <a href="<?php echo HTTP_ROOT.'admin/Users/payment_price';?>">Payment Price</a>
                </li>
                        <li class="">
                    <a href="<?php echo HTTP_ROOT.'admin/Users/transaction_details';?>">Transaction Details</a>
                </li>
                
             </ul>      
        </li>
    



    </ul>
</div>