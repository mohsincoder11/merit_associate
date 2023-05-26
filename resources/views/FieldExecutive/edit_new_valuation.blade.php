@extends('layout')
@section('content')

    <div class="page-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-center">

                                <h5 class="mb-0 text-primary"> Valuation Report </h5>
                                <h5 class="mb-0 text-primary" style="margin-left: 800px;"> Valuation
                                    ID:{{ $edit_new->valuation_id }} </h5>
                            </div>
                            <hr>
                            <form class="row g-2" method="POST" action="{{ route('FE.update') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $edit_new->id }}">
                                <div class="col-md-3">
                                    <label for="inputFirstName" class="form-label">Name Of Customer*</label>
                                    <input type="text" class="form-control" placeholder="Customer Name" name="name"
                                        value="{{ $edit_new->name }}" required readonly>
                                </div>

                                <div class="col-md-3">
                                    <label for="inputFirstName" class="form-label">Customer Contact Number*</label>
                                    <input type="text" class="form-control" placeholder=" Contact Number"
                                        name="contact_no" value="{{ $edit_new->contact_no }}" required readonly>
                                </div>
                                <div class="col-md-3">
                                    <label for="inputFirstName" class="form-label">Property Type*</label>
                                    <select class="multiple-select" data-placeholder="Choose anything"
                                        name="property_type_id" required>
                                        <option value="">Select</option>
                                        @foreach ($property_type as $property_type)
                                            <option value="{{ $property_type->id }}" @if ($edit_new->property_type_id == $property_type->id) selected
                                            @endif>{{ $property_type->property }}</option>
                                        @endforeach
                                            </select>
                                </div>


                                <div class="col-md-3">
                                    <label for="inputFirstName" class="form-label"> Property Address*</label>
                                    <input type="text" class="form-control" placeholder="Property Address"
                                        name="property_address" required value="{{$edit_new->property_address }}">
                                </div>

                                <div class="col-md-3">
                                    <label for="inputFirstName" class="form-label"> Address*</label>
                                    <textarea type="text" class="form-control" placeholder=" Address" name="address" value="" required readonly>{{ $edit_new->address }}</textarea>
                                </div>

                                <div class="col-md-3">
                                    <label for="inputFirstName" class="form-label">Road Name*</label>
                                    <input type="text" class="form-control" placeholder=" Road Name" name="road_name" value="{{$edit_new->road_name }}" 
                                        required>
                                </div>

                                <div class="col-md-3">
                                    <label for="inputFirstName" class="form-label">Colony / Area/Nagar*</label>
                                    <input type="text" class="form-control" placeholder=" Colony / Area/Nagar" value="{{ $edit_new->colony }}" 
                                        name="colony" required>
                                </div>


                                <div class="col-md-3">
                                    <label for="inputFirstName" class="form-label">PIN Code*</label>
                                    <input type="text" class="form-control" placeholder=" PIN Code" name="pin_code"
                                        value="{{ $edit_new->pin_code }}" required readonly>
                                </div>

                                <div class="col-md-3">
                                    <label for="inputFirstName" class="form-label">Landmark*</label>
                                    <input type="text" class="form-control" placeholder="Landmark" name="landmark" value="{{ $edit_new->landmark }}" 
                                        required>
                                </div>

                                <div class="col-md-3">
                                    <label for="inputFirstName" class="form-label">E-Meter No*</label>
                                    <input type="text" class="form-control" placeholder="E-Meter No" name="meter_no" value="{{ $edit_new->meter_no }}" 
                                        required>
                                </div>

                                <div class="row g-2">


                                    <div class="col-md-3" style="margin-left: 2%;">
                                        <label for="inputFirstName" class="form-label">Plot Area (Dimension in Feet)
                                            *</label>
                                    </div>

                                    <div class="col-md-2">
                                        <label for="inputFirstName" class="form-label">East *</label>

                                        <input type="text" class="form-control" placeholder="" name="plot_area[]" value="{{ $edit_new->plot_area[0] }}" 
                                            required>
                                    </div>



                                    <div class="col-md-2">
                                        <label for="inputFirstName" class="form-label">West*</label>
                                        <input type="text" class="form-control" placeholder="" name="plot_area[]" value="{{ $edit_new->plot_area[1] }}" 
                                            required>
                                    </div>



                                    <div class="col-md-2">
                                        <label for="inputFirstName" class="form-label">North*</label>
                                        <input type="text" class="form-control" placeholder="" name="plot_area[]" value="{{ $edit_new->plot_area[2] }}" 
                                            required>
                                    </div>


                                    <div class="col-md-2">
                                        <label for="inputFirstName" class="form-label">South*</label>
                                        <input type="text" class="form-control" placeholder="" name="plot_area[]" value="{{ $edit_new->plot_area[3] }}" 
                                            required>

                                    </div>

                                </div>
                                <div class="row g-2" style="margin-top: 1%;">


                                    <div class="col-md-3" style="margin-left: 2%;">
                                        <label for="inputFirstName" class="form-label">B/Up Area *</label>
                                    </div>

                                    <div class="col-md-2">
                                        <label for="inputFirstName" class="form-label">G.F *</label>

                                        <input type="text" class="form-control" placeholder="" name="up_area[]" value="{{ $edit_new->up_area[0] }}" 
                                            required>
                                    </div>



                                    <div class="col-md-2">
                                        <label for="inputFirstName" class="form-label">F.F*</label>
                                        <input type="text" class="form-control" placeholder="" name="up_area[]" value="{{ $edit_new->up_area[1] }}" 
                                            required>
                                    </div>



                                    <div class="col-md-2">
                                        <label for="inputFirstName" class="form-label">S.F*</label>
                                        <input type="text" class="form-control" placeholder="" name="up_area[]" value="{{ $edit_new->up_area[2] }}" 
                                            required>
                                    </div>


                                    <div class="col-md-2">
                                        <label for="inputFirstName" class="form-label">TF*</label>
                                        <input type="text" class="form-control" placeholder="" name="up_area[]" value="{{ $edit_new->up_area[3] }}" 
                                            required>

                                    </div>

                                </div>

                                <div class="row g-2" style="margin-top: 1%;">


                                    <div class="col-md-3" style="margin-left: 2%;">
                                        <label for="inputFirstName" class="form-label">Construction Year*</label>
                                    </div>

                                    <div class="col-md-2">
                                        <label for="inputFirstName" class="form-label">G.F *</label>

                                        <input type="date" class="form-control datepicker" name="GF" required value="{{ $edit_new->GF }}">
                                    </div>



                                    <div class="col-md-2">
                                        <label for="inputFirstName" class="form-label">F.F*</label>
                                        <input type="date" class="form-control datepicker" name="FF" required value="{{ $edit_new->FF }}">
                                    </div>



                                    <div class="col-md-2">
                                        <label for="inputFirstName" class="form-label">S.F*</label>
                                        <input type="date" class="form-control datepicker" name="SF" required value="{{ $edit_new->SF }}">
                                    </div>


                                    <div class="col-md-2">
                                        <label for="inputFirstName" class="form-label">TF*</label>
                                        <input type="date" class="form-control datepicker" name="TF" required value="{{ $edit_new->TF }}">

                                    </div>

                                    <div class="col-md-3" style="margin-left:27%;">
                                        <label for="inputFirstName" class="form-label">Occupancy Status*</label>
                                        <select class="multiple-select" data-placeholder="Choose anything"
                                            name="occupancy_status" required>
                                            <option value="">Select</option>
                                            <option value="Occupied" @if ($edit_new
                                            ->occupancy_status == 'Occupied') selected @endif>Occupied</option>
                                            <option value="Vacant"  @if ($edit_new
                                            ->occupancy_status == 'Vacant') selected @endif>Vacant</option>
                                            <option value="Under Construction"  @if ($edit_new
                                            ->occupancy_status == 'Under Construction') selected @endif>Under Construction</option>
                                            <option value="N.A"  @if ($edit_new
                                            ->occupancy_status == 'N.A') selected @endif>N.A</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <label for="inputFirstName" class="form-label">Occupied By*</label>
                                        <select class="multiple-select" data-placeholder="Choose anything"
                                            name="occupied_by" required>
                                            <option value="">Select</option>
                                            <option value="Seller Occupied"  @if ($edit_new
                                            ->occupied_by == 'Seller Occupied') selected @endif>Seller Occupied</option>
                                            <option value="Self Occupied"  @if ($edit_new
                                            ->occupied_by == 'Self Occupied') selected @endif>Self Occupied</option>
                                            <option value="Tenant Occupied"  @if ($edit_new
                                            ->occupied_by == 'Tenant Occupied') selected @endif>Tenant Occupied</option>
                                            <option value="Self + Tenant"  @if ($edit_new
                                            ->occupied_by == 'Self + Tenant') selected @endif>Self + Tenant</option>
                                        </select>
                                    </div>




                                </div>

                                <div class="row g-2" style="margin-top: 1%;">


                                    <div class="col-md-3" style="margin-left: 2%;">
                                        <label for="inputFirstName" class="form-label">Four Borders *</label>
                                    </div>

                                    <div class="col-md-2">
                                        <label for="inputFirstName" class="form-label">East *</label>

                                        <input type="text" class="form-control" placeholder="" name="four_borders[]" value="{{ $edit_new->four_borders[0] }}"
                                            required>
                                    </div>



                                    <div class="col-md-2">
                                        <label for="inputFirstName" class="form-label">West*</label>
                                        <input type="text" class="form-control" placeholder="" name="four_borders[]" value="{{ $edit_new->four_borders[1] }}"
                                            required>
                                    </div>



                                    <div class="col-md-2">
                                        <label for="inputFirstName" class="form-label">North*</label>
                                        <input type="text" class="form-control" placeholder="" name="four_borders[]" value="{{ $edit_new->four_borders[2] }}"
                                            required>
                                    </div>


                                    <div class="col-md-2">
                                        <label for="inputFirstName" class="form-label">South*</label>
                                        <input type="text" class="form-control" placeholder="" name="four_borders[]" value="{{ $edit_new->four_borders[3] }}"
                                            required>

                                    </div>

                                </div>


                                <div class="row g-2" style="margin-top: 1%;">


                                    <div class="col-md-3" style="margin-left: 2%;">
                                        <label for="inputFirstName" class="form-label">Whether Boundaries Matching
                                            *</label>
                                    </div>

                                    <div class="col-md-2">

                                        <select class="multiple-select" data-placeholder="Choose anything"
                                            name="whether_boundaries_matching[]" required>
                                            <option value="">Select</option>
                                            <option value="Yes" @if ($edit_new
                                            ->whether_boundaries_matching[0] == 'Yes') selected @endif>Yes</option>
                                            <option value="No" @if ($edit_new
                                            ->whether_boundaries_matching[0] == 'No') selected @endif>No</option>
                                        </select>

                                    </div>



                                    <div class="col-md-2">
                                        <select class="multiple-select" data-placeholder="Choose anything"
                                            name="whether_boundaries_matching[]" required>
                                            <option value="">Select</option>
                                            <option value="Yes" @if ($edit_new
                                            ->whether_boundaries_matching[1] == 'Yes') selected @endif>Yes</option>
                                            <option value="No" @if ($edit_new
                                            ->whether_boundaries_matching[1] == 'No') selected @endif>No</option>
                                        </select>
                                    </div>



                                    <div class="col-md-2">
                                        <select class="multiple-select" data-placeholder="Choose anything"
                                            name="whether_boundaries_matching[]" required>
                                            <option value="">Select</option>
                                            <option value="Yes" @if ($edit_new
                                            ->whether_boundaries_matching[2] == 'Yes') selected @endif>Yes</option>
                                            <option value="No" @if ($edit_new
                                            ->whether_boundaries_matching[2] == 'No') selected @endif>No</option>
                                        </select>
                                    </div>


                                    <div class="col-md-2">
                                        <select class="multiple-select" data-placeholder="Choose anything"
                                            name="whether_boundaries_matching[]" required>
                                            <option value="">Select</option>
                                            <option value="Yes" @if ($edit_new
                                            ->whether_boundaries_matching[3] == 'Yes') selected @endif>Yes</option>
                                            <option value="No" @if ($edit_new
                                            ->whether_boundaries_matching[3] == 'No') selected @endif>No</option>
                                        </select>

                                    </div>

                                </div>


                                <div class="row g-2" style="margin-top: 1%; margin-left: 1.5%;">


                                    <div class="col-md-2">
                                        <label for="inputFirstName" class="form-label">Rate Range *</label>
                                        <input type="text" class="form-control" placeholder="" name="rate_range" value="{{ $edit_new->rate_range }}"
                                            required>

                                    </div>

                                    <div class="col-md-2">
                                        <label for="inputFirstName" class="form-label"> Plot Rate *</label>

                                        <input type="text" class="form-control" placeholder="" name="plot_range" value="{{ $edit_new->plot_range }}"
                                            required>
                                    </div>


                                    <div class="col-md-2">
                                        <label for="inputFirstName" class="form-label"> Road Type *</label>
                                        <select class="multiple-select" data-placeholder="Choose anything"
                                            name="road_type" required>
                                            <option value="">Select</option>
                                            <option value="Tar Road" @if ($edit_new
                                            ->road_type == 'Tar Road') selected @endif>Tar Road</option>
                                            <option value="Concrete Road" @if ($edit_new
                                            ->road_type == 'Concrete Road') selected @endif>Concrete Road</option>
                                            <option value="WBM Road" @if ($edit_new
                                            ->road_type == 'WBM Road') selected @endif>WBM Road</option>
                                            <option value="Kaccha Roa" @if ($edit_new
                                            ->road_type == 'Kaccha Roa') selected @endif>Kaccha Road</option>
                                        </select>

                                    </div>



                                    <div class="col-md-2">
                                        <label for="inputFirstName" class="form-label"> Road Width In Feet *</label>

                                        <input type="text" class="form-control" placeholder=""
                                            name="road_width_in_feet" value="{{ $edit_new->road_width_in_feet }}" required>
                                    </div>




                                    <div class="col-md-3">
                                        <label for="inputFirstName" class="form-label">Type of structure *</label>
                                        <select class="multiple-select" data-placeholder="Choose anything"
                                            name="type_of_structure" required>
                                            <option value="">Select</option>
                                            <option value="RCC" @if ($edit_new
                                            ->type_of_structure == 'RCC') selected @endif>RCC</option>
                                            <option value="Load Bearins" @if ($edit_new
                                            ->type_of_structure == 'Load Bearins') selected @endif>Load Bearing</option>
                                            <option value="Composite" @if ($edit_new
                                            ->type_of_structure == 'Composite') selected @endif>Composite</option>
                                            <option value="Tin Roof" @if ($edit_new
                                            ->type_of_structure == 'Tin Roof') selected @endif>Tin Roof</option>
                                            <option value="RCC + Tin Roof" @if ($edit_new
                                            ->type_of_structure == 'RCC + Tin Roof') selected @endif>RCC + Tin Roof</option>
                                            <option value="Kaccha House" @if ($edit_new
                                            ->type_of_structure == 'Kaccha House') selected @endif>Kaccha House</option>


                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputFirstName" class="form-label"> Remark On Boundaries Matching
                                            *</label>

                                        <input type="text" class="form-control" placeholder=""
                                            name="remark_on_boundaries_matching" value="{{ $edit_new->remark_on_boundaries_matching }}" required>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="inputFirstName" class="form-label">LAT *</label>

                                        <input type="text" class="form-control" placeholder="" name="lat"
                                            value="{{ $edit_new->lat }}" required readonly>
                                    </div>

                                    <div class="col-md-2">
                                        <label for="inputFirstName" class="form-label">Long*</label>

                                        <input type="text" class="form-control" placeholder="" name="long"
                                            value="{{ $edit_new->long }}" required readonly>
                                    </div>

                                    <div class="col-md-3">
                                        <label for="inputFirstName" class="form-label">Construction Stage *</label>
                                        <select class="multiple-select" data-placeholder="Choose anything"
                                            name="construction_stage" required>
                                            <option value="">Select</option>
                                            <option value="Yet To Start"  @if ($edit_new
                                            ->construction_stage == 'Yet To Start') selected @endif>Yet To Start</option>
                                            <option value="Ground Level"  @if ($edit_new
                                            ->construction_stage == 'Ground Level') selected @endif>Ground Level</option>
                                            <option value="Plinth Level"  @if ($edit_new
                                            ->construction_stage == 'Plinth Level') selected @endif>Plinth Level</option>
                                            <option value="Roof Level"  @if ($edit_new
                                            ->construction_stage == 'Roof Level') selected @endif>Roof Level</option>
                                            <option value="Finishing Stage"  @if ($edit_new
                                            ->construction_stage == 'Finishing Stage') selected @endif>Finishing Stage</option>
                                            <option value="Superstructure Completed (For Multistorey)"  @if ($edit_new
                                            ->construction_stage == 'Superstructure Completed (For Multistorey)') selected @endif>
                                                Superstructure Completed (For Multistorey)
                                            </option>
                                            <option value="Completed" @if ($edit_new
                                            ->construction_stage == 'Completed') selected @endif>Completed</option>


                                        </select>
                                    </div>

                                </div>


                                <div class="row g-2" style="margin-top: 1%; margin-left: 1%;">


                                    <div class="col-md-3" style="margin-left: 2%;">
                                        <label for="inputFirstName" class="form-label">Side Marginal Distance in
                                            Feet*</label>
                                    </div>

                                    <div class="col-md-2">
                                        <label for="inputFirstName" class="form-label">Front *</label>

                                        <input type="text" class="form-control" placeholder=""
                                            name="side_marginal_distance_in_feet[]" value="{{ $edit_new->side_marginal_distance_in_feet[0] }}" required>
                                    </div>



                                    <div class="col-md-2">
                                        <label for="inputFirstName" class="form-label">Back*</label>
                                        <input type="text" class="form-control" placeholder=""
                                            name="side_marginal_distance_in_feet[]" value="{{ $edit_new->side_marginal_distance_in_feet[1] }}" required>
                                    </div>



                                    <div class="col-md-2">
                                        <label for="inputFirstName" class="form-label">Left*</label>
                                        <input type="text" class="form-control" placeholder=""
                                            name="side_marginal_distance_in_feet[]" value="{{ $edit_new->side_marginal_distance_in_feet[2] }}" required>
                                    </div>


                                    <div class="col-md-2">
                                        <label for="inputFirstName" class="form-label">Right*</label>
                                        <input type="text" class="form-control" placeholder=""
                                            name="side_marginal_distance_in_feet[]" value="{{ $edit_new->side_marginal_distance_in_feet[3] }}" required>

                                    </div>

                                </div>


                                <div class="row g-2" style="margin-top: 1%;">


                                    <div class="col-md-3" style="margin-left: 2%;">
                                        <label for="inputFirstName" class="form-label">Description Of Property
                                            (1BHK/2BHK) *</label>
                                    </div>

                                    <div class="col-md-2">
                                        <label for="inputFirstName" class="form-label">G.F *</label>

                                        <input type="text" class="form-control" placeholder=""
                                            name="discription_of_property[]" value="{{ $edit_new->discription_of_property[0] }}" required>
                                    </div>



                                    <div class="col-md-2">
                                        <label for="inputFirstName" class="form-label">F.F*</label>
                                        <input type="text" class="form-control" placeholder=""
                                            name="discription_of_property[]" value="{{ $edit_new->discription_of_property[1] }}" required>
                                    </div>



                                    <div class="col-md-2">
                                        <label for="inputFirstName" class="form-label">S.F*</label>
                                        <input type="text" class="form-control" placeholder=""
                                            name="discription_of_property[]" value="{{ $edit_new->discription_of_property[2] }}" required>
                                    </div>


                                    <div class="col-md-2">
                                        <label for="inputFirstName" class="form-label">TF*</label>
                                        <input type="text" class="form-control" placeholder=""
                                            name="discription_of_property[]" value="{{ $edit_new->discription_of_property[3] }}" required>

                                    </div>

                                </div>

                                <div class="row g-2" style="margin-top: 1%;">


                                    <div class="col-md-2" style="margin-left: 2%;">
                                        <label class="form-label">Person Met At Site*</label>
                                        <input type="text" class="form-control" placeholder=""
                                            name="person_met_at_site" value="{{ $edit_new->person_met_at_site }}" required>
                                    </div>



                                    <div class="col-md-2">
                                        <label class="form-label">Relation With Owner*</label>
                                        <select class="multiple-select" data-placeholder="Choose anything"
                                            name="relation_with_owner" required>
                                            <option value="">Select</option>
                                            <option value="Friend" selected>Friend</option>
                                            <option value="Relative" selected>Relative</option>
                                            <option value="Wife" selected>Wife</option>
                                            <option value="Neighbor" selected>Neighbor</option>
                                            <option value="Husband" selected>Husband</option>
                                            <option value="Company Employee" selected>Company Employee</option>
                                            <option value="Buider / Site Supervisior" selected>Buider / Site Supervisior
                                            </option>
                                            <option value="N.A" selected>N.A</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3" style="margin-left: 2%;">
                                        <label class="form-label">Remark on Property*</label>
                                        <input type="text" class="form-control" placeholder=""
                                            name="remark_on_property" value="{{ $edit_new->remark_on_property }}" required>
                                    </div>


                                    <div class="col-md-3">
                                        <label class="form-label">Deviation (Mark Appropriate)*</label>
                                        <select class="multiple-select" data-placeholder="Choose anything"
                                            name="deviation" required>
                                            <option value="">Select</option>
                                            <option value="High Tension Line" selected>High Tension Line</option>
                                            <option value="Temple In Property" selected>Temple In Property</option>
                                            <option value="Near Nala / River/ Water Body" selected>Near Nala / River/ Water
                                                Body</option>
                                            <option value="Land Lock Property" selected>Land Lock Property</option>
                                            <option value="Common Entrance" selected>Common Entrance</option>
                                            <option value="Railway Line" selected>Railway Line</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3" style="margin-left: 1%;">
                                        <label class="form-label">Rate Referenace (Name & Contact Number)*</label>
                                        <input type="text" class="form-control" placeholder="" name="rate_referenace" value="{{ $edit_new->rate_referenace }}"
                                            required>
                                    </div>

                                    <div class="col-md-2">
                                        <label for="inputFirstName" class="form-label">Date Of Visit*</label>
                                        <input type="date" class="form-control datepicker" name="date_of_visit" value="{{ $edit_new->date_of_visit }}"
                                            required>
                                    </div>
                                    {{-- @json($edit_new->role) --}}
                                    <div class="col-md-3">
                                        <label class="form-label">Name Of Field Executive Visited The Property*</label>
                                        <input type="text" class="form-control" placeholder=""
                                            name="name_of_FE_visited_the_property" value="{{ $edit_new->role }}"
                                            required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputFirstName" class="form-label">Location*</label>
                                        <label id="location"> </label>



                                        <select class="multiple-select " data-placeholder="Choose anything"
                                            name="location_id" required id="location" readonly>
                                            <option value="">Select</option>
                                            @foreach ($location as $location)
                                                <option value="{{ $location->id }}"
                                                    @if ($edit_new->location_id == $location->id) selected @endif>
                                                    {{ $location->locations }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-3 img_div">
                                        <label for="inputFirstName" class="form-label">Last update By </label>
                                        <select class="form-select"  name="last_updated_by">
                                            <option>Select</option>
                                            <option value="Admin"   @if ($new_edit->status == "Admin") selected @endif>ongoing </option>
                                            <option value="Feild Executive"   @if ($new_edit->status == "Feild Executive") selected @endif>cancelled </option>
                                            <option value="Assistant Valuer"   @if ($new_edit->status == "Assistant Valuer") selected @endif> completed</option>
                                            <option value="Technical Manager"   @if ($new_edit->status == "Technical Manager") selected @endif> pending</option>
                                            <option value="Technical Head"   @if ($new_edit->status == "Technical Head") selected @endif> pending</option>
                                        </select>

                                    </div>

                                    <div class="col-md-3">
                                        <label for="inputFirstName" class="form-label">Category*</label>
                                        <select class="multiple-select first_input" data-placeholder="Choose anything"
                                            name="category[]" id="category">
                                            <option value="">Select</option>
                                            @foreach ($category as $category)
                                                <option value="{{ $category->id }}"  {{in_array($category->id,$edit_new->category_id) ? "selected" : ""}}>{{ $category->category }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <label for="inputFirstName" class="form-label">Tags*</label>
                                        <select class="multiple-select first_input" data-placeholder="Choose anything"
                                            name="tag[]" id="tag">
                                            <option value="">Select</option>

                                            @foreach ($tag as $tag)
                                                <option value="{{ $tag->id }}" {{in_array($tag->id,$edit_new->tag_id) ? "selected" : ""}}>{{ $tag->tag }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-3 img_div">
                                        <label for="inputFirstName" class="form-label">Image*</label>
                                        <input class="form-control first_input" type="file" name="image[]"
                                            accept="image/*" id="image">

                                    </div>

                                    <div class="col-md-2 form-group">
                                        <label></label>

                                        <div class="form-group" align="center" style="width: full;margin-top: 1vh;">

                                            <button type="button" name="action_button" class="btn btn-warning"
                                                id="add_row">Add</button>
                                        </div>
                                    </div>

                                    <div class="col-md-10 " style="">
                                        <table class="items_table table table-bordered width80" id="items_table">

                                            <thead>
                                                <tr class="filters">
                                                    <th></th>
                                                    <th>Category</th>
                                                    <th>Tag</th>
                                                    <th>Image </th>
                                                </tr>
                                            </thead>
             {{-- @json($new)                               <tbody id="add_more"> --}}
@foreach ($edit_new->category_id as $demo)
<tr>
    <td>
        <input type="checkbox" class="del_check1" name="record">
    </td>
    <td><input type="hidden" name="category[]"  value="{{$demo}}">
        <input type="text" class="form-control"  value="{{$demo}}" >
    </td>

    <td>
        <input type="hidden" value="{{$edit_new->tag_id[$loop->index]}}" name="tag[]" ><input type="text" class="form-control" step="0.1" value="{{$edit_new->tag_id[$loop->index]}}" >
    </td>

    <td>
        <input name="image_files[]" type="hidden" value=""><a target="_blank" href=""><img style="height:100px;width:auto;" src="{{asset( 'image/FE-valuation' .$edit_new->image[$loop->index])}}"></a>
    </td>
</tr>
@endforeach
                                                
                                            </tbody>
                                        </table>
                                        <button type="button" class="delete-row btn btn-danger"
                                            style="margin-left: 80%; margin-top: 5px;">Delete Row</button>

                                    </div>

                                    <div class="col-md-3" style="padding:8px"><br>
                                        <button type="submit" class="btn btn-primary px-3"><i
                                                class="fadeIn animated bx bx-plus"></i>Update </button>
                                    </div>
                            </form>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>



    <!--end page wrapper -->
    <!--start overlay-->
    <div class="overlay toggle-icon"></div>
    <!--end overlay-->
    <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->


    <!-- <h6 class="mb-0 text-uppercase">DataTable</h6> -->
    <hr />

    {{-- <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th> Name</th>
                            <th>Property Type</th>
                            <th>Area</th>
                            <th>Category</th>
                            <th>Tag</th>
                            <th>Image</th>
                            {{-- <th> Address</th> --}}
                            {{-- <th>Location</th>
                            <th>Tags</th>
                            <th>Road Name</th>
                            <th>Colony</th>
                            <th>Pin Code</th>
                            <th>Meter No</th>
                            <th></th>
                            <th></th>
                            <th></th> --}}
                            {{-- <th></th> --}}
                            {{-- <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($new as $new)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                {{-- <td> {{ $new->name }}</td> --}}
{{-- 
                                <td data-bs-toggle="tooltip" data-bs-placement="right" title="Name:- {{ $new->name }}
                                        Contact No:- {{ $new->contact_no }}
                                        colony:- {{ $new->colony }}
                                        Pin Code:- {{ $new->pin_code }}
                                        Meter No:- {{ $new->meter_no }}
                                        Address:- {{ $new->address }}
                                        Landmark:- {{ $new->landmark }}
                                        Location:- {{ $new->locations }}
                                        ">{{ $new->name }}</td>
                                <td data-bs-toggle="tooltip" data-bs-placement="right" title="Property Address:- {{ $new->property_address }}
                                Name of FE Visited the Property:- {{ $new->name_of_FE_visited_the_property }}
                                Occupancy Status:- {{ $new->occupancy_status }}
                                Occupied By:- {{ $new->occupied_by }}
                                Road Width In Feet:- {{ $new->road_width_in_feet }}
                                Type Of Structure:- {{ $new->type_of_structure }}
                                lat:- {{ $new->lat }}
                                long:- {{ $new->long }}
                                Construction Stage:- {{ $new->construction_stage }}
                                Person Met At Site:- {{ $new->person_met_at_site }}
                                Relation With Owner:- {{ $new->relation_with_owner }}
                                Remark on Property:- {{ $new->remark_on_property }}
                                Rate Range:- {{ $new->rate_range }}
                                Plot Range:- {{ $new->plot_range }}
                                Road Type:- {{ $new->road_type }}
                                Deviation:- {{ $new->deviation }}
                                Rate Referenace:- {{ $new->rate_referenace }}
                                Date of Visit:- {{ $new->date_of_visit }}
                                Remark On Boundaries Matching:- {{ $new->remark_on_boundaries_matching }}


                                 ">{{ $new->property }}</td>


                                <td data-bs-toggle="tooltip" data-bs-placement="right" title="
                                    Plot Area

                                    East:-   {{ $new->plot_area[0] }}
                                    West:-  {{ $new->plot_area[1] }}
                                    North:-   {{ $new->plot_area[2] }}
                                    South:-   {{ $new->plot_area[3] }}
                                    
                                Up Area
                                    GF:-   {{ $new->up_area[0] }}
                                    FF:-   {{ $new->up_area[1] }}
                                    SF:-   {{ $new->up_area[2] }}
                                    TF:-   {{ $new->up_area[3] }}

                                Four Borders
                                    East:-   {{ $new->four_borders[0] }}
                                    West:-   {{ $new->four_borders[1] }}
                                    North:-   {{ $new->four_borders[2] }}
                                    South:-   {{ $new->four_borders[3] }}

                                Whether Boundaries Matching
                                    Yes/No:-   {{ $new->whether_boundaries_matching[0] }}
                                    Yes/No:-   {{ $new->whether_boundaries_matching[1] }}
                                    Yes/No:-   {{ $new->whether_boundaries_matching[2] }}
                                    Yes/No:-   {{ $new->whether_boundaries_matching[3] }}


                                    Side Marginal Distance In Feet
                                    Front:-   {{ $new->side_marginal_distance_in_feet[0] }}
                                    Back:-   {{ $new->side_marginal_distance_in_feet[1] }}
                                    Left:-   {{ $new->side_marginal_distance_in_feet[2] }}
                                    Right:-   {{ $new->side_marginal_distance_in_feet[3] }}


                                    Description Of Property
                                    GF:-   {{ $new->discription_of_property[0] }}
                                    FF:-   {{ $new->discription_of_property[1] }}
                                    SF:-   {{ $new->discription_of_property[2] }}
                                    TF:-   {{ $new->discription_of_property[3] }}


                                    ">{{ $new->plot_area[0] }}</td>


                                {{-- <td>{{ $new->plot_area }}</td> --}}
                                {{-- <td> --}}
                                    {{-- @json($new->tag_id) --}}
                                    {{-- @php
                                        $category = App\Models\Category::whereIn('id', $new->category_id)
                                            ->pluck('category')
                                            ->toArray();
                                        $category2 = implode(',', $category); --}} --}}
                                        {{-- echo json_encode($cuisine);
                                         exit();
                                    @endphp
                                    {{ $category2 }}
                                </td>


                                <td> --}}
                                    {{-- @json($new->tag_id) --}}
                                    {{-- @php
                                        $tag = App\Models\Tags::whereIn('id', $new->tag_id)
                                            ->pluck('tag')
                                            ->toArray();
                                        $tag2 = implode(',', $tag); --}}
                                         echo json_encode($tag);
                                        {{-- exit();
                                    @endphp
                                    {{ $tag2 }}
                                </td>

                                <td>
                                    <a href="{{ asset('images/FE-valuation/' . $new->image[0]) }}">
                                        <img src="{{ asset('images/FE-valuation/' . $new->image[0]) }}"
                                            style="height:50px;width:auto;" alt="">
                                    </a>
                                </td>

                               
                                <td><a href="{{ route('FE.edit', $new->id) }}"><button type="button" class="btn1 btn-outline-success"><i
                                            class='bx bx-edit-alt me-0' ></i>
                                        </button>
                                        </a>
                                    <a onclick="return confirm('Are You Sure To Delete This?')"
                                        href="{{ route('FE.delete', $new->id) }}"><button type="button"
                                            class="btn1 btn-outline-danger"><i class='bx bx-trash me-0'></i></button></a>
                                </td> --}}
                            {{-- </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div> --}}
    {{-- </div> --}} 
    </div>
@stop
@section('js')

    <script>
        $(document).ready(function() {
            setTimeout(() => {
                console.clear();
            }, 1500);

            var src;
            var blob;
            $("#image").on('change', function(e) {
                src = URL.createObjectURL(e.target.files[0]);
                let file = e.target.files[0];
                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function(e) {
                    blob = e.target.result;
                };
            })

            $("#add_row").click(function() {

                var category = $('#category option:selected').text();
                var tag = $('#tag option:selected').text();
                var image_src = src;
                if (category && tag && image_src) {
                    var markup =
                        '<tr><td><input type="checkbox" class="del_check1" name="record"></td><td><input type="hidden" value="' +
                        $('#category').val() +
                        '" name="category[]"><input type="text" class="form-control"  value="' +
                        category +
                        '" ></td><td><input type="hidden" value="' + $('#tag').val() +
                        '" name="tag[]" ><input type="text" class="form-control" step="0.1" value="' +
                        tag + '" ></td><td><input name="image_files[]" type="hidden" value="' + blob +
                        '"><a target="_blank" href="' + image_src +
                        '"><img style="height:100px;width:auto;" src="' + image_src + '"></a></td></tr>';

                    $("#add_more").append(markup);
                    $('.first_input').val('');
                    src = null;
                    blob = null;
                    $("#category").val('').change();
                    $("#tag").val('').change();
                }

            });
            $(".delete-row").click(function() {
                $('.del_check1').each(function() {
                    // alert();
                    if ($(this).is(":checked")) {
                        var perticular = $(this).parents("tr").find('input[name="perticular[]"]')
                            .val();
                        var price = $(this).parents("tr").find('input[name="price[]"]').val();
                        var minus_amount = parseFloat(price);
                        var old_amount = $("#total_amount").val();
                        $("#total_amount").val(parseFloat(old_amount) - parseFloat(minus_amount));
                        $(this).parents("tr").remove();

                    }
                });
            });
        });   


    </script>


@stop
