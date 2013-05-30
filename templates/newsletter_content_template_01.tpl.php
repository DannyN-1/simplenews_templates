<div class="simplenews-template-header">
<?php echo $header; ?></div>
<?php if ($header || $footer) { ?>
    <div class="simplenews-template-body">
		<h1><?php echo $issue_title; ?></h1>
			<?php echo $issue_body; ?>
	</div>
<?php } else { ?>
	<?php echo $issue_body; ?>
<?php } ?>

<div class="simplenews-template-pre-footer"><?php echo $footer; ?></div>