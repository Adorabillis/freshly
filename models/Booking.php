<?php

namespace Models;

class Booking extends Database
{
    
public function AddBooking($number, $id_user, $date, $hour, $statut, $comment)
	{
		//requêtes sql qui permet l'ajout de la résa
		$this -> query("INSERT INTO booking(number, id_user, date, hour, statut, comment) 
		VALUES (?,?,?,?,?,?)",[$number, $id_user, $date, $hour, $statut, $comment]);
	}

public function getAllBookingsByUser($id):array
	{
		return $this -> findAll("
		SELECT number, id_user, date, hour, statut, comment 
		FROM booking
		WHERE id_user = ? ",[$id]);
		
	}
	
}