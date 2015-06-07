<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>
    <script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>

    </style>
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">教务管理系统</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Help</a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="Search...">
            </form>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">

                <li class="active"><a href="./basicinfo.html">个人信息</a></li>
                <li><a href="./info-manage.html">信息管理</a></li>
                <li><a href="./permission.html">权限管理</a></li>
                <li><a href="./info-system.html#">系统信息</a></li>

            </ul>
            <ul class="nav nav-sidebar">
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header"><strong>个人信息</strong></h1>

            <form>
                <div class="row">
                    <div class="col-md-4">
                        <!--<img src="8790.jpg" class="img-responsive"-->
                             <!--style="margin-top: 10px; height:200px; width: 200px; background-size: cover"/>-->
                        <!--<img src="..." alt="..." class="img-circle">-->
                        <a href="#" class="thumbnail" style="margin-top :5px; margin-bottom: 5px">
                            <img class="img-responsive" src="images/123.jpg" alt="..." style="height:300px overflow: hidden">
                        </a>
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default">上传</button>
                            </span>
                        </div>
                        <hr>
                        <div>
                            <h4><strong>说明:</strong></h4>
                            <p style="text-indent: 2em">xxxx</p>
                            <p style="text-indent: 2em">xxxx</p>
                            <p style="text-indent: 2em">xxxx</p>


                        </div>
                </div>
                    <div class="col-md-8">
                        <div class="row" id="row1">
                            <div class="col-md-5">
                                <div class="input-group" id="name">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span> 姓名
                                    </span>
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="input-group" id="gender">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-adjust" aria-hidden="true"></span> 性别
                                    </span>
                                    <select class="form-control">
                                        <option></option>
                                        <option>男</option>
                                        <option>女</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group" id="nation">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-leaf" aria-hidden="true"></span> 民族
                                    </span>
                                    <select class="form-control">
                                        <option>汉族</option>
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="row2">
                            <div class="col-md-5">
                                <div class="input-group" id="hometown">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> 籍贯
                                    </span>
                                    <!--<input type="text" class="form-control" readonly>-->
                                    <select class="form-control" style="width:auto">
                                        <option>浙江省</option>
                                        <option></option>
                                        <option></option>
                                    </select>
                                    <select class="form-control" style="width:auto">
                                        <option>杭州市</option>
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="input-group" id="identity">
                                    <span class="input-group-addon">
                                      <span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span> 身份证
                                    </span>
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div>

                        </div>
                        <div class="row" id="row3">
                            <div class="col-md-6">
                                <div class="input-group" id="birthday">
                                    <span class="input-group-addon">
                                      <span class="glyphicon glyphicon-gift" aria-hidden="true"></span> 生日
                                    </span>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group" id="politic affiliation">
                                    <span class="input-group-addon">
                                      <span class="glyphicon glyphicon-sunglasses" aria-hidden="true"></span> 政治面貌
                                    </span>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="row4">
                            <div class="col-md-6">
                                <div class="input-group" id="e-mail">
                                      <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> 电子邮箱
                                      </span>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group" id="phone">
                                    <span class="input-group-addon">
                                          <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> 联系电话
                                    </span>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="row5">
                            <div class="col-md-6">
                                <div class="input-group" id="studentID">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-tag" aria-hidden="true"></span> 学号
                                    </span>
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group" id="class">
                                    <span class="input-group-addon">
                                      <span class="glyphicon glyphicon-flag" aria-hidden="true"></span> 行政班级
                                    </span>
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div>

                        </div>
                        <div class="row" id="row6">
                            <div class="col-md-6">
                                <div class="input-group" id="college">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-tower" aria-hidden="true"></span> 学院
                                    </span>
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group" id="department">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-pawn" aria-hidden="true"></span> 系
                                    </span>
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="row7">
                            <div class="col-md-6">
                                <div class="input-group" id="major">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-education" aria-hidden="true"></span> 专业
                                    </span>
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group" id="minor">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-duplicate" aria-hidden="true"></span> 辅修
                                    </span>
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="row8">
                            <div class="col-md-4">
                                <div class="input-group" id="grade">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 年级
                                    </span>
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group" id="length">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 学制
                                    </span>
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group" id="state">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-check" aria-hidden="true"></span> 学籍状态
                                    </span>
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                    <div class="row" id="row9">
                        <div class="col-md-7">
                            <div class="input-group" id="address">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-home" aria-hidden="true"></span> 宿舍
                                </span>
                                <input type="text" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="input-group" id="health">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-heart" aria-hidden="true"></span> 健康状况
                                </span>
                                <input type="text" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-md-offset-2">
                        <button class="form-control">保存</button>
                    </div>
                    <div class="col-md-3 col-md-offset-1">
                        <button class="form-control">取消</button>
                    </div>
                </div>
            </form>

        </div>
        <!--<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">-->
        <!--</div>-->
    </div>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="assets/js/vendor/holder.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
