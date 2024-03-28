@extends('adminDash.layouts.main')
@section('main-content')

<div class="content-wrapper">
<div class="container-fluid">
    <div class="row mt-3">
      <div class="col-lg-12">
         <div class="card">
           <div class="card-body">
          
           <hr>
     
         </div>
         </div>
        </div>

         <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Contact Status</h5>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Name</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Email</th>
                      <th scope="col">Comment</th>
                      <th scope="col">Action</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($list as $k => $l)
                    <tr>
                     <td>{{$k + 1}}</td>
                     <td>{{$l->name}}</td>
                     <td>{{$l->phone}}</td>
                     <td>{{$l->email}}</td>
                     <td>{{$l->msg}}</td>
                     <td>
                     <form action="{{ route('cont.destroy',$l->id) }}" method="POST">
                         <a class="btn btn-primary" href="{{ route('cont.edit',$l->id) }}"><i class="fa fa-edit"></i></a>
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
