
<style type="text/css">
body {
  overflow:hidden;
}

.text-center {
  text-align: center;
}

.ui.small.circular.image.at-center {
  display: block;
  margin: 0 auto;
}

.ui.transparent-seg {
  background-color: rgba(255, 255, 255, 0);
  box-shadow: 0px 0px 0px 0px;
  padding: 0em 0em;
}

</style>

<body data-feedly-mini="yes">

  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo site_url('ims/ims_basicInfo'); ?>">教务管理系统</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="<?php echo site_url('ims/ims_basicInfo'); ?>"><?php echo $uid; ?></a></li>
              <li><a href="<?php echo site_url('logout'); ?>">Logout</a></li>
            </ul>
          </div>
      </div>
    </nav>
