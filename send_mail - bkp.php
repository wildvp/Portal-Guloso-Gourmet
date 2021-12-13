<?php 

	
	include_once "variable.php";
	include_once "PHPMailer/class.phpmailer.php";
	include_once "PHPMailer/class.smtp.php";
	
	
	var_dump($_POST);
	
		
//	$GetPost = filter_input_array(INPUT_POST,FILTER_DEFAULT);
//	var_dump($GetPost);	

	//Incluir PHPMailer
	//$Erro = true;

	
	//Incluir PHPMailer
	//$Erro = true;

	

	echo $nome;?> <br> <?php
	echo $telefone;?> <br> <?php
	echo $preferencia;?> <br> <?php
	echo $msg;?> <br> <?php
	
	echo $inputQtdSucodVovo;?> <br> <?php
	echo $SomaSucoVovo;?> <br> <?php
	
	echo $inputQtdSucoGaivota;?> <br> <?php
	echo $SomaSucoGaivota;?> <br> <?php
	
	echo $inputQtdSucoGuloso;?> <br> <?php
	echo $SomaSucoGuloso;?> <br> <?php
	
	echo $inputQtdSucoHulk;?> <br> <?php
	echo $SomaSucoHulk;?> <br> <?php
	
	echo $inputQtdSucoMaranhao;?> <br> <?php
	echo $SomaSucoMaranhao;?> <br> <?php
	
	echo $inputQtdSucoMaria;?> <br> <?php
	echo $SomaSucoMaria;?> <br> <?php
	
	echo $inputQtdSucoSakito;?> <br> <?php
	echo $SomaSucoSakito;?> <br> <?php	
	
	echo $inputQtdSucoSecaBarriga;?> <br> <?php
	echo $SomaSucoSecaBarriga;?> <br> <?php
	
	

	echo $inputQtdSanduicheNaturalMalvado;?> <br> <?php
	echo $SomaSanduicheNaturalMalvado;?> <br> <?php

	echo $inputQtdSanduicheNaturalPesoPesado;?> <br> <?php
	echo $SomaSanduicheNaturalPesoPesado;?> <br> <?php

	echo $inputQtdSanduicheNaturalSarado;?> <br> <?php
	echo $SomaSanduicheNaturalSarado;?> <br> <?php

	
	echo $inputQtdSanduicheAFome;?> <br> <?php
	echo $SomaSanduicheAFome;?> <br> <?php

	echo $inputQtdSanduicheEstudante;?> <br> <?php
	echo $SomaSanduicheEstudante;?> <br> <?php

	echo $inputQtdSanduicheGuloso;?> <br> <?php
	echo $SomaSanduicheGuloso;?> <br> <?php

	echo $inputQtdSanduicheMeioDia;?> <br> <?php
	echo $SomaSanduicheMeioDia;?> <br> <?php

	echo $inputQtdSanduicheMerendao;?> <br> <?php
	echo $SomaSanduicheMerendao;?> <br> <?php
	
	
	
	
	//Incluir PHPMailer
	//$Erro = true;
	include_once 'PHPMailer/class.smtp.php';
	include_once 'PHPMailer/class.phpmailer.php';
	
	//Enviando o email utilizando o PHPMailer
	$Mailer = new PHPMailer;
	$Mailer->Charset = "UTF-8";//Tipo de Caractere
	$Mailer->SMTPDebug = 3;//Debug
	$Mailer->isSMTP();//Tipo de envio
	$Mailer->Host = "email-ssl.com.br"; //Servidor de email locaweb 
	//imap.dradilmaolimpio.com.br //pop.dradilmaolimpio.com.br //mail.dradilmaolimpio.com.br
	$Mailer->SMTPAuth = "true";//Metodo de envio - se cx postal existe no servidor usar true
	$Mailer->Username = "gulosogourmet@gulosogourmet.com.br";
	$Mailer->Password = "guloso@345350DBA";
	$Mailer->SMTPSecure = "ssl";//Tipo de segurança
	$Mailer->Port = 465; //ou 587
	$Mailer->FromName = "($nome)";
	$Mailer->From = "gulosogourmet@gulosogourmet.com.br";//De
	$Mailer->addAddress("carlosmunizdba@gmail.com");//Destinatário
