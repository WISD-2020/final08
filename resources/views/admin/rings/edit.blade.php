@extends('admin.layouts.master')

@section('title', '編輯戒指樣式')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            編輯戒指樣式 <small>可編輯戒指樣式內容</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 戒指樣式管理
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
{{--        <div class="alert alert-danger alert-dismissable">--}}
{{--            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>--}}
{{--            <i class="fa fa-info-circle"></i>  <strong>警告！</strong> 請修正表單錯誤：--}}
{{--        </div>--}}
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('admin.rings.update',$elements->id) }}" enctype="multipart/form-data" method="post" role="form">
            @method('patch')
            @csrf
            <div class="form-group">
                <label>樣式名稱：</label>
                <input name="name" value="{{ old('name',$elements->name) }}" class="form-control" placeholder="請輸入樣式名稱">
            </div>

            <div class="form-group">
                <label>價錢：</label>
                <input name="price" value="{{ old('price',$elements->price) }}" class="form-control" placeholder="請輸入價錢">
            </div>

            <div class="form-group">
                <label>類型：</label>
                <select name="type" class="form-control">
                    <option value="材質" {{ ($elements->type=='材質')? ' selected' : '' }}>材質</option>
                    <option value="白色表面工藝" {{ ($elements->type=='白色表面工藝')? ' selected' : '' }}>白色表面工藝</option>
                    <option value="紅色表面工藝" {{ ($elements->type=='紅色表面工藝')? ' selected' : '' }}>紅色表面工藝</option>
                    <option value="白色光身戒寬" {{ ($elements->type=='白色光身戒寬')? ' selected' : '' }}>白色光身戒寬</option>
                    <option value="紅色光身戒寬" {{ ($elements->type=='紅色光身戒寬')? ' selected' : '' }}>紅色光身戒寬</option>
                    <option value="白色錘鑄戒寬" {{ ($elements->type=='白色錘鑄戒寬')? ' selected' : '' }}>白色錘鑄戒寬</option>
                    <option value="紅色錘鑄戒寬" {{ ($elements->type=='紅色錘鑄戒寬')? ' selected' : '' }}>紅色錘鑄戒寬</option>
                </select>
            </div>

            <div class="form-group">
                <label>圖片預覽：</label><br>
                <img src="/storage/img/ringelements/{{ $elements->figure }}">
            </div>

            <div class="form-group">
                <label>類型：</label>
                <input type="file" name="figure" class="form-control">
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-success">保存</button>
            </div>
        </form>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

    </div>
</div>

<!-- /.row -->
@endsection
