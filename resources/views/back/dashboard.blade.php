@extends('back.layouts.app')
@section('content')
<div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Simple Table</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class="text-primary">
                        <th>No</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Reason</th>
                        <th>Action</th>
                      </thead>
                      <tbody>
                      @foreach($user as $users)
                        <tr>
                          <td>
                            {{$i++}}
                          </td>
                          <td>
                            {{$users->name}}
                          </td>
                          <td>
                            {{$users->username}}
                          </td>
                          <td>
                            {{$users->email}}
                          </td>
                          <td>
                            {{$users->reason}}
                          </td>
                          <td>
                          @if($users->is_verified = 0)
                          <form action="{{route('verify',['name' => $users->name])}}" method="post">
                          @csrf
                              <button type="submit" class="btn btn-primary">Verify</button>
                          </form>
                          @endif
                              <a href="{{route('delete.user',['id' => $users->id])}}" class="btn btn-danger">Delete</a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection