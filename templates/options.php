<div class="wrap">
<div class="icon32"><img src='<?php echo plugins_url('/images/icon-32.png', dirname(__FILE__))?>' /></div>
        
<h2>Configuração <?php echo self::PLUGIN_NAME?>:</h2>


<p>Configure as opções do plugin nesta página</p>
    
  		<table width="100%"><tr>
        <td style="vertical-align:top">
 
 		<form action="" method="post">
        
        <div class="metabox-holder">         
		<div class="postbox" >
        
        	<h3>Configurações Globais</h3>
        
        	<div class="inside">
                <p>
                <label > ID do Site</label>                
				<input name="id" type="text" id="id" value="<?php echo $options["id"]?>" />
                <small>Cada site aprovado no Hotwords possui um ID</small>
                </p>
                
                <p>
               <strong>Onde exibir</strong> <br />   
                
                  <input type="checkbox" name="lugares[]" value="todos" <?php echo self::is_checked_checkbox('todos',$options["lugares"]);?>> Qualquer Lugar<br />
                  <input type="checkbox" name="lugares[]" value="home" <?php echo self::is_checked_checkbox('home',$options["lugares"]);?>> Na Home do Site<br />
                  <input type="checkbox" name="lugares[]" value="single" <?php echo self::is_checked_checkbox('single',$options["lugares"]);?>> Nos Posts<br />
                  <input type="checkbox" name="lugares[]" value="page" <?php echo self::is_checked_checkbox('page',$options["lugares"]);?>> Nas páginas<br />
                  
                </p>
                <p>
                  <input type="submit" name="submit" value="Salvar Alterações" class="button-primary" />
				</p>
</div>
		</div>
        </div>
 
 
 		<div class="metabox-holder">
 		<div class="postbox">
        
        	<h3>Configurações de Visual</h3>
        
        	<div class="inside">
                <p>
                <label > Código Hexadecimal da Cor</label>
				#<input name="cor" type="text" id="cor" value="<?php echo $options["cor"]?>" maxlength="6" />
                <small>Cor a ser utilizada nos Links</small></p>
                <p>
                Veja uma tabela de cores e seus respectivos códigos (6 caracteres)<br />
                <img src="<?php echo $anderson_makiyama[self::PLUGIN_ID]->plugin_url?>images/hextable.gif" /></p>
                <p>
                <input type="submit" name="submit" value="Salvar Alterações" class="button-primary" />
				</p>

			</div>
            
		</div>
        </div>
        
        </form>
          
   		</td>
        <td style="vertical-align:top; width:340px">
        
        <div class="metabox-holder">
		<div class="postbox" >
        
        	<h3 style="font-size:24px; text-transform:uppercase;color:#F00;">
        	Gostou do Plugin? Curta os meus Sites!
            </h3>
            
             <h3><a href="http://profissionais.ws" target="_blank">Profissionais Web</a></h3>
             
        	<div class="inside">
                <p>
                <iframe src="<?php echo $anderson_makiyama[self::PLUGIN_ID]->plugin_url?>author/profissionais.html" width="310" height="100" frameborder="0" scrolling="no"></iframe>
				</p>

			</div>
            
            <h3><a href="http://ganhardinheiroblog.net" target="_blank">Ganhar Dinheiro Blog</a></h3>
            
        	<div class="inside">
                <p>
                <iframe src="<?php echo $anderson_makiyama[self::PLUGIN_ID]->plugin_url?>author/ganhardinheiroblog.html" width="310" height="100" frameborder="0" scrolling="no"></iframe>
				</p>

			</div>            

            <h3><a href="http://sitegratis.ws" target="_blank">Site Gratis</a></h3>
            
        	<div class="inside">
                <p>
                <iframe src="<?php echo $anderson_makiyama[self::PLUGIN_ID]->plugin_url?>author/sitegratis.html" width="310" height="100" frameborder="0" scrolling="no"></iframe>
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

<li>Autor: <strong>Anderson Makiyama</strong>

</li>

<li>Email do Autor: <a href="mailto:andersonmaki@gmail.com" target="_blank">andersonmaki@gmail.com</a>

</li>

<li>Visite a Página do Plugin: <a href="<?php echo self::PLUGIN_PAGE?>" target="_blank"><?php echo self::PLUGIN_PAGE?></a>

</li>

<li>

Visite a Página do Autor: <a href="http://ganhardinheiroblog.net" target="_blank">Ganhar Dinheiro Blog</a>

</li>

</ul>
</td>
</tr>
</table>

</div>