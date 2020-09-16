<?php

 function smi_plugin_registrando_conteudo($post) {
     echo $post;
     require_once(SMI_DIRETORIO_ABSOLUTO_DO_PLUGIN.'/includes/templates/conteudo.php');
 }

  add_filter('wp_footer','smi_plugin_registrando_conteudo');

?>