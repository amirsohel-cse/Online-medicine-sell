@extends('layout')
@section('content')

    <br>
    <br>
    <br>

<div class="container-fluid padding single-page-height">
    <div class="light-margin-vertical white-bg sm-shadow padding col-xs-12 col-md-offset-3 col-md-6 z-1">
        <div class="center">
            <div class='font-md'>
                <br>

        <span class="fa-stack order-banner-icon">
          <i class="fa fa-circle fa-stack-2x text-success-f"></i>
          <i class="fa fa-envelope fa-inverse fa-stack-1x"></i>

        </span>
                <span>How to Order by Message </span>
            </div>
        </div>
        <hr>
        <div class="light-padding">
            <h4>Format for ordering through SMS, Facebook, or Email:</h4>
            <p class='text-info-p' >
                Your Full Name, Phone Number, <br>
                Full Address with Flat number, <br>
                Item Name, Type, Dose/Size, Quantity <br>
                <b>*Repeat line 2 for all products*</b>
            </p>
            <p>
                Please include Product Type (injection, tablet, etc.) and Dose, Strength or Size in the product description.
            </p>

            <hr>

            <h4>Example message order:</h4>
            <p class='text-info-p'>
                John Smith, 01711111111, <br>
                House 71, Road 9/A, Dhanmondi, <br>
                Napa, Tablet, 500mg, 2 pata <br>
                Orsaline, 5mg, 5 packets <br>
                Pampers, xl 30 pack, 4 packets
            </p>
            <div class="center">
                <i class="fa fa-mobile text-md"></i>
                <b>SMS:</b> 01300899200 , 01300899199
                <br>

                <a class="hidden-xs" href="https://www.facebook.com/Medi-Zone-BD-103311614439996/" target="_blank">
                    <i class="fa fa-facebook text-md"></i>    MedizoneBD.com </a>
                <i class="fa text-md fa-envelope-o"></i> order@MedizoneBD.com

            </div>

        </div>
        <br>
        <br>
    </div>

</div>
    <br>
    <br><br>
    <br>
    @endsection
