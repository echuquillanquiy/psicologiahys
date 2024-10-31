<div class="col-lg-12 col-md-12 col-sm-12">
    <div class="row">
        <label for="1" class="col-sm-10 col-form-label">1. Le gusta abundancia de excitación y bullicio a su alrededor?.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select e" aria-label="Default select example" name="1">
                <option value="">Elija</option>
                <option value="1" {{ old('1') == '1' ? 'selected' : '' }}>SI</option>
                <option value="0" {{ old('1') == '0' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

        <label for="2" class="col-sm-10 col-form-label">2. ¿Tiene a menudo un sentimiento de intranquilidad, como si quisiera algo, pero sin saber qué? .</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select n" aria-label="Default select example" name="2">
                <option value="">Elija</option>
                <option value="1" {{ old('2') == '1' ? 'selected' : '' }}>SI</option>
                <option value="0" {{ old('2') == '0' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

        <label for="3" class="col-sm-10 col-form-label">3. Tiene casi siempre una contestación lista "a la mano" cuando se le habla?.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select e" aria-label="Default select example" name="3">
                <option value="">Elija</option>
                <option value="1" {{ old('3') == '1' ? 'selected' : '' }}>SI</option>
                <option value="0" {{ old('3') == '0' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

        <label for="4" class="col-sm-10 col-form-label">4. ¿Se siente algunas veces feliz, algunas veces triste sin una razón real?.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select n" aria-label="Default select example" name="4">
                <option value="">Elija</option>
                <option value="1" {{ old('4') == '1' ? 'selected' : '' }}>SI</option>
                <option value="0" {{ old('4') == '0' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

        <label for="5" class="col-sm-10 col-form-label">5. Permanece usualmente retraído (a) en fiestas y reuniones?.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select e" aria-label="Default select example" name="5">
                <option value="">Elija</option>
                <option value="0" {{ old('5') == '0' ? 'selected' : '' }}>SI</option>
                <option value="1" {{ old('5') == '1' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

        <label for="6" class="col-sm-10 col-form-label">6. ¿Cuándo niño (a), hacía siempre inmediatamente lo que le decían sin refunfuñar? .</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select l" aria-label="Default select example" name="6">
                <option value="">Elija</option>
                <option value="1" {{ old('6') == '1' ? 'selected' : '' }}>SI</option>
                <option value="0" {{ old('6') == '0' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

        <label for="7" class="col-sm-10 col-form-label">7. Se enfada a veces?.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select n" aria-label="Default select example" name="7">
                <option value="">Elija</option>
                <option value="1" {{ old('7') == '1' ? 'selected' : '' }}>SI</option>
                <option value="0" {{ old('7') == '0' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

        <label for="8" class="col-sm-10 col-form-label">8. Cuando lo meten en una pelea, prefiere "sacar los trapos al aire", de una vez por todas, en vez de quedar callado (a) esperando que las cosas se calmen solas?.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select e" aria-label="Default select example" name="8">
                <option value="">Elija</option>
                <option value="1" {{ old('8') == '1' ? 'selected' : '' }}>SI</option>
                <option value="0" {{ old('8') == '0' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

        <label for="9" class="col-sm-10 col-form-label">9. ¿Es Ud. triste, melancólico (a)?.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select n" aria-label="Default select example" name="9">
                <option value="">Elija</option>
                <option value="1" {{ old('9') == '1' ? 'selected' : '' }}>SI</option>
                <option value="0" {{ old('9') == '0' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

        <label for="10" class="col-sm-10 col-form-label">10. Le gusta mezclarse con gente?.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select e" aria-label="Default select example" name="10">
                <option value="">Elija</option>
                <option value="1" {{ old('10') == '1' ? 'selected' : '' }}>SI</option>
                <option value="0" {{ old('10') == '0' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

        <label for="11" class="col-sm-10 col-form-label">11. Ha perdido a menudo el sueño por sus preocupaciones?.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select n" aria-label="Default select example" name="11">
                <option value="">Elija</option>
                <option value="1" {{ old('11') == '1' ? 'selected' : '' }}>SI</option>
                <option value="0" {{ old('11') == '0' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

        <label for="12" class="col-sm-10 col-form-label">12. Se pone a veces malhumorado (a)?.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select l" aria-label="Default select example" name="12">
                <option value="">Elija</option>
                <option value="0" {{ old('12') == '0' ? 'selected' : '' }}>SI</option>
                <option value="1" {{ old('12') == '1' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

        <label for="13" class="col-sm-10 col-form-label">13. Se catalogaría a sí mismo (a) como despreocupado (a) ó confiado a su buena ventura?.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select e" aria-label="Default select example" name="13">
                <option value="">Elija</option>
                <option value="1" {{ old('13') == '1' ? 'selected' : '' }}>SI</option>
                <option value="0" {{ old('13') == '0' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

        <label for="14" class="col-sm-10 col-form-label">14. Se decide a menudo demasiado tarde?.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select n" aria-label="Default select example" name="14">
                <option value="">Elija</option>
                <option value="1" {{ old('14') == '1' ? 'selected' : '' }}>SI</option>
                <option value="0" {{ old('14') == '0' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

        <label for="15" class="col-sm-10 col-form-label">15. Le gusta trabajar solo (a)?.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select e" aria-label="Default select example" name="15">
                <option value="">Elija</option>
                <option value="0" {{ old('15') == '0' ? 'selected' : '' }}>SI</option>
                <option value="1" {{ old('15') == '1' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

        <label for="16" class="col-sm-10 col-form-label">16. Se ha sentido a menudo apático (a) y cansado (a). sin razón?.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select n" aria-label="Default select example" name="16">
                <option value="">Elija</option>
                <option value="1" {{ old('16') == '1' ? 'selected' : '' }}>SI</option>
                <option value="0" {{ old('16') == '0' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

        <label for="17" class="col-sm-10 col-form-label">17. Es por el contrario animado (a) y jovial?.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select e" aria-label="Default select example" name="17">
                <option value="">Elija</option>
                <option value="1" {{ old('17') == '1' ? 'selected' : '' }}>SI</option>
                <option value="0" {{ old('17') == '0' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

        <label for="18" class="col-sm-10 col-form-label">18. Se ríe a veces de chistes groseros?.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select l" aria-label="Default select example" name="18">
                <option value="">Elija</option>
                <option value="0" {{ old('18') == '0' ? 'selected' : '' }}>SI</option>
                <option value="1" {{ old('18') == '1' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

        <label for="19" class="col-sm-10 col-form-label">19. Se siente a menudo hastiado (a)?.</label>
        <div class="col-sm-2 mb-1">
            <select class="form-select n" aria-label="Default select example" name="19">
                <option value="">Elija</option>
                <option value="1" {{ old('19') == '1' ? 'selected' : '' }}>SI</option>
                <option value="0" {{ old('19') == '0' ? 'selected' : '' }}>NO</option>
            </select>
        </div>

    </div>
</div>
