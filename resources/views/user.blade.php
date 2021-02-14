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
<div class="grid min-h-screen place-items-center">
  <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12">
  <p class="text-2xl">REGISTER</p>
    <form class="mt-6" method="post" action="{{url('index')}}">
    @csrf
      <div class="flex justify-between gap-3">
        <!-- FirstName and LastName -->
        <span class="w-1/2">
          <label for="firstname" class="block text-xs font-semibold text-gray-600 uppercase">Firstname</label>
          <input id="firstname" type="text" name="firstname" placeholder="Walter" autocomplete="given-name" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
        </span>
        <span class="w-1/2">
          <label for="lastname" class="block text-xs font-semibold text-gray-600 uppercase">Lastname</label>
        <input id="lastname" type="text" name="lastname" placeholder="Ferreira" autocomplete="family-name" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
        </span>
      </div>

      <!-- E-mail and CPF -->
      <div class="flex justify-between gap-3">
        <span class="w-1/2">
          <label for="email" class="block text-xs font-semibold text-gray-600 uppercase">E-MAIL</label>
          <input id="email" type="email" name="email" placeholder="ferreira.walter@company.com" autocomplete="given-name" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
        </span>
        <span class="w-1/2">
          <label for="cpf" class="block text-xs font-semibold text-gray-600 uppercase">CPF</label>
        <input id="cpf" type="text" name="cpf" placeholder="000.000.000-00" autocomplete="family-name" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
        </span>
      </div>

      <!-- PhoneNumber and CEP -->
      <div class="flex justify-between gap-3">
        <span class="w-1/2">
          <label for="phone" class="block text-xs font-semibold text-gray-600 uppercase">PHONE</label>
          <input id="phone" type="phone" name="phone" placeholder="(00) 000000-0000" autocomplete="given-name" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
        </span>
        <span class="w-1/2">
          <label for="cep" class="block text-xs font-semibold text-gray-600 uppercase">CEP</label>
          <input id="cep" type="cep" name="cep" placeholder="00000-000" autocomplete="family-name" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
        </span>
      </div>

      <!-- Address -->
      <label for="address" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">ADDRESS</label>
      <input id="address" type="text" name="address" placeholder="" autocomplete="address" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />

      <!-- Password -->
      <label for="password" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Password</label>
      <input id="password" type="password" name="password" placeholder="********" autocomplete="new-password" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />

      <div class="flex flex-col">
        <label class="inline-flex items-center mt-3">
            <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-600"><span class="ml-2 text-gray-700">By creating an account, you agree to the <a href="#">Terms of Service.</a></span>
        </label>
      </div>

      <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
        Sign up
      </button>
      <p class="flex justify-between inline-block mt-4 text-xs text-gray-500 cursor-pointer hover:text-black">Already registered?</p>
    </form>
  </div>
</div>
@endsection
