@extends ('profile/profiles_layout')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Profiles</h3>
                    </div>
                    
                </div>
            </div>
            <div class="card-body">
                @if (Session::has('thongbao'))
                    <div class="alert alert-success">
                        {{ Session::get('thongbao') }}
                    </div>
                    
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Họ Tên</th>
                            <th>Ngày tháng năm sinh</th>
                            <th>Nickname</th>
                            <th>Tên đăng nhập</th>
                            <th>Email</th>
                            <th>Thời gian tạo tài khoản</th>
                            <th>Giới thiệu bản thân</th>
                            <th>Avatar</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($profiles as $pf )
                            <tr>
                                <td>{{ $pf->id }}</td>
                                <td>{{ $pf->name }}</td>
                                <td>{{ $pf->date_of_birth }}</td>
                                <td>{{ $pf->nickname }}</td>
                                <td>{{ $pf->username }}</td>
                                <td>{{ $pf->email }}</td>
                                <td>{{ $pf->created_at }}</td>
                                <td>{{ $pf->description }}</td>
                                <td>{{ $pf->avatar }}</td>
                                <td>{{ $pf->address }}</td>
                                <td>{{ $pf->phone_number }}</td>
                                <td>
                                    <form action="{{ route('profiles.destroy',$pf->id) }}" method="POST">
                                        <a href="{{ route('profiles.edit',$pf->id )}}" class="btn btn-info">Sửa</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                            
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection  