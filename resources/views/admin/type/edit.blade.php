@extends('admin.layout.index') 
@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Type</h3>
            </div>
            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Edit Type <small>{{$type->name}}</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <!--Kiem tra loi-->
                        @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}}<br>
                                @endforeach
                            </div>
                        @endif
                        <!-- In thong bao -->
                        @if(session('notify'))
                            <div class="alert alert-success">
                                {{session('notify')}}
                            </div>
                        @endif
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="admin/type/edit/{{$type->id}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Type Name <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="name" value="{{$type->name}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Type Stt <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="stt" value="{{$type->stt}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Category Name<span class="required">*</span> </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="category">
                                        <option value="0">Select Category</option>
                                        @foreach($category as $ct)
                                            <option
                                                @if($ct->id == $type->category_id)
                                                    {{"selected"}}
                                                @endif
                                                 value="{{$ct->id}}">{{$ct->name}}
                                            </option>
                                        @endforeach
                                   </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Hide<span class="required">*</span> </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    @if($type->hide =="1")
                                        <div class="radio col-md-3 col-sm-6 col-xs-6">
                                            <label><input type="radio" name="hide" checked="" value="1">Running</label>
                                        </div>
                                        <div class="radio col-md-3 col-sm-6 col-xs-6">
                                            <label><input type="radio" name="hide" value="2">Disabled</label>
                                        </div>
                                    @else
                                        <div class="radio col-md-3 col-sm-6 col-xs-6">
                                            <label><input type="radio" name="hide" value="1">Running</label>
                                        </div>
                                        <div class="radio col-md-3 col-sm-6 col-xs-6">
                                            <label><input type="radio" name="hide" checked="" value="2">Disabled</label>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button class="btn btn-primary" type="button">Cancel</button>
                                    <button class="btn btn-primary" type="reset">Reset</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection