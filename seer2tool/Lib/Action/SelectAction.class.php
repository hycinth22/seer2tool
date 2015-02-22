<?php
class IndexAction extends Action {
    public function index(){
        $Data = M('monster'); // 实例化Data数据模型
        $this->data = $Data->select();
        $this->name = '约瑟传说精灵数据库';
        $this->display();
    }
}