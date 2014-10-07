<section id="contenedor">
    <article class="listar">
        <span class='tutiloListar'>LISTAR DOCUMENTACION - AUTOEVALUACIÓN</span>
        <p>
        <form action="" name="form1" id="FormularioListar" method="POST">
            <div id="Facultad">
                <label for="sel_facultad" class="la">Seleccione Facultad:</label>
                <div class="select">
                <select name="facultad" id="sel_facultad">
                    <option value="0" selected></option>
                </select>
                </div>
            </div>
            <div id="Programa">
                <label for="sel_programa" ><span>Seleccione Programa:</span></label>
                <div class="select">
                    <select name="programa" id="sel_programa"></select>
                </div>
            </div>
            <div id="Factor">
                <label for="sel_factor"><span>Seleccione Factor:</span></label>
                <div class="select">
                    <select name="factor" id="sel_factor"></select>
                </div>
            </div>
            <div id="Caracteristicarc">
                <label for="sel_caracteristica"><span>Seleccione Caracteristica:</span></label>
                <div class="select">
                    <select name="caracteristica" id="sel_caracteristica"></select>
                </div>
            </div>
            <div id="Indicador">
                <label for="sel_indicador"><span>Seleccione Indicador:</span></label>
                <div class="select">
                    <select name="indicador" id="sel_indicador"></select>
                </div>
            </div>
            <div class="datagrid-autoevaluacion">
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