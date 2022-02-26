@extends('layout.app')
 <!--  Address -->
 <div class="mb-3">
                         <label for="address" value="Address">Address</label>
                         <input type="text" name="address" class="form-control"/>
                     </div>

                     <!-- City -->
                     <div class="mb-3">
                         <label for="city" value="city">City</label>
                         <input type="text" name="city" class="form-control "/>
                     </div>

                     <!-- State -->
                     <div class="mb-3">
                          <label for="state" value="State">State</label>
                         <input type="text" name="state" class="form-control "/>
                     </div>

                     <!-- Country -->
                     <div class="mb-3">
                         <label for="country" value="country">Country Id</label>
                         <input type="text" name="country" class="form-control "/>
                     </div>

                     <!-- Facebook Id -->
                     <div class="mb-3">
                          <label for="facebook id" value="Facebook Id">Facebook Id</label>
                          <input type="text" name="facebook_id" class="form-control "/>
                     </div>

                     <!-- Instagram Id -->
                     <div class="mb-3">
                         <label for="instagram id" value="Instagram Id">Instagram Id</label>
                         <input type="text" name="instagram_id" class="form-control"/>
                     </div>

                     <!-- Youtube Id -->
                     <div class="mb-3">
                         <label for="youtube id" value="Youtube Id">Youtube Id</label>
                         <input type="text" name="youtube_id" class="form-control"/>
                     </div>
                     <input type="submit" class="btn btn-primary" value="Add">

        <!-- Form for saving number-->
        <form method="" action="">
              <div class="mt-4">
                 <x-label for="number" value="Number"/>
                  <x-input type="number" name="number" class="form-control w-full"/>
              </div>
              <div class=" mt-4">
                 <x-label for="visibility" value="Visibility"/>
                  <input type="radio" class="form-control"/>public
                  <input type="radio" class="form-control"/>private
              </div>
              <div class="">
                 <select class="form-select mt-4">
                 <option selected>Type</option>
                 <option value="mobile">Mobile</option>
                 <option value="home">Home</option>
                 <option value="other">other</option>
                 </select>
              </div>
              <div>
                 <x-button class="ml-32 mt-4 ">
                    {{ __('Add') }}
                  </x-button>
             </div>
        </form>