<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

        <h2 class="ui header">添加课程</h2>

        <div class="ui positive message" style="display: none;">
            <i class="close icon"></i>
            <div class="header">
                Wow congratulations!
            </div>
            <p>你的修改已经成功被提交！</p>
        </div>
        
        <form class="ui form segment transparent-seg" action="<?php echo site_url('ims/ims_add_course/manage')?>" method="post">

            <div class="four fields">
                <div class="required field">
                    <label>课程代码</label>
                    <?php if ($func == 0): ?>
                    <input name="cid" placeholder="" type="text">
                    <?php else: ?>
                    <input name="cid" value="<?php echo $info['cid']?>" type="text">
                    <?php endif;?>
                </div>
                <div class="required field">
                    <label>课程名称</label>
                    <?php if ($func == 0): ?>
                    <input name="name" placeholder="" type="text">
                    <?php else: ?>
                    <input name="name" value="<?php echo $info['name']?>" type="text">
                    <?php endif;?>
                </div>
                <div class="required field">
                    <label>学分</label>
                    <?php if ($func == 0): ?>
                    <input name="credit" placeholder="" type="text">
                    <?php else: ?>
                    <input name="credit" value="<?php echo $info['credit']?>" type="text">
                    <?php endif;?>
                </div>
                <div class="required field">
                    <label>课程类型</label>
                    <div class="ui selection dropdown">
                        <div class="default text"></div>
                        <i class="dropdown icon"></i>
                        <?php if ($func == 0): ?>
                        <input name="type" type="hidden">
                    <?php else: ?>
                        <input name="type" type="hidden" value="<?php echo $info['type']?>">
                    <?php endif;?>
                        <div class="menu">
                            <div class="item" data-value="1">实验课</div>
                            <div class="item" data-value="2">理论课</div>
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
                        <div class="text" id="department-text"></div>
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
                <textarea name="info"></textarea>
                    <?php else: ?>
                <textarea name="info"><?php echo $info['info']?></textarea>
                    <?php endif;?>
              </div>

            <br>

                <div class="ui grey right floated  button" id="back">返回</div>
                <?php if ($func != 0): ?>
                <button class="ui red right floated  button" type="submit" name="cancel" value="cancel">删除</button>
            <?php endif;?>
                <button class="ui green  right floated  button" type="submit" name="submit" value="submit">提交</button>

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
                            },
                            {
                                type   : 'contains[高速真空吸]',
                                prompt : '您输入的涉嫌色情暴力，请重新输入'
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


        var college_and_department;

        $.getJSON( "<?php echo base_url()?>metadata/college_and_department.json", function( data ) {
            college_and_department = data;

            for (el in college_and_department['college']){
                console.log(el);
                $('#college-menu').append("<div class='item'>" + el + "</div>");
            }
        });

        $("input[name='college']").change(function(){
            var picked = $(this).attr('value');
            var department_list = college_and_department['college'][picked]['department'];
            $("#department-menu").empty();
            $("#department-text").empty();
            department_list.forEach(function(el, i) {
                $("#department-menu").append("<div class='item'>" + el + "</div>");
            });
        });



        $("#back").click(function() {
            history.go(-1);
        });

        $(".close.icon").click(function() {
            $(this).parent().fadeOut('slow');
        });

        function show_positive_message() {
            $(".close.icon").parent().fadeIn('slow');
            setTimeout(function() {
                $(".close.icon").parent().fadeOut('slow');
            }, 3000);
        };

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