<!DOCTYPE html>
<html>
<head>
    <title>Lodgement of Claims</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="mb-3">Lodgement of Claims – APARA</h4>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">{{ $errors->first() }}</div>
            @endif

           <form method="POST" action="">
    @csrf


                <div class="mb-3">
                    <label>Bank / FI Name</label>
                    <input type="text" name="bank_fi_name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>CPA Guarantee No</label>
                    <input type="text" name="cpa_guarantee_no" class="form-control" required>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label>Guarantee Issued Date</label>
                        <input type="date" name="guarantee_issued_date" class="form-control" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Last Installment Paid Date</label>
                        <input type="date" name="last_installment_paid_date" class="form-control" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Claim Lodged Date</label>
                        <input type="date" name="claim_lodged_date" class="form-control" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label>Reason for Default</label>
                    <textarea name="default_reason" class="form-control"></textarea>
                </div>

                <button class="btn btn-primary">Submit Claim</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
