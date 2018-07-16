@extends('layouts.app')

@section('content')
   @can('admin_view')
       <div class="card">
           <div class="card-header">
               <span class="float-left">Permissions</span>
               <span class="float-right">
                   <a href="{{route('users')}}" class="btn-secondary btn-sm">User List</a>
                   <a href="#" class="btn-secondary btn-sm">Role List</a>
                   <a href="{{route('authorization.edit')}}" class="btn-secondary btn-sm">Update Permissions</a>
               </span>

           </div>
           <div class="card-body">
               <table class="table table-light table-sm table-striped">
                   <thead>
                       <tr>
                           <th>Role</th>
                           <th>Key</th>
                           <th>Label</th>
                       </tr>
                   </thead>
                   <tbody>
                       @foreach ($roles as  $role)
                           @foreach ($role->paginate() as $permission)
                               <tr>
                                    <td>{{$role->label}}</td>
                                    <td>{{$permission->name}}</td>
                                    <td><small>{{$permission->label}}   </small></td>
                               </tr>
                           @endforeach
                       @endforeach
                   </tbody>

               </table>
               <hr>
               <div class="row mt-2">
                   <span class="mr-auto ml-auto">{{$roles->find(1)->paginate()->render()}}</span>
               </div>
           </div>
       </div>
   @endcan
@endsection
