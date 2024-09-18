@extends('admin.home')

@section('content')
    <div class="main-wrapper">
        <div class="container-fluid grid grid-cols-2 gap-4">
            {{-- Update Image --}}
            <div class="">
                <div class="panel">
                    <div class="mb-5 flex items-center justify-between">
                        <h5 class="text-lg font-semibold dark:text-white-light">User Photo</h5>

                    </div>

                    @if (Session::has('success'))
                        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                            role="alert">
                            <span class="font-medium"> {{ Session::get('success') }} </span>
                        </div>
                    @endif

                    <form action="{{ route('admin.profile.imageUpload', $user->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-5">
                            <div class="custom-file-container" data-upload-id="myFirstImage">
                                <div class="label-container">
                                    <label>Change or Upload</label>
                                </div>

                                <div>

                                    @if ($user->user_image != 'NULL')
                                        <img src="{{ Storage::url($user->user_image) }}" alt="{{ $user->name }}" class="mb-5 h-24 w-24 rounded-full object-cover">
                                    @else
                                    <img src="{{ asset('admin_backend_assets') }}/images/profile-34.jpeg" alt="image"
                                    class="mb-5 h-24 w-24 rounded-full object-cover" />
                                    @endif


                                </div>

                                <input name="user_image" id="ctnFile" type="file"
                                    class="rtl:file-ml-5 form-input p-0 file:border-0 file:bg-primary/90 file:px-4 file:py-2 file:font-semibold file:text-white file:hover:bg-primary ltr:file:mr-5">

                                <button type="submit" class="btn btn-outline-primary rounded-full mt-5">Save</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

            {{-- Update Information --}}
            <div class="">
                <div class="panel">
                    <div class="mb-5 flex items-center justify-between">
                        <h5 class="text-lg font-semibold dark:text-white-light"> Update Information </h5>

                    </div>
                    <div class="mb-5">
                        <form class="space-y-5">
                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                <div>
                                    <label for="gridEmail">Name</label>
                                    <input id="gridEmail" type="text" placeholder="Enter Email" class="form-input">
                                </div>
                                <div>
                                    <label for="gridPassword">Role</label>
                                    <input id="gridPassword" type="text" placeholder="Enter Password" class="form-input">
                                </div>
                            </div>
                            <div>
                                <label for="gridAddress1">Address</label>
                                <input id="gridAddress1" type="text" placeholder="Enter Address" value="1234 Main St" class="form-input">
                            </div>
                            <div>
                                <label for="gridAddress2">Address2</label>
                                <input id="gridAddress2" type="text" placeholder="Enter Address2" value="Apartment, studio, or floor" class="form-input">
                            </div>
                            <div class="grid grid-cols-1 gap-4 md:grid-cols-3 lg:grid-cols-4">
                                <div class="md:col-span-2">
                                    <label for="gridCity">City</label>
                                    <input id="gridCity" type="text" placeholder="Enter City" class="form-input">
                                </div>
                                <div>
                                    <label for="gridState">State</label>
                                    <select id="gridState" class="form-select text-white-dark">
                                        <option>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="gridZip">Zip</label>
                                    <input id="gridZip" type="text" placeholder="Enter Zip" class="form-input">
                                </div>
                            </div>
                            <div>
                                <label class="mt-1 flex cursor-pointer items-center">
                                    <input type="checkbox" class="form-checkbox">
                                    <span class="text-white-dark">Check me out</span>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary !mt-6">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
