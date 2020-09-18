<style>
    .smi-conteudo .smi-icones img{
        width: 75px;
        height: auto;
        padding: 3px;
        position: fixed;
        left: 0;
        bottom: 0;
    }
</style>
<div class="smi-conteudo">
    <hr>
    <?php $smi_opcoes = get_option('smi_opcoes_icons'); ?>
    <div class="smi-icones">
      <a href="<?php echo $smi_opcoes['wp_perfil']; ?>"><img src="<?php echo plugin_dir_url(__FILE__).'../images/wp-icon.gif' ?>"></a>
    </div> 
</div>