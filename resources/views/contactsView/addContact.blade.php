@extends("frontEnd.layout")
@section("title","add contact")
@section("page")
<div class="container bg-white">
 <div class="row mt-2 justify-content-center">
     <div class="card bg-light border-white fs-5" style="width:35rem">
         <div class="card-body">
            <form onsubmit="return validate()" method="POST" action="{{route('contact.store')}}" enctype="multipart/form-data">
                @csrf
                <!--First Name -->
                <div class="mb-3">
                    <label for="firstname" value="First Name" id="Flbl">First Name</label>
                    <input class="form-control" type="text" name="first_name" id="fname"/>
                <!-- Last Name -->
                <div class="mb-3">
                    <label for="lastname" value="Last Name" id="Llbl">Last Name</label>
                    <input class="form-control" type="text" name="last_name" id="lname"/>
                </div>
             <button type="button" class="btn btn-primary" onclick="showAdditionalDetails()" id="showDetails"> Show additional details</button>
             <button type="button" class="btn btn-primary" onclick="hideAdditionalDetails()" id="hideDetails"> Hide additional details</button>

                <div>
                </div>
                <!-- Add addtional details -->
                <div id="additionalDetails">

                    <div class="row">
                        <!--  D-O-B -->
                        <div class="col-md-6 ">
                            <div class="mb-3">
                                <label for="dob" value="D-O-B">D-O-B</label>
                                <input type="text" name="dob" class="form-control " />
                            </div>
                        </div>

                        <!--  Address -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="Address" value="Address">Address</label>
                                <input type="text" name="address" class="form-control  " />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- City -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="city" value="city">City</label>
                                <input type="text" name="city" class="form-control " />
                            </div>
                        </div>

                        <!-- State -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="state" value="State">State</label>
                                <input type="text" name="state" class="form-control " />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Country -->
                        <div class="col-md-6">
                            <div class="mb-3">
                             <label for="country" value="country">Country</label>
                             <input type="text" name="country" class="form-control " />
                            </div>
                        </div>

                        <!-- Facebook Id -->
                        <div class="col-md-6">
                            <div class="mb-3">
                             <label for="facebook id" value="Facebook Name">Facebook Name</label>
                             <input type="text" name="facebook_id" class="form-control " />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Instagram Id -->
                        <div class="col-md-6">
                            <div class="mb-2">
                                <label for="instagram id" value="Instagram Name">Instagram Name</label>
                                <input type="text" name="instagram_id" class="form-control" />
                            </div>
                        </div>

                        <!-- Youtube Id -->
                        <div class="col-md-6">
                            <div class="mb-2">
                                <label for="youtube id" value="Youtube Channel">Youtube Channel</label>
                                <input type="text" name="youtube_id" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <!--End Additional details  -->
                </div>

                 <!-- image -->
                 <div class="mt-3">
                     <label for="Upload image" value="">upload image</label>
                     <input type="file" name="image" class="form-control" required/>
                 </div>

                <!-- Number -->
                <div class="row mb-3 mt-3">
                    <div class=" col-md-12 ">
                        <label for="number " value="Number ">Number </label>
                        <input type="number" name="number" class="form-control" required/>
                        @error('number')
                          <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                </div>


                <!-- visibility -->
                <div class="form-check">
                 <label class="form-check-label" for="public" > 
                    <input class="form-check-input" type="radio" name="visible" value="public" required> Public</label>
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <label class="form-check-label" for="private" >
                    <input class="form-check-input" type="radio" name="visible" value="private" required>
                    Private </label>
                    @error('visibility')
                     <small class="text-danger">{{ $message }}</small>
                   @enderror
                </div>

                <div class="">
                    <select class="form-select" name="type">
                        <option selected>Type</option>
                        <option value="mobile">Mobile</option>
                        <option value="home">Home</option>
                        <option value="other">other</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-dark mt-2 float-end">Save</button>
            </form>
        </div>
        </div>
    </div>
</div>

<script>

    function validate()
    {
        var firstname = document.getElementById("fname");
        var lastname = document.getElementById("lname");
        var  name1 = document.getElementById('fname').value;
        var  name2 = document.getElementById('lname').value;
        var regx = /^[A-Za-z. ]{3,30}$/;
        if(firstname.value==""||lastname.value=="")
        {
            alert('Enter First name AND Last name');
            if(firstname.value=="")
            {
                document.getElementById("fname").style.borderColor = "red";
            }
            if(lastname.value=="")
            {
              document.getElementById("lname").style.borderColor = "red";
            }
            return false;
        }
       
    }
  
  function showAdditionalDetails() {
        document.getElementById("additionalDetails").setAttribute("class", "");
        document.getElementById("showDetails").style.display = "none";
        document.getElementById("hideDetails").style.display = "";

    }

    function hideAdditionalDetails() {
        document.getElementById("additionalDetails").setAttribute("class", "d-none");
        document.getElementById("hideDetails").style.display = "none";
        document.getElementById("showDetails").style.display = "";
    }
    hideAdditionalDetails();
</script>
@endsection