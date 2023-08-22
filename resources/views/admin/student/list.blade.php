@extends('layout.main')
@section('title', 'Student List')
@section('content')
<div class="container-fluid mt-5">
   <div class="row">
      <div class="col-md-12">
         <!-- DATA TABLE -->
         <h2 class="title-5 m-b-35">Student List</h2>
         <div class="float-right">
            <a href="{{ route('admin.student.add') }}" class="btn btn-success">Add New Student</a>
         </div>
         <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
               <thead>
                  <tr>
                     <th>
                        <label class="au-checkbox">
                        <input type="checkbox">
                        <span class="au-checkmark"></span>
                        </label>
                     </th>
                     <th>Name</th>
                     <th>Email</th>
                     <th></th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($students as $student)
                  <tr class="tr-shadow">
                     <td>{{ $student->id }}</td>
                     <td>{{ $student->name }}</td>
                     <td>
                        <span class="block-email">{{ $student->email }}</span>
                     </td>
                     <td>
                        <div class="table-data-feature">
                           <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                           <i class="zmdi zmdi-edit"></i>
                           </button>
                           <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                           <i class="zmdi zmdi-delete"></i>
                           </button>
                        </div>
                     </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
         <!-- END DATA TABLE -->
      </div>
   </div>
</div>
@endsection