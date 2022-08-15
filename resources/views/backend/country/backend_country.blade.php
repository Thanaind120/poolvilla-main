
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
          <h1>Country</h1>
        </div>

        <div class="section-body">
        
          <div class="card">             
            <div class="card-header">
              <!-- add user button -->
          <div class="text-right">
            <a href="{{url('backend/country/add')}}" class="btn btn-success "><i class="fa fa-plus"></i> add</a>
          </div><br>
            </div>
            <div class="card-body ">
              <div class="table-responsive">
                <table id="simpletable" class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col"><i class="fa fa-flag"></i> Country Name</th>
                    <th scope="col"><i class="far fa-image"></i> Country Image</th>
                    <th scope="col"><i class="fa fa-cog"></i> Tools</th>
                  </tr>
                </thead>
                <tbody>
                  @php($i = 1)
                  @foreach($country as $row) 

                  <tr>
                    <td style="width: 10%">{{ $i }}</td>
                    <td style="width: 35%">{{ $row->country_name }}</td>
                    <td style="width: 35%">
                        <img src="{{ asset('frontend_assets/country_image/'.$row->country_image) }}" height="150px" alt="">
                    </td>
                    <td style="width: 20%">
                        <a class="btn btn-warning text-white" href="{{url('backend/country/edit/'.$row->country_id)}}"><i class="fa fa-pencil-square-o"></i> Edit</a>
                        <a class="btn btn-danger text-white" href="{{url('backend/country/edit/'.$row->country_id)}}"><i class="fa fa-pencil-square-o"></i> Delete</a>
                        <a class="btn btn-info text-white" href="{{url('backend/country/city/'.$row->country_id)}}"><i class="fa fa-pencil-square-o"></i> City</a>
                    </td>
                  </tr>
                  @php($i++)
                  @endforeach
                </tbody>
              </table>
            </div>
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
  <!-- form to reset password -->
<form action="{{url('/backend/member_reset')}}" method="POST" id="reset_password">
  @csrf
  <input type="hidden" name="id" id="id_reset">
</form>
  <script>
    $('#simpletable').dataTable();

    function confirm_reset(id){
      Swal.fire({
  title: 'Are you sure to reset?',
  text: "Reset password:m123456",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Confirm'
}).then((result) => {
  if (result.isConfirmed) {

    $('#id_reset').val(id);
      $('#reset_password').submit();
  }
});
    }
  </script>
</body>
</html>

