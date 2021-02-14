@extends('templates.template')

@section('content')
<!-- NAVBAR -->
<nav class="relative select-none bg-black lg:flex lg:items-stretch w-full">
  <div class="flex flex-no-shrink items-stretch h-12">
    <p href="#" class="flex-no-grow flex-no-shrink relative py-2 px-4 leading-normal text-white no-underline flex items-center hover:bg-grey-dark">PLURAL</p>
    <a href="{{url('/user')}}" class="flex-no-grow flex-no-shrink relative py-2 px-4 leading-normal text-white no-underline flex items-center hover:bg-grey-dark">Register</a>
    <a href="{{url('/login')}}" class="flex-no-grow flex-no-shrink relative py-2 px-4 leading-normal text-white no-underline flex items-center hover:bg-grey-dark">Edit</a>
    <button class="block lg:hidden cursor-pointer ml-auto relative w-12 h-12 p-4">
      <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
      <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"/></svg>
    </button>
  </div>
</nav>

<!-- component -->
<div class="text-gray-800 bg-gray-200">
    <div class="p-4 flex">
        <h1 class="text-3xl">
            Users
        </h1>
    </div>
    <div class="px-3 py-4 flex justify-center">
        <table class="w-full text-md bg-white shadow-md rounded mb-4">
            <tbody>
                <tr class="border-b">
                    <th class="text-center p-3 px-5">NAME</th>
                    <th class="text-center p-3 px-5">LAST NAME</th>
                    <th class="text-center p-3 px-5">E-MAIL</th>
                    <th class="text-center p-3 px-5">CPF</th>
                    <th class="text-center p-3 px-5">PHONE</th>
                    <th class="text-center p-3 px-5">CEP</th>
                    <th class="text-center p-3 px-5">ADDRESS</th>
                    <th class="text-center p-3 px-5">ACTION</th>
                    <th></th>
                </tr>
            </tbody>
            @foreach($register as $registers)
                <tr>
                  <th scope="row">{{$registers->name}}</th>
                  <th scope="row">{{$registers->namelastname}}</th>
                  <th scope="row">{{$registers->email}}</th>
                  <th scope="row">{{$registers->cpf}}</th>
                  <th scope="row">{{$registers->phone}}</th>
                  <th scope="row">{{$registers->cep}}</th>
                  <th scope="row">{{$registers->address}}</th>
                  <th>
                  <button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</button>
                  <button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
                  </th>
                </tr>
            @endforeach

        </table>
    </div>
</div>
@endsection