//	$Mailer->addAttachment = $arquivo;//Arquivo em anexo
	$Mailer->isHTML(true);//Sera enviado no formato HTML
	$Mailer->Subject = "PEDIDO ON LINE - $nome - ".date("d/m/Y"); //Assunto do e-mail
	// Corpo do email 
	
	$Mailer->Body = "
	<br> =====================================================================================<br>
	
	<strong>DADOS DE ENTREGA</strong><br><br>
	<strong>De: $nome<br> 
	Contato: $telefone <br> 
	Assunto: $preferencia<br> 
	Endereço de entrega: $msg</strong> 
	<br><br>$msg<br><br>
	
	<br> =====================================================================================<br>
	
	<strong>SUCOS</strong><br><br>
	
	
	<strong>Suco D'Vovó:           </strong>$inputQtdSucodVovo -        R$ $SomaSucoVovo<br>
	<strong>Suco Gaivota:          </strong>$inputQtdSucoGaivota -      R$ $SomaSucoGaivota<br>
	<strong>Suco Guloso:           </strong>$inputQtdSanduicheGuloso - R$ $SomaSucoGuloso<br>
	<strong>Suco Hulk:             </strong>$inputQtdSucoHulk -         R$ $SomaSucoHulk<br>
	<strong>Suco Maranhao:         </strong>$inputQtdSucoMaranhao -     R$ $SomaSucoMaranhao<br>
	<strong>Suco Maria:            </strong>$inputQtdSucoMaria -        R$ $SomaSucoMaria<br>
	<strong>Suco Sakito:           </strong>$inputQtdSucoSakito -       R$ $SomaSucoSakito<br>
	<strong>Suco Seca Barriga:     </strong>$inputQtdSucoSecaBarriga -  R$ $SomaSucoSecaBarriga<br>
	
	<br> =====================================================================================<br>
	
	<strong>SANDUÍCHES</strong><br><br>
	<strong>A Fome:                </strong>$inputQtdSanduicheAFome -     R$ $SomaSanduicheAFome<br>
	<strong>Estudante:             </strong>$inputQtdSanduicheEstudante - R$ $SomaSanduicheEstudante<br>
	<strong>Guloso:                </strong>$inputQtdSanduicheGuloso -   R$ $SomaSanduicheGuloso<br>
	<strong>Meio Dia:              </strong>$inputQtdSanduicheMeioDia -   R$ $SomaSanduicheMeioDia<br>
	<strong>Merendão:              </strong>$inputQtdSanduicheMerendao -  R$ $SomaSanduicheMerendao<br>
	
<br> =====================================================================================<br>
	
	<strong>SANDUÍCHES NATURAIS</strong><br><br>
	<strong>Malvado:              </strong>$inputQtdSanduicheNaturalMalvado -    R$ $SomaSanduicheNaturalMalvado<br>
	<strong>Peso Pesado:          </strong>$inputQtdSanduicheNaturalPesoPesado - R$ $SomaSanduicheNaturalPesoPesado<br>
	<strong>Sarado:               </strong>$inputQtdSanduicheNaturalSarado -    R$ $SomaSanduicheNaturalSarado<br>
	
	
	
	";
	
	
	//Verificação
	/*
	if($Mailer->send())
	{
		$Erro = false;
	}
	var_dump($Erro);
	*/
	if($Mailer->send())
	{
		echo "
		
			<script>
				setTimeout(function(){
				window.location.href = ('contato.php');
				}, 3000);
				
			</script>
			
			";
		
		
	}
