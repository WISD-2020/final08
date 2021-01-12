@extends('admin.layouts.master')

@section('title', '新增戒指樣式')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            新增戒指樣式 <small>請輸入戒指樣式內容</small>
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
        <form method="post" enctype="multipart/form-data" action="{{ route('admin.rings.store') }}" role="form">
            @method('post')
            @csrf
            <div class="form-group">
                <label>樣式名稱：</label>
                <input name="name" class="form-control" placeholder="請輸入樣式名稱">
            </div>

            <div class="form-group">
                <label>價錢：</label>
                <input name="price" class="form-control" placeholder="請輸入價錢">
            </div>

            <div class="form-group">
                <label>類型：</label>
                <select name="type" class="form-control">
                    <option value="材質" selected>材質</option>
                    <option value="白色表面工藝">白色表面工藝</option>
                    <option value="紅色表面工藝">紅色表面工藝</option>
                    <option value="白色光身戒寬">白色光身戒寬</option>
                    <option value="紅色光身戒寬">紅色光身戒寬</option>
                    <option value="白色錘鑄戒寬">白色錘鑄戒寬</option>
                    <option value="紅色錘鑄戒寬">紅色錘鑄戒寬</option>
                    <option value="白色戒圍">白色戒圍</option>
                    <option value="紅色戒圍">紅色戒圍</option>
                </select>
            </div>

            <div class="form-group">
                <label>類型：</label>
                <input type="file" name="figure" class="form-control">
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-success">新增</button>
            </div>

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

        </form>
    </div>
</div>

{{--<script>--}}
{{--    import axios from 'axios'--}}
{{--    export default {--}}
{{--        methods: {--}}
{{--            uploadFile () {--}}
{{--                // 拿取檔案--}}
{{--                const figure = this.$refs.fileInput.files[0]--}}
{{--                // 然後自己建立一個表單來放要上傳的資料--}}
{{--                // 也可以順便帶其他資料例如 userId--}}
{{--                const form = new FormData()--}}
{{--                form.append('figure', figure)--}}
{{--                // form.append('userId', 'test1234')--}}

{{--                // 上傳到後端伺服器--}}
{{--                // axios.post('http://localhost:8000/', form)--}}
{{--            }--}}
{{--        }--}}
{{--    }--}}
{{--</script>--}}
<!-- /.row -->
@endsection
