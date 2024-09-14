@extends('admin.home')

@section('content')
    <div>
        <ul class="flex space-x-2 rtl:space-x-reverse">
            <li>
                <a href="javascript:;" class="text-primary hover:underline">Admin</a>
            </li>
            <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
                <span>Profile</span>
            </li>
        </ul>
        <div class="pt-5">
            <div class="mb-5 grid grid-cols-10">
                <div class="panel">
                    <div class="mb-5 flex items-center justify-between">
                        <h5 class="text-lg font-semibold dark:text-white-light">Profile</h5>
                        <a href="{{ route('admin.profile.edit') }}"
                            class="btn btn-primary rounded-full p-2 ltr:ml-auto rtl:mr-auto">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                                <path opacity="0.5" d="M4 22H20" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" />
                                <path
                                    d="M14.6296 2.92142L13.8881 3.66293L7.07106 10.4799C6.60933 10.9416 6.37846 11.1725 6.17992 11.4271C5.94571 11.7273 5.74491 12.0522 5.58107 12.396C5.44219 12.6874 5.33894 12.9972 5.13245 13.6167L4.25745 16.2417L4.04356 16.8833C3.94194 17.1882 4.02128 17.5243 4.2485 17.7515C4.47573 17.9787 4.81182 18.0581 5.11667 17.9564L5.75834 17.7426L8.38334 16.8675L8.3834 16.8675C9.00284 16.6611 9.31256 16.5578 9.60398 16.4189C9.94775 16.2551 10.2727 16.0543 10.5729 15.8201C10.8275 15.6215 11.0583 15.3907 11.5201 14.929L11.5201 14.9289L18.3371 8.11195L19.0786 7.37044C20.3071 6.14188 20.3071 4.14999 19.0786 2.92142C17.85 1.69286 15.8581 1.69286 14.6296 2.92142Z"
                                    stroke="currentColor" stroke-width="1.5" />
                                <path opacity="0.5"
                                    d="M13.8879 3.66406C13.8879 3.66406 13.9806 5.23976 15.3709 6.63008C16.7613 8.0204 18.337 8.11308 18.337 8.11308M5.75821 17.7437L4.25732 16.2428"
                                    stroke="currentColor" stroke-width="1.5" />
                            </svg>
                        </a>
                    </div>
                    <div class="mb-5">
                        <div class="flex flex-col items-center justify-center">
                            <a href="">
                                <img src="{{ asset('admin_backend_assets') }}/images/profile-34.jpeg" alt="image"
                                class="mb-5 h-24 w-24 rounded-full object-cover" />
                            </a>
                            <p class="text-xl font-semibold text-primary"> {{ Auth::user()->name }} </p>
                        </div>
                        <ul class="m-auto mt-5 flex max-w-[160px] flex-col space-y-4 font-semibold text-white-dark">
                            <li class="flex items-center gap-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.5" d="M3 10.4167C3 7.21907 3 5.62028 3.37752 5.08241C3.75503 4.54454 5.25832 4.02996 8.26491 3.00079L8.83772 2.80472C10.405 2.26824 11.1886 2 12 2C12.8114 2 13.595 2.26824 15.1623 2.80472L15.7351 3.00079C18.7417 4.02996 20.245 4.54454 20.6225 5.08241C21 5.62028 21 7.21907 21 10.4167C21 10.8996 21 11.4234 21 11.9914C21 17.6294 16.761 20.3655 14.1014 21.5273C13.38 21.8424 13.0193 22 12 22C10.9807 22 10.62 21.8424 9.89856 21.5273C7.23896 20.3655 3 17.6294 3 11.9914C3 11.4234 3 10.8996 3 10.4167Z" stroke="currentColor" stroke-width="1.5"></path>
                                    <path d="M10.8613 8.36335C11.3679 7.45445 11.6213 7 12 7C12.3787 7 12.6321 7.45445 13.1387 8.36335L13.2698 8.59849C13.4138 8.85677 13.4858 8.98591 13.598 9.07112C13.7103 9.15633 13.8501 9.18796 14.1296 9.25122L14.3842 9.30881C15.3681 9.53142 15.86 9.64273 15.977 10.0191C16.0941 10.3955 15.7587 10.7876 15.088 11.572L14.9144 11.7749C14.7238 11.9978 14.6285 12.1092 14.5857 12.2471C14.5428 12.385 14.5572 12.5336 14.586 12.831L14.6122 13.1018C14.7136 14.1482 14.7644 14.6715 14.4579 14.9041C14.1515 15.1367 13.6909 14.9246 12.7697 14.5005L12.5314 14.3907C12.2696 14.2702 12.1387 14.2099 12 14.2099C11.8613 14.2099 11.7304 14.2702 11.4686 14.3907L11.2303 14.5005C10.3091 14.9246 9.84847 15.1367 9.54206 14.9041C9.23565 14.6715 9.28635 14.1482 9.38776 13.1018L9.41399 12.831C9.44281 12.5336 9.45722 12.385 9.41435 12.2471C9.37147 12.1092 9.27617 11.9978 9.08557 11.7749L8.91204 11.572C8.2413 10.7876 7.90593 10.3955 8.02297 10.0191C8.14001 9.64273 8.63194 9.53142 9.61581 9.30881L9.87035 9.25122C10.1499 9.18796 10.2897 9.15633 10.402 9.07112C10.5142 8.98591 10.5862 8.85677 10.7302 8.59849L10.8613 8.36335Z" stroke="currentColor" stroke-width="1.5"></path>
                                </svg>

                                {{ Auth::user()->usertype }}
                            </li>
                            <li class="flex items-center gap-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0">
                                    <path
                                        d="M2 12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12V14C22 17.7712 22 19.6569 20.8284 20.8284C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14V12Z"
                                        stroke="currentColor" stroke-width="1.5" />
                                    <path opacity="0.5" d="M7 4V2.5" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" />
                                    <path opacity="0.5" d="M17 4V2.5" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" />
                                    <path opacity="0.5" d="M2 9H22" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" />
                                </svg>
                                Jan 20, 1989
                            </li>
                            <li class="flex items-center gap-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0">
                                    <path opacity="0.5"
                                        d="M4 10.1433C4 5.64588 7.58172 2 12 2C16.4183 2 20 5.64588 20 10.1433C20 14.6055 17.4467 19.8124 13.4629 21.6744C12.5343 22.1085 11.4657 22.1085 10.5371 21.6744C6.55332 19.8124 4 14.6055 4 10.1433Z"
                                        stroke="currentColor" stroke-width="1.5" />
                                    <circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="1.5" />
                                </svg>
                                New York, USA
                            </li>
                            <li>
                                <a href="javascript:;" class="flex items-center gap-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0">
                                        <path opacity="0.5"
                                            d="M2 12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12C22 15.7712 22 17.6569 20.8284 18.8284C19.6569 20 17.7712 20 14 20H10C6.22876 20 4.34315 20 3.17157 18.8284C2 17.6569 2 15.7712 2 12Z"
                                            stroke="currentColor" stroke-width="1.5" />
                                        <path
                                            d="M6 8L8.1589 9.79908C9.99553 11.3296 10.9139 12.0949 12 12.0949C13.0861 12.0949 14.0045 11.3296 15.8411 9.79908L18 8"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                    <span class="truncate text-primary"> {{ Auth::user()->email }} </span></a>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                                    <path
                                        d="M16.1007 13.359L16.5562 12.9062C17.1858 12.2801 18.1672 12.1515 18.9728 12.5894L20.8833 13.628C22.1102 14.2949 22.3806 15.9295 21.4217 16.883L20.0011 18.2954C19.6399 18.6546 19.1917 18.9171 18.6763 18.9651M4.00289 5.74561C3.96765 5.12559 4.25823 4.56668 4.69185 4.13552L6.26145 2.57483C7.13596 1.70529 8.61028 1.83992 9.37326 2.85908L10.6342 4.54348C11.2507 5.36691 11.1841 6.49484 10.4775 7.19738L10.1907 7.48257"
                                        stroke="currentColor" stroke-width="1.5" />
                                    <path opacity="0.5"
                                        d="M18.6763 18.9651C17.0469 19.117 13.0622 18.9492 8.8154 14.7266C4.81076 10.7447 4.09308 7.33182 4.00293 5.74561"
                                        stroke="currentColor" stroke-width="1.5" />
                                    <path opacity="0.5"
                                        d="M16.1007 13.3589C16.1007 13.3589 15.0181 14.4353 12.0631 11.4971C9.10807 8.55886 10.1907 7.48242 10.1907 7.48242"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                                <span class="whitespace-nowrap" dir="ltr">+1 (530) 555-12121</span>
                            </li>
                        </ul>
                        <ul class="mt-7 flex items-center justify-center gap-2">
                            <li>
                                <a class="btn btn-info flex h-10 w-10 items-center justify-center rounded-full p-0"
                                    href="javascript:;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                                        <path
                                            d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a class="btn btn-danger flex h-10 w-10 items-center justify-center rounded-full p-0"
                                    href="javascript:;">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                                        <path
                                            d="M3.33946 16.9997C6.10089 21.7826 12.2168 23.4214 16.9997 20.66C18.9493 19.5344 20.3765 17.8514 21.1962 15.9286C22.3875 13.1341 22.2958 9.83304 20.66 6.99972C19.0242 4.1664 16.2112 2.43642 13.1955 2.07088C11.1204 1.81935 8.94932 2.21386 6.99972 3.33946C2.21679 6.10089 0.578039 12.2168 3.33946 16.9997Z"
                                            stroke="currentColor" stroke-width="1.5" />
                                        <path opacity="0.5"
                                            d="M16.9497 20.5732C16.9497 20.5732 16.0107 13.9821 14.0004 10.5001C11.99 7.01803 7.05018 3.42681 7.05018 3.42681M7.57711 20.8175C9.05874 16.3477 16.4525 11.3931 21.8635 12.5801M16.4139 3.20898C14.926 7.63004 7.67424 12.5123 2.28857 11.4516"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a class="btn btn-dark flex h-10 w-10 items-center justify-center rounded-full p-0"
                                    href="javascript:;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                                        <path
                                            d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
