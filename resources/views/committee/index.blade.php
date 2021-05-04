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
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>President</th>

                            </tr>
                            </thead>
                            <tbody>
                            @forelse($commissions as $data)
                                <tr>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->descriptio}}</td>
                                    <td>
                                        @if($data->president)
                                        {{$data->president->member->name}}
                                    @endif
                                    </td>
                                    <td>
                                        <a href="{{route('commission.edit' , $data->id)}}" class="btn btn-info btn-sm">edit</a>
{{--                                        <a onclick="event.preventDefault(); document.getElementById('delete-data').submit()" class="btn btn-danger btn-sm">delete</a>--}}
{{--                                        <form id="delete-member" method="post" action="{{route('members.destroy' , $member->id)}}" style="display: none">--}}
{{--                                            @csrf--}}
{{--                                            @method('delete')--}}
{{--                                        </form>--}}
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
    </div>

@stop

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
