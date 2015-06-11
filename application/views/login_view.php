<link href="<?php echo base_url();?>css/signin.css" rel="stylesheet">
<link href="<?php echo base_url();?>css/cover.css" rel="stylesheet">

<body>

    <div class="site-wrapper">
        <div class="site-wrapper-inner">
            <div class="cover-container">
                <div class="masthead clearfix">
                    <div class="inner">
                        <h3 class="masthead-brand">教务管理系统</h3>
                        <nav>
                            <ul class="nav masthead-nav">
                                <li class="active"><a href="#">主页</a></li>
                                <li><a href="mailto:liuzxzju@qq.com">联系我们</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="inner cover">
                    <form action="<?php echo site_url('login/verify');?>" method="post">
                        <h1 class="form-signin form-signin-heading"><strong>登录</strong></h1>

                        <label for="uid" class="form-signin sr-only">User ID</label>
                        <input type="text" id="uid" name="uid" class="form-signin form-control" placeholder="学号/教工号" required autofocus>
                        <label for="password" class="form-signin sr-only">Password</label>
                        <input type="password" id="password" name="password" class="form-signin form-control" placeholder="密码" required>

                        <label for="userType" class="sr-only"></label>
                        <select id="userType" name="userType" class="form-signin form-control">
                            <option value="1">学生</option>
                            <option value="2">教师</option>
                            <option value="3">管理员</option>
                            <option value="4">admin</option>
                        </select>

                        <div class="form-signin checkbox">
                            <label>
                                <input type="checkbox" value="remember-me"> 记住密码
                            </label>
                        </div>
                        <button class="form-signin btn btn-lg btn-primary btn-block" type="submit">登录</button>
                    </form>
                </div>


                <div class=" mastfoot">
                    <div class=" inner">
                        <p>教务管理系统 <Strong>登录页面</Strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>