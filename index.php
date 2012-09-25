<?php
/*
Plugin Name: Hotwords
Plugin URI: http://profissionais.ws/plugin-wordpress-hotwords
Description: Este plugin insere os códigos do Htwords no teu blog Wordpress
Author: Anderson Makiyama
Version: 0.1
Author URI: http://ganhardinheiroblog.net
*/

class Anderson_Makiyama_Hotwords{

	const CLASS_NAME = 'Anderson_Makiyama_Hotwords';
	public static $CLASS_NAME = self::CLASS_NAME;
	const PLUGIN_ID = 4;
	public static $PLUGIN_ID = self::PLUGIN_ID;
	const PLUGIN_NAME = 'Hotwords';
	public static $PLUGIN_NAME = self::PLUGIN_NAME;
	const PLUGIN_PAGE = 'http://profissionais.ws/plugin-wordpress-hotwords';
	public static $PLUGIN_PAGE = self::PLUGIN_PAGE;
	const PLUGIN_VERSION = '0.1';
	public static $PLUGIN_VERSION = self::PLUGIN_VERSION;
	public $plugin_basename;
	public $plugin_path;
	public $plugin_url;
	
	public function get_static_var($var) {

        return self::$$var;

    }
	
	public function activation(){
		
		$options = get_option(self::CLASS_NAME . "_options");

		if(!isset($options['id'])) $options['id'] = "";
		if(!isset($options['cor'])) $options['cor'] = '0099ff';
		if(!isset($options['lugares'])) $options['lugares'] = array("single");

		update_option(self::CLASS_NAME . "_options", $options);
		
	}
	
	public function Anderson_Makiyama_Hotwords(){ //__construct()

		$this->plugin_basename = plugin_basename(__FILE__);
		$this->plugin_path = dirname(__FILE__) . "/";
		$this->plugin_url = WP_PLUGIN_URL . "/" . basename(dirname(__FILE__)) . "/";
		
		//load_plugin_textdomain( self::CLASS_NAME, '', strtolower(str_replace(" ","-",self::PLUGIN_NAME)) . '/lang' );	

	}
	
	public function show_links($content){
		
		$options = get_option(self::CLASS_NAME . "_options");
		
		$ini = '<div id="HOTWordsTxt" name="HOTWordsTxt">';
		$end = '</div>';
		
		if(!empty($options["lugares"])){
		
			if(in_array("todos",$options["lugares"])){

				if(strpos($content, $ini)=== false){
					$content = $ini . $content . $end;	
				}
			
			}else{
			
				foreach($options["lugares"] as $lugar){
					
					if(call_user_func("is_".$lugar)){
						
						if(strpos($content, $ini)=== false){
							$content = $ini . $content . $end;
							break;
						}	
						
					}
					
				}
			
			}
			

		
		}
		
		return $content;

	}
	
	public function footer_js(){
		
		$options = get_option(self::CLASS_NAME . "_options");
		
		$script = '<script src="http://ads'. $options["id"] .'.hotwords.com.br/show.jsp?id='. $options["id"] .'&cor='. $options["cor"] .'"></script>';
		
		echo $script;
	}
	

	public function settings_link($links) { 
		global $anderson_makiyama;
	  
		$settings_link = '<a href="options-general.php?page='. self::CLASS_NAME .'">'. 'Configurações'. '</a>'; 
		array_unshift($links, $settings_link); 
		return $links; 
	}	
	

	public function options(){

		global $anderson_makiyama;

		get_currentuserinfo();


		if (function_exists('add_options_page')) { //Adiciona pagina na seção Configurações
			
			add_options_page(self::PLUGIN_NAME, self::PLUGIN_NAME, 1, self::CLASS_NAME, array(self::CLASS_NAME,'options_page'));
		
		}
		if (function_exists('add_submenu_page')){ //Adiciona pagina na seção plugins
			
			add_submenu_page( "plugins.php",self::PLUGIN_NAME,self::PLUGIN_NAME,1, self::CLASS_NAME, array(self::CLASS_NAME,'options_page'));			  
		}

  		 add_menu_page(self::PLUGIN_NAME, self::PLUGIN_NAME,1, self::CLASS_NAME,array(self::CLASS_NAME,'options_page'), plugins_url('/images/icon.png', __FILE__));
		 
		 add_submenu_page(self::CLASS_NAME, self::PLUGIN_NAME,'Página de Suporte',1, self::CLASS_NAME . "_Help", array(self::CLASS_NAME,'help_page'));

	}	

	

	public function options_page(){

		global $anderson_makiyama;

		global $user_level;

		get_currentuserinfo();

		if ($user_level < 10) { //Limita acesso para somente administradores

			return;

		}	

		$options = get_option(self::CLASS_NAME . "_options");

		if ($_POST['submit']) {

			$options['id'] = $_POST['id'];
			$options['cor'] = str_replace("#","",$_POST['cor']);
			$options['lugares'] = $_POST['lugares'];

			update_option(self::CLASS_NAME . "_options", $options);
			
			echo '<div id="message" class="updated">';
			echo '<p><strong>'. 'Configurações salvas com sucesso!' . '</strong></p>';
			echo '</div>';			

		}


		include("templates/options.php");

	}		


	public function help_page(){

		global $anderson_makiyama;

		include("templates/help.php");

	}	
	

	public static function make_data($data, $anoConta,$mesConta,$diaConta){

	   $ano = substr($data,0,4);
	   $mes = substr($data,5,2);
	   $dia = substr($data,8,2);

	   return date('Y-m-d',mktime (0, 0, 0, $mes+($mesConta), $dia+($diaConta), $ano+($anoConta)));	

	}
	
	

	public static function get_data_array($data,$part=''){

	   $data_ = array();
	   $data_["ano"] = substr($data,0,4);
	   $data_["mes"] = substr($data,5,2);
	   $data_["dia"] = substr($data,8,2);
	   
	   if(empty($part))return $data_;

	   return $data_[$part];

	}	
	
	

	public static function is_checked_checkbox($vl, $fields){

		if(in_array($vl, $fields)){
		
			return " checked=checked ";
			
		}

		return "";
		
	}	
	
	
	public static function is_checked_radio($vl1,$vl2){

		if($vl1==$vl2) return " checked=checked ";

		return "";
		
	}		

	public static function is_selected($vl1, $vl2){

		if($vl1==$vl2) return " selected=selected ";

		return "";

	}	
	

}

if(!isset($anderson_makiyama)) $anderson_makiyama = array();

$anderson_makiyama_indice = Anderson_Makiyama_Hotwords::PLUGIN_ID;

$anderson_makiyama[$anderson_makiyama_indice] = new Anderson_Makiyama_Hotwords();

register_activation_hook( __FILE__, array($anderson_makiyama[$anderson_makiyama_indice]->get_static_var('CLASS_NAME'), 'activation') );

add_filter("plugin_action_links_". $anderson_makiyama[$anderson_makiyama_indice]->plugin_basename, array($anderson_makiyama[$anderson_makiyama_indice]->get_static_var('CLASS_NAME'), 'settings_link') );

add_filter("admin_menu", array($anderson_makiyama[$anderson_makiyama_indice]->get_static_var('CLASS_NAME'), 'options'),30);

add_filter("the_content", array($anderson_makiyama[$anderson_makiyama_indice]->get_static_var('CLASS_NAME'), 'show_links'));

add_action("wp_footer", array($anderson_makiyama[$anderson_makiyama_indice]->get_static_var('CLASS_NAME'), 'footer_js'));


?>