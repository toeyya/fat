     	  <div id="Breadcrumbs">
          	<ol id="path-breadcrumb">
              <li><a href="#">หน้าแรก</a></li>
              <li class="active">รูปภาพกิจกรรม</li>
            </ol>
          </div>

<div class="titleBlank">รูปภาพกิจกรรม<div class="line5"> </div> </div>
<div class="contentBlank">
<div id="gallery">
<ul class="thumbnails">
<?php foreach($result as $item): ?>
<li class="span4">
    <div class="thumbnail" style="height: 270px;">
    <a href="album/view/<?php echo $item['album_id'] ?>/<?php echo $item['user_id'] ?>">
      <img src="uploads/albums/<?php echo $item['album_id'] ?>/<?php echo $item['image'] ?>" width="259" height="197" />
    </a>
        <div class="caption">
            <h6><?php $item['name'] ?></h6>
        </div>
    </div>
</li>
<?php endforeach; ?>
</u>
</div>
</div>
<div class="clearfix"></div>
</div>

