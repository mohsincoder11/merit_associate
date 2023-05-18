@extends('layout');
@section('content');

    <div class="page-wrapper" style="margin-left:70px !important;">
        <div class="page-content">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-center">

                        <h6>New Valuation</h6>
                    </div>
                    <hr>
                    <form class="row g-2" method="post" enctype="multipart/form-data" action={{ route('addnewinsert') }}>
                        <input type="hidden" name="id" value="{{ $edit_data->id }}">
                        @csrf

                        <p>Valuation for</p>

                        <div class="col-md-3">
                            <label>First Name</label>
                            <input class="form-control mb-3" type="text" name="firstname" placeholder="First Name"
                                aria-label="default input example" value="{{ $edit_data->firstname }}">
                        </div>

                        <div class="col-md-3">
                            <label>Middle Name</label>
                            <input class="form-control mb-3" type="text" name="middelname" placeholder="Middle Name"
                                aria-label="default input example" value="{{ $edit_data->middelname }}">
                        </div>

                        <div class="col-md-3">
                            <label>Last Name</label>
                            <input class="form-control mb-3" type="text" name="lastname" placeholder="Last Name"
                                aria-label="default input example" value="{{ $edit_data->lastname }}">
                        </div>


                        <div class="col-md-3">
                            <label>Valuation ID</label>
                            <input class="form-control mb-3" type="text" name="valuation_id" placeholder="Valuation ID"
                                aria-label="default input example" value="{{ $edit_data->valuation_id }}">
                        </div>

                        <div class="col-md-3">
                            <label>Client</label>
                            <select class="form-select mb-3" aria-label="Default select example" name="associatesbanks_id">
                                <option selected>Select Client</option>
                                @foreach ($associatesbank as $associatesbank)
                                    <option value="{{ $associatesbank->id }}"
                                        @if ($edit_data->associatesbanks_id == $associatesbank->id) selected @endif>
                                        {{ $associatesbank->bankname }} </option>
                                @endforeach

                            </select>
                        </div>

                        <div class="col-md-3">
                            <label>Product</label>
                            <select class="form-select mb-3" aria-label="Default select example" name="product_id">
                                <option selected>Select Product</option>
                                @foreach ($product as $product)
                                    <option value="{{ $product->id }}" @if ($edit_data->product_id == $product->id) selected @endif>
                                        {{ $product->products }}
                                    </option>
                                @endforeach

                            </select>
                        </div>

                        <div class="col-md-3">
                            <label>Location</label>
                            <select class="form-select mb-3 location" aria-label="Default select example" name="location_id"
                                id="location">

                                <option value="">Select Location</option>
                                @foreach ($location as $location)
                                    <option value="{{ $location->id }}" @if ($edit_data->location_id == $location->id) selected @endif>
                                        {{ $location->locations }}
                                    </option>
                                @endforeach

                            </select>
                        </div>


                        <div class="col-md-3">
                            <label>Area
                                {{-- <label>[Add New]</label> --}}
                                <a href="" data-bs-toggle="modal" data-bs-target="#exampleScrollableModal"
                                    style="color:blue">[Add New]</a>
                            </label>
                            <select class="form-select mb-3 areas" aria-label="Default select example" name="area_id"
                                id="area">
                                <option selected>Select </option>
                                @foreach ($area as $area)
                                    <option value="{{ $area->id }}" @if ($edit_data->area_id == $area->id) selected @endif>
                                        {{ $area->area }} </option>
                                @endforeach

                            </select>
                        </div>
                        {{-- <div class="col"> --}}
                        <!-- Button trigger modal -->
                        {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Basic modal</button> --}}
                        <!-- Modal -->

                        {{-- </div> --}}
                        {{-- </div> --}}

                        <div class="col-md-3">
                            <label>Field Executive</label>
                            <select class="form-select mb-3" aria-label="Default select example" name="field_executive_id"
                                id="field">
                                <option selected>Select</option>

                                @foreach ($emp as $emp1)
                                    <option value="{{ $emp1->id }}" @if ($edit_data->field_executive_id == $emp1->id) selected @endif>
                                        {{ $emp1->name }} </option>
                                @endforeach

                            </select>

                        </div>

                        <div class="col-md-3">
                            <label>Assistant Valuer</label>
                            <select class="form-select mb-3" aria-label="Default select example" name="assistant_valuer_id"
                                id="assist">
                                <option selected>Select Assistant Valuer</option>
                                @foreach ($emp as $emp2)
                                    <option value="{{ $emp2->id }}" @if ($edit_data->assistant_valuer_id == $emp2->id) selected @endif>
                                        {{ $emp2->name }} </option>
                                @endforeach


                            </select>

                        </div>


                        <div class="col-md-3">

                            <label>Technical Manager</label>
                            <select class="form-select mb-3" aria-label="Default select example" name="technical_manager_id"
                                id="tech">
                                <option selected>Select Technical Manager</option>
                                @foreach ($emp as $emp3)
                                    <option value="{{ $emp3->id }}" @if ($edit_data->technical_manager_id == $emp3->id) selected @endif>
                                        {{ $emp3->name }} </option>
                                @endforeach



                            </select>

                        </div>


                        <div class="col-md-3">
                            <label>Technical Head</label>
                            <select class="form-select mb-3" aria-label="Default select example" name="technical_head_id"
                                id="tech_head">
                                <option selected>Select Technical Head</option>
                                @foreach ($emp as $emp4)
                                    <option value="{{ $emp4->id }}" @if ($edit_data->technical_head_id == $emp4->id) selected @endif>
                                        {{ $emp4->name }} </option>
                                @endforeach


                            </select>

                        </div>

                        <div class="col-md-3">
                            <label>Contact Number</label>
                            <input class="form-control mb-3" type="text" placeholder="Contact Number"
                                aria-label="default input example" name="contact_no" value="{{ $edit_data->contact_no }}">
                        </div>


                        <div class="col-md-3">
                            <label>Alternate Contact Number</label>
                            <input class="form-control mb-3" type="text" placeholder="Alternate Contact Number"
                                aria-label="default input example" name="alt_cont_no"
                                value="{{ $edit_data->alt_cont_no }}">
                        </div>

                        <div class="col-md-3">
                            <label>Address of Individual</label>
                            <textarea class="form-control" id="inputAddress" placeholder="Address..." rows="2" name="address">{{ $edit_data->address }}</textarea>
                        </div>

                        <div class="col-md-3">
                            <label>City</label>
                            <input class="form-control mb-3" type="text" placeholder="City" name="city"
                                aria-label="default input example" value="{{ $edit_data->city }}">
                        </div>

                        <div class="col-md-3">
                            <label>State</label>
                            <input class="form-control mb-3" type="text" placeholder="State" name="state"
                                aria-label="default input example" value="{{ $edit_data->state }}">
                        </div>

                        <div class="col-md-3">
                            <label>Pincode</label>
                            <input class="form-control mb-3" type="text" placeholder="Pincode" name="pincode"
                                aria-label="default input example" value="{{ $edit_data->pincode }}">
                        </div>

                        <div class="col-md-3">
                            <label>Longitude</label>
                            <input class="form-control mb-3" type="text" placeholder="Longitude" name="longitude"
                                aria-label="default input example" value="{{ $edit_data->longitude }}">
                        </div>

                        <div class="col-md-3">
                            <label>Latitude</label>
                            <input class="form-control mb-3" type="text" placeholder="Latitude" name="latitute"
                                aria-label="default input example" value="{{ $edit_data->latitute }}">
                        </div>

                        <div class="col-md-3">
                            <label>Tags</label>
                            <input class="form-control mb-3" type="text" placeholder="Tags" name="tags"
                                aria-label="default input example" value="{{ $edit_data->tags }}">
                        </div>


                        <div class="col-md-3">
                            <label>Due Date</label>
                            <input type="date" class="form-control" name="date" value="{{ $edit_data->date }}">
                        </div>


                        <div class="col-md-3">
                            <label>Comment / Remarks</label>
                            <textarea class="form-control" id="inputAddress" placeholder="Comment / Remarks" rows="3" name="comment">{{ $edit_data->comment }}</textarea>

                        </div>

                        <div class="col-md-3">
                            <label>Status</label>
                            <select class="form-select mb-3" aria-label="Default select example" name="status">
                                <option>Select </option>
                                <option value="ongoing" @if ($edit_data->status == 'ongoing') selected @endif>ongoing</option>
                                <option value="completed" @if ($edit_data->status == 'completed') selected @endif>completed
                                </option>
                                <option value="cancelled" @if ($edit_data->status == 'cancelled') selected @endif>cancelled
                                </option>
                                <option value="pending" @if ($edit_data->status == 'pending') selected @endif>pending
                                </option>
                            </select>
                        </div>


                        <div class="row">
                            <div class="col-md-3">
                                <label>Documents Name</label>
                                <input type="text" class="form-control" name="docname[]" id="document1">
                            </div>

                            <div class="col-md-3">
                                <label>Upload Document</label>
                                <input type="file" class="form-control" name="upd[]" id="upload">

                            </div>

                            <div class="col-md-2 form-group">
                                <label></label>
                                <div class="form-group" align="center" style="width: full;margin-top: 1vh;">
                                    <button type="button" name="action_button" class="btn btn-warning"
                                        id="add_row">Add</button>
                                </div>
                            </div>

                        </div>


                        <div class="col-md-10 " style="">
                            <table class="items_table table table-bordered width80" id="items_table">
                                <thead>
                                    <tr class="filters">
                                        <th></th>
                                        <th>Document Name</th>

                                        <th>Documents </th>
                                    </tr>
                                </thead>
                                <tbody id="add_more">


                                    @foreach ($edit_data->document_name as $demo)
