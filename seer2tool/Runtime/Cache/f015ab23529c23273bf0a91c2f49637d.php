<?php if (!defined('THINK_PATH')) exit(); function getPetName($id) { $monster = M('monster'); $name = $monster->where("`ID`='$id'")->limit(1)->getField('DefName'); return $name; } function getTypeName($id) { $monster = M('monster'); $name = $monster->where("`ID`='$id'")->limit(1)->getField('DefName'); return $name; } ?>
<html>
 <head>
   <title><?php echo ($title); ?></title>
   <style type="text/css">
   * { padding: 0; margin: 0; }
   div{ padding: 4px 48px;} 
   body{ background: #fff; font-family: microsoft yahei; color: #333;} 
   h1 { font-size: 100px; font-weight: normal; margin-bottom: 12px; }
   h2 { font-size: 56px; font-weight: normal; margin-bottom: 12px; }
   p{ line-height: 1.8em; font-size: 20px }
   </style>
 </head>
 <body>
    <script>
    function lookup(by,value,ai)
    {
        var url = '__ACTION__/'+ by +'/' + value;
        if (ai)
            url = url + '?ai=1';
        window.location = url ;
    }
    </script>
    <div style="padding: 24px 48px;">
    <h1>:)</h1>
    <h2><b><?php echo ($title); ?> </b></h2>
    <input type="text" id="find" name="find" value="<?php echo ($find); ?>"/>
    <input type="submit" value="通过ID查找" onclick="lookup('id',document.getElementById('find').value,document.getElementById('ai').checked); " />
    <input type="submit" value="通过名称查找" onclick="lookup('name',document.getElementById('find').value,document.getElementById('ai').checked); " />
    <input type="checkbox" id="ai" name="ai" value="1" <?php if(($ai) == "1"): ?>checked<?php endif; ?> />包含BOSS AI
    <?php if(is_array($monsters)): $i = 0; $__LIST__ = $monsters;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><h3>逗比 <?php echo ($data["DefName"]); ?> 的资料：</h2>
    <h4><?php echo ($data["intro"]); ?> <?php if(($data["isClose"] == 1)): ?>已绝版<?php endif; ?></h3>
    <ul>
