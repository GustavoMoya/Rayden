<script type="text/javascript">
<?php if ($isNew == true) : ?>
	 setTimeout(function(){ document.location.href="<?php echo url_for('docente/show?id='.$Docente->getId()) ?>";}, 1000);
<?php  elseif ($accion == 'list') : ?>
  jQuery(document).ready(function() { 
    jQuery.ajax({
      type:'GET',
      dataType:'html',
      data:jQuery(this).serialize(),
      success:function(data, textStatus){
       	jQuery('#sf_admin_content form').html(data);
   			jQuery("#sf_admin_content form .colorbox").colorbox();
      },
      url: '<?php echo url_for('docente/listAjax') ?>'
    });
	});
<?php  elseif (($accion == 'show')) : ?>
  jQuery(document).ready(function() { 
    jQuery.ajax({
      type:'GET',
      dataType:'html',
      data:jQuery(this).serialize(),
      success:function(data, textStatus){
       	jQuery('#datos-perfil').html(data);
   			jQuery("#datos-perfil .colorbox").colorbox();
      },
      url: '<?php echo url_for('docente/datosPerfil?id='.$Docente->getId()) ?>'
    });
	});
<?php endif ?>

</script>

<span> El registro se ha guardado satisfactoriamente.</span>
