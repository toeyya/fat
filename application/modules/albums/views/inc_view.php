     	  <div id="Breadcrumbs">
          	<ol id="path-breadcrumb">
              <li><a href="home">หน้าแรก</a></li>
              <li><a href="albums/view_all">รูปภาพกิจกรรม</a></li>
              <li class="active">อัลบัม <?php echo $user['agency_name']." ต. ".$user['district_name']." อ. ".$user['amphur_name']." จ. ".$user['province_name'] ?></li>
            </ol>
          </div>

<div class="titleBlank">รูปภาพกิจกรรม<div class="line5"> </div> </div>
<div class="contentBlank">
<?php foreach($result as $key=>$item): ?>
<a href="uploads/albums/<?php echo $item['album_id'] ?>/<?php echo $item['image'] ?>" class="gallery" rel="gal<?php echo $item['album_id'] ?>">
	<img src="uploads/albums/<?php echo $item['album_id'] ?>/thumbnail/<?php echo $item['image'] ?>" width="75px" height="75px" />
</a>
<?php endforeach; ?>
</div>
<script type="text/javascript">
$(document).ready(function(){
	$('a.gallery').colorbox();
});
</script>

