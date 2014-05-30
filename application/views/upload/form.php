<form method="post" action="<?=base_url('upload/do_upload')?>" enctype="multipart/form-data">

	<input type="file" name="file_upload" size="20" />

	<input type="submit" name="submit" value="Submit Form">

<?=form_close()?>