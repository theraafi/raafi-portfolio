@extends('admin.home')

@section('content')
    <div class="main-wrapper">
        <div class="container-fluid">
            <div class="grid grid-cols-2 gap-2">
                <div class="panel">
                    <div class="mb-5 flex items-center justify-between">
                        <h5 class="text-lg font-semibold dark:text-white-light">User Photo</h5>

                    </div>
                    <form action="{{ route('admin.profile.imageUpload', $user->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf\
                        <div class="mb-5">
                            <div class="custom-file-container" data-upload-id="myFirstImage">
                                <div class="label-container">
                                    <label>Change or Upload</label>
                                </div>

                                <div>

                                    <img src="{{ asset('admin_backend_assets') }}/images/profile-34.jpeg" alt="image" class="mb-5 h-24 w-24 rounded-full object-cover" />


                                </div>

                                <input name="user_image" id="ctnFile" type="file"
                                    class="rtl:file-ml-5 form-input p-0 file:border-0 file:bg-primary/90 file:px-4 file:py-2 file:font-semibold file:text-white file:hover:bg-primary ltr:file:mr-5">

                                <button type="submit" class="btn btn-outline-primary rounded-full mt-5">Save</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
