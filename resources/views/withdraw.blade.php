<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Withdrawal Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    @include('inc.alert')
    <div class="container mt-5">
        <h2 class="mb-4">Withdrawal Form</h2>
        <form action="{{ route('withdraw.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="account" class="form-label">Account</label>
                <input type="text" class="form-control" id="account" name="account" required>
            </div>
            <div class="mb-3">
                <label for="types" class="form-label">Types</label>
                <select class="form-control" id="types" name='types' required>
                    <option value="">Select</option>
                    <option value="mobile banking">Mobile Banking</option>
                    <option value="bank account">Bank Account</option>
                    <option value="cash">Cash</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="account_number" class="form-label">Account Number</label>
                <input type="text" class="form-control" id="account_number" name="account_number" required>
            </div>
            <div class="mb-3">
                <label for="points" class="form-label">Points</label>
                <input type="number" class="form-control" id="points" name="points" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
</body>

</html>