<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
 
<head>

    <title>Bigshot Theme by CssTemplateHeaven</title>
   
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<!-- CSS Files -->

    <link rel="stylesheet" type="text/css" media="screen" href="/lcvip/Public/homecss/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/lcvip/Public/homecss/menu/css/simple_menu.css">


<!--JS FILES -->

	<script src="/lcvip/Public/homecss/js/jquery.tools.min.js" type="text/javascript"></script>
        
    <script type="text/javascript">
        $(function() {
        $("#prod_nav ul").tabs("#panes > div", {effect: 'fade', fadeOutSpeed: 400});
    });
    </script>
    
    <script type="text/javascript">
            $(document).ready(function(){
            $(".pane-list li").click(function(){
            window.location=$(this).find("a").attr("href");return false;
        });
    
    }); //close doc ready
    </script>

</head>

<body>
 
   <div class="header">
   <font style="font-size:14px;" color="#FF0000" >哟那是肯定</font>
    <!-- Logo/Title -->
    
    <div id="site_title">
    
    <a href="index.html">  
        <img src="/lcvip/Public/homecss/img/logo.png" alt="My Site Title" /></a>
    </div>  
      
    <!-- Main Menu -->
    
    <ol id="menu">
             <li class="active_menu_item"><a href="index.html" style="color:#FFF">首 页</a>
        
              <!-- sub menu -->
              <ol>  
                <li><a href="nivo.html">很是不错的幻灯片</a></li>
                <li><a href="ei_slider.html">EI滑块</a></li>
                <li><a href="fullscreen_gallery.html">全屏滑块</a></li>
                <li><a href="image_frontpage.html">静态图像
</a></li>
              </ol>
              </li><!-- end sub menu -->
        
        <li><a href="#">杯子介绍</a>
        
              <!-- sub menu -->
              <ol>     
                <li><a href="magazine.html">材质</a></li>
                <li><a href="blog.html">大小</a></li>
                <li><a href="full-width.html">属性</a></li>
                <li><a href="columns.html">配套</a></li>
              </ol>
        </li><!-- end sub menu -->
        
        <li><a href="elements.html">基础</a></li>
              
        <li><a href="/lcvip/index.php/Home/Index/one">杯子类型 </a>
        
              <!-- sub menu -->
              <ol>     
                <li><a href="/lcvip/index.php/Home/Index/one">烤瓷杯</a></li>
                <li><a href="/lcvip/index.php/Home/Index/two">玻璃杯</a></li>
                <li><a href="/lcvip/index.php/Home/Index/three">创意杯</a></li>
                <li><a href="/lcvip/index.php/Home/Index/four">情侣杯</a></li>
                <li class="last"><a href="/lcvip/index.php/Home/Index/five">其它</a></li>
              </ol>
        </li><!-- end sub menu -->
        
               <li><a href="/lcvip/index.php/Home/Index/contact">联系方式</a></li>
               <font style="font-size:14px;" color="#FF0000" >哟那是肯定</font>
               <input type="text" name="">
               
    </ol>
     
       </div> 
      
     <!-- END header -->
     

    <?php echo ($content); ?>


    <div id="footer">

    <!-- First Column -->

    <div class="one-fourth">
        <h3>友情链接 </h3>
            <ul class="footer_links">
                <li><a href="#">Lorem Ipsum</a></li>
                <li><a href="#">Ellem Ciet</a></li>
                <li><a href="#">Currivitas</a></li>
                <li><a href="#">Salim Aritu</a></li>
            </ul>
    </div>
    
    <!-- Second Column -->
    
    <div class="one-fourth">
        <h3>价钱</h3>
            <ul class="footer_links">
                <li><a href="#">Lorem Ipsum</a></li>
                <li><a href="#">Ellem Ciet</a></li>
                <li><a href="#">Currivitas</a></li>
                <li><a href="#">Salim Aritu</a></li>
            </ul>
    </div>
    
    <!-- Third Column -->
    
    <div class="one-fourth">
        <h3>信息</h3>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet enim id dui tincidunt vestibulum rhoncus a felis.

    </div>
    
    <!-- Fourth Column -->
    
    <div class="one-fourth last">
        <h3>社交</h3>
            <img src="/lcvip/Public/homecss/img/icon_fb.png" alt="Facebook">
            <img src="/lcvip/Public/homecss/img/icon_twitter.png" alt="Facebook">
            <img src="/lcvip/Public/homecss/img/icon_in.png" alt="Facebook">
    </div>

    <div style="clear:both"></div>
    
    </div> <!-- END footer -->

</body>
</html>