<div class="col-lg-6 col-md-6 col-sm-12">
    <div class="row">
        <label for="45" class="col-sm-10 col-md-9 col-12 form-label">45. Lo primero que hago cuando tengo un problema es detenerme a pensar.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s9" aria-label="Default select example" name="45" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('45') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('45') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('45') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('45') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('45') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="46" class="col-sm-10 col-md-9 col-12 form-label">46. A la gente le resulta difícil confiar en mí.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s7" aria-label="Default select example" name="46" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('46') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('46') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('46') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('46') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('46') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="47" class="col-sm-10 col-md-9 col-12 form-label">47. Estoy contento(a) con mi vida.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s14" aria-label="Default select example" name="47" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('47') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('47') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('47') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('47') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('47') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="48" class="col-sm-10 col-md-9 col-12 form-label">48. Me resulta difícil tomar decisiones por mi mismo(a).</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s5" aria-label="Default select example" name="48" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('48') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('48') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('48') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('48') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('48') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="49" class="col-sm-10 col-md-9 col-12 form-label">49. No puedo soportar el estrés.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s12" aria-label="Default select example" name="49" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('49') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('49') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('49') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('49') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('49') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="50" class="col-sm-10 col-md-9 col-12 form-label">50. En mi vida no hago nada malo.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s16" aria-label="Default select example" name="50" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('50') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('50') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('50') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('50') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('50') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="51" class="col-sm-10 col-md-9 col-12 form-label">51. No disfruto lo que hago.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s4" aria-label="Default select example" name="51" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('51') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('51') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('51') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('51') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('51') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="52" class="col-sm-10 col-md-9 col-12 form-label">52.	Me resulta difícil expresar mis sentimientos más íntimos.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">

            <select class="form-select s1" aria-label="Default select example" name="52" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('52') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('52') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('52') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('52') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('52') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="53" class="col-sm-10 col-md-9 col-12 form-label">53. La gente no comprende mi manera de pensar.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s10" aria-label="Default select example" name="53" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('53') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('53') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('53') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('53') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('53') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="54" class="col-sm-10 col-md-9 col-12 form-label">54. Generalmente espero lo mejor.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s15" aria-label="Default select example" name="54" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('54') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('54') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('54') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('54') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('54') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="55" class="col-sm-10 col-md-9 col-12 form-label">55. Mis amigos me confían sus intimidades.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s6 s8" aria-label="Default select example" name="55" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('55') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('55') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('55') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('55') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('55') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="56" class="col-sm-10 col-md-9 col-12 form-label">56. No me siento bien conmigo mismo(a).</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s3" aria-label="Default select example" name="56" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('56') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('56') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('56') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('56') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('56') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="57" class="col-sm-10 col-md-9 col-12 form-label">57. Percibo cosas extrañas que los demás no ven.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s17" aria-label="Default select example" name="57" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('57') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('57') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('57') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('57') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('57') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="58" class="col-sm-10 col-md-9 col-12 form-label">58. La gente me dice que baje el tono de voz cuando discuto.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s13" aria-label="Default select example" name="58" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('58') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('58') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('58') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('58') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('58') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="59" class="col-sm-10 col-md-9 col-12 form-label">59. Me resulta fácil adaptarme a situaciones nuevas.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s11" aria-label="Default select example" name="59" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('59') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('59') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('59') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('59') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('59') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="60" class="col-sm-10 col-md-9 col-12 form-label">60. Cuando intento resolver un problema analizo todas las posibles soluciones y luego escojo la que considero mejor.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s9" aria-label="Default select example" name="60" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('60') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('60') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('60') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('60') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('60') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="61" class="col-sm-10 col-md-9 col-12 form-label">61. Me detendría y ayudaría a un niño que llora por encontrar a sus padres, aun cuando tuviese algo que hacer en ese momento.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s7 s8" aria-label="Default select example" name="61" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('61') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('61') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('61') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('61') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('61') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="62" class="col-sm-10 col-md-9 col-12 form-label">62. Soy una persona divertida.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s6 s14" aria-label="Default select example" name="62" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('62') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('62') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('62') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('62') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('62') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="63" class="col-sm-10 col-md-9 col-12 form-label">63. Soy consciente de cómo me siento.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s1" aria-label="Default select example" name="63" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('63') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('63') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('63') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('63') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('63') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="64" class="col-sm-10 col-md-9 col-12 form-label">64. Siento que me resulta difícil controlar mi ansiedad.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s12" aria-label="Default select example" name="64" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('64') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('64') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('64') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('64') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('64') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="65" class="col-sm-10 col-md-9 col-12 form-label">65. Nada me perturba.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s16" aria-label="Default select example" name="65" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('65') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('65') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('65') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('65') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('65') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="66" class="col-sm-10 col-md-9 col-12 form-label">66. No me entusiasman mucho mis intereses.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s4" aria-label="Default select example" name="66" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('66') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('66') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('66') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('66') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('66') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="67" class="col-sm-10 col-md-9 col-12 form-label">67. Cuando estoy en desacuerdo con alguien soy capaz de decírselo.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s2" aria-label="Default select example" name="67" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('67') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('67') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('67') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('67') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('67') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="68" class="col-sm-10 col-md-9 col-12 form-label">68. Tengo tendencia a fantasear y perder contacto con lo que ocurre a mi alrededor.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s10" aria-label="Default select example" name="68" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('68') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('68') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('68') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('68') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('68') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="69" class="col-sm-10 col-md-9 col-12 form-label">69. Me es difícil llevarme con los demás.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s6" aria-label="Default select example" name="69" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('69') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('69') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('69') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('69') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('69') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="70" class="col-sm-10 col-md-9 col-12 form-label">70. Me resulta difícil aceptarme tal como soy.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s3" aria-label="Default select example" name="70" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('70') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('70') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('70') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('70') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('70') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="71" class="col-sm-10 col-md-9 col-12 form-label">71. Me siento como si estuviera separado(a) de mi cuerpo.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s17" aria-label="Default select example" name="71" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('71') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('71') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('71') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('71') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('71') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="72" class="col-sm-10 col-md-9 col-12 form-label">72. Me importa lo que puede sucederle a los demás.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s7 s8" aria-label="Default select example" name="72" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('72') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('72') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('72') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('72') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('72') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="73" class="col-sm-10 col-md-9 col-12 form-label">73. Soy impaciente.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s13" aria-label="Default select example" name="73" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('73') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('73') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('73') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('73') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('73') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="74" class="col-sm-10 col-md-9 col-12 form-label">74. Puedo cambiar mis viejas costumbres.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s11" aria-label="Default select example" name="74" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('74') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('74') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('74') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('74') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('74') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="75" class="col-sm-10 col-md-9 col-12 form-label">75. Me resulta difícil escoger la mejor solución cuando tengo que resolver un problema.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s9" aria-label="Default select example" name="75" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('75') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('75') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('75') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('75') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('75') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="76" class="col-sm-10 col-md-9 col-12 form-label">76. Si pudiera violar la ley sin pagar las consecuencias, lo haría en determinadas situaciones.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s7" aria-label="Default select example" name="76" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('76') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('76') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('76') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('76') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('76') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="77" class="col-sm-10 col-md-9 col-12 form-label">77. Me deprimo.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s14" aria-label="Default select example" name="77" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('77') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('77') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('77') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('77') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('77') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="78" class="col-sm-10 col-md-9 col-12 form-label">78. Sé como mantener la calma en situaciones difíciles.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s12" aria-label="Default select example" name="78" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('78') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('78') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('78') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('78') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('78') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="79" class="col-sm-10 col-md-9 col-12 form-label">79. Nunca he mentido.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s16" aria-label="Default select example" name="79" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('79') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('79') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('79') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('79') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('79') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="80" class="col-sm-10 col-md-9 col-12 form-label">80. En general me siento motivado(a) para continuar adelante, incluso cuando las cosas se ponen difíciles.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s15" aria-label="Default select example" name="80" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('80') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('80') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('80') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('80') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('80') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="81" class="col-sm-10 col-md-9 col-12 form-label">81. Trato de continuar y desarrollar aquellas cosas que me divierten.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s4" aria-label="Default select example" name="81" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('81') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('81') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('81') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('81') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('81') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="82" class="col-sm-10 col-md-9 col-12 form-label">82. Me resulta difícil decir "no" aunque tenga el deseo de hacerlo.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s2" aria-label="Default select example" name="82" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('82') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('82') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('82') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('82') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('82') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="83" class="col-sm-10 col-md-9 col-12 form-label">83. Me dejo llevar por mi imaginación y mis fantasías.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s10" aria-label="Default select example" name="83" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('83') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('83') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('83') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('83') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('83') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="84" class="col-sm-10 col-md-9 col-12 form-label">84. Mis relaciones más cercanas significan mucho, tanto para mí como para mis amigos.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s6" aria-label="Default select example" name="84" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('84') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('84') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('84') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('84') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('84') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="85" class="col-sm-10 col-md-9 col-12 form-label">85. Me siento feliz con el tipo de persona que soy.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s3" aria-label="Default select example" name="85" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('85') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('85') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('85') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('85') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('85') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="86" class="col-sm-10 col-md-9 col-12 form-label">86. Tengo reacciones fuertes, intensas que son difíciles de controlar.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s13" aria-label="Default select example" name="86" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('86') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('86') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('86') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('86') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('86') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="87" class="col-sm-10 col-md-9 col-12 form-label">87. En general, me resulta difícil realizar cambios en mi vida cotidiana.</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s11" aria-label="Default select example" name="87" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="5" {{ old('87') == '5' ? 'selected' : '' }}>1</option>
                <option value="4" {{ old('87') == '4' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('87') == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old('87') == '2' ? 'selected' : '' }}>4</option>
                <option value="1" {{ old('87') == '1' ? 'selected' : '' }}>5</option>
            </select>
        </div>

        <label for="88" class="col-sm-10 col-md-9 col-12 form-label">88. Soy consciente de lo que me está pasando, aún cuando estoy alterado(a).</label>
        <div class="col-sm-2 col-12 col-md-3 mb-1">
            <select class="form-select s1 s10" aria-label="Default select example" name="88" onchange="actualizarResultados()">
                <option value="">Elija</option>
                <option value="1" {{ old('88') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('88') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('88') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('88') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('88') == '5' ? 'selected' : '' }}>5</option>
            </select>
        </div>

    </div>
</div>
