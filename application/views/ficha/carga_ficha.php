<div class="row">
    <div id="breadcrumb" class="col-xs-12">
        <a href="#" class="show-sidebar">
            <i class="fa fa-bars"></i>
        </a>
        <ol class="breadcrumb pull-left">
            <li><a href="index.html">Ingreso de datos</a></li>
            <li><a href="#">Formulario</a></li>
            <li><a href="#">Ficha de registro</a></li>
        </ol>
    </div>
</div>
<form class="form-horizontal" role="form">
    <div class="row">
        <div class="form-group has-success">
            <label class="col-sm-2 control-label">Lancha:</label>
            <div class="col-sm-4">
                <select id="cbo_tiburon" class="populate placeholder">
                    <option>.:: Seleccione ::.</option>
                    <?php
                        foreach ($lanchas as $value) {
                            echo "<option value='" . $value['id'] . "'>" . $value['description'] . "</option>";
                        }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group has-success">
            <label class="col-sm-2 control-label">Puerto:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="Ingrese el puerto">
            </div>
        </div>
        <div class="form-group has-success has-feedback">
            <label class="col-sm-2 control-label">Fecha:</label>
            <div class="col-sm-2">
                <input type="text" id="input_date" class="form-control" placeholder="Fecha">
                <span class="fa fa-calendar txt-danger form-control-feedback"></span>
            </div>
        </div>
    </div>
    <center><p><h2>PARTE DIARIO DE MOTORISTA</h2></p></center><br />
    <div class="row">
        <div class="col-xs-6 col-sm-6">
            <div class="box">
                <div class="box-header">
                    <div class="box-name">
                        <i class="fa fa-search"></i>
                        <span>1. MOTOR PRINCIPAL: CATERPILLAR Serie 3512</span>
                    </div>
                    <div class="box-icons">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="expand-link">
                            <i class="fa fa-expand"></i>
                        </a>
                        <!--<a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>-->
                    </div>
                    <div class="no-move"></div>
                </div>
                <div class="box-content">
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Horómetro - Salida</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" data-placement="bottom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Horómetro - Llegada</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" data-placement="bottom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Horas de Trabajo</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" data-placement="bottom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Horas de Arranque</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" data-placement="bottom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Horas de Apagado</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" data-placement="bottom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Horas de Trabajo</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" data-placement="bottom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Consumeo de Petroleo</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" data-placement="bottom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Consumo de Aceite</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" data-placement="bottom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Diferencial de Petroleo</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" data-placement="bottom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Diferencial de Aceite</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" data-placement="bottom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Horas de Aceite</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" data-placement="bottom">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6">
            <div class="box">
                <div class="box-header">
                    <div class="box-name">
                        <i class="fa fa-search"></i>
                        <span>LECTURA DE TEMP</span>
                    </div>
                    <div class="box-icons">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="expand-link">
                            <i class="fa fa-expand"></i>
                        </a>
                        <!--<a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>-->
                    </div>
                    <div class="no-move"></div>
                </div>
                <div class="box-content">
                    <h4 class="page-header has-error">Lectura último mantenimiento</h4>
                    <div class="form-group has-error">
                        <label class="col-sm-2 control-label">1.</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" data-placement="bottom">
                        </div>
                        <label class="col-sm-2 control-label">7.</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" data-placement="bottom">
                        </div>
                    </div>
                    <div class="form-group has-error">
                        <label class="col-sm-2 control-label">2.</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" >
                        </div>
                        <label class="col-sm-2 control-label">8.</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group has-error">
                        <label class="col-sm-2 control-label">3.</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" data-placement="bottom">
                        </div>
                        <label class="col-sm-2 control-label">9.</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  data-placement="bottom">
                        </div>
                    </div>
                    <div class="form-group has-error">
                        <label class="col-sm-2 control-label">4.</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  data-placement="bottom">
                        </div>
                        <label class="col-sm-2 control-label">10.</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  data-placement="bottom">
                        </div>
                    </div>
                    <div class="form-group has-error">
                        <label class="col-sm-2 control-label">5.</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  data-placement="bottom">
                        </div>
                        <label class="col-sm-2 control-label">11.</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  data-placement="bottom">
                        </div>
                    </div>
                    <div class="form-group has-error">
                        <label class="col-sm-2 control-label">6.</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  data-placement="bottom">
                        </div>
                        <label class="col-sm-2 control-label">12.</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  data-placement="bottom">
                        </div>
                    </div>
                    <h4 class="page-header">Lectura diaria de cilindros</h4>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">1.</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" data-placement="bottom">
                        </div>
                        <label class="col-sm-2 control-label">7.</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" data-placement="bottom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">2.</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" >
                        </div>
                        <label class="col-sm-2 control-label">8.</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">3.</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" data-placement="bottom">
                        </div>
                        <label class="col-sm-2 control-label">9.</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  data-placement="bottom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">4.</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  data-placement="bottom">
                        </div>
                        <label class="col-sm-2 control-label">10.</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  data-placement="bottom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">5.</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  data-placement="bottom">
                        </div>
                        <label class="col-sm-2 control-label">11.</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  data-placement="bottom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">6.</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  data-placement="bottom">
                        </div>
                        <label class="col-sm-2 control-label">12.</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  data-placement="bottom">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-6 col-sm-6">
            <div class="box">
                <div class="box-header">
                    <div class="box-name">
                        <i class="fa fa-search"></i>
                        <span>CAJA DE REDUCCIÓN: TWING DISC</span>
                    </div>
                    <div class="box-icons">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="expand-link">
                            <i class="fa fa-expand"></i>
                        </a>
                        <!--<a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>-->
                    </div>
                    <div class="no-move"></div>
                </div>
                <div class="box-content">
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Presión de Aceite</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" data-placement="bottom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Temp. de Aceite</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" data-placement="bottom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Horas de Aceite</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" data-placement="bottom">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12">
            <div class="box">
                <div class="box-header">
                    <div class="box-name">
                        <i class="fa fa-search"></i>
                        <span>LECTURA DE TEMPERATURAS Y PRESIONES</span>
                    </div>
                    <div class="box-icons">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="expand-link">
                            <i class="fa fa-expand"></i>
                        </a>
                        <!--<a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>-->
                    </div>
                    <div class="no-move"></div>
                </div>
                <div class="box-content">
                    <div class="form-group has-error">
                        <label class="col-sm-2 control-label">Última Carena:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" data-placement="bottom">
                        </div>
                        <label class="col-sm-2 control-label">Presión del Petroleo:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" data-placement="bottom">
                        </div>
                    </div>
                    <div class="form-group has-error">
                        <label class="col-sm-2 control-label">Fecha Ult. Mant.:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" >
                        </div>
                        <label class="col-sm-2 control-label">Presión de Aceite: </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group has-error">
                        <label class="col-sm-2 control-label">Horom. Ultimo Mant.:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" data-placement="bottom">
                        </div>
                        <label class="col-sm-2 control-label">R.P.M.:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  data-placement="bottom">
                        </div>
                    </div>
                    <div class="form-group has-error">
                        <label class="col-sm-2 control-label">Temp. Agua: </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  data-placement="bottom">
                        </div>
                        <label class="col-sm-2 control-label">Temp. Agua: </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  data-placement="bottom">
                        </div>
                    </div>
                    <div class="form-group has-error">
                        <label class="col-sm-2 control-label">Temp. Aceite: </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  data-placement="bottom">
                        </div>
                        <label class="col-sm-2 control-label">Temp. Aceite: </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  data-placement="bottom">
                        </div>
                    </div>
                    <div class="form-group has-error">
                        <label class="col-sm-2 control-label">Temp. Aire: </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  data-placement="bottom">
                        </div>
                        <label class="col-sm-2 control-label">Temp. Aire: </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  data-placement="bottom">
                        </div>
                    </div>
                    <div class="form-group has-error">
                        <label class="col-sm-2 control-label">Temp. Gases L: </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  data-placement="bottom">
                        </div>
                        <label class="col-sm-2 control-label">Temp. Gases L: </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  data-placement="bottom">
                        </div>
                        <label class="col-sm-2 control-label">R: </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  data-placement="bottom">
                        </div>
                        <label class="col-sm-2 control-label">R: </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  data-placement="bottom">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12">
            <div class="box">
                <div class="box-header">
                    <div class="box-name">
                        <i class="fa fa-search"></i>
                        <span>FILTRO MOTOR CAT. 3512</span>
                    </div>
                    <div class="box-icons">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="expand-link">
                            <i class="fa fa-expand"></i>
                        </a>
                        <!--<a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>-->
                    </div>
                    <div class="no-move"></div>
                </div>
                <div class="box-content">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">(3) F. Aceite CAT 1R 0726</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" data-placement="bottom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">(5) F. Petrl. CAT 1R 0756</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">(2) F. Aire CAT 8N 3609</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" data-placement="bottom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">(2) F. Hollín CAT 8N 2555</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  data-placement="bottom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">(3) F. Petrl. Racor 20 20</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  data-placement="bottom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">(1) F. Caja Donalson 556001</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  data-placement="bottom">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-2">
                <button type="cancel" class="btn btn-default btn-label-left">
                    <span><i class="fa fa-clock-o txt-danger"></i></span>
                    Cancel
                </button>
            </div>
            <div class="col-sm-2">
                <button type="submit" class="btn btn-primary btn-label-left">
                    <span><i class="fa fa-clock-o"></i></span>
                    Submit
                </button>
            </div>
        </div>
    </div>
</form>
<script type="text/javascript">
// Run Select2 plugin on elements
    function DemoSelect2() {
        $('#cbo_tiburon').select2({placeholder: "Seleccione una lancha"});
    }
// Run timepicker
    function DemoTimePicker() {
        $('#input_time').timepicker({setDate: new Date()});
    }
    $(document).ready(function () {
        
        // Create Wysiwig editor for textare
        TinyMCEStart('#wysiwig_simple', null);
        TinyMCEStart('#wysiwig_full', 'extreme');
        // Add slider for change test input length
        FormLayoutExampleInputLength($(".slider-style"));
        // Initialize datepicker
        $('#input_date').datepicker({setDate: new Date()});
        // Load Timepicker plugin
        LoadTimePickerScript(DemoTimePicker);
        // Add tooltip to form-controls
        $('.form-control').tooltip();
        LoadSelect2Script(DemoSelect2);
        // Load example of form validation
        LoadBootstrapValidatorScript(DemoFormValidator);
        // Add drag-n-drop feature to boxes
        WinMove();
    });
</script>