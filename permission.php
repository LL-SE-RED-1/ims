
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
<!--    <link rel="icon" href="../../favicon.ico">-->

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="./css/dashboard.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
          <link rel="stylesheet" type="text/css" href="./dist/semantic.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<!--    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
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

<div class="container-fluid" style="
    padding-top: 5%;
">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
         <ul class="nav nav-sidebar">
             <li><a href="./basicinfo.html">个人信息</a></li>
             <li><a href="./info-manage.html">信息管理</a></li>
             <li class="active"><a href="./permission.html">权限管理<span class="sr-only">(current)</span></a></li>
             <li><a href="./info-system.html">系统信息</a></li>
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
          <h1 class="page-header">权限管理</h1>

<!--          <h2 class="sub-header">Section title</h2>-->
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>权限</th>
                  <th>学生</th>
                  <th>教师</th>
                  <th>修改</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>查看个人信息</td>
                  <td>是</td>
                  <td>是</td>
                  <td><button type="button" class="btn btn-default">修改</button></td>
                </tr>
                <tr>
                  <td>修改个人信息</td>
                  <td>是</td>
                  <td>是</td>
                   <td><button type="button" class="btn btn-default">修改</button></td>
                </tr>
                <tr>
                  <td>查看课程信息</td>
                  <td>是</td>
                  <td>是</td>
                   <td><button type="button" class="btn btn-default">修改</button></td>
                </tr>
                <tr>
                  <td>浏览课程列表</td>
                  <td>否</td>
                  <td>是</td>
                   <td><button type="button" class="btn btn-default">修改</button></td>
                </tr>
                <tr>
                  <td>提交课程申请</td>
                  <td>否</td>
                  <td>是</td>
                   <td><button type="button" class="btn btn-default">修改</button></td>
                </tr>
                <tr>
                  <td>选课</td>
                  <td>是</td>
                  <td>否</td>
                   <td><button type="button" class="btn btn-default">修改</button></td>
                </tr>
                <tr>
                  <td>退课</td>
                  <td>是</td>
                  <td>否</td>
                   <td><button type="button" class="btn btn-default">修改</button></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="row">
            <div class="col-md-2 col-md-offset-3">
              <div class="ui blue button">创建权限</div>
            </div>
            <div class="col-md-2 col-md-offset-1">
              <div class="ui red button">删除权限</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./dist/semantic.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<!--    <script src="../../assets/js/vendor/holder.js"></script>-->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!--    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->
  </body>
</html>
