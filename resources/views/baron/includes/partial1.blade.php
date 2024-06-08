<div class="col-lg-6 col-md-6 col-sm-12">
    <div class="row">
        <label for="1" class="col-sm-10 col-form-label">1. Para superar las dificultades que se me presentan actúo paso a paso.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s9" aria-label="Default select example" name="1" value="{{ old('1') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>

        <label for="2" class="col-sm-10 col-form-label">2. Es difícil para mí disfrutar de la vida.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s14" aria-label="Default select example" name="2" value="{{ old('2') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5">1</option>
                <option value="4">2</option>
                <option value="3">3</option>
                <option value="2">4</option>
                <option value="1">5</option>
            </select>
        </div>

        <label for="3" class="col-sm-10 col-form-label">3. Prefiero un trabajo en el que se me diga casi todo lo que tengo que hacer.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s5" aria-label="Default select example" name="3" value="{{ old('3') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>

        <label for="4" class="col-sm-10 col-form-label">4. Sé como enfrentar los problemas más desagradables.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s12" aria-label="Default select example" name="4" value="{{ old('4') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>

        <label for="5" class="col-sm-10 col-form-label">5. Me agradan las personas que conozco.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s16" aria-label="Default select example" name="5" value="{{ old('5') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>

        <label for="6" class="col-sm-10 col-form-label">6. Trato de valorar y darle el mejor sentido a mi vida.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s4" aria-label="Default select example" name="6" value="{{ old('6') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>

        <label for="7" class="col-sm-10 col-form-label">7. Me resulta relativamente fácil expresar mis sentimientos.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s1" aria-label="Default select example" name="7" value="{{ old('7') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>

        <label for="8" class="col-sm-10 col-form-label">8. Trato de ser realista, no me gusta fantasear ni soñar despierto(a).</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s10" aria-label="Default select example" name="8" value="{{ old('8') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>

        <label for="9" class="col-sm-10 col-form-label">9. Reconozco con facilidad mis emociones.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s1" aria-label="Default select example" name="9" value="{{ old('9') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>

        <label for="10" class="col-sm-10 col-form-label">10. Soy incapaz de demostrar afecto.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s6" aria-label="Default select example" name="10" value="{{ old('10') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5">1</option>
                <option value="4">2</option>
                <option value="3">3</option>
                <option value="2">4</option>
                <option value="1">5</option>
            </select>
        </div>

        <label for="11" class="col-sm-10 col-form-label">11. Me siento seguro(a) de mí mismo(a) en la mayoría de situaciones.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s3 s15" aria-label="Default select example" name="11" value="{{ old('11') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>

        <label for="12" class="col-sm-10 col-form-label">12. Tengo la sensación que algo no está bien en mi cabeza.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s17" aria-label="Default select example" name="12" value="{{ old('12') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>

        <label for="13" class="col-sm-10 col-form-label">13. Tengo problema para controlarme cuando me enojo.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s13" aria-label="Default select example" name="13" value="{{ old('13') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5">1</option>
                <option value="4">2</option>
                <option value="3">3</option>
                <option value="2">4</option>
                <option value="1">5</option>
            </select>
        </div>

        <label for="14" class="col-sm-10 col-form-label">14. Me resulta difícil comenzar cosas nuevas.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s11" aria-label="Default select example" name="14" value="{{ old('14') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5">1</option>
                <option value="4">2</option>
                <option value="3">3</option>
                <option value="2">4</option>
                <option value="1">5</option>
            </select>
        </div>

        <label for="15" class="col-sm-10 col-form-label">15. Cuando enfrento una situación difícil me gusta reunir toda la información posible que pueda sobre ella.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s9" aria-label="Default select example" name="15" value="{{ old('15') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>

        <label for="16" class="col-sm-10 col-form-label">16. Me gusta ayudar a la gente.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s7" aria-label="Default select example" name="16" value="{{ old('16') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>

        <label for="17" class="col-sm-10 col-form-label">17. Me es difícil sonreír.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s14" aria-label="Default select example" name="17" value="{{ old('17') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5">1</option>
                <option value="4">2</option>
                <option value="3">3</option>
                <option value="2">4</option>
                <option value="1">5</option>
            </select>
        </div>

        <label for="18" class="col-sm-10 col-form-label">18. Soy incapaz de comprender cómo se sienten los demás.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s8" aria-label="Default select example" name="18" value="{{ old('18') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5">1</option>
                <option value="4">2</option>
                <option value="3">3</option>
                <option value="2">4</option>
                <option value="1">5</option>
            </select>
        </div>

        <label for="19" class="col-sm-10 col-form-label">19. Cuando trabajo con otro, tiendo a confiar más en sus ideas que en las mías.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s5" aria-label="Default select example" name="19" value="{{ old('19') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5">1</option>
                <option value="4">2</option>
                <option value="3">3</option>
                <option value="2">4</option>
                <option value="1">5</option>
            </select>
        </div>

        <label for="20" class="col-sm-10 col-form-label">20. Creo que puedo controlarme en situaciones muy difíciles.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s15 s12" aria-label="Default select example" name="20" value="{{ old('20') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>

        <label for="21" class="col-sm-10 col-form-label">21. Realmente no sé para que soy bueno(a).</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s4" aria-label="Default select example" name="21" value="{{ old('21') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5">1</option>
                <option value="4">2</option>
                <option value="3">3</option>
                <option value="2">4</option>
                <option value="1">5</option>
            </select>
        </div>

        <label for="22" class="col-sm-10 col-form-label">22. No soy capaz de expresar mis ideas.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s2" aria-label="Default select example" name="22" value="{{ old('22') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5">1</option>
                <option value="4">2</option>
                <option value="3">3</option>
                <option value="2">4</option>
                <option value="1">5</option>
            </select>
        </div>

        <label for="23" class="col-sm-10 col-form-label">23. Me es difícil compartir mis sentimientos más íntimos con los demás.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s1 s6" aria-label="Default select example" name="23" value="{{ old('23') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5">1</option>
                <option value="4">2</option>
                <option value="3">3</option>
                <option value="2">4</option>
                <option value="1">5</option>
            </select>
        </div>

        <label for="24" class="col-sm-10 col-form-label">24. No tengo confianza en mí mismo(a).</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s3" aria-label="Default select example" name="24" value="{{ old('24') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5">1</option>
                <option value="4">2</option>
                <option value="3">3</option>
                <option value="2">4</option>
                <option value="1">5</option>
            </select>
        </div>

        <label for="25" class="col-sm-10 col-form-label">25. Creo que he perdido la cabeza.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s17" aria-label="Default select example" name="25" value="{{ old('25') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>

        <label for="26" class="col-sm-10 col-form-label">26. Soy optimista en la mayoría de las cosas que hago.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s15" aria-label="Default select example" name="26" value="{{ old('26') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>

        <label for="27" class="col-sm-10 col-form-label">27. Cuando comienzo a hablar me resulta difícil detenerme.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s13" aria-label="Default select example" name="27" value="{{ old('27') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5">1</option>
                <option value="4">2</option>
                <option value="3">3</option>
                <option value="2">4</option>
                <option value="1">5</option>
            </select>
        </div>

        <label for="28" class="col-sm-10 col-form-label">28. En general, me resulta difícil adaptarme.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s11" aria-label="Default select example" name="28" value="{{ old('28') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5">1</option>
                <option value="4">2</option>
                <option value="3">3</option>
                <option value="2">4</option>
                <option value="1">5</option>
            </select>
        </div>

        <label for="29" class="col-sm-10 col-form-label">29. Me gusta tener una visión general de un problema antes de intentar solucionarlo.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s9" aria-label="Default select example" name="29" value="{{ old('29') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5">1</option>
                <option value="4">2</option>
                <option value="3">3</option>
                <option value="2">4</option>
                <option value="1">5</option>
            </select>
        </div>

        <label for="30" class="col-sm-10 col-form-label">30. No me molesta aprovecharme de los demás, especialmente si se lo merecen.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s7" aria-label="Default select example" name="30" value="{{ old('30') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5">1</option>
                <option value="4">2</option>
                <option value="3">3</option>
                <option value="2">4</option>
                <option value="1">5</option>
            </select>
        </div>

        <label for="31" class="col-sm-10 col-form-label">31. Soy una persona bastante alegre y optimista.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s6 s14" aria-label="Default select example" name="31" value="{{ old('31') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>

        <label for="32" class="col-sm-10 col-form-label">32. Prefiero que otros tomen decisiones por mí.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s5" aria-label="Default select example" name="32" value="{{ old('32') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5">1</option>
                <option value="4">2</option>
                <option value="3">3</option>
                <option value="2">4</option>
                <option value="1">5</option>
            </select>
        </div>

        <label for="33" class="col-sm-10 col-form-label">33. Puedo manejar situaciones de estrés, sin ponerme demasiado nervioso(a).</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s12" aria-label="Default select example" name="33" value="{{ old('33') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>

        <label for="34" class="col-sm-10 col-form-label">34. Pienso bien de las personas.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s16" aria-label="Default select example" name="34" value="{{ old('34') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>

        <label for="35" class="col-sm-10 col-form-label">35. Me es difícil entender como me siento.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s1 s10" aria-label="Default select example" name="35" value="{{ old('35') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5">1</option>
                <option value="4">2</option>
                <option value="3">3</option>
                <option value="2">4</option>
                <option value="1">5</option>
            </select>
        </div>

        <label for="36" class="col-sm-10 col-form-label">36. He logrado muy poco en los últimos años.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s4" aria-label="Default select example" name="36" value="{{ old('36') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5">1</option>
                <option value="4">2</option>
                <option value="3">3</option>
                <option value="2">4</option>
                <option value="1">5</option>
            </select>
        </div>

        <label for="37" class="col-sm-10 col-form-label">37. Cuando estoy enojado(a) con alguien se lo puedo decir.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s2" aria-label="Default select example" name="37" value="{{ old('37') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>

        <label for="38" class="col-sm-10 col-form-label">38. He tenido experiencias extrañas que no puedo explicar.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s10" aria-label="Default select example" name="38" value="{{ old('38') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5">1</option>
                <option value="4">2</option>
                <option value="3">3</option>
                <option value="2">4</option>
                <option value="1">5</option>
            </select>
        </div>

        <label for="39" class="col-sm-10 col-form-label">39. Me resulta fácil hacer amigos(as).</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s6" aria-label="Default select example" name="39" value="{{ old('39') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>

        <label for="40" class="col-sm-10 col-form-label">40. Me tengo mucho respeto.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s3" aria-label="Default select example" name="40" value="{{ old('40') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>

        <label for="41" class="col-sm-10 col-form-label">41. Hago cosas muy raras.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s17" aria-label="Default select example" name="41" value="{{ old('41') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>

        <label for="42" class="col-sm-10 col-form-label">42. Soy impulsivo(a), y eso me trae problemas.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s13" aria-label="Default select example" name="42" value="{{ old('42') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5">1</option>
                <option value="4">2</option>
                <option value="3">3</option>
                <option value="2">4</option>
                <option value="1">5</option>
            </select>
        </div>

        <label for="43" class="col-sm-10 col-form-label">43. Me resulta difícil cambiar de opinión.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s11" aria-label="Default select example" name="43" value="{{ old('43') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5">1</option>
                <option value="4">2</option>
                <option value="3">3</option>
                <option value="2">4</option>
                <option value="1">5</option>
            </select>
        </div>

        <label for="44" class="col-sm-10 col-form-label">44. Soy bueno para comprender los sentimientos de las personas.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select s8" aria-label="Default select example" name="44" value="{{ old('44') }}" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>

    </div>
</div>
