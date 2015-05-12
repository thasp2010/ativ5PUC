<html>
<head>
<title>Formulário de Upload</title>
</head>
<body>



<?=form_open_multipart('galeria_fotos/do_upload'); ?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>

</body>
</html>