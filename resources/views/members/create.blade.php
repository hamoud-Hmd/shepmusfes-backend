@extends('layouts.dashboard')
@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-6">
                <form action="{{route('members.store')}}" class="form-container" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="formFile" class="form-label">First and Last Name</label>
                        <input type="text"  name="name" class="form-control @error('name') is-invalid @enderror" placeholder="name">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="formFile" class="form-label">Description</label>
           <textarea type="text" name="description" class="form-control" placeholder="description">
           </textarea>
                    </div>
                    <div class="form-group">
                        <label for="formFile" class="form-label">Telephone</label>
                        <input type="text" class="form-control" name="tel" placeholder="telephone">
                    </div>
                    <div class="form-group">
                        <label for="formFile" class="form-label">Email</label>
                        <input type="email" name="email" id="" class="form-control" placeholder="email">
                    </div>


                    <div class="form-group">
                        <label for="image" class="form-label">Upload Image</label>
                        <input name="image" class="form-control form-control-lg" id="image" type="file" placeholder="image">
                    </div>

                    <div class="form-group">
                        <select name="committee_id" class="custom-select" placeholder="committee" id="committee">

                            @foreach($committees as $committee)
                                <option value="{{$committee->id}}">{{$committee->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="member_type_id" class="custom-select" placeholder="member type" id="">
                            <option value="" selected disabled>null</option>
                            @foreach($types as $type)
                                <option value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="president" class="custom-select" placeholder="member type" id="">
                            <option value="1" >Yes</option>
                            <option value="0" selected>No</option>

                        </select>
                    </div>
                    <button class="btn btn-primary" value="submit">Submit</button>

                </form>
            </div>
        </div>


    </div>
@endsection
