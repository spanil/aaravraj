@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 class="m-0">Create</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
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
                            <h3 class="card-title">Add New Staff</h3>
                        </div>                       
                           <form action="{{ route('admin.staffs.update', ['staff' => $data->id]) }}" class="form-horizontal form-bordered" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="PATCH">
                            <div class="card-body">

                               

                                <div class="form-group">
                                    <label for="name">Title</label>
                                    <input type="text" name="title" class="form-control" id="title" placeholder="Enter  title" value="{{ $data->title }}">
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                 <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="title" placeholder="Enter  name" value="{{ $data->name }}">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="editorshortdescription">Short Description</label>
                                    <textarea id="editorshortdescription" name="short_description" class="form-control" rows="4">{{ $data->short_description }}</textarea>
                                    @error('short_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="editordescription">Description</label>
                                    <textarea id="editordescription" name="description" class="form-control" rows="8">
                                        {{ $data->description }}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>                                

                                <div class="form-group">
                                    @if($data->image)
                                      <div id="image-preview">>
                                        <img src="{{ asset('storage/staff/'.$data->image) }}" width="100">
                                        
                                    <button type="button" class="btn btn-outline-danger btn-sm"  id="delete-image" data-id="{{ $data->id }}">Delete Image</button>
                                        
                                      </div>
                                    @endif
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
                                    <label for="name">Speciality</label>
                                    <input type="text" name="speciality" class="form-control" id="speciality" placeholder="Enter  speciality" value="{{ $data->speciality }}">
                                    @error('speciality')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                 <div class="form-group">
                                    <label for="name">Degrees</label>
                                    <input type="text" name="degrees" class="form-control" id="degrees" placeholder="Enter  degrees" value="{{$data->degrees }}">
                                    @error('degrees')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                 <div class="form-group">
                                    <label for="name">Training</label>
                                    <input type="text" name="training" class="form-control" id="training" placeholder="Enter  training" value="{{ $data->training }}">
                                    @error('training')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                 <div class="form-group">
                                    <label for="name">Contact Info</label>
                                    <input type="text" name="contact_info" class="form-control" id="contact_info" placeholder="Enter  contact_info" value="{{ $data->contact_info }}">
                                    @error('contact_info')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                 <div class="form-group">
                                    <label for="name">Work Days</label>
                                    <input type="text" name="work_days" class="form-control" id="work_days" placeholder="Enter  work days" value="{{ $data->work_days }}">
                                    @error('work_days')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <!-- Services List -->
                                <div id="service-wrapper">
                                    @php
                                        $services = old('services', $data->services ?? []);
                                    @endphp

                                    @forelse ($services as $index => $service)
                                        <div class="form-group">
                                            <div class="removeformgroup">
                                                <label for="services">Services</label>
                                                <input type="text" name="services[]" class="form-control" value="{{ $service }}" placeholder="Enter title">
                                                <span class="pointer deleteAssesmentRow text-danger" style="cursor:pointer;">
                                                    <i class="fa fa-minus"></i>
                                                </span>
                                            </div>
                                        </div>
                                    @empty
                                        <!-- If empty, show one blank input -->
                                        <div class="form-group">
                                            <div class="removeformgroup">
                                                <label for="services">Services</label>
                                                <input type="text" name="services[]" class="form-control" placeholder="Enter title">
                                            </div>
                                        </div>
                                    @endforelse
                                </div>

                                <div class="form-group">
                                    <span onclick="addAssesmentModuleRow()" class="pointer btn btn-primary btn-sm">
                                        <i class="fa fa-plus" data-toggle="tooltip" title="Add More" aria-hidden="true"></i> Add More
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <div class="d-flex">
                                        <div class="custom-control custom-radio mr-3">
                                            <input class="custom-control-input" type="radio" id="isActiveYes" name="status" value="1" {{ $data->status == 1 ? 'checked' : '' }}>
                                            <label for="isActiveYes" class="custom-control-label">Active</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" id="isActiveNo" name="status" value="0" {{ $data->status == 0 ? 'checked' : '' }}>
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

        // Initialize CKEditor for Description
        if (document.querySelector('#editordescription')) {
            ClassicEditor
                .create(document.querySelector('#editordescription'), {
                    // Optional: height configuration or other plugins
                })
                .catch(error => {
                    console.error('CKEditor for Description init error:', error);
                });
        }

        // Custom File Input and Image Preview
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
     function addAssesmentModuleRow() {
        const html = '<div class="form-group">' +
                        '<div class="removeformgroup">' +
                            '<label for="services">Services</label>' +
                            '<input type="text" name="services[]" class="form-control" placeholder="Enter title">' +
                            '<span class="pointer deleteAssesmentRow text-danger" style="cursor:pointer;"><i class="fa fa-minus"></i></span>' +
                        '</div>' +
                    '</div>';

        $('#service-wrapper').append(html);
    }

    $(document).on('click', '.deleteAssesmentRow', function () {
        $(this).closest('.removeformgroup').remove();
    });
  $('#delete-image').on('click', function () {
    if (!confirm('Are you sure you want to delete the image?')) return;
    var id = $(this).data('id');

    $.ajax({
      url: '/admin/staffs/image/' + id,
      type: 'DELETE',
      data: {
        _token: '{{ csrf_token() }}'
      },
      success: function (response) {
        $('#image-preview').remove();
      },
      error: function () {
        alert('Something went wrong while deleting the image.');
      }
    });
  });
</script>
@endpush