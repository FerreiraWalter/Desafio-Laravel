@extends('templates.template')

@section('content')

  @if(isset($errors) && count($errors) > 0) 
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative font-bold" role="alert">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
  @endif

<p class="text-3xl p-4 flex justify-center">@if(isset($register)) Edit User @else Register @endif</p>
<div class="flex justify-center">
  <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-6/12 flex justify-center">

    @if(isset($register))
        <form class="p-5" method="post" action="{{url("user/$register->id")}}">
          @csrf
          @method('PUT')
      @else
        <form class="p-5" method="post" action="{{url('index')}}">
    @endif
      @csrf
          <div class="flex justify-between gap-3">
            <!-- FirstName and LastName -->
            <span class="w-1/2">
              <label for="firstname" class="block text-xs font-semibold text-gray-600 uppercase">Firstname</label>
              <input id="firstname" type="text" name="firstname" placeholder="Walter" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" 
              value="{{$register->firstname ?? ''}}" required />
            </span>
            <span class="w-1/2">
              <label for="lastname" class="block text-xs font-semibold text-gray-600 uppercase">Lastname</label>
              <input id="lastname" type="text" name="lastname" placeholder="Ferreira" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" 
              value="{{$register->lastname ?? ''}}" required />
            </span>
          </div>

          <!-- E-mail and CPF -->
          <div class="flex justify-between gap-3">
            <span class="w-1/2">
              <label for="email" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">E-MAIL</label>
              <input id="email" type="email" name="email" placeholder="ferreira.walter@company.com" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" value="{{$register->email ?? ''}}"  required />
            </span>
            <span class="w-1/2">
              <label for="cpf" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">CPF</label>
              <input id="cpf" type="text" name="cpf" placeholder="000.000.000-00" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
              value="{{$register->cpf ?? ''}}" required />
            </span>
          </div>

          <!-- Phone and CEP -->
          <div class="flex justify-between gap-3">
            <span class="w-1/2">
              <label for="phone" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">PHONE</label>
              <input id="phone" type="phone" name="phone" placeholder="(00) 000000-0000" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" 
              value="{{$register->phone ?? ''}}" required />
            </span>
            <span class="w-1/2">
              <label for="cep" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">CEP</label>
              <input id="cep" type="cep" name="cep" placeholder="00000-000" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" 
              value="{{$register->cep ?? ''}}" required />
            </span>
          </div>

          <!-- Address -->
          <label for="address" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">ADDRESS</label>
          <input id="address" type="text" name="address" placeholder="" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" 
          value="{{$register->address ?? ''}}" required />

          <!-- Password -->
          <label for="password" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Password</label>
          <input id="password" type="password" name="password" placeholder="********" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" 
          value="{{$register->password ?? ''}}" required/>
          
          <!-- Terms -->
          @if(!isset($register))
            <div class="flex flex-col">
              <label class="inline-flex items-center mt-3">
                  <input type="checkbox" class="form-checkbox h-5 w-5 bg-gray-200" name="terms"><span class="ml-2 text-gray-700">By creating an account, you agree to the <a href="#">Terms of Service.</a></span>
              </label>
            </div>
          @endif
          <!-- Button -->
          <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
            @if (isset($register)) Edit @else Sign up @endif
          </button>
        </form>
  </div>
</div>

@endsection
