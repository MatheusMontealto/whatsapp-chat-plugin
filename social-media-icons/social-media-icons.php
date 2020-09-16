<?php
/*
    Plugin Name: WhatsApp CHAT 1.0 Beta
    Description: Plugin que cria um ícone de redirecionamento para um chat no WhatsApp
    Author: Matheus Montealto
    Author URI: https://github.com/MatheusMontealto
    Version: 1.0 Beta
*/

if(!defined('ABSPATH')){ 
    exit("Acesso negado");
}

define('SMI_DIRETORIO_ABSOLUTO_DO_PLUGIN', plugin_dir_path(__FILE__));

require_once(SMI_DIRETORIO_ABSOLUTO_DO_PLUGIN.'includes/social-media-icons-conteudo.php');
require_once(SMI_DIRETORIO_ABSOLUTO_DO_PLUGIN.'includes/social-media-icons-opcoes.php');

?>