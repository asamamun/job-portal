<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <style>
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body style="font-family: Arial, sans-serif;">
    <div class="container">
        <h1 style="text-align: center;">Report</h1>
        <p style="text-align: center;">This is a sample report.</p>
        <p>Date: {{ date('d/m/Y') }}</p>
        <table>
            <thead>
                <tr>
                    <th style="text-align: center;">Date</th>
                    <th style="text-align: center;">Name</th>
                    <th style="text-align: center;">Description</th>
                    <th style="text-align: center;">Type</th>
                    <th style="text-align: center;">Points</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr>
                    <td>{{ \Carbon\Carbon::parse($item->updated_at)->format('d/m/Y') }}</td>
                    <td>{{ $item->user->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->type }}</td>
                    <td style="text-align: right;">{{ $item->points }}</td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="4" style="text-align: right;">Total Points</td>
                    <td style="text-align: right;">500</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>