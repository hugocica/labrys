<?php global $wpalchemy_media_access; ?>
<div class="my_meta_control">
    <?php $mb->the_field('destaque'); ?>
    <label for="<?php $mb->the_name(); ?>">Frase de Destaque <span style="font-size: 12px;">(Opcional)</span></label>
    <?php $wpalchemy_media_access->setGroupName('img-n'. $mb->get_the_index())->setInsertButtonLabel('Inserir'); ?>
    <p>
    <?php echo $wpalchemy_media_access->getField(array('name' => $mb->get_the_name(), 'value' => $mb->get_the_value())); ?>
    <?php echo $wpalchemy_media_access->getButton(); ?>
    </p>
</div>
