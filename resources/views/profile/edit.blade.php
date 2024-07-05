@extends('layouts.app')

@section('title', 'Edit Profile')
@section('main-heading', 'Edit Profile')

@section('content')

    <div class="mb-16">
        <hr class="mt-2 mb-4">
        <h2 class="font-medium text-md mb-8 italic text-gray-500">Profile information</h2>

        <form action="" method="POST">
            @csrf
            <x-forms.input input_name="name" label_value="Name" type="text">{{ $user->name }}</x-forms.input>
            <x-forms.input label_value="Email" input_name="email" type="email">{{ $user->email }}</x-forms.input>
            <x-button class="mr-2 mt-2">Update</x-button>
        </form>

    </div>
    <div class="">
        
        <hr class="mt-2 mb-4">
        <h2 class="font-medium text-md mb-8 italic text-gray-500">Change Password</h2>
        <form action="" method="POST">
            @csrf
            <x-forms.input label_value="Current Password" input_name="current_password" type="password" />
            <x-forms.input label_value="New Password" input_name="password" type="password" />
            <x-forms.input label_value="Confirm Password" input_name="password_confirmation" type="password" />
            <x-button class="mr-2 mt-2">Change Password</x-button>
        </form>

    </div>

@endsection