@extends('templates.template')

@section('content')

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
                  <th scope="row">{{$registers->firstname}}</th>
                  <th scope="row">{{$registers->lastname}}</th>
                  <th scope="row">{{$registers->email}}</th>
                  <th scope="row">{{$registers->cpf}}</th>
                  <th scope="row">{{$registers->phone}}</th>
                  <th scope="row">{{$registers->cep}}</th>
                  <th scope="row">{{$registers->address}}</th>
                  <th>
                  <a href="{{url("user/$registers->id")}}"><button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-4 rounded focus:outline-none focus:shadow-outline">Edit</button></a>
                  </th>
                </tr>
            @endforeach

        </table>
    </div>
</div>
@endsection
