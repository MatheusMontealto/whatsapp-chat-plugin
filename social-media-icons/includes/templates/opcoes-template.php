<?php 
    $smi_opcoes = get_option('smi_opcoes_icons'); 
?>

<div class="wrap">  
 <h3>Opções Plugin WhatsApp</h3>
 <hr>
 <form action="options.php" method="post">  
    <?php settings_fields('smi_opcoes'); ?> 


    <label>Link do WhatsApp</label><br></br>
    <input type="url" name="smi_opcoes_icons[wp_perfil]" id="smi_opcoes_icons[wp_perfil]" value="<?php echo $smi_opcoes['wp_perfil']; ?>"><br>

    </br>
    <input type="submit" name="submit" value="Salvar link">
 </form>
</div>