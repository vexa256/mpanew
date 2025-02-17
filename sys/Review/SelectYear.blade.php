<div class="col-12  mb-md-5 mb-xl-10">


    <!--begin::List widget 26-->
    <div class="card card-flush h-lg-50">
        <!--begin::Header-->
        <div class="card-header pt-5">
            <!--begin::Title-->
            <h3 class="card-title text-gray-800 fw-bold">
                Project Years With Pending Reports For Review
                <span class="fw-bolder text-danger">
                    , (Only Report Years
                    Applicable to {{ $Entity }} are shown)</span>
            </h3>
            <!--end::Title-->

            <!--end::Toolbar-->
        </div>
        <!--end::Header-->

        <!--begin::Body-->
        <div class="card-body pt-5">


            @isset($DataBaseData)
                @foreach ($DataBaseData->unique('ReportingYear') as $data)
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Section-->
                        <a href="{{ route('PendingReportSelectReport', ['Entity' => $Entity, 'ReportYear' => $data->ReportingYear]) }}"
                            class="text-primary fw-semibold fs-3 me-2">{{ $data->ReportingYear }}</a>
                        <!--end::Section-->

                        <!--begin::Action-->
                        <button type="button"
                            class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary justify-content-end">
                            <i class="fas text-danger fa-check fs-2"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </button>
                        <!--end::Action-->
                    </div>
                    <!--end::Item-->

                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-3"></div>
                @endforeach
            @endisset
            <!--end::Separator-->




        </div>
        <!--end::Body-->
    </div>
    <!--end::LIst widget 26-->



</div>
