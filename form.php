
<?php



if(!empty($_POST['submit']))
{
    $f_name=$_POST['first_name'];
	$l_name=$_POST['last_name'];
	$email=$_POST['Email'];
	$studentID=$_POST['studentID'];
	$comment=$_POST['comment'];
	
   
    
    


require("fpdf.php");
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",16);
$pdf->Cell(0,10,"welcome {$f_name}",1,1);
$pdf->Cell(60,10,"Name Mr/Mrs/Miss:",1,0);
$pdf->Cell(50,10,$l_name,1,1);

$pdf->Cell(60,10,"Email:",1,0);
$pdf->Cell(50,10,$email,1,1);

$pdf->Cell(60,10,"Student ID:",1,0);
$pdf->Cell(50,10,$studentID,1,1);

$pdf->Cell(60,10,"comment:",1,0);
$pdf->Cell(50,10,$comment,1,1);




$pdf->output();

}

?>