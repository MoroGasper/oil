<h2 class="first">Editing <?php echo \Str::ucfirst($singular_name); ?></h2>

<?php echo '<?php'; ?> echo render('<?php echo $view_path; ?>/_form'); ?>
<br />
<p>
<?php echo '<?php'; ?> echo Html::anchor('<?php echo $uri; ?>/view/'.$<?php echo $singular_name; ?>->id, 'View'); <?php echo '?>'; ?> |
<?php echo '<?php'; ?> echo Html::anchor('<?php echo $uri; ?>', 'Back'); <?php echo '?>'; ?>
</p>