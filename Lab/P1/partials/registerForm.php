<main>
	<h1>GestiÓn de Usuarios </h1>
	<form class="fom_usuario" action="?action=registrar" method="POST">

		<legend>Datos básicos</legend>
		<label for="name">Nombre</label>
		<br/>
		<input type="text" name="name" class="item_requerid" size="20" maxlength="50" value="<?php print $name ?>"
		 />
		<br/>
		<label for="surname">Apellido</label>
		<br/>
		<input type="text" name="surname" class="item_requerid" size="20" maxlength="50" value="<?php print $surname ?>"
		 />
		<br/>
		<label for="address">Direccion</label>
		<br/>
		<input type="text" name="address" class="item_requerid" size="8" maxlength="50" value="<?php print $address ?>"
		/>
		<br/>
		<label for="city">Ciudad</label>
		<br/>
		<input type="text" name="city" class="item_requerid" size="8" maxlength="50" value="<?php print $city ?>"
		/>
		<br/>
		<label for="zip_code">CP</label>
		<br/>
		<input type="text" name="zip_code" class="item_requerid" size="5" maxlength="5" value="<?php print $zip_code ?>"
		/>
		<br/>
		<label for="foto_file">Foto web</label>
		<br/>
		<input type="text" name="foto_file" class="item_requerid" size="8" maxlength="25" value="<?php print $foto_file ?>"
		/>
		<br/>
		<p><input type="submit" value="Enviar">
		<input type="reset" value="Deshacer">
		</p>
	</form>
</main>