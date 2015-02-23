<?php
class IndexAction extends Action {
    public function index(){
        //$Data = M('Data'); // 实例化Data数据模型
        //$this->data = $Data->select();
        $this->title = '约瑟传说大全';
        $this->functions = array(
            array('url'=>U('/Monsterinfo/Index'), 'name'=>'精灵信息查询'),
            //array('url'=>U('/hide_move/index'), 'name'=>'隐藏技能查询'),
            //array('url'=>U('/mapmoster/index'), 'name'=>'地图野怪查询'),
           //array('url'=>U('/question/index'), 'name'=>'游戏问答查询'),
        );

        $this->display();
    }
    public function select(){
        $Data = M('monster'); // 实例化Data数据模型
        $this->data = $Data->select();
        var_export($this->data);
        $this->name = '约瑟传说大全';
        $this->display();
    }
}