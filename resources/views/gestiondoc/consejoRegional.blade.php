@extends('layouts.app')

@section('header')
<!-- ace settings handler -->
        <script src="{{ asset('/js/ace-extra.min.js')}}"></script>
@stop            

@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="#">ConsejoRegional</a>
                    </li>
                </ul><!-- /.breadcrumb -->                      
            </div>
            <div class="page-content">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <div class="row">
                                      <label class="col-xs-6 col-sm-3 control-label " for="form-field-1"> DNI o Numero de expediente</label>
                                      <div class="col-xs-6 col-sm-3">
                                            <input type="text" id="form-field-1" placeholder="buscar"/>
                                      </div>
                                      <div class="col-xs-6 col-sm-3">
                                        <button class="btn btn-primary">Buscar</button>
                                      </div>                                  
                                    </div>

                                    <div class="widget-box">
                                    <div class="widget-header widget-header-blue widget-header-flat">
                                        <h4 class="widget-title lighter">Proceso Matricula</h4>
                                    </div>

                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <div id="fuelux-wizard-container">
                                                <div>
                                                    <ul class="steps">
                                                        <li data-step="1" class="active">
                                                            <span class="step">1</span>
                                                            <span class="title">Recepcion</span>
                                                        </li>
                                                        <li data-step="2">
                                                            <span class="step">2</span>
                                                            <span class="title">Secretaria Administrativa</span>
                                                        </li>
                                                        <li data-step="3">
                                                            <span class="step">3</span>
                                                            <span class="title">Secretario de Region</span>
                                                        </li>

                                                        <li data-step="4">
                                                            <span class="step">4</span>
                                                            <span class="title">Presidente</span>
                                                        </li>
                                                        <li data-step="5">
                                                            <span class="step">5</span>
                                                            <span class="title">Consejo Nacional</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <hr />
                                                <div class="step-content pos-rel">
                                                    <div class="step-pane active" data-step="1">
                                                            <div class="row">

                                                              <div class="col-xs-6 col-sm-3">
                                                                <button class="btn btn-primary">Enviar Expedientes</button>
                                                              </div>                                  
                                                            </div>
                                                    </div>
                                                    <div class="step-pane" data-step="2">
                                                        <div>
                                                            <div class="row">
                                                                <table id="simple-table" class="table table-striped table-bordered table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </th>
                                                                            <th>Documentos</th>
                                                                            <th></th>                                           
                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>
                                                                            <td>
                                                                                Documento 1
                                                                            </td>
                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs btn-group">
                                                                                    <button class="btn btn-xs btn-success">
                                                                                        <i class="ace-icon fa fa-check bigger-120"></i>
                                                                                    </button>

                                                                                    <button class="btn btn-xs btn-warning">
                                                                                        <i class="ace-icon fa fa-repeat  bigger-120"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>
                                                                            <td>
                                                                                Documento 2
                                                                            </td>
                                                                                <td>
                                                                                <div class="hidden-sm hidden-xs btn-group">
                                                                                    <button class="btn btn-xs btn-success">
                                                                                        <i class="ace-icon fa fa-check bigger-120"></i>
                                                                                    </button>

                                                                                    <button class="btn btn-xs btn-warning">
                                                                                        <i class="ace-icon fa fa-repeat  bigger-120"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>
                                                                            <td>
                                                                                Documento 3
                                                                            </td>
                                                                                <td>
                                                                                <div class="hidden-sm hidden-xs btn-group">
                                                                                    <button class="btn btn-xs btn-success">
                                                                                        <i class="ace-icon fa fa-check bigger-120"></i>
                                                                                    </button>

                                                                                    <button class="btn btn-xs btn-warning">
                                                                                        <i class="ace-icon fa fa-repeat  bigger-120"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>
                                                                            <td>
                                                                                Documento 4
                                                                            </td>
                                                                                <td>
                                                                                <div class="hidden-sm hidden-xs btn-group">
                                                                                    <button class="btn btn-xs btn-success">
                                                                                        <i class="ace-icon fa fa-check bigger-120"></i>
                                                                                    </button>

                                                                                    <button class="btn btn-xs btn-warning">
                                                                                        <i class="ace-icon fa fa-repeat  bigger-120"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>
                                                                            <td>
                                                                                Documento 5
                                                                            </td>
                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs btn-group">
                                                                                    <button class="btn btn-xs btn-success">
                                                                                        <i class="ace-icon fa fa-check bigger-120"></i>
                                                                                    </button>

                                                                                    <button class="btn btn-xs btn-warning">
                                                                                        <i class="ace-icon fa fa-repeat  bigger-120"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>
                                                                            <td>
                                                                                Documento 6
                                                                            </td>
                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs btn-group">
                                                                                    <button class="btn btn-xs btn-success">
                                                                                        <i class="ace-icon fa fa-check bigger-120"></i>
                                                                                    </button>

                                                                                    <button class="btn btn-xs btn-warning">
                                                                                        <i class="ace-icon fa fa-repeat  bigger-120"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="row">
                                                              
                                                              <div class="col-xs-6 col-sm-3">
                                                                <button class="btn btn-primary">Enviar Expedientes</button>
                                                              </div>                                  
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="step-pane" data-step="3">
                                                        <div>
                                                            <div class="row">
                                                                <table id="simple-table" class="table table-striped table-bordered table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </th>
                                                                            <th>Documentos</th>
                                                                            <th></th>                                           
                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>
                                                                            <td>
                                                                                Documento 1
                                                                            </td>
                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs btn-group">
                                                                                    <button class="btn btn-xs btn-success">
                                                                                        <i class="ace-icon fa fa-check bigger-120"></i>
                                                                                    </button>

                                                                                    <button class="btn btn-xs btn-danger">
                                                                                        <i class="ace-icon fa fa-repeat  bigger-120"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>
                                                                            <td>
                                                                                Documento 2
                                                                            </td>
                                                                                <td>
                                                                                <div class="hidden-sm hidden-xs btn-group">
                                                                                    <button class="btn btn-xs btn-success">
                                                                                        <i class="ace-icon fa fa-check bigger-120"></i>
                                                                                    </button>

                                                                                    <button class="btn btn-xs btn-danger">
                                                                                        <i class="ace-icon fa fa-repeat  bigger-120"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>
                                                                            <td>
                                                                                Documento 3
                                                                            </td>
                                                                                <td>
                                                                                <div class="hidden-sm hidden-xs btn-group">
                                                                                    <button class="btn btn-xs btn-success">
                                                                                        <i class="ace-icon fa fa-check bigger-120"></i>
                                                                                    </button>

                                                                                    <button class="btn btn-xs btn-danger">
                                                                                        <i class="ace-icon fa fa-repeat  bigger-120"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>
                                                                            <td>
                                                                                Documento 4
                                                                            </td>
                                                                                <td>
                                                                                <div class="hidden-sm hidden-xs btn-group">
                                                                                    <button class="btn btn-xs btn-success">
                                                                                        <i class="ace-icon fa fa-check bigger-120"></i>
                                                                                    </button>

                                                                                    <button class="btn btn-xs btn-danger">
                                                                                        <i class="ace-icon fa fa-repeat  bigger-120"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>
                                                                            <td>
                                                                                Documento 5
                                                                            </td>
                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs btn-group">
                                                                                    <button class="btn btn-xs btn-success">
                                                                                        <i class="ace-icon fa fa-check bigger-120"></i>
                                                                                    </button>

                                                                                    <button class="btn btn-xs btn-danger">
                                                                                        <i class="ace-icon fa fa-repeat  bigger-120"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>
                                                                            <td>
                                                                                Documento 6
                                                                            </td>
                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs btn-group">
                                                                                    <button class="btn btn-xs btn-success">
                                                                                        <i class="ace-icon fa fa-check bigger-120"></i>
                                                                                    </button>

                                                                                    <button class="btn btn-xs btn-danger">
                                                                                        <i class="ace-icon fa fa-repeat  bigger-120"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="row">  
                                                              <div class="col-xs-6 col-sm-3">
                                                                <button class="btn btn-primary">Enviar Expedientes</button>
                                                              </div>      
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="step-pane" data-step="4">
                                                        <div class="row">
                                                              
                                                              <div class="col-xs-6 col-sm-3">
                                                                <button class="btn btn-primary">Expediente firmado</button>
                                                              </div>                                  
                                                        </div>
                                                    </div>
                                                    <div class="step-pane" data-step="5">
                                                        <div class="row">
                                                              <div class="col-xs-6 col-sm-3">
                                                                <button class="btn btn-primary">Expediente aprobado</button>
                                                              </div>                                  
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr/>
                                            <HR>
                                            <div class="wizard-actions">
                                                <button class="btn btn-prev">
                                                    <i class="ace-icon fa fa-arrow-left"></i>
                                                    Prev
                                                </button>

                                                <button class="btn btn-success btn-next" data-last="Finish">
                                                    Next
                                                    <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                                </button>
                                            </div>
                                        </div><!-- /.widget-main -->
                                    </div><!-- /.widget-body -->
                                </div>
                                
                        <!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div>
    </div><!-- /.main-content -->
