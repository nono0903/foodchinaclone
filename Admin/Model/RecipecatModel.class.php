<?php 
namespace Admin\Model;
use Think\Model;

class RecipecatModel extends Model{
    protected $_validate = array(
            array('c_name','require','菜式分类不能为空',1,'regex',3),
            array('c_name','','该栏目已存在',1,'unique',3)
        
        );
  protected $_auto = array(
        array('c_name','',2,'ignore')
  );

    protected  $cat = array();
    public  function __construct(){
        parent::__construct();
        $this->cat = $this->select();
    }

    public function getTree($parent_cid = 0,$lev=0){
        $tree = array();
        foreach ($this->cat as $v) {
            if ($v['parent_cid']==$parent_cid) {
                $v['lev'] = $lev;
                $tree[] = $v;
                $tree = array_merge($tree,$this->getTree($v['cid'],$lev+1));
            }
        }
        return $tree;
    }


}