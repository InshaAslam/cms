<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/bcss/bootstrap.css">
		 <script src="/bjs/bootstrap.min.js"></script>
		 <script src="/bjs/bootstrap.bundle.js"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>{{config('app.name')}} - @yield('title')</title>

    
</head>
<body>
     <nav class="nav bg-dark bg-gradient py-2">
        
         @if (Route::has('login'))
               <!-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">-->
                  @auth
                     <a class="nav-link fs-5" aria-current="#" href="{{route("addcontact")}}">Add Contact</a>
                     <a class="nav-link fs-5" href="{{route("list")}}">My Contacts</a>
                     <a class="nav-link fs-5" href="{{route('public/contacts')}}">Public Contacts</a>
                     <a class="nav-link fs-5" href='/'>Home</a>
                      <a class="nav-link fs-5"  style="margin-left: 50%;" href="{{route("logout")}}">Logout</a>
                      
                    @else
                        <a class="nav-link fs-5" href='/' style="margin-left: 85%;" >HOME</a>
                        <a href="{{ route('login') }}" class=" nav-link fs-5" > LOG IN</a>   
                 @endauth
                </div>
         @endif
          
     </nav>
     <div class="cotainer">
        @yield("page")
     </div>
</body>
</html>