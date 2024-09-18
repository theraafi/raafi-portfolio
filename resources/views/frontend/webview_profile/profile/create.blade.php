@extends('admin.home')

@section('content')
    <div class="main-wrapper">
        <div class="container-fluid container-fluid grid grid-cols-2 gap-4">
            <div class="">
                <div class="panel lg:col-start-2 lg:row-start-3">
                    <div class="mb-5 flex items-center justify-between">
                        <h5 class="text-lg font-semibold dark:text-white-light"> Create Profile </h5>

                    </div>
                    <div class="mb-5">
                        <form class="space-y-5" action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <label for="actionName">Full Name:</label>
                                <input id="actionName" type="text" placeholder="Enter Full Name" class="form-input" name="name">
                            </div>
                            <div>
                                <label for="actionEmail">Email:</label>
                                <div class="flex flex-1">
                                    <div
                                        class="flex items-center justify-center border border-[#e0e6ed] bg-[#eee] px-3 font-semibold ltr:rounded-l-md ltr:border-r-0 rtl:rounded-r-md rtl:border-l-0 dark:border-[#17263c] dark:bg-[#a9afb7]">
                                        @
                                    </div>
                                    <input id="actionEmail" type="email" placeholder="Enter Email"
                                        class="form-input ltr:rounded-l-none rtl:rounded-r-none" name="email">
                                </div>
                            </div>
                            <div>
                                <label for="actionWeb">Phone:</label>
                                <input id="" type="number" placeholder="+880" class="form-input" name="phone">
                            </div>
                            <div>
                                <label for="actionPassword">Image</label>
                                <input type="file" placeholder="" class="form-input" name="image">
                            </div>
                            <div>
                                <label for="actionCpass"> Logo </label>
                                <input id="" type="file" placeholder=""
                                    class="form-input" name="logo">
                            </div>
                            <button type="submit" class="btn btn-primary !mt-6">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
