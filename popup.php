<?php
    if(isset($_POST['submit'])){
		$email=$_POST['email'];
		$phone=$_POST['mobile'];
	    $to='livexcellence1@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Prestige Smart City';
		$message="ProjectName :"."Prestige Smart City"."\n"."Email :".$email."\n"."Phone :".$phone."\n";
		$headers="From: ".$email;
		if(mail($to, $subject, $message, $headers)){
			echo "<h1 style=\"text-align:center\">Sent Successfully! Thank you, We will contact you shortly!</h1>";
			
		}
		else{
			echo "Something went wrong!";
		}
	
	}
	
?>