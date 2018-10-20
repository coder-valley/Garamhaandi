<style>
#navigation li:hover{

}
.cms a:hover{ text-decoration:underline;}
</style>
<div id="page-header-wrapper">
	<div id="top">
        <!-- <div class="admin_logo">   
             <a href="<?php echo HTTP_ROOT?>"><img src="<?php echo HTTP_ROOT?>img/layout/logo.png" alt="logo" width="70px" ></a>
        </div>  -->
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
        <li>
            <a href="javascript:void(0)" class="sf-with-ul" >Users</a>
            <ul>
                <li>
                    <a class="sf-with-ul" href="<?php echo HTTP_ROOT.'admin/Users/customers' ?>">Customers</a>                 
                </li>

                <li>
                    <a class="sf-with-ul" href="<?php echo HTTP_ROOT.'admin/Users/kitchens' ?>">Kitchens</a>                 
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:void(0)" class="sf-with-ul" >Manage Location</a>
            <ul>
                <li>
                    <a class="sf-with-ul" href="<?php echo HTTP_ROOT.'admin/Users/location' ?>">Location List</a>                 
                </li>

                <!-- <li>
                    <a class="sf-with-ul" href="<?php echo HTTP_ROOT.'admin/Users/add_location/'?>">Add Location</a>                 
                </li> -->
             </ul>
        </li>
        <li>
            <a href="href="javascript:void(0)" class="sf-with-ul"">Manage Faq/Topics</a>
            <ul>
                <li class="">
                    <a href="<?php echo HTTP_ROOT.'admin/Users/faq';?>">FAQ</a>
                </li>
                <li class="">
                    <a href="<?php echo HTTP_ROOT.'admin/Users/faq_topic';?>">Topic</a>
                </li>
            </ul>
        </li>
        <li class=""> 
            <a class="sf-with-ul" href="javascript:void(0)">CMS<span class="ui-icon-carat-1-s ui-icon"> »</span></a>
            <ul style="visibility: hidden; display: none;" class="">
               <li class="">
                    <a href="<?php echo HTTP_ROOT.'admin/Users/contacts'; ?>">Contacts</a>
                </li>
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
                    <a href="<?php echo HTTP_ROOT.'admin/Users/coupons';?>">Manage Coupons</a>
                </li>
            </ul>      
        </li>		
    <!-- <li class=""> 
        <a class="sf-with-ul" href="javascript:void(0)">Dish Category<span class="ui-icon-carat-1-s ui-icon"> Â»</span></a>
        <ul style="visibility: hidden; display: none;" class="">
            <li class="">
                <a href="<?php echo HTTP_ROOT.'admin/Users/manage_category';?>">Manage Dish Category</a>
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
            <a class="sf-with-ul" href="javascript:void(0)">Manage Dishes<span class="ui-icon-carat-1-s ui-icon"> »</span></a>
            <ul style="visibility: hidden; display: none;" class="">
                <li class="">
                    <a href="<?php echo HTTP_ROOT.'admin/Users/manage_products';?>">Manage Dishes</a>
               </li>
            </ul>      
        </li> -->
    </ul>
</div>	