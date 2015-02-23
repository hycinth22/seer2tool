<?php
class HidemoveAction extends Action
{
    public function _empty()
    {
		$this->title = '隐藏技能查询';
		$this->display('default:nocomplete');
    }
}