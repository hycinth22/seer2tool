<?php
class MonsterinfoAction extends Action {
    public function index(){
        $this->title = '精灵信息查询';
        $Data = M('monster');
        $this->monsters= $Data->field('ID,DefName,StarLv,isNew')->where('isNew = 1 OR ID <= 1000')->order('isNew desc,ID desc')->limit(30)->select();
        $this->display();
    }
    public function data($id=NULL,$name=NULL,$auto=NULL){
        $this->title = '精灵信息查询';
        $monster_info = M('monster_info');
        $this->ai = I('param.ai');
		if($auto)
		{
			if( is_numeric($auto) )
            {
                $this->redirect('Monsterinfo/data', array('id' =>$auto),0);
			}else{
				$this->redirect('Monsterinfo/data', array('name' =>$auto),0);
            }
		}
        if ($id){
                $this->find = "$id";
                $this->monsters = $monster_info->where("`ID`='$id'")->select();
				//$moves = json_decode($this->monsters[0]['move']);
				
        }else if($name){
                $this->find = "$name";
                $this->monsters = $monster_info->where("`DefName` LIKE '%$name%'".($this->ai?"":" AND (`ID`<='1000' OR `ID`='1100' OR `ID`='1101')"))->select();
        }else{
			$this->redirect('Monsterinfo/index', array(), 5, '未定义的操作');
		}
        //$monster_info->where("ID=$id")->limit(1)->select();
        $this->display();
    }
}