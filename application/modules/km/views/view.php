<div id="Breadcrumbs">
  	<ol id="path-breadcrumb">
      <li><a href="home">หน้าแรก</a></li>
      <li><a href="km">km</a></li>
      <li><a href="km/view_all/<?php echo $type['id'] ?>"><?php echo $type['name'] ?></a></li>
      <li class="active"><?php echo $km['title'] ?></li>
    </ol>
</div>

<div class="titleBlank"><?php echo $type['name'] ?><div class="line5"></div></div>
<div class="contentBlank">
<h4 class="list-group-item-heading" id="titlenews"><?php echo $km['title'] ?></h4>
<div class="sub-name">
	<span class="calender"></span><span><? echo db_to_th($km['created']) ?></span>
	<span class="divider">|</span>
	<span class="counter"></span><span><?php echo number_format($km['counter']) ?> ครั้ง</span>
</div>
<?php echo $km['detail'] ?>
<?php if($km['files']):  ?>
	<div class="attach">
	<p class="label label-default">เอกสารแนบ</p>
	<a href="km/download/<?php echo $km['type_id'] ?>/file/<?php echo $km['id']; ?>" class="btn btn-default btn-sm" target="_blank"><?php echo $result['files'] ?></a>
	</div>
<?php endif; ?>
</div>