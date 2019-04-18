@extends('admin.layouts.master')
@section('title')
    Sản phẩm
@endsection
@section('action')
    Thêm mới
@endsection
@section('content')

    <div class="col-lg-12" style="padding-bottom:120px">
            @include('admin.layouts.notify')
            <h2>Thêm bài viết</h2>
            <form role="form" action="{{route('post_add_news')}}" method="POST" enctype="multipart/form-data" >
               @csrf
                    <div class="row">   
                        <div class="form-group">
                            <label>Tiêu đề</label>
                            <input class="form-control" type="text" name="title" placeholder="Xin nhập tiêu đề" >
                        </div>
                        <div class="form-group">
                            <label>Nội dung</label>
                            <textarea id="editor1"  name="content"></textarea>
                        </div>  
                        <div class="form-group">
                            <label>Hình ảnh</label>
                           <input type="file" name="image">
                        </div>    
                         <div class="text-center">
                            <button type="submit" class="btn btn-success" name="post_add_news">Lưu</button>
                            
                        </div>  
                           
                        
                   <!--  </div>
                    <div class="text-center">
                        <button type="submit" value="Add news" name="post_add_news" class="btn btn-success">Thêm</button>
                        
                    </div> -->
            </form>
        </div>
<!-- Your code to create an instance of Fine Uploader and bind to the DOM/template
====================================================================== -->

@endsection
@section('script')
<script type="text/javascript" src="public/ckeditor/ckeditor.js"></script>
<script>    CKEDITOR.replace( 'editor1' );</script>
@endsection




