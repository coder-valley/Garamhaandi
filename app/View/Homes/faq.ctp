<style type="text/css">
	.cd-faq-items
	{
		margin-top: 11%!important;
	}	
</style>
<link rel="stylesheet" type="text/css" href="/GaramHaandi/Newfolder/css/faq.css">
<link rel="stylesheet" type="text/css" href="/GaramHaandi/Newfolder/css/faqstyle.css">
<script type="text/javascript" src="/GaramHaandi/Newfolder/js/faq.modernizr.js"></script>

<header>
	<h1 class="pagestopimages" style="padding-top: 75px!important;">FAQ's</h1>
</header>
<section class="cd-faq" style="margin-top: -82px;">

	<ul class="cd-faq-categories">
		<?php $i=1; foreach($tpc as $tpc_list){?>
		<li><a href="#<?php echo $tpc_list['Topic']['id']?>"><?php echo $tpc_list['Topic']['topic']?></a></li>
		<?php $i++;}?>
	</ul> <!-- cd-faq-categories -->
	<div class="cd-faq-items">
		<?php $i=1;foreach($faq as $faq_list) { ?>
		<ul id="<?php echo $faq_list['Faq']['topic_id']?>" class="cd-faq-group">
			<li class="cd-faq-title"><h2><?php echo $faq_list['Topic']['topic']?></h2></li>
			<li>
				<a class="cd-faq-trigger" href="#0"><?php echo $faq_list['Faq']['question']?></a>
				<div class="cd-faq-content">
					<p><?php echo $faq_list['Faq']['answer']?></p>
				</div> <!-- cd-faq-content -->
			</li>
		</ul> <!-- cd-faq-group -->
		<?php $i++; }?>
		<!-- cd-faq-group -->
	</div> <!-- cd-faq-items -->
	<a href="#0" class="cd-close-panel">Close</a>
</section>

<script type="text/javascript" src="/GaramHaandi/Newfolder/js/faq.jquery.mobile.custom.min.js"></script>
<script type="text/javascript" src="/GaramHaandi/Newfolder/js/faq.jquery-2.1.1.js"></script>
<script type="text/javascript" src="/GaramHaandi/app/webroot/Newfolder/js/faq.main.js"></script>