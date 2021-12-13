<?php 

	include_once "topo.php";
	include_once "variable.php";
		
	
?>
<div class="container-fluid">

<form method="post" id="pedidos" action="send_mail.php">
		

   
<!--******************************************************************************************************-->
       <!--***********************************INICIO SUCOS****************************************-->
<!--******************************************************************************************************-->  
   
<div class="container-fluid border border-success rounded bg-light">


<!--******************************************************************************************************-->
       <!--***********************************MENSAGEM DE ALERTA***************************************-->
<!--******************************************************************************************************-->  

<div class="row border border-light justify-content-center" style="background-color: #C82333; color:#FF0; text-align:center; font-size:24px; font-weight:bold;">

ATENÇÃO - Seu pedido NÃO cairá na Guloso Gourmet.<p> o Sistema de Pedidos on line ainda aguarda AUTORIZAÇÃO DO PROPRIETÁRIO para iniciar seu funcionamento. Temporariamente, peça pelo telefone!!!

        
</div>

<!--******************************************************************************************************-->
       <!--***********************************MENSAGEM DE ALERTA***************************************-->
<!--******************************************************************************************************--> 

	<div class="row border border-light justify-content-center" style="background-color: #00BFA5; color:#FF0;">
                       
		<h2><font face="Arial, Helvetica, sans-serif">Dados da Entrega <?php $ValorTotal; ?></font></h2>
        
	</div>
		<br>
        
        	<!-- Campo: nome --> 
        	
			<div class="form-group">
				<label for="nome" class="text-danger font-weight-bold">Nome completo</label>
				<input type="text" class="form-control is-valid" name="nome" id="nome" placeholder="Insira o seu nome" aria-describedby="nomeHelp" autocomplete="off" required/>
					<div class="invalid-feedback">
						Por favor, escreva seu nome!!!!
					</div>
					<small class="text-primary form-text text-muted" id="nomeHelp">Ex.: Carlos Muniz</small>
			</div>
                    
            <!-- Campo: telefone --> 
                    
            <div class="row">
				<div class="col-2">
					<div class="form-group">
						<label for="telefone" class="text-danger font-weight-bold">Telefone</label><br />
						<input type="text" class="ddd_tel" maxlengh="15" class="form-control is-valid" name="celular" id="celular" placeholder="Insira o seu telefone" aria-describedby="assuntoHelp" autocomplete="off" required/>
					<div class="invalid-feedback">
						Por favor, escreva seu telefone!!!!
					</div>
						<small class="text-primary form-text text-muted" id="emailHelp">Ex.: 96976-5149</small>
					</div>
				</div>
                       
				<!-- Campo: assunto --> 
                        
				<div class="col-10">
					<div class="form-group">
						<label for="preferencia" class="text-danger font-weight-bold">Ponto de Referência</label><br />
						<input type="text" class="form-control is-valid" name="preferencia" id="preferencia" placeholder="Insira o Ponto de Referência"aria-describedby="assuntoHelp" autocomplete="off" required/>
						<div class="invalid-feedback">
						Por favor, escreva seu ponto de referencia!!!
						</div>
 						<small class="text-primary form-text text-muted" id="bairroHelp">Ex.: Estação Acari / Faz Botafogo</small>
					</div>
				</div>
			</div>
                                                     
			<!-- Campo: mensagem -->   
                        
			<div class="form-group">
				<label for="exampleFormControlTextarea1" class="text-danger font-weight-bold" >Endereço de Entrega</label><br />
    			<textarea class="form-control is-valid" rows="10" id="msg" name="msg" placeholder="Escreva o endereço completo de entrega incluindo a forma de chegar (se desejar)" aria-describedby="msgHelp" autocomplete="off" required/></textarea>
            	<div class="invalid-feedback">
      				Por favor, escreva o endereço!!!
    			</div>
				<small class="text-primary form-text text-muted" id="bairroHelp">Escreva o endereço completo de entrega incluindo a forma de chegar (se desejar)</small>
			</div>
         
		<div class="row border border-light justify-content-center" style="background-color: #00BFA5; color:#FF0;">
                       
			<h2><font face="Arial, Helvetica, sans-serif">Sucos</font></h2>
        
		</div> 
        
        <br />
        
        
        <table class="table table-striped">
             <thead>
                <!-- INICIO SUCO DA VOVO-->
                 <tr>
      				<th scope="col"><img src="images/sucos/SucoDVovo/sucoDaVovo.fw.png" width="162" height="80" class="img-thumbnail"></th>
      					<th scope="col" class="align-middle"><font color="#000000">Suco DVovó</font>
                        <small id="sucodavovoHelp" class="form-text text-success">Côco / Carne Côco / Cenoura</small></th>
                        <th scope="col">
      					
                        <div class="form-group">
                        
   						  <label for="inputQtdSucodVovo"><font color="#000000">Quantidade</font></label>
                            
						  <select id="inputQtdSucodVovo" class="form-control-sm" name="inputQtdSucodVovo">
        						<option selected>0</option>
        						<option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                
   						  </select>
    					</div>
                        
                        
                    </th>
                    
                    <th scope="col" class="align-middle">
      					<font color="#FF0000">Preco Unitário 
                         R$ <?php echo $preco_Sucos;?> </font> 
    				</th>
             </tr>
  			</thead>
            
            <!-- FIM CAMPO SUCODAVOVÓ-->
            
 <!--******************************************************************************************************-->
 
 <!--******************************************************************************************************-->             
            
            
            <!-- INICIO SUCO DA VOVO-->
                    
    				<tr>
      					<th scope="col"><img src="images/sucos/SucoGaivota/sucoGaivota.fw.png" width="162" height="80" class="img-thumbnail"></th>
      					<th scope="col" class="align-middle"><font color="#000000">Suco Gaivota</font>
                        <small id="sucoGaivotaHelp" class="form-text text-success">Laranja / Gengibre / Beterraba / Granola</small></th>
                        <th scope="col">
      					
                        <div class="form-group">
                        
   						  <label for="inputQtdSucoGaivota"><font color="#000000">Quantidade</font></label>
                            
						  <select id="inputQtdSucoGaivota" class="form-control-sm" name="inputQtdSucoGaivota">
        						<option selected>0</option>
        						<option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                
   						  </select>
    					</div><th scope="col" class="align-middle">
      						
                            
    							<font color="#FF0000">Preco Unitário 
                                R$ <?php echo $preco_Sucos; ?> </font> 
    							
    							
  							
                        </th>
                        
   				  </tr>
  			</thead>
            
            <!-- FIM CAMPO SUCODAVOVÓ-->
            

