<?php 
namespace Admin\Model;
use Think\Model;

class ReasonModel extends Model{
	protected $_validate = array(
			array('txt','require','删除原因不能为空！'),
			array('txt','10,100','请认真填写！',1,'length',1)
		);
}
 ?>
