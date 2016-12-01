<?php
/**
 * Created by PhpStorm.
 * User: Ning
 * Date: 2016/11/5
 * Time: 16:24
 */
namespace Admin\Model;
use Think\Model;
class AdminuserModel extends Model{
    /*提交注册数据验证*/
    public $_validate = array(
        array('name','2,12','输入2到12位的用户名',0,'length',1),
        array('name','','用户已存在',0,'unique',1),
        array('pwd','6,16','请输入6到16位的密码',1,'length'),
        array('confirmpwd','pwd','2次输入的密码不一致',1,'confirm')
    );

}