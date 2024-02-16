<?php
    $Full_Name = $_POST['Full_Name'];
    $Date_of_Birth = $_POST['Date_of_Birth'];
    $Email = $_POST['Email'];
    $Mobile_Number = $_POST['Mobile_Number'];
    $Gender = $_POST['Gender'];
    $Occupation = $_POST['Occupation'];
    $ID_Type = $_POST['ID_Type'];
    $ID_Number = $_POST['ID_Number'];
    $Issued_Authority = $_POST['Issued_Authority'];
    $Issued_State = $_POST['Issued_State'];
    $Issued_Date = $_POST['Issued_Date'];
    $Expiry_Date = $_POST['Expiry_Date'];
    $Address_Type = $_POST['Address_Type'];
    $Nationality = $_POST['Nationality'];
    $State = $_POST['State'];
    $District = $_POST['District'];
    $Block_Number = $_POST['Block_Number'];
    $Ward_Number = $_POST['Ward_Number'];
    $Father_Name = $_POST['Father_Name'];
    $Mother_Name = $_POST['Mother_Name'];
    $Grandfather = $_POST['Grandfather'];
    $Spouse_Name = $_POST['Spouse_Name'];
    $Father_in_Law = $_POST['Father_in_Law'];
    $Mother_in_Law = $_POST['Mother_in_Law'];

    //Database Connection

    $conn = new mysqli('localhost','root','','webathon2');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(Full_Name, Date_of_Birth, Email, Mobile_Number, Gender, Occupation, ID_Type, ID_Number, Issued_Authority, Issued_State, Issued_Date, Expiry_Date, Address_Type, Nationality, State, District, Block_Number, Ward_Number, Father_Name, Mother_Name, Grandfather, Spouse_Name, Father_in_Law, Mother_in_Law ) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssisssissssssssiissssss", $Full_Name, $Date_of_Birth, $Email, $Mobile_Number, $Gender, $Occupation, $ID_Type, $ID_Number, $Issued_Authority, $Issued_State, $Issued_Date, $Expiry_Date, $Address_Type, $Nationality, $State, $District, $Block_Number, $Ward_Number, $Father_Name, $Mother_Name, $Grandfather, $Spouse_Name, $Father_in_Law, $Mother_in_Law );
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}

?>
