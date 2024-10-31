<div class="col-lg-6 col-md-6 col-sm-12">
    <div class="row">
        <label for="89" class="col-sm-10 col-md-9 col-12 form-label">89.	Para poder resolver una situación que se presenta, analizo todas las posibilidades existentes.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s9" aria-label="Default select example" name="89" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('89') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('89') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('89') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('89') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('89') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="90" class="col-sm-10 col-md-9 col-12 form-label">90.	Soy capaz de respetar a los demás.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s7" aria-label="Default select example" name="90" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('90') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('90') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('90') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('90') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('90') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="91" class="col-sm-10 col-md-9 col-12 form-label">91.	No estoy contento(a) con mi vida.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s14" aria-label="Default select example" name="91" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('91') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('91') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('91') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('91') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('91') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="92" class="col-sm-10 col-md-9 col-12 form-label">92.	Prefiero seguir a otros a ser líder.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s5" aria-label="Default select example" name="92" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('92') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('92') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('92') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('92') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('92') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="93" class="col-sm-10 col-md-9 col-12 form-label">93.	Me resulta difícil enfrentar las cosas desagradables de la vida.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s12" aria-label="Default select example" name="93" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('93') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('93') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('93') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('93') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('93') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="94" class="col-sm-10 col-md-9 col-12 form-label">94.	Nunca he violado la ley.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s16" aria-label="Default select example" name="94" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('94') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('94') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('94') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('94') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('94') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="95" class="col-sm-10 col-md-9 col-12 form-label">95.	Disfruto de las cosas que me interesan.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s4" aria-label="Default select example" name="95" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('95') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('95') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('95') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('95') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('95') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="96" class="col-sm-10 col-md-9 col-12 form-label">96.	Me resulta relativamente fácil decirle a la gente lo que pienso.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s2" aria-label="Default select example" name="96" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('96') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('96') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('96') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('96') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('96') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="97" class="col-sm-10 col-md-9 col-12 form-label">97.	Tiendo a exagerar.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s10" aria-label="Default select example" name="97" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('97') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('97') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('97') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('97') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('97') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="98" class="col-sm-10 col-md-9 col-12 form-label">98.	Soy sensible a los sentimientos de las otras personas.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s7 s8" aria-label="Default select example" name="98" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('98') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('98') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('98') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('98') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('98') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="99" class="col-sm-10 col-md-9 col-12 form-label">99.	Mantengo buenas relaciones con los demás.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s6" aria-label="Default select example" name="99" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('99') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('99') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('99') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('99') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('99') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="100" class="col-sm-10 col-md-9 col-12 form-label">100.	Estoy contento(a) con mi cuerpo.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s3" aria-label="Default select example" name="100" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('100') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('100') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('100') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('100') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('100') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="101" class="col-sm-10 col-md-9 col-12 form-label">101.	Soy una persona muy extraña.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s17" aria-label="Default select example" name="101" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('101') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('101') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('101') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('101') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('101') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="102" class="col-sm-10 col-md-9 col-12 form-label">102.	Soy impulsivo(a).</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s13" aria-label="Default select example" name="102" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('102') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('102') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('102') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('102') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('102') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="103" class="col-sm-10 col-md-9 col-12 form-label">103.	Me resulta difícil cambiar mis costumbres.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s11" aria-label="Default select example" name="103" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('103') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('103') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('103') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('103') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('103') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="104" class="col-sm-10 col-md-9 col-12 form-label">104.	Considero que es muy importante ser un(a) ciudadano(a) que respeta la ley.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s7" aria-label="Default select example" name="104" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('104') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('104') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('104') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('104') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('104') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="105" class="col-sm-10 col-md-9 col-12 form-label">105.	Disfruto mis vacaciones y los fines de semana.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s14" aria-label="Default select example" name="105" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('105') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('105') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('105') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('105') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('105') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="106" class="col-sm-10 col-md-9 col-12 form-label">106.	En general tengo una actitud positiva para todo, aún cuando surgen problemas.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s15" aria-label="Default select example" name="106" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('106') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('106') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('106') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('106') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('106') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="107" class="col-sm-10 col-md-9 col-12 form-label">107.	Tengo tendencia a depender de otros.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s5" aria-label="Default select example" name="107" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('107') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('107') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('107') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('107') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('107') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="108" class="col-sm-10 col-md-9 col-12 form-label">108.	Creo en mi capacidad para manejar los problemas más difíciles.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s12 s15" aria-label="Default select example" name="108" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('108') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('108') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('108') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('108') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('108') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="109" class="col-sm-10 col-md-9 col-12 form-label">109.	No me siento avergonzado(a) por nada de lo que he hecho hasta ahora.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s16" aria-label="Default select example" name="109" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('109') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('109') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('109') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('109') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('109') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="110" class="col-sm-10 col-md-9 col-12 form-label">110.	Trato de aprovechar al máximo las cosas que me gustan y me divierten.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s4" aria-label="Default select example" name="110" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('110') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('110') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('110') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('110') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('110') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="111" class="col-sm-10 col-md-9 col-12 form-label">111.	Los demás piensan que no me hago valer, que me falta firmeza.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s2" aria-label="Default select example" name="111" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('111') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('111') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('111') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('111') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('111') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="112" class="col-sm-10 col-md-9 col-12 form-label">112.	Soy capaz de dejar de fantasear para volver a ponerme en contacto con la realidad.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s10" aria-label="Default select example" name="112" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('112') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('112') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('112') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('112') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('112') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="113" class="col-sm-10 col-md-9 col-12 form-label">113.	Los demás opinan que soy una persona sociable.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s6" aria-label="Default select example" name="113" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('113') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('113') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('113') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('113') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('113') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="114" class="col-sm-10 col-md-9 col-12 form-label">114.	Estoy contento(a) con la forma en que me veo.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s3" aria-label="Default select example" name="114" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('114') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('114') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('114') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('114') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('114') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="115" class="col-sm-10 col-md-9 col-12 form-label">115.	Tengo pensamientos extraños que los demás no logran entender.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s17" aria-label="Default select example" name="115" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('115') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('115') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('115') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('115') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('115') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="116" class="col-sm-10 col-md-9 col-12 form-label">116.	Me es difícil describir lo que siento.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s1" aria-label="Default select example" name="116" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('116') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('116') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('116') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('116') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('116') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="117" class="col-sm-10 col-md-9 col-12 form-label">117.	Tengo mal carácter.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s13" aria-label="Default select example" name="117" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('117') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('117') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('117') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('117') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('117') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="118" class="col-sm-10 col-md-9 col-12 form-label">118.	Por lo general, me trabo cuando pienso acerca de las diferentes maneras de resolver un problema.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s9" aria-label="Default select example" name="118" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('118') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('118') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('118') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('118') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('118') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="119" class="col-sm-10 col-md-9 col-12 form-label">119.	Me es difícil ver sufrir a la gente.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s7 s8" aria-label="Default select example" name="119" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('119') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('119') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('119') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('119') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('119') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="120" class="col-sm-10 col-md-9 col-12 form-label">120.	Me gusta divertirme.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s14" aria-label="Default select example" name="120" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('120') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('120') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('120') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('120') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('120') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="121" class="col-sm-10 col-md-9 col-12 form-label">121.	Me parece que necesito de los demás más de lo que ellos me necesitan.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s5" aria-label="Default select example" name="121" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('121') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('121') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('121') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('121') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('121') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="122" class="col-sm-10 col-md-9 col-12 form-label">122.	Me pongo ansioso(a).</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s12" aria-label="Default select example" name="122" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('122') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('122') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('122') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('122') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('122') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="123" class="col-sm-10 col-md-9 col-12 form-label">123.	No tengo días malos.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s16" aria-label="Default select example" name="123" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('123') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('123') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('123') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('123') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('123') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="124" class="col-sm-10 col-md-9 col-12 form-label">124.	Intento no herir los sentimientos de los demás.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s8" aria-label="Default select example" name="124" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('124') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('124') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('124') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('124') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('124') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="125" class="col-sm-10 col-md-9 col-12 form-label">125.	No tengo una buena idea de lo que quiero en la vida.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s4" aria-label="Default select example" name="125" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('125') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('125') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('125') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('125') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('125') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="126" class="col-sm-10 col-md-9 col-12 form-label">126.	Me es difícil hacer valer mis derechos.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s2" aria-label="Default select example" name="126" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('126') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('126') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('126') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('126') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('126') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="127" class="col-sm-10 col-md-9 col-12 form-label">127.	Me es difícil ser realista.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s10" aria-label="Default select example" name="127" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('127') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('127') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('127') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('127') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('127') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="128" class="col-sm-10 col-md-9 col-12 form-label">128.	No mantengo relación son mis amistades.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s6" aria-label="Default select example" name="128" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('128') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('128') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('128') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('128') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('128') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="129" class="col-sm-10 col-md-9 col-12 form-label">129.	Haciendo un balance de mis puntos positivos y negativos me siento bien conmigo mismo(a).</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s3" aria-label="Default select example" name="129" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('129') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('129') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('129') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('129') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('129') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="130" class="col-sm-10 col-md-9 col-12 form-label">130.	Tengo una tendencia a explotar de cólera fácilmente.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s13" aria-label="Default select example" name="130" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('130') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('130') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('130') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('130') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('130') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="131" class="col-sm-10 col-md-9 col-12 form-label">131.	Si me viera obligado(a) a dejar mi casa actual, me sería difícil adaptarme nuevamente.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s11" aria-label="Default select example" name="131" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('131') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('131') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('131') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('131') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('131') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="132" class="col-sm-10 col-md-9 col-12 form-label">132.	En general, cuando comienzo algo nuevo tengo la sensación que voy a fracasar.</label>

        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s15" aria-label="Default select example" name="132" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('132') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('132') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('132') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('132') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('132') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="133" class="col-sm-10 col-md-9 col-12 form-label">133.	He respondido sincera y honestamente a las frases anteriores.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select" aria-label="Default select example" name="133" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('133') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('133') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('133') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('133') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('133') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

    </div>
</div>
