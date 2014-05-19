<div class="wrap">
<div class="icon32"><img src='<?php echo plugins_url('/images/icon-32.png', dirname(__FILE__))?>' /></div>
        
<h2><?php _e('Configurações',self::CLASS_NAME)?>:</h2>
    
  		<table width="100%"><tr>
        <td style="vertical-align:top">
 
 		<form action="" method="post">
        <?php
		 wp_nonce_field('update',self::CLASS_NAME);
		?>
        <div class="metabox-holder">         
		<div class="postbox" >
        
        	<h3><?php _e('Configurações Gerais',self::CLASS_NAME)?></h3>
        
        	<div class="inside">
                <p>
                <strong ><?php _e('ID do Site',self::CLASS_NAME)?></strong>                
				<input name="id" type="text" id="id" value="<?php echo $options["id"]?>" />
                <small><?php _e('Cada site aprovado no Hotwords possui um ID',self::CLASS_NAME)?></small>
                </p>

				<p>
               <strong><?php _e('Selecione o País',self::CLASS_NAME)?></strong> <select name="pais">
                	<option value="com.br" <?php selected("com.br",$options['pais']);?>><?php _e('Brasil',self::CLASS_NAME);?></option>
                    <option value="com.mx" <?php selected("com.mx",$options['pais']);?>><?php _e('México',self::CLASS_NAME);?></option>
                    <option value="com.ar" <?php selected("com.ar",$options['pais']);?>><?php _e('Argentina',self::CLASS_NAME);?></option>
                    <option value="pt" <?php selected("pt",$options['pais']);?>><?php _e('Portugal',self::CLASS_NAME);?></option>
                    <option value="es" <?php selected("es",$options['pais']);?>><?php _e('Espanha',self::CLASS_NAME);?></option>
                
                </select>
                </p>

                <p>
                  <input type="submit" name="submit" value="<?php _e('Salvar Alterações',self::CLASS_NAME)?>" class="button-primary" />
				</p>                

</div>
		</div>
        </div>
 
 
 		<div class="metabox-holder">
 		<div class="postbox">
        
        	<h3><?php _e('Configurações de Visual',self::CLASS_NAME)?></h3>
        
        	<div class="inside">
                <p>
                <strong><?php _e('Cor dos Links',self::CLASS_NAME)?></strong> #<input name="cor" type="text" id="cor" class='color' size="4" value="<?php echo $options["cor"]?>" maxlength="6" />
                <small><?php _e('Escolha a cor dos Links',self::CLASS_NAME)?></small></p>
             
				</p>

                <p>
               <strong><?php _e('Onde exibir:',self::CLASS_NAME)?></strong>&nbsp;&nbsp;&nbsp;&nbsp;          
                  <input type="checkbox" name="lugares[]" value="todos" <?php echo self::checked('todos',$options["lugares"]);?>><?php _e('Qualquer Lugar',self::CLASS_NAME)?>&nbsp;&nbsp;&nbsp;&nbsp; 
                  <input type="checkbox" name="lugares[]" value="home" <?php echo self::checked('home',$options["lugares"]);?>>Home&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="checkbox" name="lugares[]" value="single" <?php echo self::checked('single',$options["lugares"]);?>>Posts&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="checkbox" name="lugares[]" value="page" <?php echo self::checked('page',$options["lugares"]);?>><?php _e('Páginas',self::CLASS_NAME)?>
                  
                </p>

                <p>
                  <input type="submit" name="submit" value="<?php _e('Salvar Alterações',self::CLASS_NAME)?>" class="button-primary" />
				</p>  
                                
			</div>
            
		</div>
        </div>
        
        </form>
          
   		</td>
        <td style="vertical-align:top; width:410px">

        

        <div class="metabox-holder">

		<div class="postbox" >

        

        	<h3 style="font-size:24px; text-transform:uppercase;color:#F00;">

        	<?php _e('Dê uma Olhada!',self::CLASS_NAME);?>

            </h3>

            

             <h3><?php _e('Melhores Temas Wordpress',self::CLASS_NAME)?>: <a href="http://plugin-wp.net/elegantthemes" target="_blank">Elegant Themes</a></h3>

             

        	<div class="inside">

                <p>

                <a href="http://plugin-wp.net/elegantthemes" target="_blank"><img src="<?php echo $anderson_makiyama[self::PLUGIN_ID]->plugin_url?>images/elegantthemes.jpg" ></a>

				</p>



			</div>

 
 		</div>
        </div>
        
         <div class="metabox-holder">

		<div class="postbox" >           

            <h3><?php _e('Melhor Autoresponder para Email Marketing',self::CLASS_NAME)?>: <a href="http://plugin-wp.net/trafficwave" target="_blank">TrafficWave</a></h3>

            

        	<div class="inside">

                <p>

                <a href="http://plugin-wp.net/trafficwave" target="_blank"><img src="<?php echo $anderson_makiyama[self::PLUGIN_ID]->plugin_url?>images/trafficwave.jpg"></a>

				</p>



			</div> 

                        

		</div>

        </div>
              
       </td>
       </tr>
       </table>


<hr />


<table>
<tr>
<td>
<img src="<?php echo $anderson_makiyama[self::PLUGIN_ID]->plugin_url?>images/anderson-makiyama.png" />
</td>
<td>
<ul>

<li><?php _e('Autor:',self::CLASS_NAME);?> <strong>Anderson Makiyama</strong>

</li>

<li><?php _e('Email do Autor:',self::CLASS_NAME);?> <a href="mailto:andersonmaki@gmail.com" target="_blank">andersonmaki@gmail.com</a>

</li>

<li><?php _e('Visite a Página do Plugin:',self::CLASS_NAME);?> <a href="<?php echo self::PLUGIN_PAGE?>" target="_blank"><?php echo self::PLUGIN_PAGE?></a>

</li>

<li>

<?php _e('Visite a Página do Autor:',self::CLASS_NAME);?> <a href="http://ganhardinheiroblog.net" target="_blank">Ganhar Dinheiro Blog</a>

</li>

</ul>
</td>
</tr>
</table>

</div>