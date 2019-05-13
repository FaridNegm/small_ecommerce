<div class="modal fade" id="m_modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ isset($find) ? "Edit" : "Add" }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ isset($find) ? url('admin/edit_gate/'.$find->id) : url('admin/add_gate') }}" method="post" class="form-horizontal" enctype='multipart/form-data' style="margin:20px;">
                    @csrf
                    <div class="form-group row">
                        <label class="control-label col-sm-2" style="position: relative;top: 10px;" for="title">{{ trans('app.Title') }}</label>
                        <div class=" col-sm-10">
                            <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ isset($find->title) ? $find->title : ''}}"  placeholder="{{ trans('app.Title') }}">

                            @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-sm-2" style="position: relative;top: 10px;" " for="description">{{ trans('app.Description') }}</label>
                        <div class=" col-sm-10">
                            <textarea id="article-ckeditor" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" rows="6" placeholder="{{ trans('app.Description') }}" >{{ isset($find->description) ? $find->description : ''}}</textarea>

                            @if ($errors->has('description'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-sm-2" style="position: relative;top: 10px;" " for="status">{{ trans('app.Status') }}</label>
                        <div class=" col-sm-10">

                            <select id="status" class="form-control {{ $errors->has('status') ? ' is-invalid' : '' }}" name="status" >
                                <option selected value="active">{{trans('app.Active')}}</option>
                                <option value="not_active">{{trans('app.Not Active')}}</option>

                                @if(isset($find))
                                    <option selected value="{{$find->status}}">{{ $find->status == 'active' ? trans('app.Active') : trans('app.Not Active') }}</option>
                                @endif

                            </select>

                            @if ($errors->has('status'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('status') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-sm-2" style="position: relative;top: 10px;" " for="image">{{ trans('app.Image') }}</label>
                        <div class=" col-sm-10">
                            <input type="file" class="file-input" data-show-caption="false" data-show-upload="false" data-browse-class="btn btn-primary" data-remove-class="btn btn-default" value="{{ isset($find) ? $find->image : '' }}" name="image">


                            @if(isset($find))
                                <img src="{{ url('Admin/images/gate/'.$find->image) }}" name="df_image" style="width:80px;height:80px;"/>
                                <input type="hidden" name="df_image" value="{{ $find->image }}" />
                            @endif

                            @if ($errors->has('image'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <br><br>
                    <div class="form-group row text-center float-right">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">{{ trans('app.Save') }} </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
