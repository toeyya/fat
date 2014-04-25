 <div id="Breadcrumbs">
  	<ol id="path-breadcrumb">
      <li><a href="home">หน้าแรก</a></li>
      <li><a href="km">KM</a></li>
      <li class="active"><?php echo $type['name'] ?></li>
    </ol>
 </div>

<div class="titleBlank">KM<div class="line5"> </div> </div>
<div class="contentBlank">
	<div id="km">
		<span class="title-news"><?php echo $type['name'] ?></span>
		<div class="line1"> </div>
		<div class="clearfix"></div>
		<div class="km_content">
			<?php if($type['structure']=="page"){ ?>
			<?php foreach($km as $k):?>
			<?php echo $k['detail'] ?>
			<?php endforeach; ?>
			<?php }else{ ?>
	 		<ul class="unstyled">
				 <?php foreach($km as $k):?>
				 	<li><a href="<?php echo (empty($k['link']))? 'km/view/'.$k['type_id'].'/'.$k['id']:$k['link'] ?>"><?php echo $k['title'] ?></a></li>
				 <?php endforeach; ?>
			</ul>
			<?php } ?>
		</div>
	</div>
</div>