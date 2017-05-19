<?php if (!defined('THINK_PATH')) exit();?> <!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="/lottery/Public/assets//img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/lottery/Public/assets//img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title> 博彩后台 </title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="/lottery/Public/assets//css/bootstrap.min.css" rel="stylesheet" />
    <link href="/lottery/Public/assets//css/animate.min.css" rel="stylesheet"/>
    <link href="/lottery/Public/assets//css/paper-dashboard.css" rel="stylesheet"/>
    <link href="/lottery/Public/assets//css/demo.css" rel="stylesheet" />
    <link href="/lottery/Public/assets//css/style.min.css" rel="stylesheet">
    <link href='/lottery/Public/assets//css/googleapis.css' rel='stylesheet' type='text/css'>
    <link href="/lottery/Public/assets//css/themify-icons.css" rel="stylesheet">

    <script src="/lottery/Public/assets//js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="/lottery/Public/assets//js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/lottery/Public/assets//js/bootstrap-checkbox-radio.js"></script>
    <script src="/lottery/Public/assets//js/chartist.min.js"></script>
    <script src="/lottery/Public/assets//js/bootstrap-notify.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="/lottery/Public/assets//js/paper-dashboard.js"></script>
    <script src="/lottery/Public/assets//js/demo.js"></script>

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="/lottery/index.php/admin/index/index" class="simple-text">  博 彩 后 台 管 理 系 统  </a>
            </div>

            <ul class="nav">
                <li id="a">
                    <a href="/lottery/index.php/admin/index/index?id=1">
                        <i class="ti-panel"></i>
                        <p>综合统计</p>
                    </a>
                </li>
                <li id="b">
                    <a href="/lottery/index.php/admin/index/user?id=2">
                        <i class="ti-user"></i>
                        <p>用户管理</p>
                    </a>
                </li>
                <li id="c">
                    <a href="/lottery/index.php/admin/index/table?id=3">
                        <i class="ti-view-list-alt"></i>
                        <p>彩票管理</p>
                    </a>
                </li>
                <li id="d">
                    <a href="/lottery/index.php/admin/index/typography?id=4">
                        <i class="ti-text"></i>
                        <p>财务</p>
                    </a>
                </li>
                <li id="e">
                    <a href="/lottery/index.php/admin/index/icons?id=5">
                        <i class="ti-pencil-alt2"></i>
                        <p>彩种统计</p>
                    </a>
                </li>
                <li id="f">
                    <a href="/lottery/index.php/admin/index/maps?id=6">
                        <i class="ti-map"></i>
                        <p>系统设置</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>
<script type="text/javascript">

function GetQueryString(name)
{
     var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
     var r = window.location.search.substr(1).match(reg);
     if(r!=null)return  unescape(r[2]); return null;
}
var ids = GetQueryString("id");

if(ids == 1){
    $("#a").addClass("active");
}
if(ids == 2){
    $("#b").addClass("active");
}
if(ids == 3){
    $("#c").addClass("active");
}
if(ids == 4){
    $("#d").addClass("active");
}
if(ids == 5){
    $("#e").addClass("active");
}
if(ids == 6){
    $("#f").addClass("active");
}


</script>

    <div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">财务</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
								<p>Stats</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
									<p>Notifications</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
						<li>
                            <a href="#">
								<i class="ti-settings"></i>
								<p>Settings</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Paper Dashboard Headings</h4>
                                <p class="category">Created using <a href="https://www.google.com/fonts/specimen/Muli">Muli</a> Font Family</p>
                            </div>
                            <div class="content">

                                <div class="typo-line">
                                    <h1><p class="category">Header 1</p>Paper Dashboard Heading </h1>
                                </div>

                                    <div class="typo-line">
                                    <h2><p class="category">Header 2</p>Paper Dashboard Heading </h2>
                                </div>
                                <div class="typo-line">
                                    <h3><p class="category">Header 3</p>Paper Dashboard Heading </h3>
                                </div>
                                <div class="typo-line">
                                    <h4><p class="category">Header 4</p>Paper Dashboard Heading </h4>
                                </div>
                                <div class="typo-line">
                                    <h5><p class="category">Header 5</p>Paper Dashboard Heading </h5>
                                </div>
                                 <div class="typo-line">
                                    <h6><p class="category">Header 6</p>Paper Dashboard Heading </h6>
                                </div>
                                <div class="typo-line">
                                    <p><span class="category">Paragraph</span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>
                                </div>
                                <div class="typo-line">
                                    <p class="category">Quote</p>
                                    <blockquote>
                                     <p>
                                     Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.
                                     </p>
                                     <small>
                                     Steve Jobs, CEO Apple
                                     </small>
                                    </blockquote>
                                </div>

                                <div class="typo-line">
                                    <p class="category">Muted Text</p>
                                    <p class="text-muted">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.
                                    </p>
                                </div>
                                <div class="typo-line">
                                    <!--
                                     there are also "text-info", "text-success", "text-warning", "text-danger" clases for the text
                                     -->
                                    <p class="category">Coloured Text</p>
                                    <p class="text-primary">
                                        Text Primary - Light Bootstrap Table Heading and complex bootstrap dashboard you've ever seen on the internet.
                                    </p>
                                    <p class="text-info">
                                        Text Info - Light Bootstrap Table Heading and complex bootstrap dashboard you've ever seen on the internet.
                                    </p>
                                    <p class="text-success">
                                        Text Success - Light Bootstrap Table Heading and complex bootstrap dashboard you've ever seen on the internet.
                                    </p>
                                    <p class="text-warning">
                                        Text Warning - Light Bootstrap Table Heading and complex bootstrap dashboard you've ever seen on the internet.
                                    </p>
                                    <p class="text-danger">
                                        Text Danger - Light Bootstrap Table Heading and complex bootstrap dashboard you've ever seen on the internet.
                                    </p>
                                </div>

                                <div class="typo-line">
                                    <h2><p class="category">Small Tag</p>Header with small subtitle <br><small>".small" is a tag for the headers</small> </h2>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="#">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="#/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; 博彩后台管理系统
                </div>
            </div>
        </footer>

    </div>
</div>
</body>
</html>