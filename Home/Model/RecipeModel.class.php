<?php
namespace Home\Model;
use Think\Model;

class RecipeModel extends Model{
    protected $_validate = array(
        array('recipe_title','require','菜谱不能为空',1,'regex',3),
        );

    protected $_auto = array(
        array('pubtime','time',1,'function')
        );
}

