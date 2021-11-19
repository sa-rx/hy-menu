@extends('layouts.app')
@section('title', ' ادارة المستخدمين ')

@section('content')


<section class="page-section cta">
            <div class="container">
                <div class="row">


<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Users Management</h2>
</div>
<div class="pull-right">
@can('اضافة مستخدم')
<a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
@endcan

</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered ">
<tr>
<th>No</th>
<th>Name</th>
<th>Email</th>
<th>Roles</th>
<th width="280px">Action</th>
</tr>
@foreach ($data as $key => $user)
<tr>
<td>{{ ++$i }}</td>
<td>{{ $user->name }}</td>
<td>{{ $user->email }}</td>
<td>
@if(!empty($user->getRoleNames()))
@foreach($user->getRoleNames() as $v)
<label class="badge badge-success">{{ $v }}</label>
@endforeach
@endif
</td>
<td>
@can('عرض مستخدم')
<a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
@endcan
@can('تعديل مستخدم')
<a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
@endcan

@can('حذف مستخدم')
{!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
@endcan

</td>
</tr>
@endforeach
</table>
{!! $data->render() !!}
<p class="text-center text-primary"><small>Tutorial by rscoder.com</small></p>



</div>
            </div>
        </section>       
@endsection
