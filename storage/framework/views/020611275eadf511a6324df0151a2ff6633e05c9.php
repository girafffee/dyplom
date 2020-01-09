<textarea class="form-control richTextBox" name="<?php echo e($row->field); ?>" id="richtext<?php echo e($row->field); ?>">
    <?php echo e(old($row->field, $dataTypeContent->{$row->field} ?? '')); ?>

</textarea>
<?php /**PATH /var/www/clients/client13/web60/web/dyplom/vendor/tcg/voyager/src/../resources/views/formfields/rich_text_box.blade.php ENDPATH**/ ?>