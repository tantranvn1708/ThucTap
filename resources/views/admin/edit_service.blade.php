@section('admin_content')
@extends('admin_layout')


<div class="pcoded-inner-content">

<!-- Main-body start -->
<div class="main-body">
<div class="page-wrapper">
<!-- Page body start -->
    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">
                <!-- Basic Form Inputs card start -->
                <div class="card">
                    <div class="card-header">
                        <h4>Chỉnh sửa gói cước thoại </h4>
                        <span> <?php
                             $message = Session::get('message');
                            if ($message){
                             echo '<span style="color:red; font-size:17px;">',$message.'</span>';
                                Session::put('message',null);
                                }
                                 ?></span>
                        <div class="card-header-right"><i
                            class="icofont icofont-spinner-alt-5"></i></div>

                            <div class="card-header-right">
                                <i class="icofont icofont-spinner-alt-5"></i>
                            </div>

                        </div>
                        <div class="card-block">
                            @foreach($edit_service as $key => $edit_value)
                           
                            <form action="{{URL::to('/update-service/'.$edit_value->service_id)}}" method="post">
                                    {{ csrf_field()}}
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tên dịch vụ</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" 
                                        value="{{$edit_value->service_name}}" name="service_name">
                                    </div>
                                </div>
                                           <!--  <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Upload File</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control">
                                                </div>
                                            </div> -->
                                    <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Chi tiết dịch vụ</label>
                                                <div class="col-sm-10">
                                                    <textarea rows="1" cols="5" class="form-control"
                                                    name="service_content" >{{$edit_value->service_price}}</textarea>
                                                </div>
                                    </div>

                                    <div class="form-group row">
                                                <label class="col-sm-2 col-form-label"> Giá tiền</label>
                                                <div class="col-sm-10">
                                                    <textarea rows="1" cols="5" class="form-control"
                                                    name="service_price" >{{$edit_value->service_price}}</textarea>

                                                    <p id="price">{{number_format($serv->service_price,0,',','.').' '.'VNĐ'}}</p> 
                                                </div>
                                    </div>

                                   
                                    

                                    <button class="btn btn-grd-success" style="float: right;" name="save-service">Cập nhật</button>
                            </form> 
                            @endforeach                                                                         
                        </div>
                    </div>                                                                        
                </div>
            </div>
        </div>
</div>
</div>
</div>
           
@endsection