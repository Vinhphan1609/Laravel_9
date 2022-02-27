@extends ('profile/profiles_layout')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Edit Profiles</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('profiles.index')}}" class="btn btn-primary float-end">Profiles</a>
                     </div>
                 </div>
             </div>
             <div class="card-body">
                 <form action="{{ route('profiles.update', $profiles->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <strong>Họ Tên</strong>
                                <input type="text" name="{{ $profiles->name }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>Ngày sinh</strong>
                                <input type="date" name="{{ $profiles->date_of_birth }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>nickname</strong>
                                <input type="text" name="{{ $profiles->nickname }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>Tên đăng nhập</strong>
                                <input type="text" name="{{ $profiles->username }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>Email</strong>
                                <input type="text" name="{{ $profiles->email }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>Giới thiệu</strong>
                                <input type="text" name="{{ $profiles->description }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>Avatar</strong>
                                <input type="text" name="{{ $profiles->avatar }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>Địa Chỉ</strong>
                                <input type="text" name="{{ $profiles->address }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>Số điện thoại</strong>
                                <input type="text" name="{{ $profiles->phone_number }}" class="form-control">
                            </div>

                            
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Update</button>
                </form>
            </div>
        </div>
    </div>

@endsection