<!--******************************************************************************************************-->  
            
            
<!--******************************************************************************************************-->           
            
            
            <!-- INICIO SUCO GULOSO-->
                    
    				<tr>
      					<th scope="col"><img src="images/sucos/SucoGuloso/sucoGuloso.fw.png" width="162" height="80" class="img-thumbnail"></th>
      					<th scope="col" class="align-middle"><font color="#000000">Suco Guloso</font>
                        <small id="sucGulosoHelp" class="form-text text-success">Maracujá / Mamão / Manga / Gengibre</small></th>
                        <th scope="col">
      					
                        <div class="form-group">
                        
   						  <label for="inputQtdSucoGuloso"><font color="#000000">Quantidade</font></label>
                            
						  <select id="inputQtdSucoGuloso" class="form-control-sm" name="inputQtdSucoGuloso">
        						<option selected>0</option>
        						<option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                
   						  </select>
    					</div><th scope="col" class="align-middle">
      						
                            
    							<font color="#FF0000">Preco Unitário 
                                R$ <?php echo $preco_Sucos; ?> </font> 
    							
    							
  							
                        </th>
                        
   				  </tr>
  			</thead>
            
            <!-- FIM CAMPO SUCOGULOSO-->            
            
 <!--******************************************************************************************************-->             
            
 
 <!--******************************************************************************************************-->           
            
            
            <!-- INICIO SUCO HULK-->
                    
    				<tr>
      					<th scope="col"><img src="images/sucos/SucoHulk/sucoHulk.fw.png" width="162" height="80" class="img-thumbnail"></th>
      					<th scope="col" class="align-middle"><font color="#000000">Suco Hulk</font>
                        <small id="sucHulkHelp" class="form-text text-success">Hortelã / Gengibre / Couve / Maçã / Abacaxi</small></th>
                        <th scope="col">
      					
                        <div class="form-group">
                        
   						  <label for="inputQtdSucoHulk"><font color="#000000">Quantidade</font></label>
                            
						  <select id="inputQtdSucoHulk" name="inputQtdSucoHulk" class="form-control-sm">
        						<option selected>0</option>
        						<option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                
   						  </select>
    					</div><th scope="col" class="align-middle">
      						
                            
    							<font color="#FF0000">Preco Unitário 
                                R$ <?php echo $preco_Sucos; ?> </font> 
    							
    							
  							
                        </th>
                        
   				  </tr>
  			</thead>
            
            <!-- FIM CAMPO HULK-->            
            
 <!--******************************************************************************************************-->             
            
            
 <!--******************************************************************************************************-->           
            
            
            <!-- INICIO SUCO MARANHÃO-->
                    
    				<tr>
      					<th scope="col"><img src="images/sucos/SucoMaranhao/sucoMaranhao.fw.png" width="162" height="80" class="img-thumbnail"></th>
      					<th scope="col" class="align-middle"><font color="#000000">Suco Maranhão</font>
                        <small id="sucMaranhaoHelp" class="form-text text-success">Coco / Gengibre / Chia</small></th>
                        <th scope="col">
      					
                        <div class="form-group">
                        
   						  <label for="inputQtdSucoMaranhao"><font color="#000000">Quantidade</font></label>
                            
						  <select id="inputQtdSucoMaranhao" class="form-control-sm" name="inputQtdSucoMaranhao">
        						<option selected>0</option>
        						<option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                
   						  </select>
    					</div><th scope="col" class="align-middle">
      						
                            
    							<font color="#FF0000">Preco Unitário 
                                R$ <?php echo $preco_Sucos; ?> </font> 
    							
    							
  							
                        </th>
                        
   				  </tr>
  			</thead>
            
            <!-- FIM CAMPO MARANHAO-->            
            
 <!--******************************************************************************************************-->            
            
 
 <!--******************************************************************************************************-->           
            
            
            <!-- INICIO SUCO MARIA-->
                    
    				<tr>
      					<th scope="col"><img src="images/sucos/SucoMaria/sucomaria.fw.png" width="162" height="80" class="img-thumbnail"></th>
      					<th scope="col" class="align-middle"><font color="#000000">Suco Maria</font>
                        <small id="sucMariaHelp" class="form-text text-success">Agrião / Coco / Pepino</small></th>
                        <th scope="col">
      					
                        <div class="form-group">
                        
   						  <label for="inputQtdSucoMaria"><font color="#000000">Quantidade</font></label>
                            
						  <select id="inputQtdSucoMaria" class="form-control-sm" name="inputQtdSucoMaria">
        						<option selected>0</option>
        						<option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                
   						  </select>
    					</div><th scope="col" class="align-middle">
      						
                            
    							<font color="#FF0000">Preco Unitário 
                                R$ <?php echo $preco_Sucos; ?> </font> 
    							
    							
  							
                        </th>
   				  </tr>
  			</thead>
            
            <!-- FIM CAMPO MARIA-->            
            
 <!--******************************************************************************************************-->           
            
