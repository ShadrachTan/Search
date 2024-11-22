<?php  

require_once 'dbConfig.php';

function getAllUsers($pdo) {
	$sql = "SELECT * FROM search_users_data 
			ORDER BY first_name ASC";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getUserByID($pdo, $id) {
	$sql = "SELECT * from search_users_data WHERE id = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$id]);

	if ($executeQuery) {
		return $stmt->fetch();
	}
}

function searchForAUser($pdo, $searchQuery) {
	
	$sql = "SELECT * FROM search_users_data WHERE 
			CONCAT(first_name,last_name,email,gender,
				address,nationality,date_added) 
			LIKE ?";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute(["%".$searchQuery."%"]);
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}



function insertNewUser($pdo, $first_name, $last_name, $email, 
	$gender, $address, $nationality,) {

	$sql = "INSERT INTO search_users_data 
			(
				first_name,
				last_name,
				email,
				gender,
				address,
				nationality
			)
			VALUES (?,?,?,?,?,?)
			";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([
		$first_name, $last_name, $email, 
		$gender, $address,
		$nationality,
	]);

	if ($executeQuery) {
		return true;
	}

}

function editUser($pdo, $first_name, $last_name, $email, $gender, 
    $address, $nationality, $id) {

    $sql = "UPDATE search_users_data
                SET first_name = ?,
                    last_name = ?,
                    email = ?,
                    gender = ?,
                    address = ?,
                    nationality = ?
                WHERE id = ?";

    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute([
        $first_name, $last_name, $email, $gender, 
        $address, $nationality, $id
    ]);

    if ($executeQuery) {
        return true;
    }
}


function deleteUser($pdo, $id) {
	$sql = "DELETE FROM search_users_data 
			WHERE id = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$id]);

	if ($executeQuery) {
		return true;
	}
}




?>