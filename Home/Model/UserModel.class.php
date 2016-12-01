<?php

namespace  Home\Model;
use  Think\Model;
class UserModel extends Model{
    protected  $_validate = array (
        array('mobile','11','手机号码不正确，请重新填写',1,'length',3),
        array('mobile','/^0?(13[0-9]|15[012356789]|18[0-9]|17[0-9])[0-9]{8}$/','请重新填写手机号',1,'regex',3),
        array('user_name','1,10','用户名必须为1-10位',1,'length',3),
        array('user_name','','用户名已存在',1,'unique',3),
        array('email','email','邮箱不合法',1,'regex',3),
        array('password','6,12','密码长度为6-12位',1,'length',3),
        array('confirm_password','password','请重新输入',1,'confirm',3)
        );
    //自动填充
    protected $_auto = array (
        array('regtime','time',1,'function'), 
        array('lastlogin','time',3,'function')
    );
}