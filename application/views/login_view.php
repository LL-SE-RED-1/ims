<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url(); ?>images/favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <!--link href="dist/css/bootstrap.min.css" rel="stylesheet"-->
    <link href="<?php echo base_url(); ?>dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>css/signin.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/cover.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url(); ?>assets/js/ie-emulation-modes-warning.js"></script>


    <!--link rel="stylesheet" type="text/css" href="./dist/semantic.css"-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        /*.backgroundImage {*/
            /*position:fixed;*/
            /*display:block;*/
            /*width:100%;*/
            /*height:100%;*/
            /*background: url(welcome4.jpg);*/
            /*background-size:cover;*/
            /*background-repeat : no-repeat;*/
            /*background-position : center center;*/
            /*background-attachment:fixed;*/
            /*background-origin:padding-box;*/
            /*background-clip:content-box;*/
            /*z-index:-1;*/
            /*filter: blur(5px);*/
            /*-ms-filter: blur(5px);*/

        /*}*/

    </style>

</head>

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
                                <li><a href="#">联系我们</a></li>
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

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--script src="../../assets/js/ie10-viewport-bug-workaround.js"></script-->

</body>

</html>