<tr>
    <td>
        <input type="checkbox" class="del_check1" name="record">
    </td>
    {{-- <td><input type="hidden" name="category[]"  value="{{$demo}}">
        <input type="text" class="form-control"  value="{{$demo}}" >
    </td> --}}

    <td>
        <input type="hidden" value="{{$edit_data->document_name[$loop->index]}}" name="document_name[]" ><input type="text" class="form-control" step="0.1" value="{{$edit_data->document_name[$loop->index]}}" >
    </td>
{{-- @json($edit_data->image) --}}
    <td>
        @php
        $tag = App\Models\Admin\Add_news::whereIn('id', $edit_data->image)
            ->pluck('image')
            ->toArray();
        $tag2 = implode(',', $tag);
        // echo json_encode($tag);
        // exit();
    @endphp
    {{-- {{ $tag2 }} --}}   
        <input name="image_files[]" type="hidden" value=""><a target="_blank" href=""><img style="height:100px;width:auto;" src="{{asset( 'image/New-valuation/' .$edit_data->image[0])}}"></a>
    </td>
</tr>
@endforeach
                                </tbody>
                            </table>
                            <button type="button" class="delete-row btn btn-danger"
                                style="margin-left: 80%; margin-top: 5px;">Delete Row</button>
                        </div>



                        <div class="col-md-3" style="padding:8px"><br>
                            <button type="submit" class=" btn btn-primary"><i class="fadeIn animated bx bx-plus"></i>
                                Submit </button>
                        </div>


                    </form>


                    <div class="modal fade" id="exampleScrollableModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <form class="row g-2" action="{{ route('areainsert') }}" method="post">@csrf
                                        <div class="row">

                                            <div class="col-md-6">
                                                <label class="form-label">Locations<span
                                                        style="color:red">*</span></label>
                                                <select class="form-control" name="location_id">

                                                    <option>Select</option>
                                                    @foreach ($data as $location)
                                                        <option value="{{ $location->id }}"> {{ $location->locations }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="inputFirstName" class="form-label">Area<span
                                                        style="color:red">*</span></label>
                                                <input type="text" class="form-control" id="inputFirstName"
                                                    placeholder="Area" name="area" required>
                                            </div>




                                        </div>
                                    </form>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>First Name</th>
                                            <th>Field Executive</th>
                                            <th>Assistant Valuer</th>
                                            {{-- <th>Technical Manager </th> --}}
                                            <th>Technical Head</th>
                                            <th>Contact Number</th>
                                            <th> Alternate Contact Number</th>
                                            <th> Address </th> 
                                            <th> Status</th> 
                                            <th> Documents</th> 
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($add_new_all as $add_new_all)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td data-bs-toggle="tooltip" data-bs-placement="right" title="Name:- {{ $add_new_all->firstname }}
                                                    Middel Name:-   {{ $add_new_all->middelname }}
                                                    Last Name:- {{ $add_new_all->lastname }}
                                                    Valuation ID:- {{ $add_new_all->valuation_id }}
                                                    Client:-  {{ $add_new_all->bankname }}
                                                    Product:-    {{ $add_new_all->products }}
                                                    Location:- {{ $add_new_all->locations }}
                                                    Area:-  {{ $add_new_all->area }}">{{ $add_new_all->firstname }}
                                            </td>
                                                <td >{{ $add_new_all->field_executive }}</td>
                                                <td>{{ $add_new_all->assistant_valuer }}</td>
                                                {{-- <td>{{ $add_new_all->technical_manager }}</td> --}}
                                                <td>{{ $add_new_all->technical_head }}</td>
                                                <td>{{ $add_new_all->contact_no }}</td>
                                                <td>{{ $add_new_all->alt_cont_no }}</td>
                                                <td data-bs-toggle="tooltip" data-bs-placement="right" title="Address:- {{ $add_new_all->address }}
                                               City:- {{ $add_new_all->city }}
                                               State:-  {{ $add_new_all->state }}
                                               Pincode:- {{ $add_new_all->pincode }}
                                               Longitude:- {{ $add_new_all->longitude }}
                                               Latitute:- {{ $add_new_all->latitute }}
                                                Tag:- {{ $add_new_all->tags }}
                                               Date:- {{ $add_new_all->date }}
                                               Comment:- {{ $add_new_all->comment }}
                                               ">{{ $add_new_all->address }}</td>
{{-- @json($add_new_all->image) --}}
                                               <td>
                                                @foreach ($add_new_all->image as $add_new_all1)
                                                 
                                                <a target="_blank" href="{{ asset('images/New-valuation/' . $add_new_all1) }}">
                                                    <img src="{{ asset('images/New-valuation/' . $add_new_all1) }}"
                                                        style="height:50px;width:auto;" alt="">
                                                </a>
                                                @endforeach
                                            </td>

                                               <td>{{ $add_new_all->status }}</td>
                                                <td>
                                                    <a href="{{ route('addnewedit', $add_new_all) }}"> <button
                                                            type="button" class="btn1 btn-outline-success"><i
                                                                class='bx bx-edit-alt me-0'></i></button></a>

                                                    <a href="{{ route('addnewdelete', $add_new_all) }}"> <button
                                                            type="button" class="btn1 btn-outline-danger"
                                                            onclick="return confirm('Are You Sure To Delete This?')"><i
                                                                class='bx bx-trash me-0'></i></button></a>



                                                </td>
                                        @endforeach

                                        </tr>




                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>



    @section('js')

        <script>
            $(document).ready(function() {

                $("#location").on('change', function() {
                    $.ajax({
                        url: "{{ route('get_area_id') }}",
                        type: 'get',
                        data: {
                            area: $(this).val()
                        },
                        cache: false,
                        success: function(result) {
                            console.log(result);
                            $("#area").empty();
                            $("#area").append(' <option value=""> Select </option>');
                            $.each(result, function(a, b) {
                                $("#area").append(' <option value="' + b.id + '">' + b
                                    .area + '</option>');
                            })
                        }
                    });







                })

                $("#area").on('change', function() {
                    //alert($(this).val());
                    $.ajax({
                        url: "{{ route('get_name_id') }}",
                        type: 'get',
                        data: {
                            field: $(this).val()

                        },
                        cache: false,
                        success: function(result) {

                            console.log(result);
                            $("#field").empty();
                            $("#field").append(' <option value=""> Select </option>');
                            $.each(result, function(a, b) {
                                if (b.role == "field_executive") {

                                    $("#field").append(' <option value="' + b
                                        .id + '">' + b.name + '</option>');
                                }

                                if (b.role == "assist_valuer") {
                                    $("#assist").empty();

                                    $("#assist").append(' <option value="' + b
                                        .id + '">' + b.name + '</option>');
                                }

                                if (b.role == "tech_manager") {
                                    $("#tech").empty();

                                    $("#tech").append(' <option value="' + b
                                        .id + '">' + b.name + '</option>');
                                }

                                if (b.role == "tech_head") {
                                    $("#tech_head").empty();

                                    $("#tech_head").append(' <option value="' +
                                        b.id + '">' + b.name + '</option>');
                                }

                            })
                        }
                    })
                });

                $(document).ready(function() {

                    setTimeout(() => {
                        console.clear();
                    }, 1500);
                    // var src;
                    var blob;
                    $("#upload").on('change', function(e) {
                        // src=URL.createObjectURL(e.target.files[0]);
                        let file = e.target.files[0];
                        var reader = new FileReader();
                        reader.readAsDataURL(file);
                        reader.onload = function(e) {
                            blob = e.target.result;
                        };
                    })


                    $("#add_row").click(function() {
                        var document1 = $('#document1').val();
                        var upload = $('#upload').val().replace(/C:\\fakepath\\/i, '');
                        console.log(upload);


                        var markup =
                            '<tr><td><input type="checkbox" class="del_check1" name="record"></td><td><input class="form-control" type="text" value="' +
                            document1 +
                            '" name="tag[]" ></td><td><input name="image_files[]" type="hidden" value="' +
                            blob + '">' + upload + '</td></tr>';
                        $("#add_more").append(markup);
                        //empty all fields
                        $("#document1").val('');
                        $("#upload").val('');

                        // $("#details").val('');
                    });

                    $(".delete-row").click(function() {
                        $('.del_check1').each(function() {
                            // alert();
                            if ($(this).is(":checked")) {
                                var perticular = $(this).parents("tr").find(
                                        'input[name="perticular[]"]')
                                    .val();
                                var price = $(this).parents("tr").find('input[name="price[]"]')
                                    .val();
                                var minus_amount = parseFloat(price);
                                var old_amount = $("#total_amount").val();
                                $("#total_amount").val(parseFloat(old_amount) - parseFloat(
                                    minus_amount));
                                $(this).parents("tr").remove();
                            }
                        });
                    });
                });

            })
        </script>



    @stop
