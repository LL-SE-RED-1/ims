<!DOCTYPE html>
<!-- saved from url=(0042)http://v3.bootcss.com/examples/dashboard/# -->
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://v3.bootcss.com/favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/dashboard.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="./dist/semantic.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./Dashboard Template for Bootstrap_files/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<style type="text/css">
  body {
    overflow:hidden;
  }

  .ui.statistic.at-center {
    display: block;
    margin: 0 auto;
  }
  .label.at-center {
    display: block;
    margin: 0 auto;
  }

</style>

  <body data-feedly-mini="yes">

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./navbar-brand.html">教务管理系统</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="./Dashboard.html">Dashboard</a></li>
            <li><a href="./Settings.html">Settings</a></li>
            <li><a href="./Profile.html">Profile</a></li>
            <li><a href="./Help.html">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid" style="
    margin-top: 5%;
    ">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="./basicinfo.html">个人信息</a></li>
            <li><a href="./info-manage.html">信息管理</a></li>
            <li><a href="./permission.html">权限管理<span class="sr-only">(current)</span></a></li>
            <li class="active"><a href="#">系统信息</a></li>
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

          <div class="row">

            <div class="col-xs-6 col-sm-2 placeholder">

              <div class="ui statistic at-center">
                <div class="label at-center">
                  Date
                </div>

                <div class="text value">
                  5/14
                </div>
              </div>


            </div>

            <div class="col-xs-6 col-sm-2 placeholder">

              <div class="ui statistic at-center">
                <div class="label at-center">
                  Time
                </div>
                <div class="text value">
                  09:35
                </div>
              </div>

            </div>

            <div class="col-xs-6 col-sm-2 placeholder">

              <div class="ui statistic at-center">
                <div class="label at-center">
                  Running
                </div>
                <div class="text value">
                  1400 h
                </div>
              </div>


            </div>


            <div class="col-xs-6 col-sm-2 placeholder">

              <div class="ui statistic at-center">
                <div class="label at-center">
                  Error
                </div>
                <div class="text value">
                  <i class="remove circle icon"></i> 2
                </div>
              </div>

            </div>
            <div class="col-xs-6 col-sm-2 placeholder">

              <div class="ui statistic at-center">
                <div class="label at-center">
                  Warning
                </div>
                <div class="text value">
                  <i class="warning circle icon"></i> 3
                </div>
              </div>

            </div>


            <div class="col-xs-6 col-sm-2 placeholder at-center">

              <div class="ui statistic at-center">
                <div class="label at-center">
                  Info
                </div>
                <div class="text value">
                  <i class="info circle icon"></i> 3
                </div>
              </div>

            </div>

          </div>

          <div class="col-xs-6 col-sm-6 placeholder">

            <h2 class="sub-header">日志纪录</h2>

          </div>

          <div class="col-xs-6 col-sm-6 placeholder">

            <div class="ui searchable floating dropdown labeled icon button" tabindex="0" style="
    float: right;
