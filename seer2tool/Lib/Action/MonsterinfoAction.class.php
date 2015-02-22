<?php
class MonsterinfoAction extends Action {
    public function index(){
        $this->title = '逗比信息查询';
        $Data = M('monster');
        $this->monsters= $Data->where('ID<1000')->order('ID desc')->limit(30)->select(); 
        $this->display();
    }
    public function show($id=NULL,$name=NULL){
        if (!$id and !$name){
            header('Location: '.U('Monsterinfo/index'));
            return ;
        }
        $this->title = '逗比信息查询';
        $monster_info = M('monster_info');
        $this->ai = $this->_get('ai');
        if ($id){
                $this->find = "$id";
                $this->monsters = $monster_info->where("`ID`='$id'".($this->ai?"":" AND `ID`<'1000'"))->select();
        }else if($name){
                $this->find = "$name";
                $this->monsters = $monster_info->where("`DefName` LIKE '%$name%'".($this->ai?"":" AND `ID`<'1000'"))->select();
        }
        
        //$monster_info->where("ID=$id")->limit(1)->select();
        $this->display();
    }
}