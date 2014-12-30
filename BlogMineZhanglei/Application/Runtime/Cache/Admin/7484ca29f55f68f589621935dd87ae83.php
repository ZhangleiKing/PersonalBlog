<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<title>发布管理</title>
	<link rel="stylesheet" type="text/css" href="/Blog/Public/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Blog/Public/css/release_article.css"/>
	<script type="text/javascript" src="/Blog/Public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/Blog/Public/js/release_article.js"></script>
</head>
<body>
	<div class="container">
        <div class="row header">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 title">
                <center><h1>Vincent博客管理系统</h1></center>
            </div>
        </div>

        <div class="row content">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 menu">
                <ul>
                    <li><span class="glyphicon glyphicon-list-alt"></span>添加文章</li>
                    <li><span class="glyphicon glyphicon-trash"></span>删除文章</li>
                </ul>
            </div>
            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 main">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="Title" class="col-sm-2 col-md-2 col-lg-2 control-label">文章标题</label>
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <input type="text" class="form-control" id="Title" placeholder="Title">
                        </div>
                        <div class="col-sm-5 col-md-5 col-lg-5 status" id="title_status">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Class" class="col-sm-2 col-md-2 col-lg-2 control-label">文章分类</label>
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <select class="form-control" id="Class">
                                <option value="it">IT编程</option>
                                <option value="masterwork">名著赏析</option>
                                <option value="english">英语学习</option>
                                <option value="life">生活小记</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Author" class="col-sm-2 col-md-2 col-lg-2 control-label">作者</label>
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <input type="text" class="form-control" id="Author" placeholder="Author">
                        </div>
                        <div class="col-sm-5 col-md-5 col-lg-5 status" id="author_status">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ReleaseDate" class="col-sm-2 col-md-2 col-lg-2 control-label">发布日期</label>
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <!--获取的时间形式为2014-12-11-->
                            <input type="date" class="form-control" id="ReleaseDate">
                        </div>
                        <div class="col-sm-5 col-md-5 col-lg-5 status" id="date_status">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ArticleContent" class="col-sm-2 col-md-2 col-lg-2 control-label">文章内容</label>
                        <div class="col-sm-8 col-md-8 col-lg-8">
                            <textarea class="form-control" rows="25" id="ArticleContent"></textarea>
                        </div>
                        <div class="col-sm-2 col-md-2 col-lg-2 status" id="content_status">

                        </div>
                    </div>
                </form>
                <!--如果将button放在form内，则会出现当点击button之后，如果没有其它响应，则会刷新当前页面-->
                <div class="col-sm-offset-2 col-sm-4 col-md-offset-2 col-md-4 col-lg-offset-2 col-lg-4">
                    <button type="submit" class="btn btn-primary btn-block" id="Firm">提交</button>
                </div>

            </div>
        </div>
	</div>

    <script type="text/javascript">
        menu_show();
        tell_info();
        submit();
        //如果不加上后面的两个'',则该url地址回加上.html后缀
        var AddPageInfoUrl='<?php echo U("Admin/Release/Article/AddPageInfo",'','');?>';
    </script>
</body>
</html>