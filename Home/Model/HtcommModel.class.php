<?php 
namespace Home\Model;
use Think\Model;

class HtcommModel extends Model{

	protected $_validate=array(
		array('comm','1,999','不能空提交',1,'length'),
		);
	
} 



 ?>