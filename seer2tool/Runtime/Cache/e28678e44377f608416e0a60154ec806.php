<?php if (!defined('THINK_PATH')) exit();?><html>
 <head>
   <title><?php echo ($title); ?></title>
   <style type="text/css">
   * { padding: 0; margin: 0; }
   div{ padding: 4px 48px;} 
   body{ background: #fff; font-family: microsoft yahei; color: #333;} 
   h1 { font-size: 100px; font-weight: normal; margin-bottom: 12px; }
   p{ line-height: 1.8em; font-size: 36px }
   </style>
 </head>
 <body>
    <div style="padding: 24px 48px;">
    <h1>:)</h1>
    <p>欢迎使用 <b><?php echo ($title); ?></b>！</p>
    <input type="text" id="find" name="find" value=""/>
    <input type="submit" value="通过ID查找" onclick="lookup('id',document.getElementById('find').value,document.getElementById('ai').checked); " />
    <input type="submit" value="通过名称查找" onclick="lookup('name',document.getElementById('find').value,document.getElementById('ai').checked); " />
    <input type="checkbox" id="ai" name="ai" value="1" <?php if(($ai) == "1"): ?>checked<?php endif; ?> />包含BOSS AI
    <p>近期精灵：</p>
    <ul>
        <?php if(is_array($monsters)): $i = 0; $__LIST__ = $monsters;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($i % 2 );++$i;?><li><a href="__URL__/show/id/<?php echo ($m["ID"]); ?>/"><?php echo ($m["DefName"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    </div>
 </body>
</html>