<?php
	session_start();

	include('database_connectivity.php');

	/*Register*/
	if (isset($_POST['btn_register'])) 
	{
		$data = array(
			'first_name'		=>	$_POST['first_name'],
			'last_name'			=>	$_POST['last_name'],
			'email_address'		=>	$_POST['email'],
			'password'			=>	$_POST['password'],
			'added_on'			=>	time()
		);
		$query = "
				INSERT INTO users(first_name,last_name,email_address,password,added_on)
			    VALUES ('" . $data['first_name'] . "','" . $data['last_name'] . "','" . $data['email_address'] . "','" . $data['password'] . "','" . $data['added_on'] . "')";
		if ($conn->query($query) === TRUE) 
		{
			$sql = "SELECT * FROM users WHERE email = '".$data['email_address']."'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) 
            {
                while($row = $result->fetch_assoc())
                {
                	$_SESSION['user_id'] = $row['id'];
                	$_SESSION['user_name'] = $row['first_name'].' '.$row['last_name'];
                }
                
            }

			header("Location: index.php");
		} 
		else 
		{
			echo "Error: " . $query . "<br>" . $conn->error;
		}
	}
?>