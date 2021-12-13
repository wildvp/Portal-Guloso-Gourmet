<?php 

	include_once "topo.php";
	include_once "variable.php";
	include_once "PHPMailer/class.phpmailer.php";
	include_once "PHPMailer/class.smtp.php";
	
	
?>

<div class="container" style="background-color:#F8F9FA; color:#600;" align="center">

<div class="row border border-light justify-content-center" style="background-color: #00BFA5; color:#FF0;">
                       
	<h2><font face="Arial, Helvetica, sans-serif">Dados da entrega</font></h2>
        
</div> 


<table class="table table-striped table-sm">
	<tbody>
    	<tr>
      		
      		<th scope="row">Nome : <?php echo $nome;?></th>
      		
     	</tr>
    
        <tr>
      		
      		<th scope="row">Telefone: <?php echo $telefone;?></th>
      		
    	</tr>
    	
   		<tr>
      		<th scope="row">Ponto de Referência: <?php echo $preferencia;?></th>
      		
    	</tr>
        
        <tr>
      		<th scope="row">Endereço de Entrega: <?php echo $msg;?></th>
      		
    	</tr>
	</tbody>
</table>

<div class="row border border-light justify-content-center" style="background-color: #00BFA5; color:#FF0;">
                       
	<h2><font face="Arial, Helvetica, sans-serif">Sucos</font></h2>
        
</div> 

<table class="table table-striped">
  	<thead>
    	<tr>
      		<th scope="col">Nome</th>
      		<th scope="col" style="text-align:center;">Quantidade</th>
      		<th scope="col" style="text-align:right; color:#F00;">Preço total</th>
      		
    	</tr>
  	</thead>
    
  	<tbody>
           
        <tr>
      		<th scope="row">Suco DVovó</th>
      		<td style="text-align:center;"><?php echo $inputQtdSucodVovo;?></td>
      		<td style="color:#F00; text-align:right;"><?php echo $SomaSucoVovo;?></td>
		</tr>
        
        <tr>
      		<th scope="row">Suco Gaivota</th>
      		<td style="text-align:center;"><?php echo $inputQtdSucoGaivota;?></td>
      		<td style="color:#F00; text-align:right;"><?php	echo $SomaSucoGaivota;?></td>
		</tr>
        
        <tr>
      		<th scope="row">Suco Guloso</th>
      		<td style="text-align:center;"><?php echo $inputQtdSucoGuloso;?></td>
      		<td style="color:#F00; text-align:right;"><?php echo $SomaSucoGuloso;?></td>
		</tr>
        
        <tr>
      		<th scope="row">Suco Hulk</th>
      		<td style="text-align:center;"><?php echo $inputQtdSucoHulk;?></td>
      		<td style="color:#F00; text-align:right;"><?php echo $SomaSucoHulk;?></td>
		</tr>
        
        <tr>
      		<th scope="row">Suco Maranhão</th>
      		<td style="text-align:center;"><?php echo $inputQtdSucoMaranhao;?></td>
      		<td style="color:#F00; text-align:right;"><?php echo $SomaSucoMaranhao;?></td>
		</tr>
        
        <tr>
      		<th scope="row">Suco Maria</th>
      		<td style="text-align:center;"><?php echo $inputQtdSucoMaria;?></td>
      		<td style="color:#F00; text-align:right;"><?php echo $SomaSucoMaria;?></td>
		</tr>
        
        <tr>
      		<th scope="row">Suco Sakito</th>
      		<td style="text-align:center;"><?php echo $inputQtdSucoMaranhao;?></td>
      		<td style="color:#F00; text-align:right;"><?php echo $SomaSucoMaranhao;?></td>
		</tr>
        
        <tr>
      		<th scope="row">Suco Seca Barriga</th>
      		<td style="text-align:center;"><?php echo $inputQtdSucoSecaBarriga;?></td>
      		<td style="color:#F00; text-align:right;"><?php echo $SomaSucoSecaBarriga;?></td>
		</tr>
        
    </tbody>
</table>

<div class="row border border-light justify-content-center" style="background-color: #00BFA5; color:#FF0;">
                       
	<h2><font face="Arial, Helvetica, sans-serif">Sanduíches</font></h2>
        
</div> 

