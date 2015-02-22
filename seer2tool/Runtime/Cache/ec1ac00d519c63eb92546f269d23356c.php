<?php if (!defined('THINK_PATH')) exit();?><html>
 <head>
   <title><?php echo ($title); ?></title>
   <style type="text/css">
   * { padding: 0; margin: 0; }
   div{ padding: 4px 48px;} 
   body{ background: #fff; font-family: "微软雅黑"; color: #333;} 
   h1 { font-size: 100px; font-weight: normal; margin-bottom: 12px; }
   p{ line-height: 1.8em; font-size: 36px }
   </style>
 </head>
 <body>
    <div style="padding: 24px 48px;">
    <h1>:)</h1>
    <p>欢迎使用 <b><?php echo ($title); ?></b>！</p>
    <ul>
        <?php if(is_array($functions)): $i = 0; $__LIST__ = $functions;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$function): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($function["url"]); ?>/"><?php echo ($function["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    </div>
 </body>
</html>