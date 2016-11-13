@extends('layouts.app')

@section('header')
@stop            

@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="#">Consejo Nacional</a>
                    </li>
                </ul><!-- /.breadcrumb -->                      
            </div>
            <div class="page-content">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                                    
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
                        <!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div>
    </div><!-- /.main-content -->
@endsection

@section('footer')
@stop