@extends('adminDash.layouts.main')
@section('main-content')

<div class="content-wrapper">
<div class="container-fluid">
    <div class="row mt-3">
      <div class="col-lg-12">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Featurs Add</div>
           <!-- @if ($message = Session::get('msg'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                    @endif

                </div> -->
           <hr>
            <form action="{{route('featur.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
        <div class="row">
          <div class="col-lg-6">
           <div class="form-group">
            <label for="input-1">Icon</label>
            <input type="text" class="form-control form-control-rounded" name="icon"  placeholder="Enter your icon featur">
           </div>
           </div>
          <div class="col-lg-6">
           <div class="form-group">
            <label for="input-1">Title</label>
            <input type="test" class="form-control form-control-rounded" id="input-1" name="title"  placeholder="Enter Your title">
           </div>
           </div>
         </div>
         <div class="row">
         <div class="col-lg-6">
             <div class="form-group">
            <label for="input-1">Descript</label>
            <input type="text" class="form-control form-control-rounded" name="descript"  placeholder="Enter your icon descript">
            </div>
          </div>

            <div class="col lg 6">
            <div class="input-group">
            <label for="input-1"></label>
            <button type="submit" class="btn btn-light px-5 left-1.">Submit</button>
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
              <h5 class="card-title">Featurs Status</h5>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Icon</th>
                      <th scope="col">Title</th>
                      <th scope="col">Descript</th>
                      <th scope="col">Action</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($list as $k => $l)
                    <tr>
                     <td>{{$k + 1}}</td>
                     <td>{{$l->icon}}</td>
                     <td>{{$l->title}}</td>
                     <td>{{$l->descript}}</td>
                     <td>
                 <form  action="{{ route('featur.destroy',$l->id) }}" method="POST">
                         <a class="btn btn-primary" href="{{ route('featur.edit',$l->id) }}"><i class="fa fa-edit"></i></a>
                        @csrf
                        @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="confirmDelete({{ $l->id }})"><i class="fa fa-trash"></i></button>
                 </form>
                 <script>
           function confirmDelete(id) {
               if (confirm("Are you sure you want to delete this item?")) {
            // If user confirms deletion, submit the form
            document.getElementById('deleteForm_' + id).submit();
             } else {
            // If user cancels deletion, do nothing
             event.preventDefault();
             }
          }
      </script>
           
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
