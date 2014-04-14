     	  <div id="Breadcrumbs">
          	<ol id="path-breadcrumb">
              <li><a href="#">หน้าแรก</a></li>
              <li class="active">อัลบั้ม</li>
            </ol>
          </div>

<div class="titleBlank">รูปภาพกิจกรรม<div class="line5"> </div> </div>
<div class="contentBlank">
<div id="gallery" style="margin:0;padding:0px;">

<?php foreach($result as $item): ?>

    <div id="col1-gallery" style="width:29%">
	<div class="title-ogan" style="width:85%;margin:0 auto;margin-bottom: 15px;height:45px;overflow:hidden"><strong>องค์กร :</strong><?php echo $item['agency_name']." ต. ".$item['district_name']." อ.".$item['amphur_name']." จ. ".$item['province_name'] ?></div>
	<div class="boximg">
    <a href="albums/view/<?php echo $item['album_id'] ?>/<?php echo $item['user_id'] ?>">
      <img src="uploads/albums/<?php echo $item['album_id'] ?>/<?php echo $item['image'] ?>" width="259" height="197" />
    </a>
    </div>
    <div class="caption">
            <h6><?php $item['name'] ?></h6>
    </div>
    </div>

<?php endforeach; ?>

<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
</div>



