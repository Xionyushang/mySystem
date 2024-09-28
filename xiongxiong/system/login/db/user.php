<?php
class user {
	public $mysql;
	private $table = 'user';
	private $id = 'id';

	function __construct($mysql) {
		if ($mysql != '') {
			$this->mysql = $mysql;
		}
	}

	function read($array) {
		extract($array);

		$sql = "SELECT * FROM {$this->table}";

		$sql .= empty(${$this->id}) ? " WHERE 1=1" : " {$this->id}=\${$this->id}";
		$sql .= " AND email='{$email}'";
		$sql .= " AND user_pwd='{$user_pwd}';";
		return $this->mysql->run($sql);
	}

	function create($array) { //新增
		extract($array);
		$sql = "INSERT INTO {$this->table} SET 
					user_name=\"{$user_name}\",
					user_pwd=\"{$user_pwd}\",
					email=\"{$email}\",
					gender=\"{$gender}\",
					creat_date=\"{$creat_date}\"
					;";
		return $this->mysql->run($sql);
	}
}
