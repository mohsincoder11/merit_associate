@extends('layout')
@section('content')


<div class="page-wrapper">
    <div class="page-content">

        <div>
            <h5 class="mb-0" style="font-weight:bold;">Valuations</h5>
        </div>
 <hr />

            <form method="post" action="{{ route('technicalmanager_report') }}">
                @csrf
                <input type="hidden" id="addnew_id" name="addnew_id">
    
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">

                        <table id="example" class="table table-striped table-bordered">

                            <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Valuation For</th>
                                    <th>Location</th>
                                    {{-- <th>Client</th> --}}
                                    <th>Assigned</th>
                                    <th>Status</th>
                                    {{-- <th>Last Updated BY</th> --}}

                                    <th>View</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($new_valuer_all as $new_valuer_all)
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td data-bs-toggle="tooltip" data-bs-placement="right" title="Name:- {{ $new_valuer_all->name }}
                                            Contact No:- {{ $new_valuer_all->contact_no ,}}
                                            colony:- {{ $new_valuer_all->colony ,}}
                                            Pin Code:- {{ $new_valuer_all->pin_code, }}
                                            Meter No:- {{ $new_valuer_all->meter_no ,}}
                                            Address:- {{ $new_valuer_all->address ,}}
                                            Landmark:- {{ $new_valuer_all->landmark   }}
                                           
                                            "
                                        >{{ $new_valuer_all->name }}</td>
                                        <td data-bs-toggle="tooltip" data-bs-placement="right" title="Property Address:- {{ $new_valuer_all->property_address }}
                                            Name of FE Visited the Property:- {{ $new_valuer_all->name_of_FE_visited_the_property_id }}
                                            Occupancy Status:- {{ $new_valuer_all->occupancy_status }}
                                            Occupied By:- {{ $new_valuer_all->occupied_by }}
                                            Road Width In Feet:- {{ $new_valuer_all->road_width_in_feet }}
                                            Type Of Structure:- {{ $new_valuer_all->type_of_structure }}
                                            Latitude:- {{ $new_valuer_all->lat }}
                                            Longitude:- {{ $new_valuer_all->long }}
                                            Construction Stage:- {{ $new_valuer_all->construction_stage }}
                                            Person Met At Site:- {{ $new_valuer_all->person_met_at_site }}
                                            Relation With Owner:- {{ $new_valuer_all->relation_with_owner }}
                                            Remark on Property:- {{ $new_valuer_all->remark_on_property }}
                                            Rate Range:- {{ $new_valuer_all->rate_range }}
                                            Plot Range:- {{ $new_valuer_all->plot_range }}
                                            Road Type:- {{ $new_valuer_all->road_type }}
                                            Deviation:- {{ $new_valuer_all->deviation }}
                                            Rate Referenace:- {{ $new_valuer_all->rate_referenace }}
                                            Date of Visit:- {{ $new_valuer_all->date_of_visit }}
                                            Remark On Boundaries Matching:- {{ $new_valuer_all->remark_on_boundaries_matching }}"

                                           
                           
                                        >{{ $new_valuer_all->locations }}</td>
                                        {{-- <td>{{ $ongoing->bankname }}</td> --}}
                                        <td data-bs-toggle="tooltip" data-bs-placement="right" title="

                                        Plot Area

                                        East:-   {{ $new_valuer_all->plot_area[0] }}
                                        West:-  {{ $new_valuer_all->plot_area[1] }}
                                        North:-   {{ $new_valuer_all->plot_area[2] }}
                                        South:-   {{ $new_valuer_all->plot_area[3] }}
                                        
                                    Up Area
                                        GF:-   {{ $new_valuer_all->up_area[0] }}
                                        FF:-   {{ $new_valuer_all->up_area[1] }}
                                        SF:-   {{ $new_valuer_all->up_area[2] }}
                                        TF:-   {{ $new_valuer_all->up_area[3] }}
    
                                    Four Borders
                                        East:-   {{ $new_valuer_all->four_borders[0] }}
                                        West:-   {{ $new_valuer_all->four_borders[1] }}
                                        North:-   {{ $new_valuer_all->four_borders[2] }}
                                        South:-   {{ $new_valuer_all->four_borders[3] }}
    
                                    Whether Boundaries Matching
                                        Yes/No:-   {{ $new_valuer_all->whether_boundaries_matching[0] }}
                                        Yes/No:-   {{ $new_valuer_all->whether_boundaries_matching[1] }}
                                        Yes/No:-   {{ $new_valuer_all->whether_boundaries_matching[2] }}
                                        Yes/No:-   {{ $new_valuer_all->whether_boundaries_matching[3] }}
    
    
                                        Side Marginal Distance In Feet
                                        Front:-   {{ $new_valuer_all->side_marginal_distance_in_feet[0] }}
                                        Back:-   {{ $new_valuer_all->side_marginal_distance_in_feet[1] }}
                                        Left:-   {{ $new_valuer_all->side_marginal_distance_in_feet[2] }}
                                        Right:-   {{ $new_valuer_all->side_marginal_distance_in_feet[3] }}
    
    
                                        Discription Of Property
                                        GF:-   {{ $new_valuer_all->discription_of_property[0] }}
                                        FF:-   {{ $new_valuer_all->discription_of_property[1] }}
                                        SF:-   {{ $new_valuer_all->discription_of_property[2] }}
                                        TF:-   {{ $new_valuer_all->discription_of_property[3] }}
    
    
                                        " >{{ $new_valuer_all->created_at }}</td>
                                        <td>{{ $new_valuer_all->status }}</td>
                                        {{-- <td>{{ $new_valuer_all->last_updated_by }}</td> --}}

                                        <td>
                                             <a href="{{ route('technicalmanager_edit', $new_valuer_all->id) }}"><button type="button" 
                                                    class="btn1 btn-outline-success view"><i
                                                        class="lni lni-remove-file"></i></button>
                                            </a>
                                        </td>
                                </tr>
                                @endforeach


                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>
@stop