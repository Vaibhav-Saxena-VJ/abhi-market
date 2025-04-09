@extends('admin.layouts.header')
@section('title', "User Management")

@section('content')
<div class="dashboard-body">
    <div class="breadcrumb-with-buttons mb-24 flex-between flex-wrap gap-8">
        <!-- Breadcrumb Start -->
        <div class="breadcrumb mb-24">
            <ul class="flex-align gap-4">
                <li><a href="{{ url('admin/dashboard') }}" class="text-gray-200 fw-normal text-15 hover-text-main-600">Dashboard</a></li>
                <li> <span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span> </li>
                <li><a href="{{ url('admin/insights') }}" class="text-gray-200 fw-normal text-15 hover-text-main-600">Insights</a></li>
                <li> <span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span> </li>
                <li><span class="text-main-600 fw-normal text-15">Add Insight</span></li>
            </ul>
        </div>
        <!-- Breadcrumb End -->

        <!-- Breadcrumb Right Start -->
        <div class="flex-align gap-8 flex-wrap">
            <div class="flex-align text-gray-500 text-13 border-gray-100 focus-border-main-600">
                <a href="{{ route('insights.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
        </div>
        <!-- Breadcrumb Right End -->
    </div>

    <div class="card">
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form action="{{ route('insights.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="row gy-20">
                    <label class="h5 fw-semibold font-heading mt-15 mb-0">Add Insight <span class="text-13 text-gray-400 fw-medium"></span> </label>
                    <div class="col-md-8 col-sm-5">
                        <div class="position-relative form-group pb-15">
                            <label for="category">Select Category</label>
                            <select id="category" class="form-control" required>
                                <option value="">-- Select Category --</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->pid }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="position-relative form-group pb-15">
                            <label for="insights_subcategory_id">Select Subcategory</label>
                            <select name="insights_subcategory_id" id="insights_subcategory_id" class="form-control" required>
                                <option value="">-- Select Subcategory --</option>
                            </select>
                        </div>
                        <div class="position-relative form-group pb-15">
                            <label for="insights_name">Insights Name</label>
                            <input type="text" name="insights_name" class="form-control" required>
                        </div>                        
                        <div class="position-relative form-group pb-15">
                            <label for="description">Description</label>
                            <textarea name="description" id="summernote" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-7">
                        <div class="position-relative pb-15 form-group">
                            <label for="image">Insights Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="position-relative pb-15 form-group">
                            <label for="meta_title">Meta Title</label>
                            <input type="text" name="meta_title" class="form-control">
                        </div>

                        <div class="position-relative pb-15 form-group">
                            <label for="meta_keywords">Meta Keywords</label>
                            <input type="text" name="meta_keywords" class="form-control">
                        </div>

                        <div class="position-relative pb-15 form-group">
                            <label for="meta_description">Meta Description</label>
                            <textarea name="meta_description" class="form-control"></textarea>
                        </div>

                        <div class="flex-align mt-10">
                            <button type="submit" class="btn btn-main rounded-pill py-9">Add Insight</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    document.getElementById('category').addEventListener('change', function () {
        let categoryId = this.value;
        let subcategoryDropdown = document.getElementById('insights_subcategory_id');

        fetch(`/get-subcategories-insights/${categoryId}`)
            .then(response => response.json())
            .then(data => {
                subcategoryDropdown.innerHTML = '<option value="">-- Select Subcategory --</option>';
                data.forEach(sub => {
                    subcategoryDropdown.innerHTML += `<option value="${sub.insights_subcategory_id}">${sub.name}</option>`;
                });
            });
    });
</script>
@endsection
