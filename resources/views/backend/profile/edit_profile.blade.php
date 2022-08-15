<!DOCTYPE html>
<html lang="en">
<head>
  @include('layout.style')
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      @include('layout.nav')
      @include('layout.menu')
   <!-- Main Content -->
   <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Edit Profile</h1>
      </div>
    
      <div class="section-body ">      
        <div class="card col-8" >             
  
          <div class="card-body p-0">
            
          <form action="{{url('backend/profile/save')}}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$user->id}}">
             {{-- @if(!isset($user))
               <input type="hidden" name="type" value="1">
            @else

                <input type="hidden" name="type" value="2">
            @endif --}}
            <div class="form-group row ml-4 mt-5">           
                <label for="firstname" class="col-md-2 col-form-label">Name :</label>
                <div class="col-md-8">
                    <input class="form-control" type="text" value="{{ @$user->name }}" name="name" required>
                </div>
            </div>

            <div class="form-group row ml-4 mt-5">
                <label for="firstname" class="col-md-2 col-form-label">Email :</label>
                <div class="col-md-8">
                    <input class="form-control" type="email" value="{{ @$user->email }}" name="email" required>
                </div>
            </div>
            <!-- form update -->
            @if(isset($user))
            <div class="form-group row ml-4 mt-5">
              <label for="prename" class="col-md-2 col-form-label">Position :</label>
              <div class="col-md-10">
                <select name="position" class="form-control  col-md-8" disabled >
                  <option value="" disabled>Select</option>                
                  <option value="seuper_admin"{{ ($user->position=="seuper_admin" )?'selected':'' }}>Super Admin</option>
                      <option value="admin"{{ ($user->position=="admin" )?'selected':'' }}>Admin</option>
                      <option value="hotel"{{ ($user->position=="hotel" )?'selected':'' }}>Hotel</option>
                      <option value="member"{{ ($user->position=="member" )?'selected':'' }}>Member</option>
                   
         
                </select>
              </div>
            </div>

     
            @endif
            

            <div class="form-group mb-0 row">
                <div class="col-md-6">
                    <a class="btn btn-secondary btn-sm waves-effect" href="{{ url()->previous() }}">
                      <i class="fa fa-reply font-size-16 align-middle mr-1"></i> Return
                    </a>
                </div>
                <div class="col-md-6 text-right">
                    <button type="submit" class="btn btn-success btn-sm waves-effect">
                      <i class="fa fa-save font-size-16 align-middle mr-1"></i> @if(!isset($user))Save @else Update @endif
                    </button>
                </div>
            </div><br>
        </form>
          </div>
        </div>
        </div>
      </div>
    </section>
  </div>
      @include('layout.footer')
    </div>
  </div>

  @include('layout.script')
</body>
</html>
