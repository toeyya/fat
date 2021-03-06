<!-- start: Main Menu -->
<div class="col-sm-2 main-menu-span">
	<div class="sidebar-nav nav-collapse collapse navbar-collapse">
		<ul class="nav nav-tabs nav-stacked main-menu">
			<?php if(permission('permission','act_read')): ?>
			<li><a href="permission/admin/permission"><i class="fa fa-users"></i><span class="hidden-sm"> สิทธิ์การใช้งาน</span></a></li>
			<?php endif; ?>
			<?php if(permission('user','act_read')): ?>
			<li><a href="users/admin/users/index"><i class="fa fa-users"></i><span class="hidden-sm"> สมาชิก</span></a></li>
			<?php endif; ?>
			<?php if(permission('setting','act_read')): ?>
			<li>
				<a class="dropmenu" href="javascript:void"><i class="fa fa-cogs"></i><span class="hidden-sm">ตั้งค่าองค์กรต้นแบบไร้พุง</span></a>
				<ul>
					<li><a class="submenu" href="setting/admin/area/index"><i class="fa fa-star"></i><span class="hidden-sm">เขต</span></a></li>
					<li><a class="submenu" href="setting/admin/agency_type/index"><i class="fa fa-male"></i><span class="hidden-sm">ประเภทบุคคล</span></a></li>
					<li><a class="submenu" href="setting/admin/province/index"><i class="fa fa-map-marker"></i><span class="hidden-sm">จังหวัด</span></a></li>
					<li><a class="submenu" href="setting/admin/amphur/index"><i class="fa fa-map-marker"></i><span class="hidden-sm">อำเภอ</span></a></li>
					<li><a class="submenu" href="setting/admin/district/index"><i class="fa fa-map-marker"></i><span class="hidden-sm">ตำบล</span></a></li>
				</ul>
			</li>
			<?php endif; ?>
			<?php if(permission('project','act_read')): ?>
			<li><a href="content/admin/content/index/1"><i class="fa fa-eye"></i><span class="hidden-sm">ข้อมูลโครงการ</span></a></li>
			<?php endif;?>
			<?php if(permission('criteria','act_read')): ?>
			<li><a href="content/admin/content/index/3"><i class="fa fa-eye"></i><span class="hidden-sm">เกณฑ์ประเมิน</span></a></li>
			<?php endif; ?>
			<?php if(permission('hilight','act_read')): ?>
			<li><a href="hilights/admin/hilights"><i class="fa fa-edit"></i><span class="hidden-sm"> ไฮไลท์</span></a></li>
			<?php endif; ?>
			<?php if(permission('download','act_read')): ?>
			<li><a href="download/admin/type/index"><i class="fa fa-bar-chart-o"></i><span class="hidden-sm"> สื่อสิ่งพิมพ์</span></a></li>
			<?php endif; ?>
			<!--<li class="active">
				<a class="dropmenu" href="submenu.html#"><i class="fa fa-folder"></i><span class="hidden-sm"> Dropdown</span></a>
				<ul>
					<li><a class="submenu" href="submenu.html"><i class="fa fa-file"></i><span class="hidden-sm"> Sub Menu 1</span></a></li>
					<li><a class="submenu" href="submenu.html"><i class="fa fa-file"></i><span class="hidden-sm"> Sub Menu 2</span></a></li>
					<li><a class="submenu" href="submenu.html"><i class="fa fa-file"></i><span class="hidden-sm"> Sub Menu 3</span></a></li>
				</ul>
			</li>-->
			<?php if(permission('information','act_read')): ?>
			<li><a href="content/admin/content/index/4"><i class="fa fa-bullhorn"></i><span class="hidden-sm"> ประชาสัมพันธ์</span></a></li>
			<?php endif; ?>
			<?php if(permission('eatting','act_read')): ?>
			<li><a href="content/admin/content/index/7"><i class="fa fa-bullhorn"></i><span class="hidden-sm"> การวางแผนการกิน</span></a></li>
			<?php endif; ?>
			<?php if(permission('weight','act_read')): ?>
			<li><a href="content/admin/content/index/8"><i class="fa fa-bullhorn"></i><span class="hidden-sm"> ลดน้ำหนัก ลดรอบเอว</span></a></li>
			<?php endif; ?>
			<?php if(permission('exercise','act_read')): ?>
			<li><a href="content/admin/content/index/9"><i class="fa fa-bullhorn"></i><span class="hidden-sm"> การออกกำลังกาย</span></a></li>
			<?php endif; ?>
			<?php if(permission('album','act_read')): ?>
			<li><a href="albums/admin/albums"><i class="fa fa-picture-o"></i><span class="hidden-sm"> ภาพกิจกรรม</span></a></li>
			<?php endif; ?>
			<?php if(permission('km','act_read')): ?>
			<li><a href="km/admin/type/index"><i class="fa fa-align-justify"></i><span class="hidden-sm"> KM</span></a></li>
			<?php endif; ?>
			<?php if(permission('M&E','act_read')): ?>
			<li><a href="content/admin/content/index/10"><i class="fa fa-calendar"></i><span class="hidden-sm"> M&E</span></a></li>
			<?php endif; ?>
			<?php if(permission('webboard','act_read')): ?>
			<li><a href="webboard/admin"><i class="fa fa-comment-o"></i><span class="hidden-sm"> เว็บบอร์ด</span></a></li>
			<?php endif; ?>
			<!--<li><a href="content/admin/content/index/2"><i class="fa  fa-folder-open"></i><span class="hidden-sm">โลโก้ ท้ายกระดาษ</span></a></li>-->
			<?php if(permission('contact','act_read')): ?>
			<li><a href="content/admin/content/index/5"><i class="fa  fa-info-circle"></i><span class="hidden-sm">ติดต่อเรา</span></a></li>
			<?php endif; ?>
		</ul>
	</div><!--/.well -->
</div><!--/col-->
<!-- end: Main Menu -->