/*	else
	{
		var_dump($Erro);
	}
	

/*
	//Enviando o email utilizando o PHPMailer
	$Mailer = new PHPMailer;
	$Mailer->Charset = "UTF-8";//Tipo de Caractere
	$Mailer->SMTPDebug = 3;//Debug
	$Mailer->isSMTP();//Tipo de envio
	$Mailer->Host = "email-ssl.com.br"; //Servidor de email locaweb 
	//imap.dradilmaolimpio.com.br //pop.dradilmaolimpio.com.br //mail.dradilmaolimpio.com.br
	$Mailer->SMTPAuth = "true";//Metodo de envio - se cx postal existe no servidor usar true
	$Mailer->Username = "gulosogourmet@gulosogourmet.com.br";
	$Mailer->Password = "g!uh554eHZmx4aA";
	$Mailer->SMTPSecure = "ssl";//Tipo de segurança
	$Mailer->Port = 465; //ou 587
	$Mailer->FromName = "($nome)";
	$Mailer->From = "gulosogourmet@gulosogourmet.com.br";//De
	$Mailer->addAddress("carlosmunizdba@gmail.com");//Destinatário
	$Mailer->isHTML(true);//Sera enviado no formato HTML
	$Mailer->Subject = "PEDIDO ON LINE - $nome - ".date("d/m/Y")." - " .date("H:i"); //Assunto do e-mail

	// Corpo do email 
	
	$Mailer->Body = "
	<br> =====================================================================================<br>
	
	<strong>DADOS DE ENTREGA</strong><br><br>
	<strong>De: $nome<br> 
	Contato: $telefone <br> 
	Assunto: $preferencia<br> 
	Endereço de entrega: $msg</strong> 
	<br><br>$msg<br><br>
	
	<br> =====================================================================================<br>
	
	<strong>SUCOS</strong><br><br>
	
	
	<strong>Suco D'Vovó:           </strong>$inputQtdSucodVovo -        R$ $SomaSucoVovo<br>
	<strong>Suco Gaivota:          </strong>$inputQtdSucoGaivota -      R$ $SomaSucoGaivota<br>
	<strong>Suco Guloso:           </strong>$inputQtdSanduicheGuloso - R$ $SomaSucoGuloso<br>
	<strong>Suco Hulk:             </strong>$inputQtdSucoHulk -         R$ $SomaSucoHulk<br>
	<strong>Suco Maranhao:         </strong>$inputQtdSucoMaranhao -     R$ $SomaSucoMaranhao<br>
	<strong>Suco Maria:            </strong>$inputQtdSucoMaria -        R$ $SomaSucoMaria<br>
	<strong>Suco Sakito:           </strong>$inputQtdSucoSakito -       R$ $SomaSucoSakito<br>
	<strong>Suco Seca Barriga:     </strong>$inputQtdSucoSecaBarriga -  R$ $SomaSucoSecaBarriga<br>
	
	<br> =====================================================================================<br>
	
	<strong>SANDUÍCHES</strong><br><br>
	<strong>A Fome:                </strong>$inputQtdSanduicheAFome -     R$ $SomaSanduicheAFome<br>
	<strong>Estudante:             </strong>$inputQtdSanduicheEstudante - R$ $SomaSanduicheEstudante<br>
	<strong>Guloso:                </strong>$inputQtdSanduicheGuloso -   R$ $SomaSanduicheGuloso<br>
	<strong>Meio Dia:              </strong>$inputQtdSanduicheMeioDia -   R$ $SomaSanduicheMeioDia<br>
	<strong>Merendão:              </strong>$inputQtdSanduicheMerendao -  R$ $SomaSanduicheMerendao<br>
	
<br> =====================================================================================<br>
	
	<strong>SANDUÍCHES NATURAIS</strong><br><br>
	<strong>Malvado:              </strong>$inputQtdSanduicheNaturalMalvado -    R$ $SomaSanduicheNaturalMalvado<br>
	<strong>Peso Pesado:          </strong>$inputQtdSanduicheNaturalPesoPesado - R$ $SomaSanduicheNaturalPesoPesado<br>
	<strong>Sarado:               </strong>$inputQtdSanduicheNaturalSarado -    R$ $SomaSanduicheNaturalSarado<br>
	
	
	
	";
	
	
	//Verificação
/*
	if($Mailer->send())
	
	
	{
		$Erro = false;
	}
	var_dump($Erro);
	/*
	if($Mailer->send())
	{
		echo "
		
			<script>
				setTimeout(function(){
				window.location.href = ('pedidos.php');
				}, 3000);
				
			</script>
			
			";
		
		
	}
	else
	{
		var_dump($Erro);
	}

*/

	
?>



	
	
	
	


