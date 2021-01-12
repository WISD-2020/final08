@extends('admin.layouts.master')

@section('title', '管理戒指樣式')

@section('content')

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            戒指樣式管理 <small>所有戒指樣式列表</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 戒指樣式管理
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row" style="margin-bottom: 20px; text-align: left">
    <div class="col-lg-12">
        <a href="{{ route('admin.rings.create') }}" class="btn btn-success">建立新樣式</a>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" style="width: 800px">
                <thead>
                    <tr>
                        <th width="5%" style="text-align: center">#</th>
                        <th width="15%">戒指樣式名稱</th>
                        <th width="20%" style="text-align: center">類型</th>
                        <th width="10%" style="text-align: center">價錢</th>
                        <th width="30%" style="text-align: center">圖片</th>
                        <th width="15%" style="text-align: center">功能</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($elements as $element)
                    <tr>
                        <td style="text-align: center">{{ $element->id }}</td>
                        <td style="text-align: center">{{ $element->name }}</td>
                        <td style="text-align: center">{{ $element->type }}</td>
                        <td style="text-align: center">{{ $element->price }}</td>
                        <td style="text-align: center"><img src="/storage/img/ringelements/{{ $element->figure }}"></td>
{{--                        <td style="text-align: center"><img src="storage/app/final08/public/img/ringelements/{{ $element->figure }}"></td>--}}
{{--                        <td>{{ $element->figure }}</td>--}}

                        <td>
                            <a class="btn btn-sm btn-primary" href="{{ route('admin.rings.edit', $element->id) }}">編輯</a>

                            <form action="{{ route('admin.rings.destroy', $element->id) }}" method="post" style="display: inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-sm btn-danger" type="submit">刪除</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.row -->
@endsection
