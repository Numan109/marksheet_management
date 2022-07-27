@extends('dashboard')
@section('content')
<!-- <div class="container"> -->
    <div class="row">
        <div class="col ">
            <div class="card">
                <div class="card-header">
                    Student information
                </div>
                <!-- <div class="card-body"> -->
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Class</th>
                                <th scope="col">Roll</th>
                                <th scope="col">Date of Birth</th>
                                <th scope="col">Father's Name</th>
                                <th scope="col">Mother's Name</th>
                                <th scope="col">Present Address</th>
                                <th scope="col">Father's Phone</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($students))
                            @foreach($students as $key=>$value)
                            <tr>
                                <th scope="row">{{$value->id}}</th>
                                <td>{{$value->std_name}}</td>
                                <td>{{$value->std_class}}</td>
                                <td>{{$value->std_roll}}</td>
                                <td>{{$value->std_dateOfbirth}}</td>
                                <td>{{$value->std_father_name}}</td>
                                <td>{{$value->std_mother_name}}</td>
                                <td>{{$value->std_present_add}}</td>
                                <td>{{$value->std_father_phone}}</td>
                                <td>
                                <a href="{{url('images/',$value->std_image)}}" data-toggle="lightbox" data-title="{{$value->std_name}}" data-footer="">
                                        <img src="{{url('images/',$value->std_image)}}" alt="Image not found" height="50px" width="40px">
                                    </a>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-success btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                                
                                
                            </tr>
                            @endforeach
                            @else
                            <h3 class="text-warning" colspan="10">Data not found!!</h3>
                            @endif
                        
                        </tbody>
                    </table>

                    <div class="d-felx justify-content-end">

                        {{ $students->links('vendor.pagination.custom') }}

                    </div>

                <!-- </div> -->
            </div>
        </div>
    </div>
<!-- </div> -->



@endsection