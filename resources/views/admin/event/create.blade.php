<x-app-layout>
    <x-slot name="content">

        {{-- Content --}}

        <main class="flex-grow p-6">

             <!-- Page Title Start -->
             <div class="flex justify-between items-center mb-6">
                <h4 class="text-slate-900 dark:text-slate-200 text-lg font-medium">Create/Update</h4>

                <div class="md:flex hidden items-center gap-2.5 text-sm font-semibold">
                    <div class="flex items-center gap-2">
                        <a href="#" class="text-sm font-medium text-slate-700 dark:text-slate-400">Dashboard</a>
                    </div>

                    <div class="flex items-center gap-2">
                        <i class="mgc_right_line text-lg flex-shrink-0 text-slate-400 rtl:rotate-180"></i>
                        <a href="#" class="text-sm font-medium text-slate-700 dark:text-slate-400">Create/Update</a>
                    </div>

                    <div class="flex items-center gap-2">
                        <i class="mgc_right_line text-lg flex-shrink-0 text-slate-400 rtl:rotate-180"></i>
                        <a href="#" class="text-sm font-medium text-slate-700 dark:text-slate-400" aria-current="page">{{$event?->title}}</a>
                    </div>
                </div>
            </div>
            <!-- Page Title End -->

            <div class="card">
                <div class="card-header">
                    <div class="flex justify-between items-center">
                        <h4 class="card-title">Update</h4>
                    </div>
                </div>
                <div class="p-6">

                    <div class="grid lg:grid-cols-6 gap-6">

                        <div>
                            <div>
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                    <div class="text-red-700 px-4 py-3 rounded relative" role="alert">
                                        <span class="block sm:inline">{{ $error }}
                                    </div>
                                    @endforeach
                                </div>
                                @endif
                            </div>
                            <form action="{{ route('admin.event.update', $event?->id) }}" method="POST"
                                enctype="multipart/form-data">

                                @csrf
                                <div class="grid grid-cols-1 md:grid-cols-2  gap-6">
                                    <div>
                                        <label for="inputEmail4"
                                            class="text-gray-800 text-sm font-medium inline-block mb-2">Title</label>
                                        <input type="text" class="form-input" id="inputEmail4" name="title"
                                            placeholder="Event Title" value="{{ $event?->title }}">
                                    </div>

                                    <div>
                                        <label for="inputEmail4"
                                            class="text-gray-800 text-sm font-medium inline-block mb-2">Host
                                            Name</label>
                                        <input type="text" class="form-input" id="inputEmail4" name="host_name"
                                            placeholder="Host Name" value="{{ $event?->host_name }}">
                                    </div>

                                    <div>
                                        <label for="inputState"
                                            class="text-gray-800 text-sm font-medium inline-block mb-2">No. of Guest
                                            Expected</label>
                                        <select id="inputState" name="guests" class="form-select">
                                            @if ($event?->guest)
                                            <option value="{{$event?->guest}}">{{$event?->guest}}</option>
                                            @endif
                                            <option disabled>Choose Number of Guest</option>

                                            <option value="5">1-5</option>
                                            <option value="10">1-10</option>
                                            <option value="50">10-50</option>
                                            <option value="100">50-100</option>
                                            <option value="150">100-above</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="inputState"
                                            class="text-gray-800 text-sm font-medium inline-block mb-2">No. of Sponsors
                                            Expected</label>
                                        <select id="inputState" name="sponsors" class="form-select">

                                            @if ($event?->sponsors)
                                            <option value="{{$event?->sponsors}}">{{$event?->sponsors}}</option>
                                            @endif
                                            <option disabled>Choose Number of Sponsors</option>
                                            <option value="5">1-5</option>
                                            <option value="10">5-10</option>
                                            <option value="50">10-50</option>
                                            <option value="100">50-100</option>
                                            <option value="150">100-above</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="inputEmail4"
                                            class="text-gray-800 text-sm font-medium inline-block mb-2">Event Start
                                            Date</label>
                                        <input type="date" class="form-input" id="inputEmail4" name="start_date"
                                            placeholder="Enter Start Date" value="{{ $event?->start_date }}">
                                    </div>
                                    <div>
                                        <label for="inputEmail4"
                                            class="text-gray-800 text-sm font-medium inline-block mb-2">Event End
                                            Date</label>
                                        <input type="date" class="form-input" id="inputEmail4" name="end_date"
                                            placeholder="Enter End Date" value="{{ $event?->end_date }}">
                                    </div>
                                    <div>
                                        <label for="inputEmail4"
                                            class="text-gray-800 text-sm font-medium inline-block mb-2">Event Start
                                            Time</label>
                                        <input type="time" class="form-input" id="inputEmail4" name="start_time"
                                            placeholder="Enter Start Time" value="{{ $event?->start_time }}">
                                    </div>

                                    <div>
                                        <label for="inputEmail4"
                                            class="text-gray-800 text-sm font-medium inline-block mb-2">Event End
                                            Time</label>
                                        <input type="time" class="form-input" id="inputEmail4" name="end_time"
                                            placeholder="Enter End Time" value="{{ $event?->end_time }}">
                                    </div>
                                    <div>
                                        <label for="inputPassword4"
                                            class="text-gray-800 text-sm font-medium inline-block mb-2">Expected number
                                            of visitors</label>
                                        <input type="integer" class="form-input" id="inputPassword4"
                                            placeholder="eg. 100" name="capacity" value="{{ $event?->capacity }}">
                                    </div>

                                    <div>
                                        <label for="inputState"
                                            class="text-gray-800 text-sm font-medium inline-block mb-2">Entry
                                            requirement</label>
                                        <select id="inputState" name="is_paid" class="form-select">
                                            @if ($event?->is_paid)
                                            <option value="{{$event?->is_paid}}">{{$event?->is_paid}}</option>
                                            @endif
                                            <option disabled>Entry Requirement</option>

                                            <option value="Free">Free</option>
                                            <option value="Paid">Paid</option>
                                            <option value="Free For Women">Free For Women</option>
                                            <option value="Free For Men">Free For Men</option>

                                        </select>
                                    </div>

                                    <div>
                                        <label for="inputAddress"
                                            class="text-gray-800 text-sm font-medium inline-block mb-2">Gate Fee</label>
                                        <input type="number" name="price" class="form-input" id="inputAddress"
                                            value="{{ $event?->price }}" placeholder="₦ 1,000">
                                    </div>

                                    <div>
                                        <label for="inputAddress2"
                                            class="text-gray-800 text-sm font-medium inline-block mb-2">Location</label>
                                        <input type="text" class="form-input" id="locationInput" name="location"
                                            placeholder="Enter Location" value="{{ $event?->location }}">
                                    </div>

                                    <div>
                                        <label for="inputState"
                                            class="text-gray-800 text-sm font-medium inline-block mb-2">Classify this
                                            event</label>
                                        <select id="inputState" name="category" class="form-select">
                                            @if ($event?->category)
                                            <option value="{{$event?->categoy}}">{{$event?->category}}</option>
                                            @endif
                                            <option disabled>Category</option>

                                            <option value="Christian">Christian</option>
                                            <option value="Goofy">Goofy</option>
                                        </select>
                                    </div>

                                    <div>
                                        <label for="inputAddress2"
                                            class="text-gray-800 text-sm font-medium inline-block mb-2">Enter a link to
                                            the event page or registeration page</label>
                                        <input type="text" class="form-input" name="links" id="inputAddress2"
                                            placeholder="www.example_goofy_event.com" value="{{ $event?->links }}">
                                    </div>

                                    {{-- Host Images --}}
                                    <div>
                                        <label for="host_image"
                                            class="text-gray-800 text-sm font-medium inline-block mb-2">Host
                                            Image</label>

                                        <input type="file" class="form-input" accept="image/*" id="host_image"
                                            name="host_image">
                                        @if ($event?->host_image)
                                        <img class="mt-2 w-32 h-32 object-cover border border-gray-300"
                                            src="/{{ $event->host_image }}" alt="Host Image">
                                        @endif
                                    </div>

                                    {{-- Banner 1 Images --}}
                                    <div>
                                        <label for="host_image"
                                            class="text-gray-800 text-sm font-medium inline-block mb-2">Banner 1
                                            Image</label>

                                        <input type="file" class="form-input" accept="image/*" id="host_image"
                                            name="banner_1">
                                        @if ($event?->banner_1)
                                        <img class="mt-2 w-32 h-32 object-cover border border-gray-300"
                                            src="/{{ $event->banner_1 }}" alt="Banner Image">
                                        @endif
                                    </div>

                                    {{-- Banner 2 Images --}}
                                    <div>
                                        <label for="host_image"
                                            class="text-gray-800 text-sm font-medium inline-block mb-2">Banner 2
                                            Image</label>

                                        <input type="file" class="form-input" accept="image/*" id="host_image"
                                            name="banner_2">
                                        @if ($event?->banner_2)
                                        <img class="mt-2 w-32 h-32 object-cover border border-gray-300"
                                            src="/{{ $event->banner_2 }}" alt="Host Image">
                                        @endif
                                    </div>


                                    <div class="mt-4">
                                        <label class="block text-sm font-medium text-gray-700">Description</label>
                                        <textarea id="editor" class="form-input mt-1 block w-full" name="description"
                                            rows="4"
                                            placeholder="Event description">{!! old('description', $event?->description) !!}</textarea>
                                    </div>
                                </div>

                                <div class="mt-4">

                                    <button type="submit" class="btn bg-primary text-white">Submit</button>

                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div> <!-- end card -->

        </main>

    </x-slot>
</x-app-layout>
