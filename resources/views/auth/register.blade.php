<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <div class="font-normal text-5xl italic">sign up</div>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form onsubmit="return validate()" method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Access lavel -->
            <div class="mt-4">
                <select name="access_level">
                 <option selected>access level</option>
                    <option value="admin">admin</option>
                    <option value="user">user</option>
                </select>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
   <script>
      function validate()
       {
       var name = document.getElementById("name");
        var  name = document.getElementById('name').value;
        var regx = /^[A-Za-z. ]{3,30}$/;

        if(name.value=="")
        {
            alert("Enter your name");
            document.getElementById('name').style.borderColor = "red";
        }
        if(regx.test(name))
        {
            return true;
        }
        else{
           /* document.getElementById("lnameError").innerHTML='invalid last name';
            document.getElementById("lnameError").style.visibility='visible';*/
            alert('please enter a valid name');
            document.getElementById("name").style.borderColor = "red";
            return false;
        }
    }
 </script>
</x-guest-layout>
