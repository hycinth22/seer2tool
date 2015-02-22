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
    <form action="__URL__/show/id" method="post">
    通过ID查找：<input type="text" id="findID" name="findID" value=""/>
    <input type="submit" value="GO" />
    </form>
   <form action="__URL__/show/name" method="post">
    通过名称查找：<input type="text" id="findName" name="findName" value=""/>
    <input type="submit" value="GO" />
    </form>
    <p>近期精灵：</p>
    <ul>
        <?php if(is_array($mosters)): $i = 0; $__LIST__ = $mosters;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($i % 2 );++$i;?><li><a href="__URL__/show/id/<?php echo ($m["ID"]); ?>/"><?php echo ($m["DefName"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    </div>
 </body>
</html>