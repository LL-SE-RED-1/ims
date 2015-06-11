
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header"><strong>个人信息</strong></h1>


            <form class="ui form segment transparent-seg">
                <div class="row">
                    <div class="col-md-4">
                        <!--<img src="8790.jpg" class="img-responsive"-->
                             <!--style="margin-top: 10px; height:200px; width: 200px; background-size: cover"/>-->
                        <!--<img src="..." alt="..." class="img-circle">-->
                        <a href="#" class="thumbnail" style="margin-top :5px; margin-bottom: 5px">
                            <img class="img-responsive" src="<?php echo base_url()?>images/123.jpg" alt="..." style="height:300px overflow: hidden">
                        </a>

                        <hr>
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default">上传</button>
                            </span>
                        </div>
                        <!--<div>-->
                            <!--<h4><strong>说明:</strong></h4>-->
                            <!--<p style="text-indent: 2em">xxxx</p>-->
                            <!--<p style="text-indent: 2em">xxxx</p>-->
                            <!--<p style="text-indent: 2em">xxxx</p>-->


                        <!--</div>-->
                </div>

                    <div class="col-md-8">


                            <div class="three fields">
                                <div class="field">
                                    <label>学号</label>
                                    <input placeholder="" readonly type="text">
                                </div>
                                <div class="field">
                                    <label>名字</label>
                                    <input placeholder="" readonly type="text">
                                </div>

                                <div class="field">
                                    <label>性别</label>
                                    <div class="ui selection dropdown">
                                        <div class="default text"></div>
                                        <i class="dropdown icon"></i>
                                        <input name="hidden-field" type="hidden">
                                        <div class="menu">
                                            <div class="item" data-value="1">男</div>
                                            <div class="item" data-value="2">女</div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="four fields">

                                <div class="field">
                                    <label>生日</label>
                                    <input placeholder="" type="text">
                                </div>
                                <div class="field">
                                    <label>民族</label>
                                    <input placeholder="" type="text">
                                </div>


                                <div class="field">
                                    <label>邮箱</label>
                                    <input placeholder="" type="text">
                                </div>

                                <div class="field">
                                    <label>手机号</label>
                                    <input placeholder="" type="text">
                                </div>
                            </div>

                            <div class="two fields">
                                <div class="field">
                                    <label>学院</label>
                                    <input placeholder="" readonly type="text">
                                </div>
                                <div class="field">
                                    <label>学系</label>
                                    <input placeholder="" readonly type="text">
                                </div>

                            </div>

                        <div class="two fields">
                            <div class="field ">
                                <label>年级</label>
                                <input placeholder="" readonly type="text">
                            </div>
                            <div class="field ">
                                <label>班级</label>
                                <input placeholder="" readonly type="text">
                            </div>
                        </div>

                        </div>

                    </div>
                <div class="row">
                    <div style="float:right">
                    <div class="ui green button modify">修改</div>
                    <div class="ui red button delete">删除</div>
                        </div>
                </div>
            </form>

        </div>
        <!--<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">-->
        <!--</div>-->
    </div>
</div>


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

</body>
<style>

    .ui.transparent-seg {
        background-color: rgba(255, 255, 255, 0);
        box-shadow: 0px 0px 0px 0px;
        padding: 0em 0em;
    }
</style>
</html>
