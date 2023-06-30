<form id="AppointmentForm">
    @csrf
    <div class="row">
        <input type="hidden" name="from" value="book_an_appointment_doctor">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <input type="text" name="doctor_name" id="doctor_name" class="form-control"
                placeholder="{{ $doctor_name }}" readonly value="{{ $doctor_name }}" />
        </div>

        <div class="col-sm-12 col-md-12 col-lg-12">
            <input type="text" name="name" id="aname" class="form-control"
                placeholder="Name *" required/>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12">
            <input type="email" name="email" id="aemail" class="form-control"
                placeholder="Email *" required/>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12">
            <input type="tel" id="aphone" name="mobile_no" value=""
                class="form-control price"
                maxlength="10" placeholder="Phone *" required>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="datepicker date">
                <input type="text" placeholder="Select Date" name="appointment_date"
                    class="form-control" id="fecha1 " placeholder="Date *" required>
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <input type="text" class="form-control" name="appointment_time"
                id="timepicker" placeholder="Select Time *" required>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12">
            <textarea class="form-control" name="details" placeholder="Message" required></textarea>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="form-data cnt text-center clearfix">
                <input type="submit" name="submit" id="submit_btn" value="Submit"> </div>
        </div>
    </div>
</form>