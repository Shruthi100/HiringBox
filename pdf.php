<?php
if(!empty($_POST['submit']));
{
    $roll = $_POST['rollno'];
    $f_name = $_POST['firstname'];
    $l_name = $_POST['lastname'];
    $email = $_POST['email'];
require("fpdf/fpdf.php");

$pdf = new FPDF();
$pdf -> AddPage();

$pdf -> SetFont("Arial","B",12);
$pdf -> Cell(0,10,"Registration Details",1,1,'C');

$pdf -> Cell(20,10,"Roll No.",1,0);
$pdf -> Cell(45,10,"First Name",1,0);
$pdf -> Cell(45,10,"Last Name",1,0);
$pdf -> Cell(0,10,"Email",1,1);

$pdf -> Cell(20,10,$roll,1,);
$pdf -> Cell(45,10,$f_name,1,0);
$pdf -> Cell(45,10,$l_name,1,0);
$pdf -> Cell(0,10,$email,1,0);

$pdf->output();

}
?>