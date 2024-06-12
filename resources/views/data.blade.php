<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-GOV</title>
</head>
<body>
    <h3>ESUVM system data on work permit</h3>

    <h4><strong>Status:</strong> @if ($data->status == 1)
        Work Permit Verified
    @else
        Work Permit not Verified
    @endif</h4>
    <br>
    <h4><strong>Last name:</strong> {{ $data->last_name }}</h4>

    <h4><strong>Name:</strong> {{ $data->name }}</h4>

    <h4><strong>Date of Birth:</strong> {{ $data->dob }}</h4>

    <h4><strong>Passport Number: {{ $data->passport_number }}</strong></h4>

    <h4><strong>Country:</strong> {{ $data->country }}</h4>

    <h4><strong>Work Permit Number:</strong> {{ $data->number_of_work_permit }} </h4>

    <h4><strong>Validity Period of the permit:</strong> {{ $data->work_permit_validity }} </h4>

    <h4><strong>Organization:</strong>{{ $data->organization }}</h4>

    <h4><strong>Organization tax code:</strong>{{ $data->tax_payer_code }}</h4>


    <h4><strong>Region:</strong>{{ $data->work_region }}</h4>


    <h4><strong>Issue date and Time:</strong>{{ $data->issue_date_and_time }}</h4>


</body>
</html>
