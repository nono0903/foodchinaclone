<?php 
namespace Home\Model;
use Think\Model\RelationModel;

class HuatiModel extends RelationModel{

	protected $_validate = array(
		array('title','3,20','话题不能为空哦',1,'length'),
		array('message','1,9999','说点什么吧',1,'length'),
		);

	protected $_link = array(
		'htcomm'=>self::HAS_MANY,
		);

 }
