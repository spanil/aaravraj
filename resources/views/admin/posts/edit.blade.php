@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 class="m-0">Create Post</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Posts</li>
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
                            <h3 class="card-title">Edit Post</h3>
                        </div>
                       <form action="{{ route('admin.posts.update', ['post' => $data->id]) }}" class="form-horizontal form-bordered" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                     <input type="hidden" name="_method" value="PATCH">
                            <div class="card-body">                             

                                <div class="form-group">
                                    <label for="name">Title(English)</label>
                                    <input type="text" name="title_en" class="form-control @error('title_en') is-invalid @enderror" id="title_en" placeholder="Enter post name" value="{{ $data->translate('en')->title }}">
                                    @error('title_en')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                 <div class="form-group">
                                    <label for="name">Title(Nepali)</label>
                                    <input type="text" name="title_np" class="form-control @error('title_np') is-invalid @enderror" id="title_np" placeholder="Enter post name" value="{{ $data->translate('np')->title }}">
                                    @error('title_np')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>                     

                                <div class="form-group">
                                    <label for="editordescription">Description(English)</label>
                                    <textarea id="editordescription_en" name="description_en" class="form-control @error('description_en') is-invalid @enderror" rows="8">{{ $data->translate('en')->description }}</textarea>
                                    @error('description_en')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                 <div class="form-group">
                                    <label for="editordescription">Description(Nepali)</label>
                                    <textarea id="editordescription_np" name="description_np" class="form-control @error('description_np') is-invalid @enderror" rows="8">{{ $data->translate('np')->description }}</textarea>
                                    @error('description_np')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                 <div class="form-group">
                                    <label for="image">Image</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="image">
                                        <label class="custom-file-label" for="image"></label>
                                    </div>
                                    @error('image')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    {{-- Image Preview Area --}}
                                    <div id="image-preview-container" class="mt-2" style="display: none;">
                                        <img id="image-preview" src="#" alt="Image Preview" class="img-thumbnail" style="max-width: 200px; height: auto;">
                                    </div>
                                </div>

                      

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Order</label>
                                    <input type="text" name="order"  class="form-control" id="order" placeholder="Enter Order" value="{{
                                        $data->order}}">
                                    @if ($errors->has('order'))
                                        <span class="help-block" style="color: red;">
                                                            <strong>{{ $errors->first('order') }}</strong>
                                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <div class="d-flex">
                                        <div class="custom-control custom-radio mr-3">
                                            <input class="custom-control-input" type="radio" id="isFeaturedYes" name="status" value="1" {{ $data->status == '1' ? 'checked' : '' }}>
                                            <label for="isFeaturedYes" class="custom-control-label">Yes</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" id="isFeaturedNo" name="status" value="0" {{ $data->status == '0' ? 'checked' : '' }}>
                                            <label for="isFeaturedNo" class="custom-control-label">No</label>
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
        if (document.querySelector('#editordescription_en')) {
            ClassicEditor
                .create(document.querySelector('#editordescription_en'), {
                    // Optional: height configuration or other plugins
                })
                .catch(error => {
                    console.error('CKEditor for Description init error:', error);
                });
        }
         if (document.querySelector('#editordescription_np')) {
            ClassicEditor
                .create(document.querySelector('#editordescription_np'), {
                    // Optional: height configuration or other plugins
                })
                .catch(error => {
                    console.error('CKEditor for Description init error:', error);
                });
        }
         document.getElementById('image').addEventListener('change', function(e) {
            var fileName = e.target.files[0] ? e.target.files[0].name : 'Choose file';
            var nextSibling = e.target.nextElementSibling;
            nextSibling.innerText = fileName;

            // Image preview
            if (e.target.files && e.target.files[0]) {
                var reader = new FileReader();
                reader.onload = function(event) {
                    document.getElementById('image-preview').src = event.target.result;
                    document.getElementById('image-preview-container').style.display = 'block';
                };
                reader.readAsDataURL(e.target.files[0]);
            } else {
                document.getElementById('image-preview-container').style.display = 'none';
                document.getElementById('image-preview').src = '#';
            }
        });

       
    });
</script>
@endpush