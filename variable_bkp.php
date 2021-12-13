


<?php

/* 
*******************************************************************************************************************************
**********************************SCRIPT PARA ENVIO DO EMAIL A PARTIR DE UM FORMULÁRIO*****************************************
*******************************************************************************************************************************
*/
	include_once "variable.php";	
	
	//PRECOS
	
	$preco_Sanduba = 8.00;
	$preco_Sanduba = number_format($preco_Sanduba, 2, ',', ' ');
	
	$preco_Sanduba_Natural= 6.00;
	$preco_Sanduba_Natural = number_format($preco_Sanduba_Natural, 2, ',', ' ');
		
	$preco_Sucos = 7.00;
	$preco_Sucos = number_format($preco_Sucos, 2, ',', ' ');

/*  =======================DADOS DE ENTREGA ============================*/

	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$preferencia = $_POST['preferencia'];
	$msg = $_POST['msg'];
	
	
/*  =======================SUCOS / RECUPERAÇÃO E CALCULOS ============================*/
	
	$inputQtdSucodVovo = $_POST['inputQtdSucodVovo'];
	$SomaSucoVovo = $inputQtdSucodVovo * $preco_Sucos;
	$SomaSucoVovo = number_format($SomaSucoVovo, 2, ',', ' ');
	
	$inputQtdSucoGaivota = $_POST['inputQtdSucoGaivota'];
	$SomaSucoGaivota = $inputQtdSucoGaivota * $preco_Sucos;
	$SomaSucoGaivota = number_format($SomaSucoGaivota, 2, ',', ' ');
	
	$inputQtdSucoGuloso = $_POST['inputQtdSucoGuloso'];
	$SomaSucoGuloso = $inputQtdSucoGuloso * $preco_Sucos;
	$SomaSucoGuloso = number_format($SomaSucoGuloso, 2, ',', ' ');
	
	$inputQtdSucoHulk = $_POST['inputQtdSucoHulk'];
	$SomaSucoHulk = $inputQtdSucoHulk * $preco_Sucos;
	$SomaSucoHulk = number_format($SomaSucoHulk, 2, ',', ' ');
	
	$inputQtdSucoMaranhao = $_POST['inputQtdSucoMaranhao'];
	$SomaSucoMaranhao = $inputQtdSucoMaranhao * $preco_Sucos;
	$SomaSucoMaranhao = number_format($SomaSucoMaranhao, 2, ',', ' ');

	$inputQtdSucoMaria = $_POST['inputQtdSucoMaria'];
	$SomaSucoMaria = $inputQtdSucoMaria * $preco_Sucos;
	$SomaSucoMaria = number_format($SomaSucoMaria, 2, ',', ' ');

	$inputQtdSucoMaranhao = $_POST['inputQtdSucoMaranhao'];
	$SomaSucoMaranhao = $inputQtdSucoMaranhao * $preco_Sucos;
	$SomaSucoMaranhao = number_format($SomaSucoMaranhao, 2, ',', ' ');	

	$inputQtdSucoSakito = $_POST['inputQtdSucoSakito'];
	$SomaSucoSakito = $inputQtdSucoSakito * $preco_Sucos;
	$SomaSucoSakito = number_format($SomaSucoSakito, 2, ',', ' ');

	$inputQtdSucoSecaBarriga = $_POST['inputQtdSucoSecaBarriga'];
	$SomaSucoSecaBarriga = $inputQtdSucoSecaBarriga * $preco_Sucos;
	$SomaSucoSecaBarriga = number_format($SomaSucoSecaBarriga, 2, ',', ' ');
	
/*	 ======================SANDUICHES  / RECUPERAÇÃO E CALCULOS==============================*/


	$inputQtdSanduicheAFome = $_POST['inputQtdSanduicheAFome'];
	$SomaSanduicheAFome = $inputQtdSanduicheAFome * $preco_Sanduba;
	$SomaSanduicheAFome = number_format($SomaSanduicheAFome, 2, ',', ' ');

	$inputQtdSanduicheEstudante = $_POST['inputQtdSanduicheEstudante'];
	$SomaSanduicheEstudante = $inputQtdSanduicheEstudante * $preco_Sanduba;
	$SomaSanduicheEstudante = number_format($SomaSanduicheEstudante, 2, ',', ' ');

	$inputQtdSanduicheGuloso = $_POST['inputQtdSanduicheGuloso'];
	$SomaSanduicheGuloso = $inputQtdSanduicheGuloso * $preco_Sanduba;
	$SomaSanduicheGuloso = number_format ($SomaSanduicheGuloso, 2, ',', ' ');

	$inputQtdSanduicheMeioDia = $_POST['inputQtdSanduicheMeioDia'];
	$SomaSanduicheMeioDia = $inputQtdSanduicheMeioDia * $preco_Sanduba;
	$SomaSanduicheMeioDia = number_format($SomaSanduicheMeioDia, 2, ',', ' ');

	$inputQtdSanduicheMerendao = $_POST['inputQtdSanduicheMerendao'];
	$SomaSanduicheMerendao = $inputQtdSanduicheMerendao * $preco_Sanduba;
	$SomaSanduicheMerendao = number_format($SomaSanduicheMerendao, 2, ',', ' ');
	
/*	 ======================SANDUICHES  / RECUPERAÇÃO E CALCULOS==============================*/

	$inputQtdSanduicheNaturalMalvado = $_POST['inputQtdSanduicheNaturalMalvado'];
	$SomaSanduicheNaturalMalvado = $inputQtdSanduicheNaturalMalvado * $preco_Sanduba_Natural;
	$SomaSanduicheNaturalMalvado = number_format($SomaSanduicheNaturalMalvado, 2, ',', ' ');
	
	$inputQtdSanduicheNaturalPesoPesado = $_POST['inputQtdSanduicheNaturalPesoPesado'];
	$SomaSanduicheNaturalPesoPesado = $inputQtdSanduicheNaturalPesoPesado * $preco_Sanduba_Natural;
	$SomaSanduicheNaturalPesoPesado = number_format($SomaSanduicheNaturalPesoPesado, 2, ',', ' ');
	
	$inputQtdSanduicheNaturalSarado = $_POST['inputQtdSanduicheNaturalSarado'];
	$SomaSanduicheNaturalSarado = $inputQtdSanduicheNaturalSarado * $preco_Sanduba_Natural;
	$SomaSanduicheNaturalSarado = number_format($SomaSanduicheNaturalSarado, 2, ',', ' ');


/*	 ======================TOTAL A PAGAR==============================*/
	
	 $ValorTotal = $SomaSucoVovo + $SomaSucoGaivota + $SomaSucoGuloso + $SomaSucoHulk + $SomaSucoMaranhao +$SomaSucoMaria + $SomaSucoSakito + $SomaSucoSecaBarriga +$SomaSanduicheAFome + $SomaSanduicheEstudante + $SomaSanduicheGuloso + $SomaSanduicheMeioDia + $SomaSanduicheMerendao + $SomaSanduicheNaturalMalvado + $SomaSanduicheNaturalPesoPesado + $SomaSanduicheNaturalSarado;
	
	 $ValorTotal = number_format($ValorTotal, 2, ',', ' ');


?>

