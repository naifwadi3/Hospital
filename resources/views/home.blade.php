@extends('layout.dashboard')
@section('css')


@section('co')


@if ($errors->any())
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif


<div style="padding: -3cm">



<div class="table-responsive">


                        @php
                            $i=0;
                        @endphp


<div class="d-flex flex-column" style="width: 100%;padding-left:-100px;" >
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">قائمة الاطباء</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="/metronic8/demo1/../demo1/index.html" class="text-muted text-hover-primary">الرئيسية</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">ادارة الاطباء</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">المستخدمين</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->

            <!--end::Actions-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid" >
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header ">
                    <!--begin::Card title-->

                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                            <!--end::Export-->
                            <!--begin::Add user-->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor"></rect>
                                    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"></rect>
                                </svg>
                            </span>
                            اضافة طبيب جديد
                        </button>
                            <!--end::Add user-->
                        </div>


                        <!--end::Modal - Add task-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body">
                    <!--begin::Table-->
                    <div id="kt_table_users_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="datatable">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1" aria-label="
                                " style="width: 29.8906px;">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1">
                                    </div>
                                </th>
                                <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="User: activate to sort column ascending" style="width: 277.094px;">اسم الطبيب</th>
                                <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 162.203px;">رقم الهوية</th>
                                <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="Last login: activate to sort column ascending" style="width: 162.203px;">تخصص الدكتور</th>
                                <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="Two-step: activate to sort column ascending" style="width: 162.203px;">رقم الهاتف</th>
                                <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="Joined Date: activate to sort column ascending" style="width: 212.547px;">الايميل</th>
                                <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="Joined Date: activate to sort column ascending" style="width: 212.547px;">العمليات</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="text-gray-600 fw-semibold">
                            <!--begin::Table row-->



                            <!--end::Table row-->
                        <tr class="odd">
                            @foreach ($doctors as $doctor)
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1">
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::User=-->
                                <td class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="/metronic8/demo1/../demo1/apps/user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="/metronic8/demo1/assets/media/avatars/300-6.jpg" alt="Emma Smith" class="w-100">
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::User details-->
                                    <div class="d-flex flex-column">
                                        <a href="/metronic8/demo1/../demo1/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">{{ $doctor->name }}</a>
                                        <span>{{ $doctor->email }}</span>
                                    </div>
                                    <!--begin::User details-->
                                </td>
                                <!--end::User=-->
                                <!--begin::Role=-->
                                <td>{{ $doctor->doctor_id }}</td>
                                <!--end::Role=-->
                                <!--begin::Last login=-->
                                <td>
                                    <div class="badge badge-light fw-bold">{{ $doctor->specialty->Specialties_name }}</div>
                                </td>
                                <!--end::Last login=-->
                                <!--begin::Two step=-->
                                <td>{{ $doctor->doctor_phone }}</td>
                                <!--end::Two step=-->
                                <!--begin::Joined-->
                                <td data-order="2022-04-15T10:30:00+03:00">{{ $doctor->Contract_expiry_date }}</td>
                                <!--begin::Joined-->
                                <!--begin::Action=-->
                                <td>
                                    <button type="button" class="btn btn-info btn-xl" data-toggle="modal"
                                    data-target="#edit"
                                    title="edit"><i class="fa fa-edit"></i></button>

                                    <button type="button" class="btn btn-danger btn-xl" data-toggle="modal"
                                    data-target="#delete"
                                    title="delete"><i
                                    class="fa fa-trash"></i></button>
                                    <button type="button" class="btn btn-danger btn-xl" data-toggle="modal"
                                    data-target="#show"
                                    title="show"><i class="fa-solid fa-eye"></i></button>
                                    </td>
                                <!--end::Action=-->
                            </tr>

                        </tbody>
                        <!--end::Table body-->
                    </table>
                </div>
               </div>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>





				<!-- edit_modal_Grade -->

                 <div class="modal fade" id="edit{{ $doctor->id }}" tabindex="-1" aria-hidden="true">
                            <!--begin::Modal dialog-->
                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                <!--begin::Modal content-->
                                <div class="modal-content rounded">
                                    <form action="{{ route('doctor.update',$doctor->id) }}" method="post" autocomplete="off"  enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                    <!--begin::Modal header-->
                                    <div class="modal-header pb-0 border-0 justify-content-end">
                                        <!--begin::Close-->
                                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-dismiss="modal">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Close-->
                                    </div>
                                    <!--begin::Modal header-->
                                    <!--begin::Modal body-->
                                    <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                                        <!--begin:Form-->
                                        <form id="kt_modal_new_target_form" class="form" action="#">
                                          <!--begin::Heading-->
                                          <div class="mb-13 text-center">
                                            <!--begin::Title-->
                                            <h1 class="mb-3">تعديل بينات الطبيب </h1>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="text-muted fw-semibold fs-5">اذا لم يكن التخصص موجود فيمكنك اضافته من
                                            <a href="#" class="fw-bold link-primary">هنا</a>.</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Heading-->
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-column mb-8 fv-row">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                    <span class="required">اسم الطبيب</span>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                                                </label>
                                                <!--end::Label-->
                                                <input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="name" value="{{ $doctor->name }}"/>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="row g-9 mb-8">

                                                <!--begin::Col-->
                                                <div class="col-md-6 fv-row">

                                                    <label class="required fs-6 fw-semibold mb-2">رقم هوية الطبيب</label>
                                                    <!--begin::Input-->
                                                    <div class="position-relative d-flex align-items-center">
                                                        <!--begin::Icon-->
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->

                                                        </span>
                                                        <!--end::Svg Icon-->
                                                        <!--end::Icon-->
                                                        <!--begin::Datepicker-->

                                                        <input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="doctor_id" value="{{ $doctor->doctor_id }}" />
                                                        <!--end::Datepicker-->
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-md-6 fv-row">
                                                    <label class="required fs-6 fw-semibold mb-2">تخصص الطبيب</label>
                                                    <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" name="doctor_specialty" value="{{ $doctor->doctor_specialty }}">
                                                        @foreach ($doctor_specialty as $specialty)
                                                        <option value="{{ $specialty->id }}">{{ $specialty->Specialties_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->

                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="row">
                                            <div class="col flex-stack mb-8">
                                                <!--begin::Label-->
                                                <div class="me-5">
                                                    <label class="required fs-6 fw-semibold">رقم هاتف الطبيب</label><br>
                                                </div>
                                                <!--end::Label-->
                                                <!--begin::Switch-->
                                                <input type="text" class="form-control form-control-solid" name="doctor_phone" value="{{ $doctor->doctor_phone }}">
                                                <!--end::Switch-->
                                            </div>
                                            <div class="col flex-stack mb-8">
                                                <!--begin::Label-->
                                                <div class="me-5">
                                                    <label class="required fs-6 fw-semibold">ايميل الطبيب</label><br>
                                                </div>
                                                <!--end::Label-->
                                                <!--begin::Switch-->
                                                <input type="text" class="form-control form-control-solid" name="email" value="{{ $doctor->email }}">
                                                <!--end::Switch-->
                                            </div>
                                        </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="row">
                                                <div class="col flex-stack mb-8">
                                                    <!--begin::Label-->
                                                    <div class="me-5">
                                                        <label class="required fs-6 fw-semibold">جنس الطبيب</label><br>
                                                    </div>
                                                    <!--end::Label-->
                                                    <!--begin::Switch-->
                                                    <select class="form-select form-select-solid" name="doctor_gender" value="{{ $doctor->doctor_gender }}">
                                                        <option value="ذكر">ذكر</option>
                                                        <option value="انثى">انثى</option>
                                                    </select>
                                                    <!--end::Switch-->
                                                </div>
                                                <div class="col flex-stack mb-8">
                                                    <!--begin::Label-->
                                                    <div class="me-5">
                                                        <label class="required form-control">تاريخ ميلاد الطبيب</label><br>
                                                    </div>
                                                    <!--end::Label-->
                                                    <!--begin::Switch-->
                                                    <input type="date" class="form-control form-control-solid" name="doctor_birthday" value="{{ $doctor->doctor_birthday }}">
                                                    <!--end::Switch-->
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col flex-stack mb-8">
                                                    <!--begin::Label-->
                                                    <div class="me-5">

                                                        <label class="required fs-6 fw-semibold">تاريخ بدء العقد</label><br>
                                                    </div>
                                                    <!--end::Label-->
                                                    <!--begin::Switch-->
                                                    <input type="date" class="form-control form-control-solid" name="Date_of_contract" value="{{ $doctor->Date_of_contract }}">

                                                    <!--end::Switch-->
                                                </div>
                                                <div class="col flex-stack mb-8">
                                                    <!--begin::Label-->
                                                    <div class="me-5">
                                                        <label class="required fs-6 fw-semibold">تاريخ انتهاء العقد</label><br>
                                                    </div>
                                                    <!--end::Label-->
                                                    <!--begin::Switch-->
                                                    <input type="date" class="form-control form-control-solid" name="Contract_expiry_date" value="{{ $doctor->Contract_expiry_date }}">
                                                    <!--end::Switch-->
                                                </div>
                                            </div>
                                            <!--end::Input group-->
                                            <div class="d-flex flex-column mb-8">
                                                <label class="fs-6 fw-semibold mb-2">اضافة ملاحظات</label>
                                                <textarea class="form-control form-control-solid" rows="3" name="note" >{{ $doctor->note }}</textarea>
                                            </div>
                                            <!--begin::Image input-->
                                    <div class="image-input image-input-empty" data-kt-image-input="true" style="background-image: url(/assets/media/svg/avatars/blank.svg)">
                                        <!--begin::Image preview wrapper-->
                                        <div class="image-input-wrapper w-125px h-125px"></div>
                                        <!--end::Image preview wrapper-->

                                        <!--begin::Edit button-->
                                        <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="change"
                                        data-bs-toggle="tooltip"
                                        data-bs-dismiss="click"
                                        title="Change avatar">
                                            <i class="bi bi-pencil-fill fs-7"></i>

                                            <!--begin::Inputs-->
                                            <input type="file"  accept="image/*" name="photos[]" multiple>
                                            <input type="hidden" name="" >
                                            <!--end::Inputs-->
                                        </label>
                                        <!--end::Edit button-->

                                        <!--begin::Cancel button-->
                                        <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="cancel"
                                        data-bs-toggle="tooltip"
                                        data-bs-dismiss="click"
                                        title="Cancel avatar">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        <!--end::Cancel button-->

                                        <!--begin::Remove button-->
                                        <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="remove"
                                        data-bs-toggle="tooltip"
                                        data-bs-dismiss="click"
                                        title="Remove avatar">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        <!--end::Remove button-->
                                    </div>
                                    <!--end::Image input-->
                                            <!--begin::Actions-->
                                            <div class="text-center">
                                                <button type="reset" data-dismiss="modal" class="btn btn-light me-3">Cancel</button>
                                                <button type="submit" id="" class="btn btn-primary">
                                                    <span class="submit">Submit</span>
                                                    <span class="indicator-progress">Please wait...
                                                </button>
                                            </div>

                                            <!--end::Actions-->
                                        </form>
                                        <!--end:Form-->
                                    </div>
                                    <!--end::Modal body-->

                    </form>
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
				<!-- end_edit_modal_Grade -->


				<!-- delete_modal_Grade -->
				<div class="modal fade" id="delete{{ $doctor->id }}" tabindex="-1" role="dialog"
					 aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
									id="exampleModalLabel">
									{{ trans('My_Classes_trans.delete_class') }}
								</h5>
								<button type="button" class="close" data-dismiss="modal"
										aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="{{ route('doctor.destroy',$doctor->id) }}"  method="post">
									{{ method_field('DELETE') }}
									@csrf
									هل تريد حذف الطبيب :
									<input id="id" type="hidden" name="id" class="form-control"
										   value="">
                                           <input id="id" type="twxt" name="id" class="form-control"
										   value="{{ $doctor->name }}">
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary"
												data-dismiss="modal">لا</button>
										<button type="submit"
												class="btn btn-danger">نعم , متأكد</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
                @endforeach

	</table>
</div>



				<!-- end_delete_modal_Grade -->
















<form action="{{ route('doctor.store') }}" method="post" autocomplete="off" enctype="multipart/form-data">
    @csrf
    @method('POST')
 <div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content rounded">
					<!--begin::Modal header-->
					<div class="modal-header pb-0 border-0 justify-content-end">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Close-->
					</div>
					<!--begin::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
						<!--begin:Form-->
						<form id="kt_modal_new_target_form" class="form" action="#">
						  <!--begin::Heading-->
                          <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3">إضافة طبيب جديد</h1>
                            <!--end::Title-->
                            <!--begin::Description-->
                            <div class="text-muted fw-semibold fs-5">اذا لم يكن التخصص موجود فيمكنك اضافته من
                            <a href="#" class="fw-bold link-primary">هنا</a>.</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Heading-->
							<!--begin::Input group-->
							<div class="d-flex flex-column mb-8 fv-row">
								<!--begin::Label-->
								<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
									<span class="required">اسم الطبيب</span>
									<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
								</label>
								<!--end::Label-->
								<input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="name" />
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="row g-9 mb-8">

								<!--begin::Col-->
								<div class="col-md-6 fv-row">

									<label class="required fs-6 fw-semibold mb-2">رقم هوية الطبيب</label>
									<!--begin::Input-->
									<div class="position-relative d-flex align-items-center">
										<!--begin::Icon-->
										<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->

										</span>
										<!--end::Svg Icon-->
										<!--end::Icon-->
										<!--begin::Datepicker-->

                                        <input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="doctor_id" />
										<!--end::Datepicker-->
									</div>
									<!--end::Input-->
								</div>
								<!--end::Col-->
                                <!--begin::Col-->
								<div class="col-md-6 fv-row">
									<label class="required fs-6 fw-semibold mb-2">تخصص الطبيب</label>
									<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" name="doctor_specialty">
                                        @foreach ($doctor_specialty as $specialty)
										<option value="{{ $specialty->id }}">{{ $specialty->Specialties_name }}</option>
                                        @endforeach
									</select>
								</div>
								<!--end::Col-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->

							<!--end::Input group-->

							<!--begin::Input group-->
                            <div class="row">
							<div class="col flex-stack mb-8">
								<!--begin::Label-->
								<div class="me-5">
									<label class="required fs-6 fw-semibold">رقم هاتف الطبيب</label><br>
								</div>
								<!--end::Label-->
								<!--begin::Switch-->
								<input type="text" class="form-control form-control-solid" name="doctor_phone">
								<!--end::Switch-->
							</div>
                            <div class="col flex-stack mb-8">
								<!--begin::Label-->
								<div class="me-5">
									<label class="required fs-6 fw-semibold">ايميل الطبيب</label><br>
								</div>
								<!--end::Label-->
								<!--begin::Switch-->
								<input type="text" class="form-control form-control-solid" name="email">
								<!--end::Switch-->
							</div>
                        </div>
							<!--end::Input group-->
							<!--begin::Input group-->
                            <div class="row">
                                <div class="col flex-stack mb-8">
                                    <!--begin::Label-->
                                    <div class="me-5">
                                        <label class="required fs-6 fw-semibold">جنس الطبيب</label><br>
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <select class="form-select form-select-solid" name="doctor_gender">
                                        <option value="ذكر">ذكر</option>
                                        <option value="انثى">انثى</option>
                                    </select>
                                    <!--end::Switch-->
                                </div>
                                <div class="col flex-stack mb-8">
                                    <!--begin::Label-->
                                    <div class="me-5">
                                        <label class="required form-control">تاريخ ميلاد الطبيب</label><br>
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <input type="date" class="form-control form-control-solid" name="doctor_birthday">
                                    <!--end::Switch-->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col flex-stack mb-8">
                                    <!--begin::Label-->
                                    <div class="me-5">

                                        <label class="required fs-6 fw-semibold">تاريخ بدء العقد</label><br>
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <input type="date" class="form-control form-control-solid" name="Date_of_contract">

                                    <!--end::Switch-->
                                </div>
                                <div class="col flex-stack mb-8">
                                    <!--begin::Label-->
                                    <div class="me-5">
                                        <label class="required fs-6 fw-semibold">تاريخ انتهاء العقد</label><br>
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <input type="date" class="form-control form-control-solid" name="Contract_expiry_date">
                                    <!--end::Switch-->
                                </div>
                            </div>
							<!--end::Input group-->
                            <div class="d-flex flex-column mb-8">
								<label class="fs-6 fw-semibold mb-2">اضافة ملاحظات</label>
								<textarea class="form-control form-control-solid" rows="3" name="note" placeholder="Type Target Details"></textarea>
							</div>
                            <!--begin::Image input-->
                    <div class="image-input image-input-empty" data-kt-image-input="true" style="background-image: url(/assets/media/svg/avatars/blank.svg)">
                        <!--begin::Image preview wrapper-->
                        <div class="image-input-wrapper w-125px h-125px"></div>
                        <!--end::Image preview wrapper-->

                        <!--begin::Edit button-->
                        <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                        data-kt-image-input-action="change"
                        data-bs-toggle="tooltip"
                        data-bs-dismiss="click"
                        title="Change avatar">
                            <i class="bi bi-pencil-fill fs-7"></i>

                            <!--begin::Inputs-->
                            <input type="file"  accept="image/*" name="photos" multiple>
                            <input type="hidden" name="" >
                            <!--end::Inputs-->
                        </label>
                        <!--end::Edit button-->

                        <!--begin::Cancel button-->
                        <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                        data-kt-image-input-action="cancel"
                        data-bs-toggle="tooltip"
                        data-bs-dismiss="click"
                        title="Cancel avatar">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                        <!--end::Cancel button-->

                        <!--begin::Remove button-->
                        <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                        data-kt-image-input-action="remove"
                        data-bs-toggle="tooltip"
                        data-bs-dismiss="click"
                        title="Remove avatar">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                        <!--end::Remove button-->
                    </div>
                    <!--end::Image input-->
							<!--begin::Actions-->
							<div class="text-center">
								<button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">Cancel</button>
								<button type="submit" id="" class="btn btn-primary">
									<span class="submit">Submit</span>
									<span class="indicator-progress">Please wait...
								</button>
							</div>

							<!--end::Actions-->
						</form>
						<!--end:Form-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
    </form>





@endsection
@section('js')

@endsection
<script type="text/javascript">
    $(function() {
        $("#btn_delete_all").click(function() {
            var selected = new Array();
            $("#datatable input[type=checkbox]:checked").each(function() {
                selected.push(this.value);
            });

            if (selected.length > 0) {
                $('#delete_all').modal('show')
                $('input[id="delete_all_id"]').val(selected);
            }
        });
    });

</script>
<script>
    $("form").on("change", ".file-upload-field", function () {
  $(this)
    .parent(".file-upload-wrapper")
    .attr(
      "data-text",
      $(this)
        .val()
        .replace(/.*(\/|\\)/, "")
    );
});

</script>
{{-- <script>
    var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
    url: "", // Set the url for your upload script location
    paramName: "file", // The name that will be used to transfer the file
    maxFiles: 10,
    maxFilesize: 10, // MB
    addRemoveLinks: true,
    accept: function(file, done) {
        if (file.name == "wow.jpg") {
            done("Naha, you don't.");
        } else {
            done();
        }
    }
});
</script> --}}
