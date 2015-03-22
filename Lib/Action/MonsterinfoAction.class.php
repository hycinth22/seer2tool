<?php
class MonsterinfoAction extends Action {
    public function index(){
        $this->title = '精灵信息查询';
        $Data = M('monster');
        $this->monsters= $Data->field('ID,DefName,StarLv,isNew')->where('isNew = 1 OR ID < 1000')->order('isNew desc,ID desc')->limit(30)->select();
        $this->display();
    }
    public function data($id=NULL,$name=NULL,$star=NULL,$auto=NULL){
        $this->title = '精灵信息查询';
        //$monster_info = M('monster_info');
        $monster_info = D('monster_info');
        $emblem2 = M('emblem2');
        $this->ai = I('param.ai');
		if($auto)
		{
			if( is_numeric($auto) )
            {
                $this->redirect('Monsterinfo/data', array('id' =>$auto, 'ai'=>I('param.ai') ),0);
			}else{
				$this->redirect('Monsterinfo/data', array('name' =>$auto, 'ai'=>I('param.ai')),0);
            }
		}
        if ($id or $name){
                $this->lastfind = $id?$id:$name;
                $condition = $id?"`ID`='{$id}'":"`DefName` LIKE '%{$name}%' AND ".($this->getAICondSQL());
                $this->monsters = $monster_info->Distinct(true)->alias('a')->where($condition)->join('JOIN seer2tool_emblem b ON a.NumbersID=b.NumbersID')->select();
				//$moves = json_decode($this->monsters[0]['move']);
                
        }else if($star){
                $this->star = $star;
                $this->monsters = $monster_info->where( "`StarLv`='{$star}' AND `EvolvesTo`='0' AND ".$this->getAICondSQL() )->order('ID desc')->select();
                $this->display('star');
                
                return;
        }else{
			$this->redirect('Monsterinfo/index', array(), 5, '未定义的操作');
		}
        //$monster_info->where("ID=$id")->limit(1)->select();
        //var_dump($this->monsters);
        $this->display();
    }
    protected function getAICondSQL(){
    //set this->ai before use this function, maybe you can get it from URL params
        if ($this->ai){
            $sql = "TRUE";
        }else{
            $sql = "( (`ID`<='1000' AND `ID`<>'500') OR `ID`='1100' OR `ID`='1101')";
        }
        return $sql;
    }
}