     	  <div id="Breadcrumbs">
          	<ol id="path-breadcrumb">
              <li><a href="home">หน้าแรก</a></li>
              <li class="active"><?php echo $category['name'] ?></li>
            </ol>
          </div>

<div class="titleBlank"><?php echo $category['name'] ?><div class="line5"> </div> </div>
<div class="contentBlank">
	<?php echo @$contents['detail']?>
	<?php if(!empty($contents['files'])):  ?>
		<div class="attach">
		<p class="label label-default">เอกสารแนบ</p>
		<a href="content/download/<?php echo $contents['id']; ?>" class="btn btn-default btn-sm" target="_blank"><?php echo $contents['files'] ?></a>
		</div>
	<?php endif; ?>
</div>