<!--******************************************************************************************************-->           
            
            
            <!-- INICIO SUCO SAKITO-->
                    
    				<tr>
      					<th scope="col"><img src="images/sucos/SucoSakito/sucoSakito.fw.png" width="162" height="80" class="img-thumbnail"></th>
      					<th scope="col" class="align-middle"><font color="#000000">Suco Sakito</font>
                        <small id="sucSakitoHelp" class="form-text text-success">Abacaxi / Limão / Couve / Gengibre</small></th>
                        <th scope="col">
      					
                        <div class="form-group">
                        
   						  <label for="inputQtdSucoSakito"><font color="#000000">Quantidade</font></label>
                            
						  <select id="inputQtdSucoSakito" name="inputQtdSucoSakito" class="form-control-sm">
        						<option selected>0</option>
        						<option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                
   						  </select>
    					</div><th scope="col" class="align-middle">
      						
                            
    							<font color="#FF0000">Preco Unitário 
                                R$ <?php echo $preco_Sucos; ?> </font> 
    							
    							
  							
                        </th>
                        
   				  </tr>
  			</thead>
            
            <!-- FIM CAMPO SAKITO-->            
            
 <!--******************************************************************************************************-->
   
 <!--******************************************************************************************************-->           
            
            
            <!-- INICIO SUCO SECA BARRIGA-->
                    
    				<tr>
      					<th scope="col"><img src="images/sucos/SucoSecaBarriga/sucoSecaBarriga.fw.png" width="162" height="80" class="img-thumbnail"></th>
      					<th scope="col" class="align-middle"><font color="#000000">Suco Seca Barriga</font>
                        <small id="sucSecaBarrigaHelp" class="form-text text-success">Mamão / Pepino / Limão / Chia / Gengibre</small></th>
                        <th scope="col">
      					
                        <div class="form-group">
                        
   						  <label for="inputQtdSucoSecaBarriga"><font color="#000000">Quantidade</font></label>
                            
						  <select id="inputQtdSucoSecaBarriga" name="inputQtdSucoSecaBarriga" class="form-control-sm">
        						<option selected>0</option>
        						<option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                
   						  </select>
    					</div><th scope="col" class="align-middle">
      						
                            
    							<font color="#FF0000">Preco Unitário 
                                R$ <?php echo $preco_Sucos; ?> </font> 
    							
    							
  							
                        </th>
                        
   				  </tr>
  			</thead>
            
        </table>
            
            <!-- FIM CAMPO SECA BARRIGA-->            
            
