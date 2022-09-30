@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<body>
    <div class="container">
        <div class="pt-10">
            
            <div class="flex justify-center">
                <div class="w-1/2">
                    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                        <div class="mb-4">
                            <img src="{{ $meme['url'] }}" alt="meme" width="400px">
                            <div class="pt-5">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                    <h1 class="text-xl"> {{ $meme['name'] }} </h1>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
@endsection