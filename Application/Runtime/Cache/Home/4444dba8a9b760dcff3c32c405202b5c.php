<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>结果参考</title>
    <meta name="renderer" content="webkit">
    <meta name="keywords" content>
    <meta name="description" content>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <link rel="stylesheet" href="/lottery/Public/home/css/bootstrap.min.css">
    <link rel="stylesheet" href="/lottery/Public/home/css/kit.min.css">
    <link rel="stylesheet" href="/lottery/Public/home/css/style.css">
    <!--<link rel="stylesheet" href="css/common.css">-->
    <link rel="stylesheet" href="/lottery/Public/home/iconfont/iconfont.css">

    <script>
        var _hmt = _hmt || [];
        (function () {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?2ba965caf17e122f562b7f8b6ebe4f60";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
</head>
<body ng-controller="openCtrl" class="ng-scope">
<style>
    .opentime b{ background-image:url(/lottery/Public/home/img/lot_icon.png); }

    .lot-result .r3{ background-image:url(/lottery/Public/home/img/clock.jpg); }

    tbody{
        display:table-row-group;
        vertical-align:middle;
        border-color:inherit;
    }

    tr{
        display:table-row;
        vertical-align:inherit;
        border-color:inherit;
    }
</style>
<section class="vbox">
    <section class="scrollable" id="msgcontainer">
        <section class="hbox stretch">
            <section id="content">
                <section class="vbox-nouse">
                    <section class="container container-h bg-white scrollable wrapper wrapper-xxs">
                        <header>
                            <div class="banner">
                                <img src="/lottery/Public/home/img/0227.jpg" alt="" style="float:left; width:100%">
                            </div>
                        </header>
                        <div class="bg-white lot-type clearfix">
                            <a href="javascript:;" class="col-lg-1 col-sm-2 col-xs-6 ng-scope ng-binding active" ng-repeat="o in lotTypes" ng-class="{'active':o.id===curLotTypeId,'nav-b-r-none nav-lg-b-r-none':lotTypes.length-1===$index}" ng-click="changeLotType(o.id)">北京</a>
                            <a href="javascript:;" class="col-lg-1 col-sm-2 col-xs-6 ng-scope ng-binding nav-b-r-none nav-lg-b-r-none" ng-repeat="o in lotTypes" ng-class="{'active':o.id===curLotTypeId,'nav-b-r-none nav-lg-b-r-none':lotTypes.length-1===$index}" ng-click="changeLotType(o.id)">加拿大</a>
                        </div>
                        <div class="lot-m clearfix">
                            <div class="col-md-4 col-sm-6 lot-latest text-center">
                                <div class="clearfix" style="display:inline-block">
                                    <div class="pull-left t-logo"><img ng-src="img/bjkl8_logo.png" src="/lottery/Public/home/img/bjkl8_logo.png" alt=""></div>
                                    <div class="lot-section pull-left">
                                        <p>最新： <i id="period" class="ng-binding" ng-hide="loadingLatest">823716</i> 期</p>
                                        <div class="lot-section-sel pull-left ng-isolate-scope" mc-section-dropdown-list ddl-index="ddlSection.index" model="ddlSections" style="margin-top:-5px;">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default btn-sm border-radius0" ng-click="prev()" ng-disabled="ddlIndex===ddlModel.length-1"><i class="iconfont icon-zuo"></i></button>
                                                <button data-toggle="dropdown" class="btn btn-default btn-sm dropdown-toggle border-radius0 ng-binding">
                                                    823721
                                                    <span class="iconfont icon-caretdown"></span>
                                                    <ul class="dropdown-menu dropdown-select">
                                                        <li class="ng-scope active">
                                                            <a href="javascript:;" class="ng-binding"><input type="radio" name="d-s-r"> 823723</a>
                                                        </li>
                                                        <li class="ng-scope">
                                                            <a href="javascript:;" class="ng-binding"><input type="radio" name="d-s-r"> 823722</a>
                                                        </li>
                                                    </ul>
                                                </button>
                                                <button type="button" class="btn btn-default btn-sm border-radius0" ng-click="next()" ng-disabled="ddlIndex===ddlModel.length-1"><i class="iconfont icon-you"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 open-cutdown no-padder">
                                <span style="display: none;overflow:hidden;">彩种已关闭</span>
                                <span style="display: none"><i>官网结束</i><br>预计恢复时间：<b></b></span>
                                <div class="opentime ng-isolate-scope" style="display: inline-block;" mc-timer ms="tim" end-ms="endplay">
                                    <span>下一期：</span>
                                    <b class="ng-binding ng-hide" ng-show="t.hour>0">00</b>
                                    <span ng-show="t.hour>0" class="ng-hide">小时</span>
                                    <b class="ng-binding">01</b>
                                    <span>分</span>
                                    <b class="ng-binding">01</b>
                                    <span>秒</span>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 lot-result">
                                <div class="r1" data-state="0" ng-show="!!!opening">
                                    <span class="cyanBlue ng-binding"><?php echo ($datafind["num1"]); ?></span>
                                    <label class="">+</label>
                                    <span class="cyanBlue ng-binding"><?php echo ($datafind["num2"]); ?></span>
                                    <label class="">+</label>
                                    <span class="cyanBlue ng-binding"><?php echo ($datafind["num3"]); ?></span>
                                    <label class="">=</label>
                                    <span class="skyBlue ng-binding"><?php echo ($datafind["total"]); ?></span>
                                </div>
                                <div class="r2" ng-show="!!!opening">
                                    <span <?php if($datafind["is_da"] == 1): ?>class="badge ng-binding red-info"<?php else: ?>class="badge ng-binding blue-info"<?php endif; ?>>
                                        <?php echo ($datafind["BigOrSmall"]); ?>
                                    </span>

                                    <span <?php if($datafind["is_dan"] == 1): ?>class="badge ng-binding red-info"<?php else: ?>class="badge ng-binding blue-info"<?php endif; ?>>
                                        <?php echo ($datafind["OneOrDouble"]); ?>
                                    </span>
                                </div>
                                <div class="r3 ng-hide" ng-show="!!!opening">
                                    等待结果 <img src="/lottery/Public/home/img/icon-status-status-dots-anim-16.gif" alt="">
                                </div>
                            </div>
                        </div>


                        <section class="panel panel-default m-b-none ng-isolate-scope" infinite-scroll="getOpenHistory()" infinite-scroll-disabled="busyMsg" infinite-scroll-distance="0" infinite-scroll-container="msgcontainer">
                            <header class="panel-heading">
                                <div class="btn-group" data-toggle="buttons" style=" width:100%">
                                    <span class="arrow bottom h-ab-result"></span>
                                    <button class="col-xs-6 btn btn-sm btn-facebook"><i class="iconfont icon-jinrongtubiao_jieguo"></i>结果</button>
                                    <button class="col-xs-6 btn btn-sm btn-twitter"><i class="iconfont icon-tubiaozoushitu"></i>走势图</button>
                                </div>
                            </header>

                            <div class="table-responsive" ng-show="displayResult===0" style="overflow-x: hidden;">
                                <table class="table table-striped b-light" id="results">
                                    <thead>
                                    <tr>
                                        <th>期号</th>
                                        <th>时间</th>
                                        <th>号码</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(is_array($datalist)): foreach($datalist as $key=>$dvo): ?><tr class="ng-scope">
                                            <td class="ng-binding"><?php echo ($dvo["order_no"]); ?></td>
                                            <td class="ng-binding"><?php echo ($dvo["end_time"]); ?></td>
                                            <td class="ng-binding"><?php echo ($dvo["result"]); ?></td>
                                        </tr><?php endforeach; endif; ?>
                                    </tbody>
                                </table>

                                <table class="table table-striped tbl-trend b-light" style="display:none" id="trends">
                                    <thead>
                                    <tr>
                                        <th>期号</th>
                                        <th>值</th>
                                        <th>大</th>
                                        <th>小</th>
                                        <th>单</th>
                                        <th>双</th>
                                        <th>大单</th>
                                        <th>大双</th>
                                        <th>小单</th>
                                        <th>小双</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if($trendlist != null): if(is_array($trendlist)): foreach($trendlist as $key=>$tvo): ?><tr>
                                                <td class="ng-binding"><?php echo ($tvo["order_no"]); ?></td>
                                                <td class="font-bold ng-binding"><?php echo ($tvo["result"]); ?></td>
                                                <td>
                                                    <?php if($tvo["da"] == 1): ?><span class="badge blue-info ng-binding red-info">大</span><?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php if($tvo["xiao"] == 1): ?><span class="badge blue-info ng-binding">小</span><?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php if($tvo["dan"] == 1): ?><span class="badge blue-info ng-binding">单</span><?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php if($tvo["shuang"] == 1): ?><span class="badge blue-info ng-binding red-info">双</span><?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php if($tvo["dd"] == 1): ?><span class="badge blue-info ng-binding">大单</span><?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php if($tvo["ds"] == 1): ?><span class="badge blue-info ng-binding red-info">大双</span><?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php if($tvo["xd"] == 1): ?><span class="badge blue-info ng-binding">小单</span><?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php if($tvo["xs"] == 1): ?><span class="badge blue-info ng-binding red-info">小双</span><?php endif; ?>
                                                </td>
                                            </tr><?php endforeach; endif; endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </section>

                    </section>
                </section>
            </section>
        </section>
    </section>
</section>

<script src="/lottery/Public/home/js/jquery_1.8.3.min.js"></script>
<script src="/lottery/Public/home/js/angular_1.2.16.min.js"></script>
<script src="/lottery/Public/home/js/common.js"></script>
</body>
</html>