<!--******************************************************************************************************-->
       <!--***********************************FIM SUCOS****************************************-->
<!--******************************************************************************************************-->
<!--******************************************************************************************************-->
       <!--***********************************INICIO SANDUICHES *****************************************-->
<!--******************************************************************************************************-->

<div class="row border border-light justify-content-center" style="background-color: #00BFA5; color:#FF0;">
                       
	<h2><font face="Arial, Helvetica, sans-serif">Sanduíches</font></h2>
        
</div>        
            
            <table class="table table-striped">
            
            
              	<thead>

<!--******************************************************************************************************-->
                
                	<!-- INICIO SANDUICHE A FOME-->
                    
    				<tr>
      					<th scope="col"><img src="images/sanduiches/afome/sanduicheAfome.fw.png" width="162" height="80" class="img-thumbnail"></th>
      					<th scope="col" class="align-middle"><font color="#000000">A Fome</font>
                        <small id="SanduicheAFomeHelp" class="form-text text-success">Pão / Carne / Ovo / Presunto / Queijo</small></th>
                        <th scope="col">
      					
                        <div class="form-group">
                        
   						  <label for="inputQtdSanduicheAFome"><font color="#000000">Quantidade</font></label>
                            
						  <select id="inputQtdSanduicheAFome" class="form-control-sm" name="inputQtdSanduicheAFome">
        						<option selected>0</option>
        						<option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                
   						  </select>
    					</div>
                        
                        
                      	</th><th scope="col" class="align-middle">
      						
                            
    							<font color="#FF0000">Preco Unitário 
                                R$ <?php echo $preco_Sanduba; ?> </font> 
    							
    							
  							
                        </th>
                        
   				  </tr>
  			</thead>
            
            <!-- FIM CAMPO SANDUICHEA FOME-->
            
 <!--******************************************************************************************************-->
 
 <!--******************************************************************************************************-->
                
                	<!-- INICIO SANDUICHE ESTUDANTE-->
                    
    				<tr>
      					<th scope="col"><img src='images/sanduiches/estudante/sanduicheEstudante.fw.png' width="162" height="80" class="img-thumbnail"></th>
      					<th scope="col" class="align-middle"><font color="#000000">Estudante</font>
                        <small id="SanduicheEstudanteHelp" class="form-text text-success">Pão / Carne / Salada</small></th>
                        <th scope="col">
      					
                        <div class="form-group">
                        
   						  <label for="inputQtdSanduicheEstudante"><font color="#000000">Quantidade</font></label>
                            
						  <select id="inputQtdSanduicheEstudante" class="form-control-sm" name="inputQtdSanduicheEstudante">
        						<option selected>0</option>
        						<option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>

                                
   						  </select>
    					</div>
                        
                        
                      	</th><th scope="col" class="align-middle">
      						
                            
    							<font color="#FF0000">Preco Unitário 
                                R$ <?php echo $preco_Sanduba; ?> </font> 
    							
    							
  							
                        </th>
                        
   				  </tr>
  			</thead>
            
            <!-- FIM CAMPO SANDUICHE ESTUDANTE-->
            
 <!--******************************************************************************************************-->
 
