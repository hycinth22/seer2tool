<?php
function getPetName($id)
    {
        $monster = M('monster');
        $name = $monster->where("`ID`='$id'")->limit(1)->getField('DefName');
        return $name;
    }
function getTypeName($id)
    {
		switch ($id)
		{
			case 1: return '普通';
			case 2: return '草';
			case 3: return '水';
			case 4: return '火';
			case 5: return '风';
			case 6: return '虫';
			case 7: return '飞行';
			case 8: return '电';
			case 9: return '地面';
			case 10: return '冰';
			case 11: return '超能';
			case 12: return '光';
			case 13: return '暗影';
			case 14: return '战斗';
			case 15: return '龙';
			case 16: return '沙漠';
			case 17: return '神秘';
			case 18: return '特质';
			case 19: return '基佬王';
			case 20: return '上古';
			case 21: return '圣灵';
			default: return '未知';
		}
		return 'undefined';;
    }
function getSkillCategoryName($id)
    {
		switch ($id)
		{
			case 1: return '物理';
			case 2: return '特殊';
			case 4: return '属性';
			case 80: return '必杀';
			default: return '隐藏必杀';
		}
		return 'undefined';;
    }
function getGrowTypeName($id)
    {
        if (!is_numeric($id) or $id<=0 or $id>26 )
            return 'undefined';
        $array = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
        return strtoupper($array[$id-1]);
    }
function getSkillInfo($id)
    {
        $move = M('move');
        $info = $move->where("`ID`='$id'")->limit(1)->select();
        return $info[0];
    }
function getNaviBar(){
			return '<p class="bar" style="font-size"><a href="__ROOT__/">首页</a>-><a href="__URL__/">功能页</a>-><a href="__SELF__">当前页</a></p>';
		}
function calcExtreme($base){
			$ev = 255;
			$lv = 100;
			$chara = 1.1;
			$natural = 120;
			return round( ($base*2 + $natural) * $lv/100 + $lv + 10 + $ev/4, 0);
		}
?>