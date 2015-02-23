<?php
class MonsterinfoAction extends Action {
    public function index(){
        $this->title = '精灵信息查询';
        $Data = M('monster');
        $this->monsters= $Data->field('ID,DefName,StarLv,isNew')->where('isNew = 1 OR ID < 1000')->order('isNew desc,ID desc')->limit(30)->select();
        $this->display();
    }
    public function show($id=NULL,$name=NULL){
        if (!$id and !$name){
            $this->redirect('Monsterinfo/index', array(), 5, '未定义的操作');
            return ;
        }
        $this->title = '精灵信息查询';
        $monster_info = M('monster_info');
        $this->ai = $this->_get('ai');
        if ($id){
                $this->find = "$id";
                $this->monsters = $monster_info->where("`ID`='$id'".($this->ai?"":" AND `ID`<'1000'"))->select();
				//$moves = json_decode($this->monsters[0]['move']);
				
        }else if($name){
                $this->find = "$name";
                $this->monsters = $monster_info->where("`DefName` LIKE '%$name%'".($this->ai?"":" AND `ID`<'1000'"))->select();
        }
        
        //$monster_info->where("ID=$id")->limit(1)->select();
        $this->display();
    }
}