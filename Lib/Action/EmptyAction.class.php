<?php
    class EmptyAction extends Action{
		public function _empty(){
			$this->redirect('Index/index', array(), 5, '5秒后回到首页');
		}
    }