@extends('admin.layout')
@section('content')

	<form method="post" action="{{route('admin.introduction.store')}}">
		<div class="row form-group">
            <div class="col col-md-1">
                <label for="textarea-input" class=" form-control-label">内容</label>
            </div>
            <div class="col-12 col-md-10">
                <textarea name="textarea-input" id="textarea-input" rows="9" placeholder=输入内容 class="form-control"></textarea>
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-1">
                <label for="textarea-input" class=" form-control-label">上传图片</label>
            </div>
            <div class="col-12 col-md-10">
                <input type="file" name="pictures[]" class="form-control-file" multiple>
            </div>
        </div>
        @csrf
        <div class="row form-group">
            <div class="col col-md-1">
                <label for="textarea-input" class="form-control-label"></label>
            </div>
            <div class="col-12 col-md-10">
               <button class="btn btn-info">确定</button>
            </div>
        </div>
	</form>
@endsection