">
              <i class="filter icon"></i>
              <span class="text">过滤</span>
              <div class="menu" tabindex="-1">
                <div class="header">
                  Filter
                </div>
                <div class="item">
                  <div class="ui red empty circular label"></div>
                  Error
                </div>
                <div class="item">
                  <div class="ui yellow empty circular label"></div>
                  Warning
                </div>
                <div class="item">
                  <div class="ui white empty circular label"></div>
                  Info
                </div>
                <div class="item">
                  <div class="ui green empty circular label"></div>
                  Comment
                </div>
              </div>
            </div>

          </div>

          <table class="ui celled table">
            <thead>
            <tr>
              <th>Timestamp</th>
              <th>Type</th>
              <th>Content</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td class="warning">2015-03-14 09:08 UTC+08</td>
              <td class="warning">
                <i class="attention icon"></i>
                Warning
              </td>
              <td class="warning">It's a very looooooooooooooooooooooong warning</td>
            </tr>
            <tr>
              <td class="positive">2015-03-15 09:08 UTC+08</td>
              <td class="positive">
                <i class="checkmark icon"></i>
                Comment
              </td>
              <td class="positive">It's a very looooooooooooooooooooooong comment</td>
            </tr>
            <tr>
              <td class="negative">2015-03-16 19:28 UTC+08</td>
              <td class="negative">
                <i class="remove icon"></i>
                Error
              </td>
              <td class="negative">It's a very looooooooooooooooooooooong error</td>
            </tr>
            <tr>
              <td>2015-03-16 21:28 UTC+08</td>
              <td>
                <i class="info icon"></i>
                Info
              </td>
              <td>It's a very looooooooooooooooooooooong info</td>
            </tr>
            <tr>
              <td>2015-03-16 21:28 UTC+08</td>
              <td>
                <i class="info icon"></i>
                Info
              </td>
              <td>It's a very looooooooooooooooooooooong info</td>
            </tr>
            <tr>
              <td class="warning">2015-03-14 09:08 UTC+08</td>
              <td class="warning">
                <i class="attention icon"></i>
                Warning
              </td>
              <td class="warning">It's a very looooooooooooooooooooooong warning</td>
            </tr>
            <tr>
              <td class="warning">2015-03-14 09:08 UTC+08</td>
              <td class="warning">
                <i class="attention icon"></i>
                Warning
              </td>
              <td class="warning">It's a very looooooooooooooooooooooong warning</td>
            </tr>
            <tr>
              <td class="negative">2015-03-16 19:28 UTC+08</td>
              <td class="negative">
                <i class="remove icon"></i>
                Error
              </td>
              <td class="negative">It's a very looooooooooooooooooooooong error</td>
            </tr>
            <tr>
              <td>2015-03-16 21:28 UTC+08</td>
              <td>
                <i class="info icon"></i>
                Info
              </td>
              <td>It's a very looooooooooooooooooooooong info</td>
            </tr>

            </tbody>
          </table>


          <!--div class="ui menu">
            <a class="item">
              Home
            </a>
            <div class="ui pointing dropdown link item" tabindex="-1">
              <i class="dropdown icon" tabindex="0"></i>
              <span class="text">Shopping</span>
              <div class="menu" tabindex="-1">
                <div class="header">Categories</div>
                <div class="item">
                  <i class="dropdown icon" tabindex="0"></i>
                  <span class="text">Clothing</span>
                  <div class="menu">
                    <div class="header">Mens</div>
                    <div class="item">Shirts</div>
                    <div class="item">Pants</div>
                    <div class="item">Jeans</div>
                    <div class="item">Shoes</div>
                    <div class="divider"></div>
                    <div class="header">Womens</div>
                    <div class="item">Dresses</div>
                    <div class="item">Shoes</div>
                    <div class="item">Bags</div>
                  </div>
                </div>
                <div class="item">Home Goods</div>
                <div class="item">Bedroom</div>
                <div class="divider"></div>
                <div class="header">Order</div>
                <div class="item">Status</div>
                <div class="item">Cancellations</div>
              </div>
            </div>
            <a class="item">
              Forums
            </a>
            <a class="item">
              Contact Us
            </a>
          </div-->

        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--script src="./js/jquery.min.js"></script-->


    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>

    <script src="./js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="./js/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./js/ie10-viewport-bug-workaround.js"></script>

    <script src="./dist/semantic.js"></script>


    <script type="text/javascript">
      $(document)
              .ready(function(){
                $('.ui.dropdown')
                        .dropdown()
                ;
                $('.ui.menu .dropdown')
                        .dropdown({
                          on: 'hover'
                        })
                ;
              })
      ;
    </script>

<svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 200 200" preserveAspectRatio="none" style="visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs></defs><text x="0" y="10" style="font-weight:bold;font-size:10pt;font-family:Arial, Helvetica, Open Sans, sans-serif;dominant-baseline:middle">200x200</text></svg><div id="feedly-mini" title="feedly Mini tookit"></div></body></html>