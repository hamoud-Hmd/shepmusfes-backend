@extends('layouts.dashboard')
@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-6">
                <form action="{{route('members.update' , $member->id)}}" class="form-container" enctype="multipart/form-data" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <input type="text" value="{{$member->name}}"  name="name" class="form-control @error('name') is-invalid @enderror" placeholder="name">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="formFile" class="form-label">Description</label>
                        <textarea rows="5"  type="text" name="description" class="form-control" placeholder="description">
                            {{$member->description}}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <input value="{{$member->email}}"  type="email" name="email" id="" class="form-control" placeholder="email">
                    </div>
                    <div class="form-group">
                        <input value="{{$member->tel}}"  type="text" class="form-control" name="tel" placeholder="telephone">
                    </div>

                    <div class="form-group">
                        <label for="image" class="form-label">Upload Image</label>
                        <input name="image" class="form-control form-control-lg" id="image" type="file" placeholder="image" required>
                    </div>

                    <div class="form-group">
                        <select name="committee_id" class="custom-select" placeholder="committee" id="committee">
                            <option value="{{$member->committee->id}}" selected >{{$member->committee->name}}</option>
                            @foreach($committees as $committee)
                                @if($committee->id != $member->committee->id)
                                <option value="{{$committee->id}}">{{$committee->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                          @if($member->type)
                        <select name="member_type_id" class="custom-select" placeholder="member type" id="">
                            <option value="{{$member->type->id}}" selected >{{$member->type->name}}</option>
                            @foreach($types as $type)
                                @if($type->id != $member->type->id)
                                <option value="{{$type->id}}">{{$type->name}}</option>
                                @endif
                            @endforeach
                        </select>
                        @else
                            <select name="member_type_id" class="custom-select" placeholder="member type" id="">
                                <option selected disabled></option>
                                @foreach($types as $type)
                                        <option value="{{$type->id}}">{{$type->name}}</option>
                                @endforeach
                            </select>
                        @endif
                        <select name="president" class="custom-select" id="">
                            <option value="{{$member->president}}">
                                @if($member->president ==1)
                                <option value="{{$member->president}}" selected> Yes</option>
                                <option value="0"> No</option>
                                @else
                                <option value="{{$member->president}}" selected > No</option>
                                <option value="1"> Yes</option>
                                    @endif
                            </option>
                        </select>
                    </div>
                    <button class="btn btn-primary" value="submit">Submit</button>
                </form>
            </div>
        </div>


    </div>
@endsection