@endsection

@section('footer')

<!-- inline scripts related to this page -->
        <script type="text/javascript">
            jQuery(function($) {
            
                $('[data-rel=tooltip]').tooltip();
            
                $(".select2").css('width','200px').select2({allowClear:true})
                .on('change', function(){
                    $(this).closest('form').validate().element($(this));
                }); 
            
            
                var $validation = false;
                $('#fuelux-wizard-container')
                .ace_wizard({
                    //step: 2 //optional argument. wizard will jump to step "2" at first
                    //buttons: '.wizard-actions:eq(0)'
                })
                .on('actionclicked.fu.wizard' , function(e, info){
                    if(info.step == 1 && $validation) {
                        if(!$('#validation-form').valid()) e.preventDefault();
                    }
                })
                .on('finished.fu.wizard', function(e) {
                    bootbox.dialog({
                        message: "Thank you! Your information was successfully saved!", 
                        buttons: {
                            "success" : {
                                "label" : "OK",
                                "className" : "btn-sm btn-primary"
                            }
                        }
                    });
                }).on('stepclick.fu.wizard', function(e){
                    //e.preventDefault();//this will prevent clicking and selecting steps
                });
            
            
                //jump to a step
                /**
                var wizard = $('#fuelux-wizard-container').data('fu.wizard')
                wizard.currentStep = 3;
                wizard.setState();
                */
            
                //determine selected step
                //wizard.selectedItem().step
            
            
            
                //hide or show the other form which requires validation
                //this is for demo only, you usullay want just one form in your application
                $('#skip-validation').removeAttr('checked').on('click', function(){
                    $validation = this.checked;
                    if(this.checked) {
                        $('#sample-form').hide();
                        $('#validation-form').removeClass('hide');
                    }
                    else {
                        $('#validation-form').addClass('hide');
                        $('#sample-form').show();
                    }
                })
            
            
            
                //documentation : http://docs.jquery.com/Plugins/Validation/validate
            
            
                $.mask.definitions['~']='[+-]';
                $('#phone').mask('(999) 999-9999');
            
                jQuery.validator.addMethod("phone", function (value, element) {
                    return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
                }, "Enter a valid phone number.");
            
                $('#validation-form').validate({
                    errorElement: 'div',
                    errorClass: 'help-block',
                    focusInvalid: false,
                    ignore: "",
                    rules: {
                        email: {
                            required: true,
                            email:true
                        },
                        password: {
                            required: true,
                            minlength: 5
                        },
                        password2: {
                            required: true,
                            minlength: 5,
                            equalTo: "#password"
                        },
                        name: {
                            required: true
                        },
                        phone: {
                            required: true,
                            phone: 'required'
                        },
                        url: {
                            required: true,
                            url: true
                        },
                        comment: {
                            required: true
                        },
                        state: {
                            required: true
                        },
                        platform: {
                            required: true
                        },
                        subscription: {
                            required: true
                        },
                        gender: {
                            required: true,
                        },
                        agree: {
                            required: true,
                        }
                    },
            
                    messages: {
                        email: {
                            required: "Please provide a valid email.",
                            email: "Please provide a valid email."
                        },
                        password: {
                            required: "Please specify a password.",
                            minlength: "Please specify a secure password."
                        },
                        state: "Please choose state",
                        subscription: "Please choose at least one option",
                        gender: "Please choose gender",
                        agree: "Please accept our policy"
                    },
            
            
                    highlight: function (e) {
                        $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
                    },
            
                    success: function (e) {
                        $(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
                        $(e).remove();
                    },
            
                    errorPlacement: function (error, element) {
                        if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
                            var controls = element.closest('div[class*="col-"]');
                            if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
                            else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
                        }
                        else if(element.is('.select2')) {
                            error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
                        }
                        else if(element.is('.chosen-select')) {
                            error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
                        }
                        else error.insertAfter(element.parent());
                    },
            
                    submitHandler: function (form) {
                    },
                    invalidHandler: function (form) {
                    }
                });
            
                
                
                
                $('#modal-wizard-container').ace_wizard();
                $('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');
                
                
                /**
                $('#date').datepicker({autoclose:true}).on('changeDate', function(ev) {
                    $(this).closest('form').validate().element($(this));
                });
                
                $('#mychosen').chosen().on('change', function(ev) {
                    $(this).closest('form').validate().element($(this));
                });
                */
                
                
                $(document).one('ajaxloadstart.page', function(e) {
                    //in ajax mode, remove remaining elements before leaving page
                    $('[class*=select2]').remove();
                });
            })
        </script>
@stop