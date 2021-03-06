<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="/Blog/Public/css/bootstrap.min.css"/>
    <script type="text/javascript" src="/Blog/Public/js/jquery.min.js"></script>

<title>图片添加</title>
<link rel="stylesheet" type="text/css" href="/Blog/Public/css/release_article.css"/>
<link rel="stylesheet" type="text/css" href="/Blog/Public/css/warning.css"/>
<script type="text/javascript" src="/Blog/Public/js/release_article.js"></script>
<script type="text/javascript">
    var exitUrl='<?php echo U("Admin/Release/User/logOff",'','');?>';
</script>
<head>
<body>
<div class="container">
    <div class="row header">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 title">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 log">
                <span><?php echo (session('name')); ?></span>
                <span>|</span>
                <span><a href="../../../Home/Index/index.html" target="_blank">打开博客</a></span>
                <span>|</span>
                <button id="exit">注销</button>
            </div>
            <div class="TitleName">
                <center>
                    <h1>Vincent博客管理系统</h1>
                </center>
            </div>
        </div>
    </div>

    <div class="row content">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 menu">
            <ul>
                <li><span class="glyphicon glyphicon-list-alt"></span><a href="add.html">添加文章</a></li>
                <li><span class="glyphicon glyphicon-trash"></span><a href="http://localhost/Blog/index.php/Admin/Release/Article/delete.html">删除文章</a></li>
                <li><span class="glyphicon glyphicon-picture"></span><a href="addPicture.html">添加图片</a></li>
            </ul>
        </div>
        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 main">
            <!--<form class="form-horizontal" role="form" id="ImgForm" method="post" action="/Blog/index.php/Admin/Release/Article/AddPagePicture">-->
            <form class="form-horizontal" role="form" id="ImgForm" name="ImgForm">
                <div class="form-group">
                    <label for="ImgTitle" class="col-sm-2 col-md-2 col-lg-2 control-label">图片标题</label>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <input type="text" class="form-control" id="ImgTitle" name="ImgTitle" placeholder="Title">
                    </div>
                    <div class="col-sm-1 col-md-1 col-lg-1" style="padding: 0px">
                        <span class="glyphicon glyphicon-star"></span>
                    </div>
                    <div class="col-sm-5 col-md-5 col-lg-5 status" id="img_title_status">

                    </div>
                </div>
                <div class="form-group">
                    <label for="ImgClass" class="col-sm-2 col-md-2 col-lg-2 control-label">图片分类</label>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <select class="form-control" id="ImgClass" name="ImgClass">
                            <option value="common">日常生活</option>
                            <option value="school">学习生活</option>
                            <option value="activity">晚会活动</option>
                            <option value="share">分享图片</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ImgReleaseDate" class="col-sm-2 col-md-2 col-lg-2 control-label">拍摄日期</label>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <!--获取的时间形式为2014-12-11-->
                        <input type="date" class="form-control" id="ImgReleaseDate" name="ImgReleaseDate">
                    </div>
                </div>
                <div class="form-group">
                    <label for="ImgDescription" class="col-sm-2 col-md-2 col-lg-2 control-label">图片描述</label>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <textarea class="form-control" rows="5" id="ImgDescription" name="ImgDescription"></textarea>
                    </div>
                    <div class="col-sm-5 col-md-5 col-lg-5 status" id="img_content_status">

                    </div>
                </div>
                <div class="form-group">
                    <label for="ImgInput" class="col-sm-2 col-md-2 col-lg-2 control-label">选择图片</label>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <input type="file" id="ImgInput" name="photo" style="padding-top: 7px">
                    </div>
                    <div class="col-sm-1 col-md-1 col-lg-1" style="padding: 0px">
                        <span class="glyphicon glyphicon-star"></span>
                    </div>
                    <div class="col-sm-5 col-md-5 col-lg-5 status" id="img_input_status">

                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-md-offset-2  col-lg-offset-2 col-sm-4 col-md-4 col-lg-4">
                         <button type="button" class="btn btn-primary btn-block" id="ImgFirm">提交</button>
                    </div>
                </div>
            </form>
            <!--如果将button放在form内，则会出现当点击button之后，如果没有其它响应，则会刷新当前页面-->
            <!--<div class="col-sm-offset-2 col-sm-4 col-md-offset-2 col-md-4 col-lg-offset-2 col-lg-4" style="padding-left: 0">-->
                <!--<button type="button" class="btn btn-primary btn-block" id="ImgFirm">提交</button>-->
            <!--</div>-->
        </div>
    </div>
</div>

<script type="text/javascript">
    menu_show();
    tell_img_info();
    submitImage();
    exit();

    var AddPagePictureUrl='<?php echo U("Admin/Release/Article/AddPagePicture",'','');?>';
</script>
</body>
</html>