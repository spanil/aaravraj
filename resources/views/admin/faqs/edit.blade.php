@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 class="m-0">Update</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Faqs</li>
                    <li class="breadcrumb-item active" aria-current="page">Update</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            {{-- REMOVED justify-content-center from this row --}}
            <div class="row">
                <div class="col-md-8"> {{-- This column will now naturally align to the left --}}
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-question">Update </h3>
                        </div>
                        <form action="{{ route('admin.faqs.update', ['faq' => $data->id]) }}" class="form-horizontal form-bordered" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="PATCH">
                            <div class="card-body">

                               

                                <div class="form-group">
                                    <label for="name">Question</label>
                                    <input type="text" name="question" class="form-control" id="question" placeholder="Enter  question" value="{{ $data->question }}">
                                    @error('question')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="editorshortdescription">Answer</label>
                                    <textarea id="editorshortdescription" name="answer" class="form-control" rows="4">{{ $data->answer}}</textarea>
                                    @error('answer')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                               

                                <div class="form-group">
                                    <label>Status</label>
                                    <div class="d-flex">
                                        <div class="custom-control custom-radio mr-3">
                                            <input class="custom-control-input" type="radio" id="isActiveYes" name="status" value="1" {{ $data->status === 1 ? 'checked' : '' }} >
                                            <label for="isActiveYes" class="custom-control-label">Active</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" id="isActiveNo" name="status" value="0" {{ $data->status === 0 ? 'checked' : '' }}>
                                            <label for="isActiveNo" class="custom-control-label">InActive</label>
                                        </div>
                                    </div>
                                    @error('status')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>                            

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary float-end">Update</button>                               
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    @stop

@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Initialize CKEditor for Short Description
        if (document.querySelector('#editorshortdescription')) {
            ClassicEditor
                .create(document.querySelector('#editorshortdescription'), {
                    // Optional: height configuration or other plugins
                })
                .catch(error => {
                    console.error('CKEditor for Short Description init error:', error);
                });
        }   
    });
</script>
@endpush