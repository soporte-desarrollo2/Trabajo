<section id="contenedor">
    <article class="listar">
        <span class='tutiloListar'>LISTAR DOCUMENTACION - REGISTRO CALIFICADO</span>
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
            <div class="datagrid">
                <table>
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Descripcion</th>
                            <th>Subido por</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                    </tbody>
                </table>
            </div>
        </form>
    </article>
</section>



