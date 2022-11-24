@extends('./layout/main')

@section('title', 'HiByeTB - Home')

@section('container')
<div class="jumbotron jumbotron-fluid" style="margin-top:70px">
  <div class="container">
    <div class="title col-sm-3 col-md-6 col-lg-8">
      <h1>HiByeTB</h1>
      <p>Website informasi TBC terlengkap, forum diskusi terkait TBC, daftar dokter konsultasi TBC, dan atur pengingat minum obat untuk penderita TBC</p>
    </div>
    <div class="image-jumbotron col-sm-9 col-md-6 col-lg-4">
      <img class ="img-jumbo" src="{{ ('assets/images/image-jumbotron.png') }}" alt="image-jumbotron">
    </div>
  </div>
</div>

<div class="container-fluid" id="card" style="margin-top:100px">
  
</div>



@endsection