<table class="table table-striped">
  	<thead>
    	<tr>
      		<th scope="col">Nome</th>
      		<th scope="col" style="text-align:center;">Quantidade</th>
      		<th scope="col" style="text-align:right; color:#F00;">Preço total</th>
      		
    	</tr>
  	</thead>
    
  	<tbody>
           
        <tr>
      		<th scope="row">A Fome</th>
      		<td style="text-align:center;"><?php echo $inputQtdSanduicheAFome;?></td>
      		<td style="color:#F00; text-align:right;"><?php echo $SomaSanduicheAFome;?></td>
		</tr>
        
        <tr>
      		<th scope="row">Estudante</th>
      		<td style="text-align:center;"><?php echo $inputQtdSanduicheEstudante;?></td>
      		<td style="color:#F00; text-align:right;"><?php	echo $SomaSanduicheEstudante;?></td>
		</tr>
        
        <tr>
      		<th scope="row">Guloso</th>
      		<td style="text-align:center;"><?php echo $inputQtdSanduicheGuloso;?></td>
      		<td style="color:#F00; text-align:right;"><?php echo $SomaSanduicheGuloso;?></td>
		</tr>
        
        <tr>
      		<th scope="row">Meio Dia</th>
      		<td style="text-align:center;"><?php echo $inputQtdSanduicheMeioDia;?></td>
      		<td style="color:#F00; text-align:right;"><?php echo $SomaSanduicheMeioDia;?></td>
		</tr>
        
        <tr>
      		<th scope="row">Merendão</th>
      		<td style="text-align:center;"><?php echo $inputQtdSanduicheMerendao;?></td>
      		<td style="color:#F00; text-align:right;"><?php echo $SomaSanduicheMerendao;?></td>
		</tr>
                        
    </tbody>
</table>

<div class="row border border-light justify-content-center" style="background-color: #00BFA5; color:#FF0;">
                       
	<h2><font face="Arial, Helvetica, sans-serif">Sanduíches Naturais</font></h2>
        
</div> 

<table class="table table-striped">
  	<thead>
    	<tr>
      		<th scope="col">Nome</th>
      		<th scope="col" style="text-align:center;">Quantidade</th>
      		<th scope="col" style="text-align:right; color:#F00;">Preço total</th>
      		
    	</tr>
  	</thead>
    
  	<tbody>
           
        <tr>
      		<th scope="row">Malvado</th>
      		<td style="text-align:center;"><?php echo $inputQtdSanduicheNaturalMalvado;?></td>
      		<td style="color:#F00; text-align:right;"><?php echo $SomaSanduicheNaturalMalvado;?></td>
		</tr>
        
        <tr>
      		<th scope="row">Peso Pesado</th>
      		<td style="text-align:center;"><?php echo $inputQtdSanduicheNaturalPesoPesado;?></td>
      		<td style="color:#F00; text-align:right;"><?php	echo $SomaSanduicheNaturalPesoPesado;?></td>
		</tr>
        
        <tr>
      		<th scope="row">Sarado</th>
      		<td style="text-align:center;"><?php echo $inputQtdSanduicheNaturalSarado;?></td>
      		<td style="color:#F00; text-align:right;"><?php echo $SomaSanduicheNaturalSarado;?></td>
		</tr>
                        
    </tbody>
</table>
<div class="row border border-light justify-content-center" style="background-color: #00BFA5; color:#FF0;">
                       
	<h2><font face="Arial, Helvetica, sans-serif">Valor Total</font></h2>
        
</div> 
<div class="row border border-light justify-content-center" style="background-color:#F00; color:#FFF;">
                       
	<h2><font face="Arial, Helvetica, sans-serif">R$ <?php echo $ValorTotal;?></font></h2>
        
</div> 
<div class="row border border-light justify-content-center" style="background-color: #00BFA5; color:#FF0;">
                       
	<h2><font face="Arial, Helvetica, sans-serif">Obrigado e Volte sempre!!!</font></h2>
        
</div> 

	

</div>


</div>

<br />

 <!--************************************************************************************-->



<div class="row border border-light justify-content-center" style="background-color: #00BFA5; color:#FF0;">

		<a href="sendding.php" class="btn btn-success mr-3" role="button" aria-pressed="true">Enviar Pedido</a>
        
        <a href="pedidos.php" class="btn btn-danger mr-3" role="button" aria-pressed="true">Cancelar Pedido</a>   

	<br />
        
</div>


    
 <!--************************************************************************************-->
    <br>
    <div class="container-fluid">
    
    	<div class="row border border-success rounded justify-content-center" style="vertical-align:central; color:#000;">
        
   	    		<img src="images/delivery.fw.png" width="1445" height="300" class="img-fluid img-thumbnail">
        
        </div>

	</div>


<br><br><br>












<?php	
	
	
	
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
	$Mailer->FromName = "Portal Guloso Gourmet";
	$Mailer->From = "gulosogourmet@gulosogourmet.com.br";//De
	$Mailer->addAddress("carlosmunizdba@gmail.com");//Destinatário
	$Mailer->addAddress("washingtonmws@gmail.com");//Destinatário
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
	
<br> =====================================================================================<br>	
	<strong>Valor Total</strong><br>
	 </strong>R$ $ValorTotal </strong>
	
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
				alert ('Pedido enviado com sucesso!!!');
				window.location.href = ('pedidos.php');
				}, 6000);
				
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


	include_once "footer.php";
	
?>



	
	
	
	