<!--******************************************************************************************************-->
                
                	<!-- INICIO SANDUICHE GULOSO-->
                    
    				<tr>
      					<th scope="col"><img src="images/sanduiches/guloso/sanduicheGuloso.fw.png" width="162" height="80" class="img-thumbnail"></th>
      					<th scope="col" class="align-middle"><font color="#000000">Guloso</font>
                        <small id="SanduicheGulososHelp" class="form-text text-success">Pão / Carne / Ovo / Presunto / Queijo / Tomate / Alface</small></th>
                        <th scope="col">
      					
                        <div class="form-group">
                        
   						  <label for="inputQtdSanduicheGuloso"><font color="#000000">Quantidade</font></label>
                            
						  <select id="inputQtdSanduicheGuloso" class="form-control-sm" name="inputQtdSanduicheGuloso">
        						<option selected>0</option>
        						<option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                
   						  </select>
    					</div>
                        
                        
                      	</th><th scope="col" class="align-middle">
      						
                            
    							<font color="#FF0000">Preco Unitário 
                                R$ <?php echo $preco_Sanduba; ?> </font> 
    							
    							
  							
                        </th>
                        
   				  </tr>
  			</thead>
            
            <!-- FIM CAMPO SANDUICHE GULOSO-->
            
<!--******************************************************************************************************-->
 
 <!--******************************************************************************************************-->
                
                	<!-- INICIO SANDUICHE MEIO DIA-->
                    
    				<tr>
      					<th scope="col"><img src="images/sanduiches/meiodia/sanduichemeiodia.fw.png" width="162" height="80" class="img-thumbnail"></th>
      					<th scope="col" class="align-middle"><font color="#000000">Meio Dia</font>
                        <small id="SanduicheMeioDiaHelp" class="form-text text-success">Pão / Carne / Salada / Queijo</small></th>
                        <th scope="col">
      					
                        <div class="form-group">
                        
   						  <label for="inputQtdSanduicheMeioDia"><font color="#000000">Quantidade</font></label>
                            
						  <select id="inputQtdSanduicheMeioDia" class="form-control-sm" name="inputQtdSanduicheMeioDia">
        						<option selected>0</option>
        						<option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                
   						  </select>
    					</div>
                        
                        
                      	</th><th scope="col" class="align-middle">
      						
                            
    							<font color="#FF0000">Preco Unitário 
                                R$ <?php echo $preco_Sanduba; ?> </font> 
    							
    							
  							
                        </th>
                        
   				  </tr>
  			</thead>
            
            <!-- FIM CAMPO SANDUICHE GULOSO-->
            
<!--******************************************************************************************************-->

<!--******************************************************************************************************-->
                
                	<!-- INICIO SANDUICHE MERENDÃO-->
                    
    				<tr>
      					<th scope="col"><img src="images/sanduiches/merendao/sanduichemerendao.fw.png" width="162" height="80" class="img-thumbnail"></th>
      					<th scope="col" class="align-middle"><font color="#000000">Merendão</font>
                        <small id="SanduicheMerendaoHelp" class="form-text text-success">Pão Francês / Linguiça à Mineira</small></th>
                        <th scope="col">
      					
                        <div class="form-group">
                        
   						  <label for="inputQtdSanduicheMerendao"><font color="#000000">Quantidade</font></label>
                            
						  <select id="inputQtdSanduicheMerendao" class="form-control-sm" name="inputQtdSanduicheMerendao">
        						<option selected>0</option>
        						<option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                
   						  </select>
    					</div>
                        
                        
                      	</th><th scope="col" class="align-middle">
      						
                            
    							<font color="#FF0000">Preco Unitário 
                                R$ <?php echo $preco_Sanduba; ?> </font> 
    							
    							
  							
                        </th>
                        
   				  </tr>
  			</thead>
            
            <!-- FIM CAMPO SANDUICHE MERENDAO-->
            
