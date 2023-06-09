<div class="col-span-6 md:grid grid-cols-6 gap-4">

    <div class="block md:col-start-1">
        <label for="{{$name}}" class="block text-sm font-bold text-gray-700">{{$message}}</label>
    </div>

    <div class="block mt-3 md:col-start-3 col-end-6">
        {{--
        <input type="text" name="{{$name}}" id="{{$name}}" value="{{$value}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
        --}}
        <input type="{{$type}}" name="{{$name}}" id="{{$name}}" value="{{$value}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
    </div>

</div>
