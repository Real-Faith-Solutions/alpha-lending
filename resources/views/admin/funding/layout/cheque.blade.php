
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Cheque Format</title>
  </head>
  <style>
.underline{
	border-bottom: 1px solid black
}
.center-text{
    text-align: center;
}
.signature{
    border-top: 1px solid black;
}


  </style>
  <body class="container">
<div class="row mt-5">
<div class="col-md-8">
    <h4>{{$cheque->borrower}}</h4>
    <p>*** {{$loanAmountToWord}} PESOS ONLY ***</p>
</div>
<div class="col-md-4">
{{date('M d, Y')}}
    <h5><b>₱ {{number_format($cheque->loan_worth,2)}}</b></h5>
</div>
</div>
  </body>
  </html>

