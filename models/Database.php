<?php

namespace Models;
//classe mère de tous les models



abstract class Database
{
	protected $bdd;
	
	public function __construct()
	{
		$this -> bdd = new \PDO('mysql:host=db.3wa.io;dbname=corentinlebescond_freshly;charset=utf8','corentinlebescond','b7f6c07fff22f15daabcfc0380c9645a');
	}
	
	public function findAll(string $req,array $params = []):array
	{
		$query = $this -> bdd -> prepare($req);
		$query -> execute($params);
		return $query -> fetchAll(\PDO::FETCH_ASSOC);
	}
	
	
	public function findOne(string $req,array $params = []):?array
	{
		$query = $this -> bdd -> prepare($req);
		$query -> execute($params);
		$result = $query -> fetch(\PDO::FETCH_ASSOC);
			if($result==false){
				return null;
			}
			else {
				return $result;
			}
	}
	
}