<div id="Breadcrumbs">
  	<ol id="path-breadcrumb">
      <li><a href="#">หน้าแรก</a></li>
      <li><a href="content/view_all/<?php echo $category['id'] ?>"><?php echo $category['name'] ?></a></li>
    </ol>
</div>

<div class="titleBlank"><?php echo $category['name'] ?><div class="line5"></div></div>
<div class="contentBlank">
<h4 class="list-group-item-heading" id="titlenews"><?php echo $result['title'] ?></h4>
<div class="sub-name">
	<span class="calender"></span><span><? echo db_to_th($result['created']) ?></span>
	<span class="divider">|</span>
	<span class="counter"></span><span><?php echo number_format($result['counter']) ?> ครั้ง</span>
</div>
	<?php if($result['image']): ?>
		<div style="text-align: center; margin:10px auto;"><img src="uploads/content/<?php echo $result['image'] ?>" width="200px" height="200px"></div>
	<?php endif; ?>
	<?php echo $result['detail'];?>
	<?php if($result['files']):  ?>
		<div class="attach">
		<p class="label label-default">เอกสารแนบ</p>
		<a href="content/download/<?php echo $result['id']; ?>" class="btn btn-default btn-sm" target="_blank"><?php echo $result['files'] ?></a>
		</div>
	<?php endif; ?>
</div>