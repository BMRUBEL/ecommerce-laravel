@extends('adminDash.layouts.main')
@section('main-content')

<div class="content-wrapper">
<div class="container-fluid">
    <div class="row mt-3">
      <div class="col-lg-12">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Vegetable Add</div>
           <!-- @if ($message = Session::get('msg'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                    @endif

                </div> -->
           <hr>
            <form action="{{route('vegetable.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
        <div class="row">
          <div class="col-lg-6">
           <div class="form-group">
            <label for="input-1">Vegetable Photo</label>
            <input type="file" class="form-control form-control-rounded" name="photo" width="50" height="50">
           </div>
           </div>
          <div class="col-lg-6">
           <div class="form-group">
            <label for="input-1">Vegetable Name</label>
            <input type="text" class="form-control form-control-rounded" id="input-1" name="title"  placeholder="Enter Your vegetable name">
           </div>
           </div>
         </div>
         
        <div class="row">
        <div class="col-lg-6">
         <div class="form-group">
        <label for="descript">Vegetable Description</label>
        <input type="text" class="form-control form-control-rounded" id="input-1" name="descript"  placeholder="Enter Your vegetable name">
        <!-- <textarea class="form-control" name="descript" id="descript" rows="3" placeholder="Enter your vegetable description"></textarea> -->
         </div>
            </div>

          <div class="col-lg-6">
           <div class="form-group">
            <label for="input-1">price</label>
            <input type="text" class="form-control form-control-rounded" id="input-1" name="price"  placeholder="Enter Your vegetable price">
           </div>
           </div>
         </div>

     <div class="row">
         <div class="col-lg-6">
           
         </div>
         <div class="col-lg-6">
            <div class="form-group">
            <button type="submit" class="btn btn-light px-5 left-1.5">Submit</button>
            </div>
         </div>
      </div>
          
          
          </form>
         </div>
         </div>
        </div>

         <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Vegetable Status</h5>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Vegetable Name</th>
                      <th scope="col">Vege Photo</th>
                      <th scope="col">Vegetable Descpirt</th>
                      <th scope="col">Vegetable price</th>
                      <th scope="col">Action</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($list as $k => $l)
                    <tr>
                     <td>{{$k + 1}}</td>
                     <td>{{$l->title}}</td>
                     <td><img src="/vegetable/{{$l->photo}}" width="100" height="80" alt=""></td>
                     <td>{{$l->descript}}</td>
                     <td>{{$l->price}}</td>
                     <td>
                     <form action="{{ route('vegetable.destroy',$l->id) }}" method="POST">
                         <a class="btn btn-primary" href="{{ route('vegetable.edit',$l->id) }}"><i class="fa fa-edit"></i></a>
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
