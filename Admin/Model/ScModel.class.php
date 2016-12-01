<?php 
namespace Admin\Model;
use Think\Model;
class ScModel extends Model{

	/* 食材提交验证 */
	protected $_validate = array(
		array('s_name','1,20','不能空提交',1,'length'),
		array('s_name','','食材已存在',1,'unique'),
		// array('s_name','/^[\u4e00-\u9fa5]{1,5}$/','请输入中文',1,'regex')
		);


/*	protected $cat = array();

	public function __construct(){
		parent::__construct ();
		$this->cat = $this->select();
	}

	public function getTree($parent_sid = 0,$lev = 0){

		$tree = array();

		foreach ($this->cat as $v) {

			if($v['parent_sid']==$parent_sid){

				$v['lev'] = $lev;

				$tree[] = $v;

				$tree = array_merge($tree,$this->getTree($v['sid'],$lev+1));

			}
		}

		return $tree;

	}*/
}
 ?>