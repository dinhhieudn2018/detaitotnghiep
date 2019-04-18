@extends('admin.layouts.master')
@section('title')
    News
@endsection
@section('action')
    Danh sách
@endsection
@section('style')
    <style>
        .error{color:red;font-weight:normal}
    </style>
@endsection
@section('content')
    <section class="content container-fluid">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Danh sách tin tức</h3>
            </div>

            <div class="box-body">
                <div class="dataTables_wrapper form-inline dt-bootstrap">
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered table-hover dataTable">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tiêu đề</th>
                                    <th>Hình ảnh</th>
                                    <th width="10%">Ngày tạo</th>
                                    <th width="30%" class="text-center"><a href="{{route('add-news')}}"><button id="add-manufacturer" class="btn btn-primary btn-xs">Thêm</button></a></th>
                                </tr>
                                </thead>
                                <tbody id="add-row-manufacturer">
                                @foreach($news as $new)
                                    <tr id="delete-coloum">
                                        <td>{{$new->id}}</td>
                                        <td>{{$new->title}}</td>
                                        <td><img src="/public/uploads/images/news/{{$new->image}}" width="60px" height="60px"></td>
                                        <td>{{$new->created_date}}</td>
                                        <td class="text-center">
                                            <a href="{{route('edit-news',$new->id)}}"><button class="btn btn-warning btn-xs edit-manufacturer" value="">Sửa</button></a> &ensp;
                                            <a href="{{route('delete_news',$new->id)}}"><button class="btn btn-danger btn-xs" id="delete-manufacturer" value="">Xóa</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    


@endsection

@section('script')
    <!-- <script>
        $(document).ready(function(){
            $("#manufacturerForm").validate({
                rules: {
                    name: {
                        required: true,
                    }
                },
                messages: {
                    name: {
                        required: "Tên nhà sản xuất không được để trống"
                    }
                }
            });
            $("body").on('click','#add-manufacturer',function(){
                $('#title-modal').html("Thêm hãng sản xuất");
                $('#manufacturerForm').trigger("reset");
                $('#modal-manufacturer').modal('show');
                $('#save-manufacturer').val('add-manufacturer');
                $('#name-manufacturer-error').remove();
            });
            $('#save-manufacturer').on('click',function(e){
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });

                $.get('{{url('/admin/manufacturer/create')}}',function (data) {
                    $.each(data, function( index, value ) {
                        var name_category = $('#name-manufacturer').val();
                        if(value.name === name_category){
                            var add = '<label id="name-manufacturer-error" class="error" for="name-manufacturer">Tên nhà sản xuất đã tồn tại </label>';
                            $("#name-manufacturer").after(add);
                        }
                    });
                });

                var form = $("#manufacturerForm");
                if(form.valid() === false){
                    console.log('loi');
                }
                else{
                    var name = $('#name-manufacturer').val();
                    var state = $(this).val();
                    if(state === 'add-manufacturer'){
                        $.ajax({
                            type: 'POST',
                            url:'{{url('admin/manufacturer')}}',
                            data: {name:name},
                            dataType:'json',
                            success:function(data){
                                console.log(data);
                                var col = '<tr id="delete-coloum-'+data[0].id+'">\n' +
                                    '<td>'+data[1]+'</td>\n' +
                                    '<td>'+data[0].name+'</td>\n' +
                                    '<td class="text-center">\n' +
                                    '<button class="btn btn-warning btn-xs edit-manufacturer" value="'+data[0].id+'">Sửa</button> &ensp;\n' +
                                    '<button class="btn btn-danger btn-xs" id="delete-manufacturer" value="'+data[0].id+'">Xóa</button>\n' +
                                    '</td>\n' +
                                    '</tr>'
                                $("#add-row-manufacturer").append(col);
                                $('#modal-manufacturer').modal('hide');
                            },error: function (data) {
                                console.log('Error:', data);
                            }
                        })
                    }
                }
            })

            $("body").on('click','#delete-manufacturer',function(){
                $('#modal-danger').modal('show');
                var value = $(this).val();
                $('#save-delete-manufacturer').attr('data-id',value);
            });
            $('#save-delete-manufacturer').on('click',function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                var id = $(this).attr('data-id');
                $.ajax({
                    type : 'DELETE',
                    url : '{{url('admin/manufacturer')}}/'+id,
                    success:function(data){
                        console.log(data);
                        $('#delete-coloum-'+id).remove();
                        $('#modal-danger').modal('hide');
                    },
                })
            })

            $("body").on('click','.edit-manufacturer',function(){
                $('#title-modal').html("Sửa hãng sản xuất");
                $('#manufacturerForm').trigger("reset");
                $('#modal-manufacturer').modal('show');
                $('#name-manufacturer-error').remove();
                $('#save-manufacturer').val('edit-manufacturer');
                var id = $(this).val();
                $('#save-manufacturer').attr('data-id',id);
                $.get('{{url('/admin/manufacturer')}}/'+id,function (data) {
                    $('#name-manufacturer').val(data.name);
                })
            });

            $('#save-manufacturer').on('click',function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                var form = $("#manufacturerForm");

                if(form.valid() === false){
                    console.log('loi');
                }else{
                    var state = $(this).val();
                    if(state === 'edit-manufacturer'){
                        var id = $(this).attr('data-id');
                        var name = $('#name-manufacturer').val();
                        $.ajax({
                            url: '{{url('/admin/manufacturer')}}/'+id,
                            type:'PUT',
                            data:{name:name},
                            dataType:'json',
                            success:function (data) {
                                var edit = '<tr id="delete-coloum-'+data.id+'">\n' +
                                    '<td>Đã Sửa</td>\n' +
                                    '<td>'+data.name+'</td>\n' +
                                    '<td class="text-center">\n' +
                                    '<button class="btn btn-warning btn-xs edit-manufacturer" value="'+data.id+'">Sửa</button> &ensp;\n' +
                                    '<button class="btn btn-danger btn-xs" id="delete-manufacturer" value="'+data.id+'">Xóa</button>\n' +
                                    '</td>\n' +
                                    '</tr>';
                                $("#delete-coloum-"+data.id).replaceWith(edit);
                                $('#modal-manufacturer').modal('hide');
                            }
                        })
                    }
                }
            })
        })
    </script> -->
@stop