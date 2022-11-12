@extends('layout.dashboard')
@section('css')

@section('tit')
الفواتير
@endsection

@section('co')


@if ($errors->any())
<div class="alert alert-danger alert-dismissible fade show" role="alert">
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




<div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            @foreach ($invoice as $invoice)

                            <tr>
                                <th>{{ __('Frontend/frontend.customer_name') }}</th>
                                <td>{{ $invoice->customer_name }}</td>
                                <th>{{ __('Frontend/frontend.customer_email') }}</th>
                                <td>{{ $invoice->customer_email }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('Frontend/frontend.customer_mobile') }}</th>
                                <td>{{ $invoice->customer_mobile }}</td>
                                <th>{{ __('Frontend/frontend.company_name') }}</th>
                                <td>{{ $invoice->company_name }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('Frontend/frontend.invoice_number') }}</th>
                                <td>{{ $invoice->invoice_number }}</td>
                                <th>{{ __('Frontend/frontend.invoice_date') }}</th>
                                <td>{{ $invoice->invoice_date }}</td>
                            </tr>
                            @endforeach

                        </table>

                        <h3>{{ __('Frontend/frontend.invoice_details') }}</h3>

                        <table class="table">
                            <thead>
                            <tr>
                                <th></th>
                                <th>{{ __('Frontend/frontend.product_name') }}</th>
                                <th>{{ __('Frontend/frontend.unit') }}</th>
                                <th>{{ __('Frontend/frontend.quantity') }}</th>
                                <th>{{ __('Frontend/frontend.unit_price') }}</th>
                                <th>{{ __('Frontend/frontend.product_subtotal') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($invoice->details as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->product_name }}</td>
                                <td>{{ $item->unitText() }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>{{ $item->unit_price }}</td>
                                <td>{{ $item->row_sub_total }}</td>
                            </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="3"></td>
                                <th colspan="2">{{ __('Frontend/frontend.sub_total') }}</th>
                                <td>{{ $invoice->sub_total }}</td>
                            </tr>
                            <tr>
                                <td colspan="3"></td>
                                <th colspan="2">{{ __('Frontend/frontend.discount') }}</th>
                                <td>{{ $invoice->discountResult() }}</td>
                            </tr>
                            <tr>
                                <td colspan="3"></td>
                                <th colspan="2">{{ __('Frontend/frontend.vat') }}</th>
                                <td>{{ $invoice->vat_value }}</td>
                            </tr>
                            <tr>
                                <td colspan="3"></td>
                                <th colspan="2">{{ __('Frontend/frontend.shipping') }}</th>
                                <td>{{ $invoice->shippint }}</td>
                            </tr>
                            <tr>
                                <td colspan="3"></td>
                                <th colspan="2">{{ __('Frontend/frontend.total_due') }}</th>
                                <td>{{ $invoice->total_due }}</td>
                            </tr>

                            </tfoot>
                        </table>
                    </div>

                    <div class="row">
                        <div class="col-12 text-center">
                            <a href="" class="btn btn-primary btn-sm ml-auto"><i class="fa fa-print"></i> {{ __('Frontend/frontend.print') }}</a>
                            <a href="" class="btn btn-secondary btn-sm ml-auto"><i class="fa fa-file-pdf"></i> {{ __('Frontend/frontend.export_pdf') }}</a>
                            <a href="" class="btn btn-success btn-sm ml-auto"><i class="fa fa-envelope"></i> {{ __('Frontend/frontend.send_to_email') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

















@endsection
@section('js')
<script src="{{ asset('frontend/js/form_validation/jquery.form.js') }}"></script>
<script src="{{ asset('frontend/js/form_validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('frontend/js/form_validation/additional-methods.min.js') }}"></script>
<script src="{{ asset('frontend/js/pickadate/picker.js') }}"></script>
<script src="{{ asset('frontend/js/pickadate/picker.date.js') }}"></script>
@if(config('app.locale') == 'ar')
    <script src="{{ asset('frontend/js/form_validation/messages_ar.js') }}"></script>
    <script src="{{ asset('frontend/js/pickadate/ar.js') }}"></script>
@endif
<script src="{{ asset('frontend/js/custom.js') }}"></script>
@endsection
