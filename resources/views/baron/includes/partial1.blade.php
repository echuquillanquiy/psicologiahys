<div class="col-lg-6 col-md-6 col-sm-12">
    <div class="row">
        <label for="1" class="col-sm-10 col-md-9 col-12 col-form-label">1. Para superar las dificultades que se me presentan actúo paso a paso.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s9" aria-label="Default select example" name="1" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('1') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('1') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('1') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('1') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('1') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="2" class="col-sm-10 col-md-9 col-12 col-form-label">2. Es difícil para mí disfrutar de la vida.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s14" aria-label="Default select example" name="2" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('2') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('2') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('2') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('2') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('2') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="3" class="col-sm-10 col-md-9 col-12 col-form-label">3. Prefiero un trabajo en el que se me diga casi todo lo que tengo que hacer.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s5" aria-label="Default select example" name="3" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('3') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('3') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('3') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('3') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('3') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="4" class="col-sm-10 col-md-9 col-12 col-form-label">4. Sé como enfrentar los problemas más desagradables.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s12" aria-label="Default select example" name="4" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('4') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('4') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('4') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('4') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('4') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="5" class="col-sm-10 col-md-9 col-12 col-form-label">5. Me agradan las personas que conozco.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s16" aria-label="Default select example" name="5" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('5') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('5') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('5') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('5') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('5') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="6" class="col-sm-10 col-md-9 col-12 col-form-label">6. Trato de valorar y darle el mejor sentido a mi vida.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s4" aria-label="Default select example" name="6" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('6') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('6') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('6') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('6') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('6') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="7" class="col-sm-10 col-md-9 col-12 col-form-label">7. Me resulta relativamente fácil expresar mis sentimientos.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s1" aria-label="Default select example" name="7" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('7') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('7') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('7') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('7') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('7') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="8" class="col-sm-10 col-md-9 col-12 col-form-label">8. Trato de ser realista, no me gusta fantasear ni soñar despierto(a).</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s10" aria-label="Default select example" name="8" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('8') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('8') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('8') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('8') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('8') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="9" class="col-sm-10 col-md-9 col-12 col-form-label">9. Reconozco con facilidad mis emociones.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s1" aria-label="Default select example" name="9" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('9') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('9') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('9') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('9') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('9') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="10" class="col-sm-10 col-md-9 col-12 col-form-label">10. Soy incapaz de demostrar afecto.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s6" aria-label="Default select example" name="10" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('10') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('10') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('10') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('10') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('10') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="11" class="col-sm-10 col-md-9 col-12 col-form-label">11. Me siento seguro(a) de mí mismo(a) en la mayoría de situaciones.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s3 s15" aria-label="Default select example" name="11" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('11') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('11') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('11') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('11') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('11') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="12" class="col-sm-10 col-md-9 col-12 col-form-label">12. Tengo la sensación que algo no está bien en mi cabeza.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s17" aria-label="Default select example" name="12" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('12') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('12') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('12') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('12') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('12') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="13" class="col-sm-10 col-md-9 col-12 col-form-label">13. Tengo problema para controlarme cuando me enojo.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s13" aria-label="Default select example" name="13" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('13') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('13') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('13') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('13') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('13') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="14" class="col-sm-10 col-md-9 col-12 col-form-label">14. Me resulta difícil comenzar cosas nuevas.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s11" aria-label="Default select example" name="14" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('14') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('14') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('14') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('14') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('14') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="15" class="col-sm-10 col-md-9 col-12 col-form-label">15. Cuando enfrento una situación difícil me gusta reunir toda la información posible que pueda sobre ella.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s9" aria-label="Default select example" name="15" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('15') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('15') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('15') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('15') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('15') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="16" class="col-sm-10 col-md-9 col-12 col-form-label">16. Me gusta ayudar a la gente.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s7" aria-label="Default select example" name="16" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('16') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('16') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('16') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('16') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('16') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="17" class="col-sm-10 col-md-9 col-12 col-form-label">17. Me es difícil sonreír.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s14" aria-label="Default select example" name="17" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('17') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('17') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('17') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('17') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('17') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="18" class="col-sm-10 col-md-9 col-12 col-form-label">18. Soy incapaz de comprender cómo se sienten los demás.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s8" aria-label="Default select example" name="18" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('18') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('18') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('18') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('18') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('18') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="19" class="col-sm-10 col-md-9 col-12 col-form-label">19. Cuando trabajo con otro, tiendo a confiar más en sus ideas que en las mías.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s5" aria-label="Default select example" name="19" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('19') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('19') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('19') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('19') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('19') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="20" class="col-sm-10 col-md-9 col-12 col-form-label">20. Creo que puedo controlarme en situaciones muy difíciles.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s15 s12" aria-label="Default select example" name="20" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('20') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('20') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('20') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('20') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('20') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="21" class="col-sm-10 col-md-9 col-12 col-form-label">21. Realmente no sé para que soy bueno(a).</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s4" aria-label="Default select example" name="21" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('21') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('21') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('21') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('21') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('21') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="22" class="col-sm-10 col-md-9 col-12 col-form-label">22. No soy capaz de expresar mis ideas.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s2" aria-label="Default select example" name="22" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('22') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('22') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('22') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('22') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('22') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="23" class="col-sm-10 col-md-9 col-12 col-form-label">23. Me es difícil compartir mis sentimientos más íntimos con los demás.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s1 s6" aria-label="Default select example" name="23" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('23') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('23') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('23') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('23') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('23') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="24" class="col-sm-10 col-md-9 col-12 col-form-label">24. No tengo confianza en mí mismo(a).</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s3" aria-label="Default select example" name="24" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('24') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('24') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('24') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('24') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('24') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="25" class="col-sm-10 col-md-9 col-12 col-form-label">25. Creo que he perdido la cabeza.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s17" aria-label="Default select example" name="25" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('25') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('25') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('25') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('25') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('25') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="26" class="col-sm-10 col-md-9 col-12 col-form-label">26. Soy optimista en la mayoría de las cosas que hago.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s15" aria-label="Default select example" name="26" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('26') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('26') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('26') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('26') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('26') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="27" class="col-sm-10 col-md-9 col-12 col-form-label">27. Cuando comienzo a hablar me resulta difícil detenerme.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s13" aria-label="Default select example" name="27" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('27') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('27') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('27') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('27') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('27') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="28" class="col-sm-10 col-md-9 col-12 col-form-label">28. En general, me resulta difícil adaptarme.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s11" aria-label="Default select example" name="28" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('28') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('28') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('28') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('28') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('28') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="29" class="col-sm-10 col-md-9 col-12 col-form-label">29. Me gusta tener una visión general de un problema antes de intentar solucionarlo.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s9" aria-label="Default select example" name="29" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('29') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('29') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('29') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('29') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('29') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="30" class="col-sm-10 col-md-9 col-12 col-form-label">30. No me molesta aprovecharme de los demás, especialmente si se lo merecen.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s7" aria-label="Default select example" name="30" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('30') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('30') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('30') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('30') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('30') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="31" class="col-sm-10 col-md-9 col-12 col-form-label">31. Soy una persona bastante alegre y optimista.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s6 s14" aria-label="Default select example" name="31" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('31') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('31') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('31') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('31') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('31') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="32" class="col-sm-10 col-md-9 col-12 col-form-label">32. Prefiero que otros tomen decisiones por mí.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s5" aria-label="Default select example" name="32" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('32') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('32') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('32') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('32') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('32') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="33" class="col-sm-10 col-md-9 col-12 col-form-label">33. Puedo manejar situaciones de estrés, sin ponerme demasiado nervioso(a).</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s12" aria-label="Default select example" name="33" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('33') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('33') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('33') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('33') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('33') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="34" class="col-sm-10 col-md-9 col-12 col-form-label">34. Pienso bien de las personas.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s16" aria-label="Default select example" name="34" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('34') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('34') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('34') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('34') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('34') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="35" class="col-sm-10 col-md-9 col-12 col-form-label">35. Me es difícil entender como me siento.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s1 s10" aria-label="Default select example" name="35" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('35') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('35') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('35') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('35') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('35') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="36" class="col-sm-10 col-md-9 col-12 col-form-label">36. He logrado muy poco en los últimos años.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s4" aria-label="Default select example" name="36" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('36') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('36') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('36') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('36') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('36') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="37" class="col-sm-10 col-md-9 col-12 col-form-label">37. Cuando estoy enojado(a) con alguien se lo puedo decir.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s2" aria-label="Default select example" name="37" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('37') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('37') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('37') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('37') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('37') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="38" class="col-sm-10 col-md-9 col-12 col-form-label">38. He tenido experiencias extrañas que no puedo explicar.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s10" aria-label="Default select example" name="38" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('38') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('38') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('38') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('38') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('38') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="39" class="col-sm-10 col-md-9 col-12 col-form-label">39. Me resulta fácil hacer amigos(as).</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s6" aria-label="Default select example" name="39" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('39') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('39') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('39') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('39') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('39') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="40" class="col-sm-10 col-md-9 col-12 col-form-label">40. Me tengo mucho respeto.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s3" aria-label="Default select example" name="40" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('40') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('40') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('40') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('40') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('40') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="41" class="col-sm-10 col-md-9 col-12 col-form-label">41. Hago cosas muy raras.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s17" aria-label="Default select example" name="41" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('41') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('41') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('41') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('41') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('41') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="42" class="col-sm-10 col-md-9 col-12 col-form-label">42. Soy impulsivo(a), y eso me trae problemas.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s13" aria-label="Default select example" name="42" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('42') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('42') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('42') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('42') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('42') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="43" class="col-sm-10 col-md-9 col-12 col-form-label">43. Me resulta difícil cambiar de opinión.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s11" aria-label="Default select example" name="43" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('43') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('43') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('43') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('43') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('43') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="44" class="col-sm-10 col-md-9 col-12 col-form-label">44. Soy bueno para comprender los sentimientos de las personas.</label>
        <div class="col-sm-2 col-md-3 mb-1">
            <select class="form-select s8" aria-label="Default select example" name="44" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('44') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('44') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('44') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('44') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('44') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

    </div>
</div>
