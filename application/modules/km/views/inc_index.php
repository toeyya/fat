 <div id="Breadcrumbs">
  	<ol id="path-breadcrumb">
      <li><a href="home">หน้าแรก</a></li>
      <li class="active">KM</li>
    </ol>
 </div>

<div class="titleBlank">KM<div class="line5"> </div> </div>
<div class="contentBlank">
	<div id="km">
		<?php foreach($result as $item): ?>
		 <span class="title-news"><?php echo $item['name'] ?></span>
		 <div class="btn-viewAll"><a href="km/view_all/<?php echo $item['id']; ?>" style="width:78px;height:22px;display:inline-block;">&nbsp;</a></div>
		 <div class="line1"> </div>
		 <div class="clearfix"></div>
		 <div class="km_content">
		 <?php if($item['structure']=="page"){$km = $this->km->get_row("active='1' and type_id",$item['id']);?>
			 <?php echo $km['detail'] ?>
		 <?php }else{ ?>
			 <ul>
			 <?php
			 	$km = $this->km->where("active='1' and type_id=".$item['id'])->sort('id')->order('desc')->limit(5)->get();
				foreach($km as $k):
			  ?>
			 	<li><a href="<?php echo (empty($k['link']))? 'km/view/'.$item['id'].'/'.$k['id']:$k['link'] ?>"><?php echo $k['title'] ?></a></li>
			 <?php endforeach; ?>
			 </ul>
		 <?php } ?>
		  </div>
		 <?php endforeach; ?>
	</div>
</div>