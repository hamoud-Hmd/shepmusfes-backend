@extends('layouts.dashboard')
@section('content')

    <div class="container">

        @if(session('status'))
            <div class="alert alert-success">
                <p>{{session('status')}}</p>
            </div>
        @endif
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-title"></div>
                    <div class="card-body">
                        <table class="table" id="table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Committee</th>
                                <th>Type</th>
                                <th>Tel</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($members as $member)
                                <tr>
                                    <td>{{$member->name}}</td>
                                    <td>
                                        <img width="40" height="40" class="rounded-circle" src="{{$member->image}}" alt="">
                                    </td>
                                    <td>
                                        <span class="description">
                                            {{Str::limit($member->description , 10)}}
                                            <span class="full-description">
                                                {{$member->description}}
                                            </span>
                                        </span>
                                    </td>
                                    <td>{{$member->committee->name}}</td>
                                    <td>
                                        @if($member->type)
                                            {{$member->type->name}}
                                            @endif
                                            </td>
                                    <td>{{$member->tel}}</td>
                                    <td>{{$member->email}}</td>
                                    <td>
                                        <a href="{{route('members.edit' , $member->id)}}" class="btn btn-info btn-sm">edit</a>
                                          <button  data-toggle="modal" data-id="{{$member->id}}" id="showModalBtn" class="btn btn-danger btn-sm" >Delete</button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8">No Record</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>
        </div>

            <!-- Button trigger modal -->


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Confirm</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <form id="delete-member" method="post" action="" >
                                @csrf
                                @method('delete')
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>

@stop

@section('script_js')
    <script>

        $('#table').on('click','#showModalBtn',function (){
             let id=  $(this).data('id');
             $("#exampleModal").modal('show');
            $("#delete-member").attr('action','/members/'+id)
        })
    </script>
@endsection

<style>
    .description{
        position: relative;
    }
    .full-description{
        visibility: hidden;
        position: absolute;
        z-index: 99;
        background: #111010;
        left:-4rem;
        right: -4rem;
        max-height: 200px;
        border-radius: 10px;
        color: #ffffff;
        padding: 10px;
        transition: .4s all ease-in-out;
        text-align: right;
        overflow: scroll;

    }
    .description:hover > .full-description{
        visibility: visible;
        display: inline-block;
    }
</style>
