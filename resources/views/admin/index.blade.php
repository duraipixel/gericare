@extends('layouts.admin')

@section('admin_title') Home @endsection

@section('admin_content')
    <div class="p-1 mb-3">
        <div class="mb-1 lead"><strong>Welcome  <b class="text-gradient">{{ Sentinel::getUser()->name }}</b></strong></div>
        <span><b class="text-dark">Role :</b> <span class="badge bg-gradient">{{ Sentinel::getUser()->roles[0]->name }}</span></span>
    </div>
   
    @if(Sentinel::getUser()->roles[0]['id'] == "1") 
    <div class="row m-0">
        
        <div class="col-3 p-1">
            <a href="#">
            <div class="card h-100 shadow">
                <div class="card-body">
                    <div class="h4 text-gradient"> <span id="total_test"></span> </div>
                    <div class="x-between y-center">
                        <b class="text-secondary">Total Tests</b>
                        <i class="text-primary fa fa-flask fa-2x"></i>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-3 p-1">
            <a href="#">
            <div class="card h-100 shadow">
                <div class="card-body">
                    <div class="h4 text-gradient"><span id="total_package"></span></div>
                    <div class="x-between y-center">
                        <b class="text-secondary">Total Packages</b>
                        <i class="text-primary bi bi-box fa-2x"></i>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-3 p-1">
            <a href="#">
            <div class="card h-100 shadow">
                <div class="card-body">
                    <div class="h4 text-gradient"><span id="total_order"></span></div>
                    <div class="x-between y-center">
                        <b class="text-secondary">Total Orders</b>
                        <i class="text-primary fa fa-shopping-cart fa-2x"></i>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-3 p-1">
            <a href="#">
            <div class="card h-100 shadow">
                <div class="card-body">
                    <div class="h4 text-gradient"><span id="total_order"></span></div>
                    <div class="x-between y-center">
                        <b class="text-secondary">Total Orders</b>
                        <i class="text-primary fa fa-shopping-cart fa-2x"></i>
                    </div>
                </div>
            </div>
            </a>
        </div>
       
    </div>
    @endif

@endsection

@section('scripts')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.input-daterange').datepicker({
                todayBtn:'linked',
                format:'yyyy-mm-dd',
                autoclose:true
            });
            $.ajax({
                type:'GET',
                url: "{{ route('dashboard.data') }}",
                success: function(data){
                    $('#total_test').html(data.data.test);
                    $('#total_package').html(data.data.package);
                    $('#total_order').html(data.data.order);
                    $('#total_customer').html(data.data.customer);
                    $('#received_payment').html(data.data.received_payment);
                    $('#pending_order').html(data.data.pending_order);
                    $('#failed_payment').html(data.data.failed_payment);
                    $('#cancel_order').html(data.data.cancel_order);
                    
                }
            });         
            function load_data(from_date = '', to_date = '',search_data = '')    {
                var from_date   =   $('#from_date').val();
                var to_date     =   $('#to_date').val();
                $('#data-table').DataTable({
                    order: [ [6, 'desc'] ],
                    lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: "{{ route('dashboard.index') }}",
                        data:{from_date:from_date, to_date:to_date,search_data:search_data}
                    },
                    columns: [
                        {data: 'DT_RowIndex', name: 'id',orderable: false, searchable: false},
                        {data: 'Name', Name: 'name'},
                        {data: 'Email', name: 'Email'},
                        {data: 'Mobile', name: 'Mobile'},
                        {data: 'created_at', name: 'created_at'},
                        {data: 'type', name: 'type'},
                        {data: 'status', name: 'status'},
                        {data: 'remark', name: 'remark'},
                    ],
                });
            } load_data();
            $('#dashboardExport').click(function(){
                var search_data =   $('#search_data').val();
                var from_date = $('#from_date').val();
                var to_date = $('#to_date').val();
                $('#export_enquiry_from_date').val(from_date);
                $('#export_enquiry_to_date').val(to_date);
                if(search_data == '')
                {
                    // toastr.error("Please Select Enquiry");
                    $('#export_enquiry').val("All");
                    // return false;
                }
                else{
                    $('#export_enquiry').val(search_data);
                }
               
              

            });
            $('#filter').click(function(){
                var from_date   =   $('#from_date').val();
                var to_date     =   $('#to_date').val();
                var search_data =   $('#search_data').val();
                $('#export_enquiry').val(search_data);
                if(from_date != '' &&  to_date != '')        {
                    $('#data-table').DataTable().destroy();
                    load_data(from_date, to_date,search_data);
                }else{

                    toastr.error("Both Date is required")
                }
            });
            
            $('#refresh').click(function(){

                var tdate = new Date();
                var dd = tdate.getDate(); //yields day
                var MM = tdate.getMonth(); //yields month
                var yyyy = tdate.getFullYear(); //yields year
                var currentDate= yyyy + "-" +'0'+( MM+1) + "-" + '0'+dd;

                var from_date   =   $('#from_date').val();
                var to_date     =   $('#to_date').val();
                $('#search_data').val('');
                // $('#from_date').val(currentDate);
                // $('#to_date').val(to_date);
                $('#from_date').val('');
                $('#to_date').val('');
                // $('#data-table').DataTable().destroy();
                // load_data();
            });
                   
            $(document).on('change','#status',function(){
                var type    =       $(this).data("type");
                var id      =       $(this).data("id");
                var value   =       $(this).val();
               
                if(type != '' && id != '' && value != '')
                {
                    $.ajax({
                        type: "POST",
                        url:"{{ route('dashboard.status') }}",
                        data: {
                            id:id,
                            type:type,
                            value:value,
                            _token: '{{csrf_token()}}'
                        },
                        success :function(data) {
                            // $('#data-table').DataTable().destroy();
                            toastr.success("Status updated successfully");
                        }
                    })
                }
            });
            $(document).on('blur','#remark',function(){
                var type    =       $(this).data("type");
                var id      =       $(this).data("id");
                var value   =       $(this).val();
                // alert(type)
                // alert(id)
                // alert(value)
                if(type != '' && id != '')
                {
                    $.ajax({
                        type: "POST",
                        url:"{{ route('dashboard.remark') }}",
                        data: {
                            id:id,
                            type:type,
                            value:value,
                            _token: '{{csrf_token()}}'
                        },
                        success :function(data) {
                            $('#data-table').DataTable().destroy();
                        }
                    })
                }
               

            });
        });
    </script>
@endsection
