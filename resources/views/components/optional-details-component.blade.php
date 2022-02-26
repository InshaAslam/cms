<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
     <button type="button" onclick="show()">show</button>
     <div class="block" id="get">
         <form action="" method="" id="show">
             <div class="mt-4">
                 <x-label for="dob" value="D-O-B"/>
                 <x-input type="text" name="dob" class="form-control w-full"/>
             </div>
             <div class="mt-4">
                 <x-label for="address" value="Address"/>
                 <x-input type="text" name="address" class="form-control w-full"/>
             </div>
             <div class="mt-4">
                 <x-label for="city" value="city"/>
                 <x-input type="text" name="city" class="form-control w-full"/>
             </div>
             <div class="mt-4">
                 <x-label for="state" value="State"/>
                 <x-input type="text" name="state" class="form-control w-full"/>
             </div>
             <div class="mt-4">
                 <x-label for="country" value="country"/>
                 <x-input type="text" name="country" class="form-control w-full"/>
             </div>
         </form>
        </div>
    <script>
         function show()
         {
             document.getElementById('get').innerHTML
         }
    </script>
</div>