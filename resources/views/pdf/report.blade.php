<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <style>
        /* Define your CSS styles here */
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Report</h1>
        <p>Date: {{ date('d/m/Y') }}</p>
        <p>This is a sample report.</p>
        <hr />
        <table>
            <thead>
                <tr>
                    <th style="text-align: center;">Name</th>
                    <th style="text-align: center;">Date</th>
                    <th style="text-align: center;">Type</th>
                    <th style="text-align: center;">Phone</th>
                    <th style="text-align: center;">Taka</th>
                </tr>
            </thead>
            <tbody>
                {{ $totals = 0 }}
                @foreach($data as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ \Carbon\Carbon::parse($item->updated_at)->format('d/m/Y') }}</td>
                    <td>{{ $item->type }}</td>
                    <td>{{ $item->phone }}</td>
                    <td  style="text-align: right;">{{ $item->amount }} Tk</td>
                </tr>
                {{ $totals += $item->amount }}
                @endforeach
                <tr>
                    <td colspan="4" style="text-align: right;">Total Amount</td>
                    <td  style="text-align: right;">{{ $totals }} Tk</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
