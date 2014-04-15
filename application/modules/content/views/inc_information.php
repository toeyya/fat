 <div class="btn-viewAll"><a href="content/view_all/<?php echo $category_id; ?>" style="width:78px;height:22px;display:inline-block;">&nbsp;</a></div>
 <div class="line1"> </div>
 <div class="clearfix"> </div>
<?php foreach($result as $item): ?>
<div class="col-md-6" id="boxnews">
	<a class="pull-left" href="content/view/<?php echo $category_id ?>/<?php echo $item['id'] ?>"><img src="uploads/content/<?php echo $item['image'] ?>" width="152" height="118" class="pic-news"></a>
	<a href="content/view/<?php echo $category_id ?>/<?php echo $item['id'] ?>" class="linknews">
    	<h4 class="list-group-item-heading" id="titlenews"><?php echo $item['title'] ?></h4>
		<p class="list-group-item-text"><?php echo $item['intro'] ?></p>
    </a>
</div>
<?php endforeach; ?>

