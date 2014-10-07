<section id="contenedor">
    <article class="listar">
        <span class='tutiloListar'>SUBIR DOCUMENTACION - REGISTRO CALIFICADO</span>
        <p>
        <form action="" name="form1" id="FormularioListar" method="POST">
            <div id="Facultad">
                <label for="sel_facultad">Seleccione Facultad:</label>
                <div class="select">
                    <select name="facultad" id="sel_facultad">
                        <option value="0" selected></option>
                    </select>
                </div>
            </div>
            <div id="Programa">
                <label for="sel_programa"><span>Seleccione Programa:</span></label>
                <div class="select">
                    <select name="programa" id="sel_programa"></select>
                </div>
            </div>
            <div id="Caracteristica">
                <label for="sel_caracteristicarc"><span>Seleccione Caracteristica:</span></label>
                <div class="select">
                    <select name="caracteristica" id="sel_caracteristicarc"></select>
                </div>
            </div>
            <div class="cargar">
                	<table>
                		<tr>
                			<td><label for="nombre">Ingrese el nombre soporte:</label></td>
                			<td><input type="text" name="nombre" required></td>
                		</tr>
                		<tr>
                			<td><label for="descripcion">Ingrese descripcion:</label></td>
                			<td><textarea rows='1' type='text' name='descripcion' required></textarea></td>
                		</tr>
                		<tr>
                			<td><label for="archivo">Subir archivo:</label></td>
                			<td><input type="file" name="archivo" required></td>
                		</tr>
                		<tr><td><input type="submit" value="enviar"></td></tr>
            		</table>
            </div>
        </form>
    </article>
</section>

