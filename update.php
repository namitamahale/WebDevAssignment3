<?php
	include('conn.php');
	$id=$_GET['id'];
 
	$NameOfBook=$_POST['NameOfBook'];
	$BookAuthorName=$_POST['BookAuthorName'];
        $DescriptionOfBook=$_POST['DescriptionOfBook'];
        $NumberOfPages=$_POST['NumberOfPages'];
        $EdditionOfBook=$_POST['EdditionOfBook'];
        $BindingOfBook=$_POST['BindingOfBook'];
        $CoverOfBook=$_POST['CoverOfBook'];
        $Category=$_POST['Category'];
        $SuitableFor=$_POST['SuitableFor'];
        $ActualPrice=$_POST['ActualPrice'];
        $SellingPrice=$_POST['SellingPrice'];
        $SName=$_POST['SName'];
        $SEId=$_POST['SEId'];
        $SPhoNo=$_POST['SPhoNo'];
        $SAdd=$_POST['SAdd'];
        $BookStore=$_POST['BookStore'];
       
//$filename = $BookImage['name'];//
//$fileerror = $BookImage['error'];//
//$filetmp = $BookImage['tmp_name'];//
//$fileext = explode('.',$filename);//
//$filecheck = strtolower(end($fileext));//
//$fileextstored = array('png', 'jpg', 'jpeg');//

//if(in_array($filecheck,$fileextstored)){//
//$destinationfile = 'upload/' .$filename;//
//move_uploaded_file($filetmp,$destinationfile);//


	mysqli_query($conn,"update `book` set NameOfBook='$NameOfBook', BookAuthorName='$BookAuthorName', DescriptionOfBook='$DescriptionOfBook', NumberOfPages='$NumberOfPages', EdditionOfBook='$EdditionOfBook', BindingOfBook='$BindingOfBook', CoverOfBook='$CoverOfBook', Category='$Category', SuitableFor='$SuitableFor', ActualPrice='$ActualPrice', SellingPrice='$SellingPrice', SName='$SName', SEId='$SEId', SPhoNo='$SPhoNo', SAdd='$SAdd', BookStore='$BookStore' where id='$id'");
	header('location:Sell Yor book form.php');
?>