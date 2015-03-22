<?php
class PetCalcAction extends Action {
	public function _empty(){
		$this->redirect('Index/index', array(), 5, '5秒后回到首页');
	}
    public function index(){
        $this->title = '约瑟传说精灵计算器';
		$this->naviBar = getNaviBar();
        $this->display();
    }
}