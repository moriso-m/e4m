@extends('admin.base')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Categories</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <span><button id="add-category" href="#"><i class="fa fa-plus"></i>Category</button></span>
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
        <button type="button" class="btn btn-success btn-sm" id="add-category">
            <i class="fa fa-plus-circle"></i>
            New Category
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
                                <th>Category Code</th>
                                <th>Category Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $cat)
                                <tr>
                                    <td>{{ $cat->category_code }}</td>
                                    <td>{{ $cat->description }}</td>
                                    <td>
                                        <span href="#" class="edit_category text-primary"
                                            data-id="{{ $cat->category_code }}">
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
<div class="modal fade bd-example-modal-xl" tabindex="-1" id="add-category-modal" role="dialog" data-backdrop="static"
    data-keyboard="false" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color:lavender;">
                <h5 class="modal-title" id="modal-label">Add Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="category-form" method="POST" action="{{ route('new_update_categories') }}">
                    @csrf
                    <input type="hidden" name="category_code" id="category_code" required />
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="description" class="required">Description</label>
                            <input type="text" class="form-control " name="description" id="description" required />
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
        $('#add-category').click(function (e) {
            $('#del-btn').hide();
            $('#modal-label').text("Add category");
            e.preventDefault();
            $('#add-category-modal').modal('show');
        });

        let categories = '{!! isset($categories) ? $categories : '
        ' !!}';
        if (categories != '') {
            categories = JSON.parse(categories);
        }

        $('.edit_category').click(function (e) {
            $('#del-btn').show();
            $('#modal-label').text("Update category");

            let id = $(this).data('id');
            $('#category-form').attr('action', "{!!  route('new_update_categories') !!}");
            e.preventDefault();
            $.each(categories, function (i, val) {
                if (val.category_code == id) {
                    $('#category_code').val(val.category_code);
                    $('#description').val(val.description);
                    return false;
                }
            });
            $('#add-category-modal').modal('show');
        });
    </script>
@endpush
