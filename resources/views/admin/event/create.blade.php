<x-app-layout>
    <x-slot name="content">

        {{-- Content --}}

        <main class="flex-grow p-6">

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
                            <form>
                                <div class="grid grid-cols-1 md:grid-cols-2  gap-6">
                                    <div>
                                        <label for="inputEmail4" class="text-gray-800 text-sm font-medium inline-block mb-2">Email</label>
                                        <input type="email" class="form-input" id="inputEmail4" placeholder="Email">
                                    </div>
                                    <div>
                                        <label for="inputPassword4" class="text-gray-800 text-sm font-medium inline-block mb-2">Password</label>
                                        <input type="password" class="form-input" id="inputPassword4" placeholder="Password">
                                    </div>

                                    <div class="lg:col-span-2">
                                        <label for="inputAddress" class="text-gray-800 text-sm font-medium inline-block mb-2">Address</label>
                                        <input type="text" class="form-input" id="inputAddress" placeholder="1234 Main St">
                                    </div>

                                    <div>
                                        <label for="inputAddress2" class="text-gray-800 text-sm font-medium inline-block mb-2">Address 2</label>
                                        <input type="text" class="form-input" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                    </div>

                                    <div>
                                        <label for="inputCity" class="text-gray-800 text-sm font-medium inline-block mb-2">City</label>
                                        <input type="text" class="form-input" id="inputCity">
                                    </div>
                                    <div>
                                        <label for="inputState" class="text-gray-800 text-sm font-medium inline-block mb-2">State</label>
                                        <select id="inputState" class="form-select">
                                            <option>Choose</option>
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="inputZip" class="text-gray-800 text-sm font-medium inline-block mb-2">Zip</label>
                                        <input type="text" class="form-input" id="inputZip">
                                    </div>
                                </div>

                                <div class="flex items-center gap-2 my-3">
                                    <input type="checkbox" class="form-checkbox rounded border border-gray-200" id="customCheck11">
                                    <label class="text-gray-800 text-sm font-medium inline-block" for="customCheck11">Check this custom checkbox !</label>
                                </div>

                                <button type="submit" class="btn bg-primary text-white">Sign in</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div> <!-- end card -->

        </main>

    </x-slot>
</x-app-layout>
