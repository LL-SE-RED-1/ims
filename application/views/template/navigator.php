 <body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="<?php if ($type == 1) {
	echo site_url('ims/ims_basic_info');
} elseif ($type == 2) {
	echo site_url('ims/ims_basic_info_teacher');
} elseif ($type == 3) {
	echo site_url('ims/ims_management');
}
?>">教务管理系统</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php if ($type == 1) {
	echo site_url('ims/ims_basic_info');
} elseif ($type == 2) {
	echo site_url('ims/ims_basic_info_teacher');
} elseif ($type == 3) {
	echo site_url('ims/ims_management');
}
?>"><?php echo $uid;?></a></li>
          <li><a href="<?php echo site_url('login');?>">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>