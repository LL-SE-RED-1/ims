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
                                <li><a href="#">主页</a></li>
								<li class="active"><a href='TODO'>重置密码</a></li>
								<li><a href="mailto:zjullse@163.com">重置密码</a></li>
                                <!--li><a href="mailto:liuzxzju@qq.com">联系我们</a></li-->
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="inner cover">
                    <div class="ui negative message" style="display: none;">
                        <i class="close icon"></i>
                        <div class="header">
                            Oops!
                        </div>
                        <p><?php echo $result_info;?></p>
                    </div>

                    <form action="TODO" method="post">
                        <h1 class="form-signin form-signin-heading"><strong>重置密码</strong></h1>

                        <label for="uid" class="form-signin sr-only">User ID</label>
                        <input type="text" id="uid" name="uid" class="form-signin form-control" placeholder="学号/教工号" required autofocus>

                        <div class="form-signin checkbox">
                            <!-- <label>
                                <input type="checkbox" value="remember-me"> 记住密码
                            </label> -->
                        </div>
                        <button class="form-signin btn btn-lg btn-primary btn-block" type="submit">提交申请</button>
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

<script src="<?php echo base_url();?>js/form_feedack.js"></script>

<!-- <script type="text/javascript">

    $('.ui.form')
            .form({
                uid: {
                    identifier: 'uid',
                    rules: [
                        {
                            type   : 'empty',
                            prompt : '请输入学号/教工号'
                        },
                        {
                            type   : 'maxLength[10]',
                            prompt : '学号/教工号长度为10位'
                        },
                        {
                            type   : 'length[10]',
                            prompt : '学号/教工号长度为10位'
                        }

                    ]
                }
            },
            {
                inline : true,
                on     : 'blur'
            });


    $("#back").click(function() {
        history.go(-1);
    });

</script>
-->

<?php if ($result_num == 2): ?>
    <script>
            $(document)
                    .ready(function() {
                        show_negative_message();
                    });
    </script>
<?php endif;?>

</body>

</html>
