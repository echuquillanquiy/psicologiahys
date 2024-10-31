<div class="col-lg-12 col-md-12 col-sm-12">
    <div class="row">
        <label for="20" class="col-sm-10 col-form-label">20. Se siente incómodo (a) con vestidos que no son del diario?.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select e" aria-label="Default select example" name="20">
                <option value="">Elija</option>
                <option value="0" {{ old('20') == '0' ? 'selected' : '' }}>SI</option>
                <option value="1" {{ old('20') == '1' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

        <label for="21" class="col-sm-10 col-form-label">21. Se distrae (vaga su mente) a menudo cuando trata de prestar atención a algo?.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select n" aria-label="Default select example" name="21">
                <option value="">Elija</option>
                <option value="1" {{ old('21') == '1' ? 'selected' : '' }}>SI</option>
                <option value="0" {{ old('21') == '0' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

        <label for="22" class="col-sm-10 col-form-label">22. Puede expresar en palabras fácilmente lo que piensa?.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select e" aria-label="Default select example" name="22">
                <option value="">Elija</option>
                <option value="1" {{ old('22') == '1' ? 'selected' : '' }}>SI</option>
                <option value="0" {{ old('22') == '0' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

        <label for="23" class="col-sm-10 col-form-label">23. Se abstrae (se pierde en sus pensamientos) a menudo?.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select n" aria-label="Default select example" name="23">
                <option value="">Elija</option>
                <option value="1" {{ old('23') == '1' ? 'selected' : '' }}>SI</option>
                <option value="0" {{ old('23') == '0' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

        <label for="24" class="col-sm-10 col-form-label">24. Está completamente libre de prejuicios de cualquier tipo?.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select l" aria-label="Default select example" name="24">
                <option value="">Elija</option>
                <option value="1" {{ old('24') == '1' ? 'selected' : '' }}>SI</option>
                <option value="0" {{ old('24') == '0' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

        <label for="25" class="col-sm-10 col-form-label">25. Le gustan las bromas?.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select e" aria-label="Default select example" name="25">
                <option value="">Elija</option>
                <option value="1" {{ old('25') == '1' ? 'selected' : '' }}>SI</option>
                <option value="0" {{ old('25') == '0' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

        <label for="26" class="col-sm-10 col-form-label">26. Piensa a menudo en su pasado?.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select n" aria-label="Default select example" name="26">
                <option value="">Elija</option>
                <option value="1" {{ old('26') == '1' ? 'selected' : '' }}>SI</option>
                <option value="0" {{ old('26') == '0' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

        <label for="27" class="col-sm-10 col-form-label">27. Le gusta mucho la buena comida?.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select e" aria-label="Default select example" name="27">
                <option value="">Elija</option>
                <option value="1" {{ old('27') == '1' ? 'selected' : '' }}>SI</option>
                <option value="0" {{ old('27') == '0' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

        <label for="28" class="col-sm-10 col-form-label">28. ¿Cuándo se fastidia, necesita de algún (a) amigo (a) para hablar sobre ello?.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select n" aria-label="Default select example" name="28">
                <option value="">Elija</option>
                <option value="1" {{ old('28') == '1' ? 'selected' : '' }}>SI</option>
                <option value="0" {{ old('28') == '0' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

        <label for="29" class="col-sm-10 col-form-label">29. Le molesta vender cosas o pedir dinero a la gente para alguna buena causa? .</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select e" aria-label="Default select example" name="29">
                <option value="">Elija</option>
                <option value="0" {{ old('29') == '0' ? 'selected' : '' }}>SI</option>
                <option value="1" {{ old('29') == '1' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

        <label for="30" class="col-sm-10 col-form-label">30. Alardea (se jacta) un poco a veces?.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select l" aria-label="Default select example" name="30">
                <option value="">Elija</option>
                <option value="0" {{ old('30') == '0' ? 'selected' : '' }}>SI</option>
                <option value="1" {{ old('30') == '1' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

        <label for="31" class="col-sm-10 col-form-label">31. Es Ud. muy susceptible por algunas cosas?.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select n" aria-label="Default select example" name="31">
                <option value="">Elija</option>
                <option value="1" {{ old('31') == '1' ? 'selected' : '' }}>SI</option>
                <option value="0" {{ old('31') == '0' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

        <label for="32" class="col-sm-10 col-form-label">32. Le gusta más quedarse en casa que ir a una fiesta aburrida?.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select e" aria-label="Default select example" name="32">
                <option value="">Elija</option>
                <option value="0" {{ old('32') == '0' ? 'selected' : '' }}>SI</option>
                <option value="1" {{ old('32') == '1' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

        <label for="33" class="col-sm-10 col-form-label">33. Se pone a menudo tan inquieto (a) que no pude permanecer sentado (a) durante mucho rato en la silla.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select n" aria-label="Default select example" name="33">
                <option value="">Elija</option>
                <option value="1" {{ old('33') == '1' ? 'selected' : '' }}>SI</option>
                <option value="0" {{ old('33') == '0' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

        <label for="34" class="col-sm-10 col-form-label">34. Le gusta planear las cosas cuidadosamente con mucha anticipación? .</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select e" aria-label="Default select example" name="34">
                <option value="">Elija</option>
                <option value="0" {{ old('34') == '0' ? 'selected' : '' }}>SI</option>
                <option value="1" {{ old('34') == '1' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

        <label for="35" class="col-sm-10 col-form-label">35. Tiene a menudo mareos (vértigos)?.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select n" aria-label="Default select example" name="35">
                <option value="">Elija</option>
                <option value="1" {{ old('35') == '1' ? 'selected' : '' }}>SI</option>
                <option value="0" {{ old('35') == '0' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

        <label for="36" class="col-sm-10 col-form-label">36. Contesta siempre una carta personal tan pronto como puede después de haberla leído?.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select l" aria-label="Default select example" name="36">
                <option value="">Elija</option>
                <option value="1" {{ old('36') == '1' ? 'selected' : '' }}>SI</option>
                <option value="0" {{ old('36') == '0' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

        <label for="37" class="col-sm-10 col-form-label">37. Hace Ud. usualmente las cosas mejor resolviéndolas solo (a) que hablando a otra persona sobre ellas?.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select e" aria-label="Default select example" name="37">
                <option value="">Elija</option>
                <option value="0" {{ old('37') == '0' ? 'selected' : '' }}>SI</option>
                <option value="1" {{ old('37') == '1' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

        <label for="38" class="col-sm-10 col-form-label">38. Le falta frecuentemente aire sin haber hecho un trabajo pesado?.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select n" aria-label="Default select example" name="38">
                <option value="">Elija</option>
                <option value="1" {{ old('38') == '1' ? 'selected' : '' }}>SI</option>
                <option value="0" {{ old('38') == '0' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

    </div>
</div>
