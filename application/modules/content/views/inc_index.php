     	  <div id="Breadcrumbs">
          	<ol id="path-breadcrumb">
              <li><a href="home">หน้าแรก</a></li>
              <li class="active"><?php echo $category['name'] ?></li>
            </ol>
          </div>

<div class="titleBlank"><?php echo $category['name'] ?><div class="line5"> </div> </div>
<div class="contentBlank">
	<div id="news">
		<?php
			if(!empty($result)){
			foreach($result as $item): ?>
			<div>
			<a class="pull-left" href="content/view/<?php echo $category['id'] ?>/<?php echo $item['id'] ?>">
				<?php if(!empty($item['image'])){ ?>
				<img src="uploads/content/thumbnail/<?php echo $item['image'] ?>" width="86px" height="67px" class="pic-news">
				<?php }else{ ?>
					<img src="media/img/no_image.jpg" width="152px" height="118px">
				<?php } ?>
			</a>
			<a href="content/view/<?php echo $category['id'] ?>/<?php echo $item['id'] ?>" class="linknews">
		    	<h4 class="list-group-item-heading" id="titlenews"><?php echo $item['title'] ?></h4>
				<p class="list-group-item-text"><?php echo $item['intro'] ?></p>
		    </a>
			<div class="clearfix"></div><div class="line"> </div>
			</div>
		<?php endforeach; }?>
	</div>
	<div class="clearfix"></div>
</div>
<?php echo $pagination; ?>