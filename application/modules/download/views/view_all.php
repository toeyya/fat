 <div id="Breadcrumbs">
  	<ol id="path-breadcrumb">
      <li><a href="home">หน้าแรก</a></li>
      <li>สื่อสิ่งพิมพ์</li>
      <li class="active"><?php echo $type['name'] ?></li>
    </ol>
 </div>
<div class="titleBlank">สื่อสิ่งพิมพ์<div class="line5"> </div> </div>
<div class="contentBlank">
      <div id="download">
          <ul>
          	<?php foreach($result as $key =>$item): ?>
            <li>
            	<a href="download/download_file/<?php echo $item['type_id'] ?>/<?php echo $item['id'] ?>" rel="lightbox">
            	<img src="uploads/download/<?php echo $item['type_id'] ?>/<?php echo $item['image'] ?>" width="90" height="128" >
            	</a>
            	<p><?php echo $item['title'] ?></p>
            </li>
            <?php endforeach; ?>
          </ul>
      </div>
      <div class="clearfix"></div>
</div>