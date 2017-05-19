<?php
return array(
   'TMPL_TEMPLATE_SUFFIX'  =>  '.htm',     // 默认模板文件后缀
   'TMPL_PARSE_STRING'  =>array( 
   '__PUBLIC__' => '/Common', // 更改默认的/Public 替换规则     
   '__JS__'     => '/Public/JS/', // 增加新的JS类库路径替换规则     
   '__UPLOAD__' => '/Uploads', // 增加新的上传路径替换规则
   '__ASSETS__' => __ROOT__.'/Public/assets/',
    )
);