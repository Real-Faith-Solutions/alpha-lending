
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Promissory Note Contract</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <style>
    .data{
      border-bottom: 1px solid black;
      padding-left: 1%;
    }
    p{
      text-align: justify;
    }
    section{
      margin-bottom: 3%;
    }
    .signature{
      border-top: 1px solid black;

    }

  </style>

  <body class="container">
    <button class="btn btn-success float-end">
      Print PDF
    </button>
    <h2 class="text-center my-5">
      PROMISSORY NOTE
    </h2>

    <section class="row mb-5">
      <div class="col-md">
        <div class="row">
          <div class="col-md-3">
            <h6>PIN Number </h6>
          </div>

          <div class="col-md border-bottom-1-black">
            <p class="data">: {{ $loan->document_no }}</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <h6>Principal Amount </h6>
          </div>

          <div class="col-md">
            <p class="data">: PHP {{number_format($loan->amount,2)}}</p>
          </div>
        </div>
    </div>

      <div class="col-md">
        <div class="row">
          <div class="col-md-3">
            <h6>Value Date</h6>
          </div>

          <div class="col-md">
            <p class="data">: {{date('F d, Y')}}</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <h6>Maturity Date</h6>
          </div>

          <div class="col-md">
            <p class="data">: {{ date('F d, Y', strtotime($loan->maturity_date)) }}</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <h6>Normal interest rate</h6>
          </div>

          <div class="col-md">
            <p class="data">: 3%</p>
          </div>
        </div>
    </div>
    </section>

    <section>
      <p>
        FOR VALUE RECEIVED, from the proceeds of loan. I/We
        <u class="fw-bold">
          (the "BORROWER/S")
        </u>
        hereby promise to pay solidarily, without need for
        <u class="fw-bold">
        {{$loanAmountToWord}} PESOS (  PHP {{number_format($loan->amount,2)}}  ):
        </u>
        Philippine Currency, together with nominal interest thereon at the rate of
        <u class="fw-bold">
          5%
        </u>
        per month,
      </p>
      <p>
        The LOAN and the interests accuring thereon shall be paid on the following manner:
      </p>

      <table class="table-bordered w-100">
        <tbody>
          <tr>
            <td>Weekly Payment</td>
            <th>
            {{$amountToWord}} PESOS ( PHP {{number_format($amount,2)}} )
            </th>
          </tr>

          <tr>
            <td>Number of Weekly installment</td>
            <th>
            {{$loan->terms}}
            </th>
          </tr>

          <tr>
            <td>Commencement Date and Weekly thereafter</td>
            <th>
              and Weekly thereafter
            </th>
          </tr>
        </tbody>
      </table>
    </section>

    <section>
      <p>
        I/We also agree to pay, solidarily, a penalty of One Thousand Three Hundred Pesos (Php 1,300.00) or 25% of the amount of check dishonored, whichever is higher, for every overdue check. Any dishonored check unredeemed after five calendar days from maturity, without the need  of notice, shall be subject to a  an additonal 5% monthly interest thereon until fully paid. For check held on due date of check shall have a holding fee of Five Hundred Pesos (Php 500.00) per day.
      </p>

      <p>
        Failure to pay this note or any installment thereof, when due and without need for prior notice or demand, shall constitute default for purpose of any action of any kind instituted against me/us by the  ABLC and shall render the entire amount owing due and demandable without prior notice.
      </p>

      <p>
       In the event that notice or any installment thereof is not paid upon maturity, or when the same becomes due under any of the provisions hereof I/we hereby authorize ABLC at its option and without prior notice to apply to the payment thereof any and all monies securities and things of value which may be in its possesion, on deposit or otherwise belonging to me/us, and, for this purpose, I/we hereby solidarily, irrevocably constitute and appoint ABLC and any of its authorized agents to be my/our lawful attorney(s)-in-fact, with full powers and authority for me/us and in my/our name and stead, without prior notice, or negotiate, sell and transfer any monies, securities and things of value which it holds by public or private sale, and apply the proceeds thereof to the payment of this note and penalties that may have accured thereon.
      </p>

      <p>
        It is further understood that any partial payment or performance of this note or any extension hereafter granted will not be constructed as to alter or vary the conditions of the original obligation, or discharge the same, and such partial payment or performances shall be considered as written acknowledgement of this obligation which shall interrupt any period of prescription.
      </p>
      <p>
        I/We hereby expressly consent to be bound by any extension of payment and/or renewal of this note in whole or in part, which may be granted to anyone or all of us, without need of our consent, under such terms and conditions indicated herein without need of executing a new or a renewal note, as I/We further agree that any interest that may have been collected in advance or on the original note cannot be refunded as interest rebates, in the event that renewal of this note is granted to me/us with neither notice nor consent.
      </p>

      <p>
        In the event that ABLC should refer this note for collection to an attorney-at-law, I/we hereby expressly agree to pay solidarily, twenty-five (25%) of the total amount due on this note as attorney's fees, which in no case shall be less than Five Thousand Pesos (Php 5,000.00), exclusive of all fees and costs allowed by law. I/We furthermore agree to pay ABLC a service charge at the highest rate authorized by law at the time of the incurrence of this obligation and the maximum rate allowed by law with respect to such other charges, fines or penalties that the law may hereinafter or from time to time authorize ABLC to collect hereon.
      </p>

      <p>
        Interest not paid when due shall be computed, added to and from part of the principal amount owing every thirty days, and the same shall bear interest at the same rate of interest indicated herein.
      </p>

      <p>
        The ABLC or any lawful holder hereof may accept partial payment and grant renewals or extensions of payments, reserving its right of recourse against any and all of the co-borrowers hereof and each and every endorser hereto.
      </p>
      <p>
        Any action arising out of this agreement shall be filled with the proper court Dasmarinas City or with the proper court of the place where ABLC has a branch office, at the sole  option of ABLC.
      </p>

      <h6>
        THE UNDERSIGNED HEREBY AFFIRM AND ACKNOWLEDGE THAT IT HAS CAREFULLY READ AND UNDERSTOOD ALL THE FOREGOING STIPULATIONS, THAT THE AGGREGATE AMOUNT OF ACCURED OBLIGATIONS AS APPEARING IN THE BOOKS AND RECORDS OF THE LENDER IS TRUE AND CORRECT.
      </h6>
    </section>

    <section>
      <div class="row text-center">
        <div class="col-md signature mx-2">
          <span>
            Borrower <small>(Signature over printed name)</small>
          </span>
          <h6>
            <!-- address here -->
          </h6>
          <p class="signature mt-5 text-center">Address</p>
        </div>

         <div class="col-md signature mx-2">
          <span>
            Co-Borrower <small>(Signature over printed name)</small>
          </span>

          <h6>
            <!-- address here -->
          </h6>
          <p class="signature mt-5 text-center">Address</p>
        </div>

         <div class="col-md signature mx-2">
          <span>
            Co-Borrower <small>(Signature over printed name)</small>
          </span>

          <h6>
            <!-- address here -->
          </h6>
          <p class="signature mt-5 text-center">Address</p>
        </div>
      </div>
    </section>

    <section>
      <div class="col-md-4 mx-2 text-center">
        <span>
          PETER YUNG
        </span>
        <p class="fw-bold signature text-center">
          ALPHA BUSINESS LENDING CORP. ( LENDER )
        </p>
      </div>
    </section>

    <section>
      <h6 class="my-5">Signed in presence of :</h6>
      <div class="row">
        <div class="col-md-4 mx-2 text-center">
          <span>
            MARDE MACALANDA
          </span>
          <p class="fw-bold signature text-center">
            WITNESS
          </p>
        </div>

        <div class="col-md-4 mx-2 text-center center">
          <span>
            MARIJERY A. VALENCIA
          </span>
          <p class="fw-bold signature text-center">
            WITNESS
          </p>
        </div>

      </div>

    </section>

    <section>
      <h6 class="text-center">
        Acknowledgement
      </h6>
      <h6>
        Republic of the Philippines
      </h6>
      <p>
        Before me a notary public for

        <u class="fw-bold">
          {{$loan->borrower}}
        </u>
        ,this
        <u class="fw-bold">
          {{date('d')}}
        </u>
        day of
        <u class="fw-bold">
          {{date('F')}}
        </u>
        personally appeared;
      </p>

      <div class="row">
        <div class="col-md">
          <h6>Name</h6>
          <p>MARILLA, ALBINA OLICIA</p>
          <p>ANNIE CIVIL JACOSALEM</p>
          <p>PETER YUNG</p>
        </div>

        <div class="col-md">
          <h6>Competent Evidence of Identity</h6>
          <p>N01-12-013194</p>
          <p>UMID ID/ CRN:0111-7951360-5</p>
          <p>DRIVER LICENSE:NO4-92-228709</p>
        </div>

        <div class="col-md">
          <h6>Validity</h6>
        </div>
      </div>

      <p>
        Known to me and to me known to be same person(s) who executed the foregoing instrument and they acknowledged to me that the same was executed by their own free will and voluntary act and deed/and/or of the corporation he/she/they represent.
      </p>

      <p>
        Witness my hand and seal on the date and place above mentioned.
      </p>

      <div class="row">
        <div class="col-md-4">
          <p>Doc. no. :
            <u class="fw-bold">
              00000
            </u>
          </p>

          <p>Page. no. :
            <u class="fw-bold">
              0001
            </u>
          </p>

          <p>Book. no. :
            <u class="fw-bold">
              0002
            </u>
          </p>
          <p>Series of :
            <u class="fw-bold">
              00000
            </u>
          </p>
        </div>

        <div class="col-md-4">
          <p>NOTARY PUBLIC</p>

        </div>

      </div>
    </section>






  </body>
</html>