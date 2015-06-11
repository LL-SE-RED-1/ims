 <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo site_url('ims/ims_basicInfo'); ?>">教务管理系统</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="<?php echo site_url('ims/ims_basicInfo'); ?>"><?php echo $uid; ?></a></li>
              <li><a href="<?php echo site_url('logout'); ?>">注销</a></li>
            </ul>
          </div>
      </div>
    </nav>