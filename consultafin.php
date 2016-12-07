<?php
	require_once('config/conn.php');
	require_once('verificasessao.php');
	$dataini=$_POST['dataini'];
	$datafim=$_POST['datafim'];
	$dataini = implode("-", array_reverse(explode("/", $dataini)));
	$datafim = implode("-", array_reverse(explode("/", $datafim)));
	$tipo=$_POST['tipo'];
	
			
					

		if($tipo=="Receitas"){
					$consulta = $pdo->prepare("SELECT * FROM financeiro WHERE tipo= '+' and dia BETWEEN '$dataini' AND '$datafim'");
					$consulta->execute();
					
					while ($lista = $consulta->fetchObject()):
					
					
						
					$ct=$lista->cpfCliente;
					$total+=$lista->valor;
					$tr=$lista->idCliente;
					$r[]=$lista->valor;
					
					$consult = $pdo->prepare("SELECT nome FROM cliente WHERE cpf=$tr");
					$consult->execute();
					$list = $consult->fetchObject();
					$t[]=$list->nome; 
					
					
					endwhile;
					
					
					require_once("pdf/fpdf.php");
 
						$pdf= new FPDF("P","pt","A4");
						 
						 
						$pdf->AddPage();
						$pdf->Image('ll.jpg');
						 
						$pdf->SetFont('arial','B',18);
						$pdf->Cell(0,5,$tipo,0,1,'C');
						$pdf->Cell(0,5,"","B",1,'C');
						$pdf->Ln(8);

						
						
						$pdf->SetXY(50,300);// Posicionando as células
						$pdf->SetFont('arial','B',12);
						$pdf->Cell(150,20,"Nome:",0,1,'L');
						
						foreach($t as $values){
						 
						$pdf->setFont('arial','',12);
					
						$pdf->MultiCell(150,20,$values,1,'J');;
						
						}

						$pdf->SetXY(50,300);// Posicionando as células
						$pdf->SetFont('arial','B',12);
						$pdf->cell(180);
						$pdf->Cell(150,20,"Valor:",0,1,'L');
					
						foreach($r as $value){
						 
						$pdf->cell(180);
						$pdf->setFont('arial','',12);
						$pdf->MultiCell(150,20,$value,1,'J');
						 
						}
						
						
						
						
						$pdf->SetFont('arial','B',12);
						$pdf->Cell(50,20,"Total:",0,1,'R');
						$pdf->setFont('arial','',12);
						$pdf->MultiCell(50,20,$total,1,'J');
						
						
						
						
						
						$pdf->Output("arquivo.pdf","I");
						
					
					
					
			
					
					
		}
		if($tipo=="Despesas"){
					$consulta = $pdo->prepare("SELECT * FROM financeiro WHERE tipo= '-' and dia BETWEEN '$dataini' AND '$datafim'");
					$consulta->execute();
					while ($lista = $consulta->fetchObject()):
					$ct=$lista->cpfCliente;
					$total+=$lista->valor;
					$total=-$total;
					$r[]=$lista->valor;
					$t[]=$lista->titulo;
					endwhile;
					
					require_once("pdf/fpdf.php");
 
						$pdf= new FPDF("P","pt","A4");
						 
						 
						$pdf->AddPage();
						$pdf->Image('ll.jpg');
						 
						$pdf->SetFont('arial','B',18);
						$pdf->Cell(0,5,$tipo,0,1,'C');
						$pdf->Cell(0,5,"","B",1,'C');
						$pdf->Ln(8);

						
						
						$pdf->SetXY(50,300);// Posicionando as células
						$pdf->SetFont('arial','B',12);
						$pdf->Cell(150,20,"Nome:",0,1,'L');
						
						foreach($t as $values){
						 
						$pdf->setFont('arial','',12);
					
						$pdf->MultiCell(150,20,$values,1,'J');;
						
						}

						$pdf->SetXY(50,300);// Posicionando as células
						$pdf->SetFont('arial','B',12);
						$pdf->cell(180);
						$pdf->Cell(150,20,"Valor:",0,1,'L');
					
						foreach($r as $value){
						 
						$pdf->cell(180);
						$pdf->setFont('arial','',12);
						$pdf->MultiCell(150,20,$value,1,'J');
						 
						}
						
						
						
						
						$pdf->SetFont('arial','B',12);
						$pdf->Cell(50,20,"Total:",0,1,'R');
						$pdf->setFont('arial','',12);
						$pdf->MultiCell(150,20,$total,1,'J');
						
						
						
						
						
						$pdf->Output("arquivo.pdf","I");
					
					
					
					
					
					echo$total;
		}
		
		if($tipo=="Total"){
					$consulta = $pdo->prepare("SELECT * FROM financeiro WHERE tipo= '+' and dia BETWEEN '$dataini' AND '$datafim'");
					$consulta->execute();
					
					while ($lista = $consulta->fetchObject()):
					$ct=$lista->cpfCliente;
					$total1+=$lista->valor;
					endwhile;
					
					$consulta1 = $pdo->prepare("SELECT * FROM financeiro WHERE tipo= '-' and dia BETWEEN '$dataini' AND '$datafim'");
					$consulta1->execute();
					
					while ($lista1 = $consulta1->fetchObject()):
					$ct=$lista1->cpfCliente;
					$total2+=$lista1->valor;
					endwhile;
					
					$total2=-$total2;
					$final=$total2+$total1;
					echo"receitas ".$total1;
					echo"<br>";
					echo"despesas ".$total2;
					echo"<br>";
					echo"Saldo ".$final;
			
		}
		
			





?>