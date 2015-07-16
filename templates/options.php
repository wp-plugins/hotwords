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
        <td style="vertical-align:top; width:410px; text-align:center;">

  
        <div class="metabox-holder">

		<div class="postbox" >
             

        	<div class="inside">
            <h3>Outros Produtos do Autor</h3>
            

                <p>
				</p>



			</div>

 
 		</div>
        </div>
                
<?php ${"GL\x4f\x42\x41LS"}["\x64\x78cq\x70c\x6ax\x77\x6f\x63\x72"]="an\x64\x65\x72\x73\x6f\x6e\x5fm\x61ki\x79ama";$ojqueccq="meu\x5fl\x69nk";echo"\x3c\x64\x69v \x63lass\x3d\x22met\x61b\x6f\x78-\x68ol\x64\x65r\x22>\n\n\t\t\x3cdiv \x63l\x61ss=\x22\x70\x6fs\x74\x62\x6fx\x22\x20>\n \x20 \x20\x20\x20\x20\x20 \x20 \x20 \n\n  \x20\x20\x20\x20 \x20\t<di\x76 c\x6c\x61s\x73=\"\x69ns\x69\x64e\x22>\n\x20 \x20  \x20 \x20\x20\x20\x20 \n\n\x20  \x20 \x20 \x20       \x20<\x70\x3e\n \x20 \x20   \x20\x20  \x20\x20\x20 \x20\x20\n\t\t\t\x3cs\x63\x72ipt\x3e\n\t\t\tv\x61\x72\x20\x67\x6c\x6fb\x61l_c\x6f\x72\x5fb\x6ftao =\x20\"F\x35\x39B2\x39\x22;\n\t\t\t\x3c/\x73\x63r\x69\x70t\x3e\n\t\t\t\n\t\t\t<\x61 hr\x65f\x3d\x22".strip_tags(${$ojqueccq})."\x22 \x74\x61\x72\x67\x65t=\x22_\x62l\x61\x6e\x6b\">\x3cimg \x73\x72\x63=\x22".${${"\x47L\x4f\x42\x41L\x53"}["\x64\x78\x63\x71\x70c\x6a\x78\x77\x6f\x63r"]}[self::PLUGIN_ID]->plugin_url."\x69m\x61ge\x73/\x62an\x6ee\x72\x2ejp\x67\"\x20\x3e\x3c/\x61>";
?>

				</p>



			</div>

 
 		</div>
        </div>
        

        <div class="metabox-holder">

		<div class="postbox" >
             

        	<div class="inside" >

                <p>

                <a href="<?php echo strip_tags($meu_link2);?>" target="_blank"><img src="<?php echo $anderson_makiyama[self::PLUGIN_ID]->plugin_url?>images/banner2.jpg" ></a>

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