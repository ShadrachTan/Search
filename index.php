<?php 
require_once 'core/dbConfig.php'; 
require_once 'core/models.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Soldier Application</title>
	<link rel="stylesheet" href="styles.css">
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" 
	        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" 
	        crossorigin="anonymous"></script>
</head>
<body>

	<?php if (isset($_SESSION['message'])) { ?>
		<h1 style="color: green; text-align: center; background-color: ghostwhite; border-style: solid;">	
			<?php echo $_SESSION['message']; ?>
		</h1>
	<?php } unset($_SESSION['message']); ?>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="GET">
		<input type="text" name="searchInput" placeholder="Search here" value="<?php echo isset($_GET['searchInput']) ? htmlspecialchars($_GET['searchInput']) : ''; ?>" required>
		<button type="submit" name="searchBtn">Search</button>
	</form>

	<p><a href="index.php">Clear Search Query</a></p>
	<p><a href="insert.php">Insert New User</a></p>

	<table style="width:100%; margin-top: 20px; border-collapse: collapse;">
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Gender</th>
			<th>Address</th>
			<th>Nationality</th>
			<th>Date Added</th> <!-- New Column -->
			<th>Action</th>
		</tr>

		<?php 
		if (isset($_GET['searchBtn'])) { 
			$searchResults = searchForAUser($pdo, $_GET['searchInput']);
			if (count($searchResults) > 0) {
				foreach ($searchResults as $row) { ?>
					<tr>
						<td><?php echo htmlspecialchars($row['first_name']); ?></td>
						<td><?php echo htmlspecialchars($row['last_name']); ?></td>
						<td><?php echo htmlspecialchars($row['email']); ?></td>
						<td><?php echo htmlspecialchars($row['gender']); ?></td>
						<td><?php echo htmlspecialchars($row['address']); ?></td>
						<td><?php echo htmlspecialchars($row['nationality']); ?></td>
						<td><?php echo htmlspecialchars($row['date_added']); ?></td> <!-- Displaying Date Added -->
						<td>
							<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
							<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
						</td>
					</tr>
				<?php }
			} else {
				echo "<tr><td colspan='8'>No results found for '" . htmlspecialchars($_GET['searchInput']) . "'</td></tr>";
			}
		} else { 
			$allUsers = getAllUsers($pdo);
			foreach ($allUsers as $row) { ?>
				<tr>
					<td><?php echo htmlspecialchars($row['first_name']); ?></td>
					<td><?php echo htmlspecialchars($row['last_name']); ?></td>
					<td><?php echo htmlspecialchars($row['email']); ?></td>
					<td><?php echo htmlspecialchars($row['gender']); ?></td>
					<td><?php echo htmlspecialchars($row['address']); ?></td>
					<td><?php echo htmlspecialchars($row['nationality']); ?></td>
					<td><?php echo htmlspecialchars($row['date_added']); ?></td> <!-- Displaying Date Added -->
					<td>
						<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
						<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
					</td>
				</tr>
			<?php } 
		} ?>
		
	</table>
</body>
</html>
