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
            <div class="informacion">
                <div class="form-group">
                    <label for="nombre">Nombre soporte:</label>
                    <div class="subir">
                        <input type="text" id="Nom" name="nombre" placeholder="Ingrese nombre del soporte" class="inpNombre"  autocomplete="off" required>
                        <span id="NomS" class="mensaje">Complete este campo</span>
                    </div>
                </div>
                <div class="form-group descripcion">
                    <label for="descripcion">Ingrese descripcion:</label>
                    <div class="subir">
                        <textarea rows='4' type='text' name='descripcion' id="descripcion"  autocomplete="off" placeholder="Ingrese Una descripcion" required></textarea>
                        <span id="DesS"class="mensaje des">Complete este campo</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="archivo">Subir archivo:</label>
                    <div class="subir">
                        <input type="file" autocomplete="off" id="archivo" name="archivo" required>
                        <span id="Arc" class="mensaje">Archivo No Valido</span>
                    </div>                          
                </div>
                <div class="form-group">
                    <div class="subir">
                        <input type="button" id="enviar" value="enviar">
                    </div>
                </div>
            </div>
        </form>
    </article>
</section>

