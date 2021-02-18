@extends('templates.template')

@section('content')


    <div class="px-6 py-8 flex justify-center">
        <table class="w-full text-md bg-white shadow-md rounded mb-1">
            <tbody>
                <tr class="bg-gray-200 border-b ">
                    <th class="text-center p-3 px-5">NAME</th>
                    <th class="text-center p-3 px-5">LAST NAME</th>
                    <th class="text-center p-3 px-5">E-MAIL</th>
                    <th class="text-center p-3 px-5">CPF</th>
                    <th class="text-center p-3 px-5">PHONE</th>
                    <th class="text-center p-3 px-5">CEP</th>
                    <th class="text-center p-3 px-5">ADDRESS</th>
                    <th class="text-center p-3 px-5">ACTION</th>
                </tr>
            </tbody>
            @foreach($register as $registers)
                <tr>
                  <th class="border hover:bg-gray-100 p-3">{{$registers->firstname}}</th>
                  <th class="border hover:bg-gray-100 p-3">{{$registers->lastname}}</th>
                  <th class="border hover:bg-gray-100 p-3">{{$registers->email}}</th>
                  <th class="border hover:bg-gray-100 p-3">{{$registers->cpf}}</th>
                  <th class="border hover:bg-gray-100 p-3">{{$registers->phone}}</th>
                  <th class="border hover:bg-gray-100 p-3">{{$registers->cep}}</th>
                  <th class="border hover:bg-gray-100 p-3">{{$registers->address}}</th>
                  <th class="border hover:bg-gray-100 p-3">
                    <a href="{{url("user/$registers->id")}}"><button type="button" class="mr-0.5 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-4 rounded focus:outline-none focus:shadow-outline">Edit</button></a>
                  </th>
                </tr>
            @endforeach

        </table>
    </div>
</div>
@endsection
