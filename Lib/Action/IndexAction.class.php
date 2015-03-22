<?php
class IndexAction extends Action {
	public function _empty(){
		$this->redirect('Index/index', array(), 5, '5秒后回到首页');
	}
    public function index(){
        //$functions = M('functions'); // 实例化Data数据模型
        //$this->functions = $functions->select();
        $this->title = '约瑟传说大全';
		$this->naviBar = getNaviBar();
        $this->functions = array(
            array('url'=>U('/Monsterinfo/Index'), 'name'=>'精灵信息查询' ,'enabled'=> true ),
            array('url'=>U('/PetCalc/index'), 'name'=>'精灵计算器' ,'enabled'=> false),
            array('url'=>U('/mapmoster/index'), 'name'=>'地图野怪查询' ,'enabled'=> false),
            array('url'=>U('/question/index'), 'name'=>'游戏问答查询' ,'enabled'=> false),
        );

        $this->display();
    }
}