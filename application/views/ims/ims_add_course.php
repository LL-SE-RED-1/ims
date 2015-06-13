<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

        <h2 class="ui header">添加课程</h2>


        <div class="ui positive message" style="display: none;">
            <i class="close icon"></i>
            <div class="header">
                Wow congratulations!
            </div>
            <p>操作成功！</p>
        </div>
         <div class="ui negative message" style="display: none;">
                     <i class="close icon"></i>
                    <div class="header">
                    Oops! 操作失败！
                </div>
                <p><?php echo $result_info;?></p>
            </div>

        <form class="ui form segment transparent-seg" action="<?php echo site_url('ims/ims_add_course/manage') . "/" . $func?>" method="post">

            <div class="four fields">
                <div class="required field">
                    <label>课程代码</label>
                    <?php if ($func == 0): ?>
                    <input name="cid" placeholder="" <?php if ($type == 2) {
	echo "readonly";
}
?> type="text">
                    <?php else: ?>
                    <input name="cid" value="<?php echo $info['cid']?>" <?php if ($type == 2) {
	echo "readonly";
}
?>  type="text">
                    <?php endif;?>
                </div>
                <div class="required field">
                    <label>课程名称</label>
                    <?php if ($func == 0): ?>
                    <input name="name" placeholder="" <?php if ($type == 2) {
	echo "readonly";
}
?>  type="text">
                    <?php else: ?>
                    <input name="name" value="<?php echo $info['name']?>" <?php if ($type == 2) {
	echo "readonly";
}
?>  type="text">
                    <?php endif;?>
                </div>
                <div class="required field">
                    <label>学分</label>
                    <?php if ($func == 0): ?>
                    <input name="credit" placeholder="" <?php if ($type == 2) {
	echo "readonly";
}
?>  type="text">
                    <?php else: ?>
                    <input name="credit" value="<?php echo $info['credit']?>" <?php if ($type == 2) {
	echo "readonly";
}
?>  type="text">
                    <?php endif;?>
                </div>
                <div class="required field">
                    <label>课程类型</label>
                    <div class="ui selection dropdown">
                        <div class="default text"></div>
                        <i class="dropdown icon"></i>
                        <?php if ($func == 0): ?>
                        <input name="ctype" type="hidden">
                    <?php else: ?>
                        <input name="ctype" type="hidden" value="<?php echo $info['ctype']?>">
                    <?php endif;?>
                        <div class="menu">
                            <div class="item" data-value="1">实验课</div>
                            <div class="item" data-value="2">理论课</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="three fields">
                <div class="required field">
                    <label>学期</label>
                    <div class="ui selection dropdown">
                        <div class="default text"></div>
                        <i class="dropdown icon"></i>
                        <?php if ($func == 0): ?>
                        <input name="semester" type="hidden">
                    <?php else: ?>
                        <input name="semester" type="hidden" value="<?php echo $info['semester']?>">
                    <?php endif;?>
                        <div class="menu">
                            <div class="item" data-value="0">上半学期</div>
                            <div class="item" data-value="1">下半学期</div>
                            <div class="item" data-value="2">长学期</div>
                        </div>
                    </div>
                </div>
                <div class="required field">
                    <label>学院</label>
                    <div class="ui selection dropdown" name="college-dropdown">
                        <div class="text"><?php if ($func != 0) {
	echo $info['college'];
}
?></div>
                        <i class="dropdown icon"></i>
                        <?php if ($func == 0): ?>
                        <input name="college" type="hidden">
                    <?php else: ?>
                        <input name="college" type="hidden" value="<?php echo $info['college']?>">
                    <?php endif;?>
                        <div class="menu" id="college-menu">
                        </div>
                    </div>
                </div>
                <div class="required field">
                    <label>学系</label>
                    <div class="ui selection dropdown">
                        <div class="text" id="department-text"><?php if ($func != 0) {
	echo $info['department'];
}
?></div>
                        <i class="dropdown icon"></i>
                        <?php if ($func == 0): ?>
                        <input name="department" type="hidden">
                    <?php else: ?>
                        <input name="department" type="hidden" value="<?php echo $info['department']?>">
                    <?php endif;?>
                        <div class="menu" id="department-menu">
                        </div>
                    </div>
                </div>
            </div>



              <div class="field">
                <label>课程描述</label>
                <?php if ($func == 0): ?>
                <textarea name="info" <?php if ($type == 2) {
	echo "readonly";
}
?> ></textarea>
                    <?php else: ?>
                <textarea name="info" <?php if ($type == 2) {
	echo "readonly";
}
?> ><?php echo $info['info']?></textarea>
                    <?php endif;?>
              </div>

            <br>

                <div class="ui grey right floated  button" id="back">返回</div>
                <?php if ($type == 3): ?>
                <?php if ($func != 0): ?>
                <button class="ui red right floated  button" type="submit" name="cancel" value="cancel" id="delete">删除</button>
            <?php endif;?>
                <button class="ui green  right floated  button" type="submit" name="submit" value="submit">提交</button>
            <?php endif;?>

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

    <script src="<?php echo base_url()?>js/form_feedack.js"></script>

    <script src="<?php echo base_url()?>js/form_behaviour.js"></script>

    <script type="text/javascript">

        $('.ui.form')
                .form({
                    课程代码: {
                        identifier: 'cid',
                        rules: [
                            {
                                type   : 'empty',
                                prompt : '请输入课程代码'
                            },
                            {
                                type   : 'length[8]',
                                prompt : '课程代码需要八位，请重新输入'
                            },
                            {
                                type   : 'maxLength[8]',
                                prompt : '课程代码需要八位，请重新输入'
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

                    学期: {
                        identifier: 'semester',
                        rules: [
                            {
                                type   : 'empty',
                                prompt : '请选择学期类型'
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


// $("#delete").click(function() {
//     history.go(-2);
//     location.reload();
//     console.log("reloaded");
// });

    </script>


<?php if ($result_num == 1): ?>
    <script>
            $(document)
                    .ready(function() {
                        show_positive_message();
                    });
    </script>
<?php endif;?>

<?php if ($result_num == 2): ?>
    <script>
            $(document)
                    .ready(function() {
                        show_negative_message();
                    });
    </script>
<?php endif;?>
<svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 200 200" preserveAspectRatio="none"
style="visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs></defs><text x="0" y="10"
style="font-weight:bold;font-size:10pt;font-family:Arial, Helvetica, Open Sans, sans-serif;dominant-baseline:middle">200x200
</text></svg><div id="feedly-mini" title="feedly Mini tookit"></div></body>
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