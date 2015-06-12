
<body data-feedly-mini="yes">

  <nav class="navbar navbar-inverse navbar-fixed-top">

      <div class="container-fluid">
          <div class="navbar-header">

            <a class="navbar-brand" href="<?php site_url('ims/ims_welcome');?>">教务管理系统</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="<?php site_url('ims/ims_welcome');?>"><?php echo $uid;?></a></li>
          <li><a href="<?php echo site_url('modify_pass');?>">修改密码</a></li>
          <li><a href="<?php echo site_url('login');?>">注销</a></li>
        </ul>
      </div>
    </div>
  </nav>