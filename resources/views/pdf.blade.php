<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
    <script src="{{ asset('qrcode.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
  <style>
#qrcode img {
  width: 100px;
}
  </style>
</head>
<body>

    <div class="container">
        <div id="divToExport">
        <div class="row" style="border-bottom: 4px solid #000;
                padding-bottom: 1rem;
                margin-bottom: 5rem;">
            <div class="col-md-3">
                <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('L.png'))) }}" alt="">
            </div>
            <div class="col-md-9">
                <h6>Эмгек, социалдык камсыздоо жана миграция министрилиги Миграция маселеси боюнча башкармалыгы
                    Министерство труда, социального обеспечения и миграции Кыргызской Республики
                    Управление по вопросам миграции</h6>
            </div>
        </div>
        <div class="row" style="margin-bottom: 1rem;">
            <div class="col-md-6">
                <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path($data->photo ?? ''))) }}" alt="">
            </div>
            <div class="col-md-6">
                <div id="qrcode"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h6>фамилия / Last Name : {{ $data->last_name }}</h6>
                <br>
                <h6>имя / First Name : {{ $data->last_name }}</h6>
                <br>

                <h6>Дата рождения / Date of Birth : {{ $data->dob }}/h6>
                <br>

                <h6>номер паспорта / Passport NO : {{ $data->passport }}</h6>
                <br>

                <h6>страна / Country : {{ $data->country }}</h6>
                <br>

                <h6>номер разрешения на работу / Number of work permit : {{ $data->number_of_work_permit }}</h6>
                <br>

                <h6>Срок действия разрешения на работу / Work Permit Validity : {{ $data->work_permit_validity }}</h6>
                <br>

                <h6>позиция / Position : {{ $data->position }}</h6>
                <br>

                <h6>Организация / Organization : {{ $data->organization }}</h6>
                <br>

                <h6>рабочий регион / Work Region : {{ $data->work_region }}</h6>
                <br>

                <h6>дата и время выдачи / issue date and time : {{ $data->date_issue }}</h6>
            </div>
        </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                    <button type="button" onclick="generatePDF()" class="btn btn-success" style="width: 100%">Download</button>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript">
    new QRCode(document.getElementById("qrcode"), "http://ework.e-govkg.com/1");
    </script>

<script type="text/javascript">
    function generatePDF() {

          // Choose the element id which you want to export.
          var element = document.getElementById('divToExport');
          element.style.width = '800px';
          element.style.height = '950px';
          var opt = {
              margin:       0.5,
              filename:     'myfile.pdf',
              image:        { type: 'jpeg', quality: 1 },
              html2canvas:  { scale: 1 },
              jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait',precision: '12' }
            };

          // choose the element and pass it to html2pdf() function and call the save() on it to save as pdf.
          html2pdf().set(opt).from(element).save();
        }
  </script>
</html>
