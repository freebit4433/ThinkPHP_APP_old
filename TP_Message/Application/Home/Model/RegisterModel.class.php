<?php
namespace Home\Model;
use Think\Model;

class RegisterModel extends Model{
	protected $tableName = 'table2user';
	protected $_validate = array(
		array('username','require','请输入用户名！'),
		
	);
}

?>