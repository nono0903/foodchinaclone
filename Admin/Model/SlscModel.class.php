<?php 
namespace Admin\Model;
use Think\Model;
class SlscModel extends Model{
	protected $_validate = array(
		array('name','1,20','不能空提交',1,'length'),
	);

}		
