<?php

include_once("/dao/manipuladados.php");

$dados = new ManipulaDados();
$dados->setTable("tb_restaurante");
$lista = $dados->getAllDataTable();


require "../fpdf/fpdf.php";

function converte($String)
{
    return iconv("UTF-8","ISO8859-1",$String);
}

$pdf = new FPDF("L","pt","A4");
while($linha = mysqli_fetch_array($listagem))
{
    //Frente do Certificado
    $pdf->AddPage();
    $pdf->Image("../img/certificado.png",0,0,$pdf->GetPageWidth(),$pdf->GetPageHeight());
    $pdf->Ln(30);

    //Recuperar dados do View
    $projeto = $linha["projeto"];
    $posicao = $linha["pos"];
    $area = $linha["area"];
    $nivel = $linha["nivel"];

    $pdf->SetFont("Arial","", 18);
    $pdf->SetY(220);
    $pdf->SetMargins(20,20,20,20);

    $texto = utf8_decode("A IX Feira de Ciências e Tecnologia do Cerrado, FICICER 2022, realizada nos dias 16 e 17 de junho de 2022 ");
    $texto2="confere o presente certificado aos participantes do projeto";

    $pdf->MultiCell(0,20,$texto,0,"C",false);
    $pdf->Ln(10);
    $pdf->MultiCell(0,20,$texto2,0,"C",false);
    $pdf->Ln(20);

    $pdf->SetFont("Arial","B",20);
    $pdf->MultiCell(0,20,$projeto,0,"C",false);
    $pdf->Ln(20);
    
    $pdf->SetFont("Arial","",20);
    $texto3 = utf8_decode("pelo ").$posicao.utf8_decode("º lugar na categoria ").$area.utf8_decode(" de nível ").$nivel;
    $pdf->MultiCell(0,20,$texto3,0,"C",false);
    $pdf->Ln(20);

    $pdf->MultiCell(0,20,"Formosa GO, 20 de junho de 2022",0,"C",false);
    $pdf->Ln(20);
  
    //Verso do Certificado
    $pdf->AddPage();
    $pdf->Image("../img/certificadoverso.png",0,0,$pdf->GetPageWidth(),$pdf->GetPageHeight());
    $pdf->SetFont("Arial","",14);
    $pdf->SetX(0);
    $pdf->SetY(140);
    $pdf->MultiCell(0,15,utf8_decode("Instituto Federal de Ciências e"),0,"J",false);
    $pdf->Ln(3);
    $pdf->MultiCell(0,15,utf8_decode("Tecnologia de Goiás - IFG"),0,"J",false);
    $pdf->Ln(3);
    $pdf->MultiCell(0,15,"          Campus Formosa",0,"J",false);
    $pdf->Ln(20);
    $pdf->MultiCell(0,30,utf8_decode("Registrado sob nº___ na folha ____"),0,"J",false);
    $pdf->Ln(3);
    $pdf->MultiCell(0,30,"do livro ____  de Registro de Certificados",0,"J",false);
    $pdf->Ln(30);
    $pdf->MultiCell(0,20,"Formosa GO, 20 de junho de 2022",0,"J",false);
    $pdf->Ln(30);
    $pdf->MultiCell(0,20,utf8_decode("Luan Otávio dos Santos"),0,"J",false);
    $pdf->MultiCell(0,5,"Portaria 1.250/2020",0,"J",false);
  }

  $pdf->Output("I","certificado.pdf",true);


?>