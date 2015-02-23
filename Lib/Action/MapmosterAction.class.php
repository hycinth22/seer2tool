<?php
class MapmosterAction extends Action {
    public function index(){
        //$Data = M('mapmoster');
        //$this->data = $Data->select();
        $this->title = '地图野怪查询';
        $this->display();
    }
}