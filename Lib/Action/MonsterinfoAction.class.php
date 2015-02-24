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
        $monster_info = M('monster_info');
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
        if ($id){
                $this->lastfind = $id;
                $this->monsters = $monster_info->where("`ID`='{$id}'")->select();
				//$moves = json_decode($this->monsters[0]['move']);
				
        }else if($name){
                $this->lastfind = $name;
                $this->monsters = $monster_info->where("`DefName` LIKE '%{$name}%'".($this->ai?"":" AND (`ID`<='1000' OR `ID`='1100' OR `ID`='1101')"))->select();
        }else if($star){
                $this->star = $star;
                $this->monsters = $monster_info->where("`StarLv` = '{$star}' AND `EvolvesTo`='0'".($this->ai?"":" AND (`ID`<='1000' OR `ID`='1100' OR `ID`='1101')"))->order('ID desc')->select();
                $this->display('star');
                return;
        }else{
			$this->redirect('Monsterinfo/index', array(), 5, '未定义的操作');
		}
        //$monster_info->where("ID=$id")->limit(1)->select();
        $this->display();
    }
}