<!--    <li>NumbersID: <?php echo ($data["NumbersID"]); ?> (不同种类精灵不可重复)</li>  -->
    <li>ID: <?php echo ($data["ID"]); ?> <!-- (精灵的形态ID，不同形态精灵ID不可重复) --></li>
    <li>属性: <?php switch($data["Type"]): case "1": ?>普通<?php break;?>
 <?php case "2": ?>草<?php break;?>
 <?php case "3": ?>水<?php break;?>
 <?php case "4": ?>火<?php break;?>
 <?php case "5": ?>风<?php break;?>
 <?php case "6": ?>虫<?php break;?>
 <?php case "7": ?>飞行<?php break;?>
 <?php case "8": ?>电<?php break;?>
 <?php case "9": ?>地面<?php break;?>
 <?php case "10": ?>冰<?php break;?>
 <?php case "11": ?>超能<?php break;?>
 <?php case "12": ?>光<?php break;?>
 <?php case "13": ?>暗影<?php break;?>
 <?php case "14": ?>战斗<?php break;?>
 <?php case "15": ?>龙<?php break;?>
 <?php case "16": ?>沙漠<?php break;?>
 <?php case "17": ?>神秘<?php break;?>
 <?php case "18": ?>特质<?php break;?>
 <?php case "19": ?>基佬王<?php break;?>
 <?php case "20": ?>上古<?php break;?>
 <?php case "21": ?>圣灵<?php break;?>
 <?php default: ?>未知<?php echo ($data["Type"]); endswitch;?></li>
    <?php if(($data["EvolvesFrom"]) != "0"): ?><li>上一形态:  <a href="__ACTION__/id/<?php echo ($data["EvolvesFrom"]); ?>"><?php echo ($data["EvolvesFrom"]); ?>.<?php echo (getpetname($data['EvolvesFrom'])); ?></a></li><?php endif; ?>
    <?php if(($data["EvolvesTo"]) != "0"): ?><li>下一形态:  <a href="__ACTION__/id/<?php echo ($data["EvolvesTo"]); ?>"><?php echo ($data["EvolvesTo"]); ?>.<?php echo (getpetname($data['EvolvesTo'])); ?></a></li><?php endif; ?>
    <li>特性: <?php echo ($data["Features"]); ?> </li><!--<?php echo ($data["FeaturesID"]); ?>-->
    <li>成长类型: <?php switch($data["GrowthType"]): case "1": ?>A<?php break;?>
 <?php case "2": ?>B<?php break;?>
 <?php case "3": ?>C<?php break;?>
 <?php case "4": ?>D<?php break;?>
 <?php case "5": ?>E<?php break;?>
 <?php default: ?>未知<?php echo ($data["Type"]); endswitch;?>类</li>
    <li>星级: <?php echo str_repeat('★',$data['StarLv']); ?>
    <li>基础值：
    体力<?php echo ($data["HP"]); ?> 物攻<?php echo ($data["Atk"]); ?> 物防<?php echo ($data["Def"]); ?> 特攻<?php echo ($data["SpAtk"]); ?> 特防<?php echo ($data["SpDef"]); ?> 速度<?php echo ($data["Spd"]); ?>
    </li>
    <li>极限值：
    体力<?php echo ($data['HP']*2+294); ?> 物攻<?php echo ($data['Atk']*2+294); ?> 物防<?php echo ($data['Def']*2+294); ?> 特攻<?php echo ($data['SpAtk']*2+294); ?> 特防<?php echo ($data['SpDef']*2+294); ?> 速度<?php echo ($data['Spd']*2+294); ?>
    </li>
    <?php if(($data["Foundin"]) != ""): ?><li>获取方式：<?php echo ($data["Foundin"]); ?></li><?php endif; ?>
    <?php if(($data["chara"]) != ""): ?><li>推荐性格：<?php echo ($data["chara"]); ?></li><?php endif; ?>
    <?php if(($data["recommendQuality"]) != ""): ?><li>推荐加点：<?php echo ($data["recommendQuality"]); ?></li><?php endif; ?>
    <?php if(($data["recommendSkill"]) != ""): ?><li>推荐技能：<?php echo ($data["recommendSkill"]); ?></li><?php endif; ?>
    <li>禁止放生: <?php echo ($data['FreeForbidden']?'是':'否'); ?></if></li>
    <li>可否骑乘: <?php echo ($data['ride']?'是':'否'); ?></li>
<!--    < li>经验值系数: <?php echo ($data["YieldingExp"]); ?> 学习力值: <?php echo ($data["YieldingEV"]); ?></li> -->
    <li>捕获成功概率: <?php echo ($data["CatchRate"]); ?>%</li>
    <li>身高: <?php echo str_replace(' ','~',$data['Height']); ?> cm 体重: <?php echo str_replace(' ','~',$data['Weight']); ?> kg</li>
    <li>雌雄比例: <?php echo str_replace(' ',':',$data['Gender']); ?></li>
    <?php if(($data["use_num"]) > "0"): ?><li>同时携带限制:  <?php echo ($data["use_num"]); ?>只</li><?php endif; ?>
    <li>技能表：
    <table border="1">
        <thead><!--<th>ID</th>--><th>名称</th><th>类别</th><th>属性</th><th>威力</th><th>命中率</th><th>怒气</th><th>描述</th></thead>
        <tbody>
           <?php if(is_array($data["move"])): $i = 0; $__LIST__ = $data["move"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$move): $mod = ($i % 2 );++$i;?><tr><!--<th><?php echo ($move["ID"]); ?></th>--><th><?php echo ($move["Category"]); ?></th><th><?php echo ($move["Type"]); ?></th><th><?php echo ($move["Power"]); ?></th><th><?php echo ($move["Accuracy"]); ?>%</th><th><?php echo ($move["Anger"]); ?></th><th><?php echo ($move["Tips"]); ?></th></tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </thead>
    </table>
    </li>
    </ul>
    <hr /><?php endforeach; endif; else: echo "" ;endif; ?>
    <p><a href="__URL__/">返回首页</a></p>
    </div>
 
 </body>
</html>