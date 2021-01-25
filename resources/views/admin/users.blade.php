@extends('admin.base')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Categories</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <span><button id="add-user" href="#"><i class="fa fa-plus"></i>User</button></span>
        </div>
        
        <!-- /.col-lg-12 -->
    </div>
{{-- <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Dashboard </h2>
            <p class="pageheader-text">Product Categories</p>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Product Categories</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="btn-group mb-2 ml-3 col-md-12">
        <button type="button" class="btn btn-dark btn-sm">
            <i class="fa fa-back"></i>
            Back
        </button>
        <button type="button" class="btn btn-success btn-sm" id="add-user">
            <i class="fa fa-plus-circle"></i>
            New User
        </button>
    </div>
</div>
--}}
<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped" id="catogories-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created on</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $loop->count }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>
                                        <span href="#" class="edit_user text-primary"
                                            data-id="{{ $user->id }}">
                                            <i class="fa fa-pencil"></i>
                                        </span>
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

<!-- add  -->
<div class="modal fade bd-example-modal-xl" tabindex="-1" id="add-user-modal" role="dialog" data-backdrop="static"
    data-keyboard="false" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color:lavender;">
                <h5 class="modal-title" id="modal-label">Add User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="user-form" method="POST" action="{{ route('new_update_users') }}">
                    @csrf
                    <input type="hidden" name="id" id="id" required />
                    <input type="hidden" name="new" id="new"  value="1" required />
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name" class="required">Name</label>
                            <input type="text" class="form-control " name="name" id="name" required />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email" class="required">Email</label>
                            <input type="email" class="form-control " name="email" id="email" required />
                        </div>
                    </div>
                    <div class="row">
                        {{-- <button type="submit" name="delete" class="btn btn-danger col-md-6" id="del-btn">Delete</button> --}}
                        <button type="submit" class="btn btn-primary col-md-6">Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- end  -->
@endsection
@push('scripts')
    <script>
        $('#del-btn').hide();
        // $('#catogories-table').dataTable();
        $('#add-user').click(function (e) {
            $('#del-btn').hide();
            $('#modal-label').text("Add user");
            $('#new').val('1');
            e.preventDefault();
            $('#add-user-modal').modal('show');
        });

        let users = '{!! isset($users) ? $users : '
        ' !!}';
        if (users != '') {
            users = JSON.parse(users);
        }

        $('.edit_user').click(function (e) {
            $('#del-btn').show();
            $('#modal-label').text("Update user");
            $('#new').val('0');
            let id = $(this).data('id');
            $('#user-form').attr('action', "{!!  route('new_update_users') !!}");
            e.preventDefault();
            $.each(users, function (i, val) {
                if (val.id == id) {
                    $('#id').val(val.id);
                    $('#name').val(val.name);
                    $('#email').val(val.email);
                    return false;
                }
            });
            $('#add-user-modal').modal('show');
        });
    </script>
@endpush
