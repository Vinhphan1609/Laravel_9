@extends ('profile/profiles_layout')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Sửa</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('profiles.index')}}" class="btn btn-primary float-end">thêm</a>
                     </div>
                 </div>
             </div>
             <div class="card-body">
                 <form action="{{ route('profiles.index') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <strong>Họ Tên</strong>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>Ngày sinh</strong>
                                <input type="date" name="date_of_birth" class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>Nickname</strong>
                                <input type="text" name="nickname" class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>Tên đăng nhập</strong>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>Email</strong>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>Giới thiệu</strong>
                                <input type="text" name="description" class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>Avatar</strong>
                                <input type="text" name="avatar" class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>Địa Chỉ</strong>
                                <input type="text" name="address" class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>Số điện thoại</strong>
                                <input type="text" name="phone_number" class="form-control">
                            </div>
                            
                        </div>
                    </div>
                    <button class="submit" class="btn btn-success mt-2">Lưu</button>

                </form>