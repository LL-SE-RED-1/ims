<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

        <h2 class="ui header">添加课程</h2>

        <form class="ui form segment transparent-seg">


            <div class="four fields">
                <div class="field">
                    <label>课程代码</label>
                    <input placeholder="" type="text">
                </div>
                <div class="field">
                    <label>课程名称</label>
                    <input placeholder="" type="text">
                </div>
                <div class="field">
                    <label>学分</label>
                    <input placeholder="" type="text">
                </div>
                <div class="field">
                    <label>课程类型</label>
                    <input placeholder="" type="text">
                </div>
            </div>

            <div class="two fields">
                <div class="field">
                  <label>学院</label>
                  <div class="ui selection dropdown">
                    <div class="default text">Select</div>
                    <i class="dropdown icon"></i>
                    <input name="hidden-field" type="hidden">
                    <div class="menu">
                        <div class="item" data-value="1">计算机学院</div>
                        <div class="item" data-value="2">理学院</div>
                    </div>
                  </div>
                </div>
                <div class="field">
                    <label>学系</label>
                    <div class="ui selection dropdown">
                        <div class="default text">Select</div>
                        <i class="dropdown icon"></i>
                        <input name="hidden-field" type="hidden">
                        <div class="menu">
                            <div class="item" data-value="1">计算机科学与技术</div>
                            <div class="item" data-value="2">软件工程</div>
                        </div>
                    </div>
                </div>
            </div>



              <div class="field">
                <label>课程描述</label>
                <textarea name="desc"></textarea>
              </div>

            <br>

                <button class="ui grey right floated  button">返回</button>
                <button class="ui red right floated  button">删除</button>
                <button class="ui green  right floated  button">提交</button>

        </form>


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
                $('.demo .ui.checkbox')
                         .checkbox()
                ;
              })
      ;
    </script>

<svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 200 200" preserveAspectRatio="none" style="visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs></defs><text x="0" y="10"
    style="font-weight:bold;font-size:10pt;font-family:Arial, Helvetica, Open Sans, sans-serif;dominant-baseline:middle">200x200</text></svg>
    <div id="feedly-mini" title="feedly Mini tookit"></div></body>

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

    .ui.submit.button {
        float: right;
    }

</style>
</html>