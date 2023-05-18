@extends('layout')
@section('content')

    <div class="page-wrapper">
        <div class="page-content">
            <div class="row">

                <div class="col-md-12 mx-auto" style="margin-top: 2%;">
                    {{-- @include('alert') --}}
                    <div class="card">
                        <div class="card-body">

                            <div class="card-title d-flex align-items-center">
                                <h5 class="mb-0 text-primary"> Settings</h5>
                            </div>
                            <hr>
                            <form class="row g-2" action="{{ route('setting_insert') }} " method="post">@csrf

                                <div class="col-md-4">
                                    <label for="inputFirstName" class="form-label"> Documentation<span
                                            style="color:red"><span style="color:red">*</span></span></label>
                                    <input type="text" class="form-control" id="inputFirstName"
                                        placeholder="Documentation " name="documentation" >
                                </div>


                                <div class="col-md-4">
                                    <label for="inputFirstName" class="form-label"> Filed Vist Approval<span
                                            style="color:red">*</span></label>
                                    <input type="text" class="form-control" id="inputFirstName"
                                        placeholder="  Filed Vist Approval" name="field_vist" >
                                </div>

                                <div class="col-md-4">
                                    <label for="inputFirstName" class="form-label">Assistant Valuer Approval<span
                                            style="color:red"><span style="color:red">*</span></span></label>
                                    <input type="text" class="form-control" id="inputFirstName"
                                        placeholder=" Assistant Valuer Approval" name="assistant_valuer" >
                                </div>

                                <div class="col-md-4">
                                    <label for="inputFirstName" class="form-label">Report Prepareation<span
                                            style="color:red"><span style="color:red">*</span></span></label>
                                    <input type="text" class="form-control" id="inputFirstName"
                                        placeholder="Report Prepareation " name="report_prepareation" >
                                </div>

                                <div class="col-md-4">
                                    <label for="inputFirstName" class="form-label">Technical Head Approval<span
                                            style="color:red">*</span></label>
                                    <input type="text" class="form-control" id="inputFirstName"
                                        placeholder="Technical Head Approval" name="technical_head" >
                                </div>

                                <div class="col-md-4">
                                    <label for="inputFirstName" class="form-label"> Bank/NBFC<span
                                            style="color:red">*</span></label>
                                    <input type="text" class="form-control" id="inputFirstName" placeholder="Bank Panel"
                                        name="bank" >
                                </div>



                                <div class="col-md-4" style="padding:8px"><br>
                                    <button type="submit" class="btn btn-primary px-3"><i
                                            class="fadeIn animated bx bx-plus"></i>Add </button>
                                </div>
                            </form>

                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>
@stop