<!--******************************************************************************************************-->

            
        </table>

<div class="row border border-light justify-content-center" style="background-color: #00BFA5; color:#FF0;">
                       
	<h2><font face="Arial, Helvetica, sans-serif">Sanduíches Naturais</font></h2>
        
</div>
			        
<!--******************************************************************************************************-->
       <!--***********************************INICIO SANDUICHES NATURAIS**********************************-->
<!--******************************************************************************************************-->        
            
            <table class="table table-striped">
            
            
              	<thead>

<!--******************************************************************************************************-->
                
                	<!-- INICIO SANDUICHE NATURAL MALVADO-->
                    
    				<tr>
      					<th scope="col"><img src="images/sanduichesNaturais/Malvado/sanduicheMalvado.fw.png" width="162" height="80" class="img-thumbnail"></th>
      					<th scope="col" class="align-middle"><font color="#000000">Sanduíche Malvado (Natural)</font>
                        <small id="SanduicheNaturalMalvadoHelp" class="form-text text-success">Pão / Salada / Frango</small></th>
                        <th scope="col">
      					
                        <div class="form-group">
                        
   						  <label for="inputQtdSanduicheNaturalMalvado"><font color="#000000">Quantidade</font></label>
                            
						  <select id="inputQtdSanduicheNaturalMalvado" class="form-control-sm" name="inputQtdSanduicheNaturalMalvado">
        						<option selected>0</option>
        						<option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                
   						  </select>
    					</div>
                        
                        
                      	</th>
                      
                        <th scope="col" class="align-middle">
      						
                            
    							<font color="#FF0000">Preco Unitário 
                                R$ <?php echo $preco_Sanduba_Natural; ?> </font> 
    							
    							
  							
                        </th>
                        
   				  </tr>
  			</thead>
            
            <!-- FIM CAMPO SANDUICHE NATURAL MALVADO-->
            
 <!--******************************************************************************************************-->
 
 
 
 <!--******************************************************************************************************-->
                
                	<!-- INICIO SANDUICHE NATURAL PESO PESADO-->
                    
    				<tr>
      					<th scope="col"><img src="images/sanduichesNaturais/pesoPesado/pesopesado.fw.png" width="162" height="80" class="img-thumbnail"></th>
      					<th scope="col" class="align-middle"><font color="#000000">Sanduíche Peso Pesado (Natural)</font>
                        <small id="SanduicheNaturalPesoPesadoHelp" class="form-text text-success">Pão / Salada / Atum</small></th>
                        <th scope="col">
      					
                        <div class="form-group">
                        
   						  <label for="inputQtdSanduicheNaturalPesoPesado"><font color="#000000">Quantidade</font></label>
                            
						  <select id="inputQtdSanduicheNaturalPesoPesado" class="form-control-sm" name="inputQtdSanduicheNaturalPesoPesado">
        						<option selected>0</option>
        						<option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                
   						  </select>
    					</div>
                        
                        
                      	</th>
                      
                        <th scope="col" class="align-middle">
      						
                            
    							<font color="#FF0000">Preco Unitário 
                                R$ <?php echo $preco_Sanduba_Natural; ?> </font> 
    							
    							
  							
                        </th>
                        
   				  </tr>
  			</thead>
            
            <!-- FIM CAMPO SANDUICHE NATURAL PESO PESADO-->
            
 <!--******************************************************************************************************-->            
 
 
  <!--******************************************************************************************************-->
                
                	<!-- INICIO SANDUICHE NATURAL SARADO-->
                    
    				<tr>
      					<th scope="col"><img src="images/sanduichesNaturais/sarado/sanduicheSarao.fw.png" width="162" height="80" class="img-thumbnail"></th>
      					<th scope="col" class="align-middle"><font color="#000000">Sanduíche Sarado (Natural)</font>
                        <small id="SanduicheNaturalSaradoHelp" class="form-text text-success">Pão / Queijo Minas (derretido com orégano)</small></th>
                        <th scope="col">
      					
                        <div class="form-group">
                        
   						  <label for="inputQtdSanduicheNaturalSarado"><font color="#000000">Quantidade</font></label>
                            
						  <select id="inputQtdSanduicheNaturalSarado" class="form-control-sm" name="inputQtdSanduicheNaturalSarado">
        						<option selected>0</option>
        						<option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                
   						  </select>
    					</div>
                        
                        
                      	</th>
                      
                        <th scope="col" class="align-middle">
      						
                            
    							<font color="#FF0000">Preco Unitário 
                                R$ <?php echo $preco_Sanduba_Natural; ?> </font> 
    							
    							
  							
                        </th>
                        
   				  </tr>
  			</thead>
            
            <!-- FIM CAMPO SANDUICHE NATURAL PESO PESADO-->
            
 <!--******************************************************************************************************-->           
           
        </table>

 <!--******************************************************************************************************-->
     <!--***********************************FIM SANDUICHES NATURAIS**********************************-->
