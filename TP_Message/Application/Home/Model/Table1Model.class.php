<?php
namespace Home\Model;
//use Think\Model;
class Table1Model extends Model{
	protected $_validate = array(
		array('webpage','url','url error')
	);

	protected $_auto = array(
		array('date','time',1,'function')
	);
}









?>