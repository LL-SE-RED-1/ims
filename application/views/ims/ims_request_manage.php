<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

        <h2 class="ui header">添加课程申请</h2>

        <form class="ui form segment transparent-seg" action="<?php echo site_url('ims/ims_request_manage/manage/') . $func?>" method="post">


            <div class="ui positive message" style="display: none;">
                <i class="close icon"></i>
                <div class="header">
                    Wow congratulations!
                </div>
                <p>你的修改已经成功被提交！</p>
            </div>

            <?php if ($func == 0): ?>
            <div class="two fields">
                <div class="required field">
                    <label>申请人</label>
                    <input name="applicant" placeholder="" type="text" readonly>
                </div>
                <div class="required field">
                    <label>申请时间</label>
                    <input name="time" placeholder="" type="text" readonly>
                </div>
            </div>
        <?php endif;?>

            <div class="four fields">
                <div class="required field">
                    <label>课程代码</label>
                    <input name="cid" placeholder="" type="text">
                </div>
                <div class="required field">
                    <label>课程名称</label>
                    <input name="name" placeholder="" type="text">
                </div>
                <div class="required field">
                    <label>学分</label>
                    <input name="credit" placeholder="" type="text">
                </div>
                <div class="required field">
                    <label>课程类型</label>
                    <div class="ui selection dropdown">
                        <div class="default text"></div>
                        <i class="dropdown icon"></i>
                        <input name="type" type="hidden">
                        <div class="menu">
                            <div class="item">实验课</div>
                            <div class="item">理论课</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="two fields">
                <div class="required field">
                    <label>学院</label>
                    <div class="ui selection dropdown" name="college-dropdown">
                        <div class="default text"></div>
                        <i class="dropdown icon"></i>
                        <input name="college" type="hidden">
                        <div class="menu" id="college-menu">
                        </div>
                    </div>
                </div>
                <div class="required field">
                    <label>学系</label>
                    <div class="ui selection dropdown">
                        <div class="text" id="department-text"></div>
                        <i class="dropdown icon"></i>
                        <input name="department" type="hidden">
                        <div class="menu" id="department-menu">
                        </div>
                    </div>
                </div>
            </div>



            <div class="two fields">
              <div class="field">
                <label>课程描述</label>
                <textarea name="info"></textarea>
              </div>

            <div class="required field">
                <label>申请理由</label>
                <textarea name="reason"></textarea>
            </div>
                </div>


            <br>

                <div class="ui grey right floated  button" id="back">返回</div>
                <?php if ($func != 0): ?>
            <button class="ui red right floated  button" name="delete" type="submit" value="delete">不同意</button>
        <?php endif;?>
                <button class="ui green  right floated  button" name="submit" value="submit" type="submit">同意</button>

        </form>


        </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--script src="./js/jquery.min.js"></script-->


    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>

    <script src="<?php echo base_url()?>/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="<?php echo base_url()?>/js/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url()?>/js/ie10-viewport-bug-workaround.js"></script>

    <script src="<?php echo base_url()?>/dist/semantic.js"></script>


        <script src="<?php echo base_url()?>/js/form_feedack.js"></script>

        <script src="<?php echo base_url()?>/js/form_behaviour.js"></script>

    <script type="text/javascript">

        $('.ui.form')
                .form({
                    申请人: {
                        identifier: 'applicant',
                        rules: [
                            {
                                type   : 'empty',
                                prompt : '请输入申请人'
                            }
                        ]
                    },
                    申请时间: {
                        identifier: 'time',
                        rules: [
                            {
                                type   : 'empty',
                                prompt : '请输入申请时间'
                            }
                        ]
                    },
                    课程代码: {
                        identifier: 'cid',
                        rules: [
                            {
                                type   : 'empty',
                                prompt : '请输入课程代码'
                            },
                            {
                                type   : 'length[10]',
                                prompt : '课程代码需要是十位，请重新输入'
                            },
                            {
                                type   : 'maxLength[11]',
                                prompt : '课程代码需要是十位，请重新输入'
                            }
                        ]
                    },
                    课程名称: {
                        identifier: 'name',
                        rules: [
                            {
                                type   : 'empty',
                                prompt : '请输入课程名称'
                            }
//                            ,
//                            {
//                                type   : 'is[foo]',
//                                prompt : '您输入的涉嫌色情暴力，请重新输入'
//                            }
                        ]
                    },
                    学分: {
                        identifier: 'credit',
                        rules: [
                            {
                                type   : 'empty',
                                prompt : '请输入学分'
                            }
                        ]
                    },
                    课程类型: {
                        identifier: 'type',
                        rules: [
                            {
                                type   : 'empty',
                                prompt : '请选择课程类型'
                            }
                        ]
                    },
                    学院: {
                        identifier: 'college',
                        rules: [
                            {
                                type   : 'empty',
                                prompt : '请选择学院'
                            }
                        ]
                    },
                    学系: {
                        identifier: 'department',
                        rules: [
                            {
                                type   : 'empty',
                                prompt : '请选择学系'
                            }
                        ]
                    }
                },
                {
                    inline : true,
                    on     : 'blur'
                });


    </script>

<svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 200 200" preserveAspectRatio="none" style="visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs></defs><text x="0" y="10" style="font-weight:bold;font-size:10pt;font-family:Arial, Helvetica, Open Sans, sans-serif;dominant-baseline:middle">200x200</text></svg><div id="feedly-mini" title="feedly Mini tookit"></div></body>
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