<!--******************************************************************************************************-->        
 	
<div class="row border border-light justify-content-center" style="background-color: #00BFA5; color:#FF0;">
                       
	<h2><font face="Arial, Helvetica, sans-serif">Sucos</font></h2>

</div>
 
<div class="row border border-light justify-content-center" style="background-color: #C82333; color:#FF0;">

		<!--<button type="button" class="btn btn-warning mr-3" data-toggle="modal" data-target="#VisualizacaoPedido" >Visulaizar Pedido</button>-->

		    
		<button class="btn btn-success mr-3" name="enviar" type="submit" id="btn_enviar">Enviar Pedido...</button>
        

        
</div>
           
    
    
    
    
    
    
    
    
    
    
    
    </div>

   
 <!--******************************************************************************************************-->
     <!--***********************************FIM SANDUICHES**********************************-->
<!--******************************************************************************************************-->       
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
<div class="row bg-light">        
        
        
            
            
    
             

</div>

                           
	
                    
</form>

</div>


    
    <!--************************************************************************************-->
    <br>
    <div class="container-fluid">
    
    	<div class="row border border-success rounded justify-content-center" style="vertical-align:central; color:#000;">
        
   	    		<img src="images/delivery.fw.png" width="1445" height="300" class="img-fluid img-thumbnail">
        
        </div>

	</div>


<br><br><br>



<!--***********************************************************************************************-->
<!--***********************************************************************************************-->
<!--*****************************************MODAL*************************************************-->
<!--***********************************************************************************************-->
<!--***********************************************************************************************-->


	
<div class="container">
	<div class="row">
    	<div class="col-12">
        
        
        
        	
        	<div id="VisualizacaoPedido" class="modal">
            	<div class="modal-dialog" role="document">
                	<div class="modal-content">
                    	<form method="get" id="pedidos" action="send_mail.php">
                    	<div class="modal-header">
                        	<h5 class="modal-title">Visulalização do Pedido</h5>
                            <button type="button" class="close btn btn-danger" data-dismiss="modal" aria-label="Fechar">
                            	<span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        
                        <div class="modal-header">
                        	R$ <?php echo $nome ?>
                        </div>
                        
                        <div class="modal-footer">
                        	<button class="btn btn-success mr-3" name="enviar" type="submit" id="btn_enviar_modal">Enviar Pedido...</button>
                        	<button type="button" class="btn btn-success">Confirmar e enviar</button>
                            
                            <button type="button" class="close btn btn-danger mr-3" data-dismiss="modal" aria-label="Fechar">
                            	<span aria-hidden="true">Fechar sem confirmar</span>
                            </button>
                        </div>
                                                
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>	














<?php include_once "footer.php";?>

