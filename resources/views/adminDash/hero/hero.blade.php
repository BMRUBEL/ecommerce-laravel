@extends('adminDash.layouts.main')
@section('main-content')

<div class="content-wrapper">
<div class="container-fluid">
    <div class="row mt-3">
      <div class="col-lg-12">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Heroes Add</div>
           <!-- @if ($message = Session::get('msg'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                    @endif

                </div> -->
           <hr>
            <form action="{{route('hero.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
        <div class="row">
          <div class="col-lg-6">
           <div class="form-group">
            <label for="input-1">Fruits</label>
            <input type="file" class="form-control form-control-rounded" name="fruits" width="50" height="50" placeholder="Enter your Fruits name">
           </div>
           </div>
          <div class="col-lg-6">
           <div class="form-group">
            <label for="input-1">Vegetable</label>
            <input type="file" class="form-control form-control-rounded" id="input-1" name="vegetable" width="50" height="50" placeholder="Enter Your vegetable name">
           </div>
           </div>
         </div>
          
           <div class="form-group">
            <button type="submit" class="btn btn-light px-5 left-1.5">Submit</button>
          </div>
          </form>
         </div>
         </div>
        </div>

         <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Featurs Status</h5>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Fruits</th>
                      <th scope="col">Vegetable</th>
                      <th scope="col">Action</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($list as $k => $l)
                    <tr>
                     <td>{{$k + 1}}</td>
                     <td><img src="/fruits/{{$l->fruits}}" width="100" height="80" alt=""></td>
                     <td><img src="/vegetable/{{$l->vegetable}}" width="100" height="80" alt=""></td>
                     <td>
                     <form action="{{ route('hero.destroy',$l->id) }}" method="POST">
                         <a class="btn btn-primary" href="{{ route('hero.edit',$l->id) }}"><i class="fa fa-edit"></i></a>
                        @csrf
                        @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                 </form>
                     </td>
                    </tr>
                   @endforeach
                </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

    

            <div class="overlay toggle-menu"></div>
         

      </div>
</div>
      @endsection
