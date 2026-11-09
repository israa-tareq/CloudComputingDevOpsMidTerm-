<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App 2 - Dashboard</title>
    <style>
        body {
            background-color: #F8EFDA;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
        }
        .container {
            width: 100%;
            max-width: 460px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .badge {
            background-color: rgba(122, 132, 80, 0.18);
            color: #4E5630;
            padding: 4px 14px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.5px;
            display: inline-block;
            border: 1px solid rgba(122, 132, 80, 0.3);
            text-transform: uppercase;
        }
        .header h1 {
            color: #4E5630;
            font-size: 24px;
            font-weight: 700;
            margin-top: 8px;
            margin-bottom: 0;
        }
        .card {
            background-color: #5C653C;
            border-radius: 20px;
            padding: 32px 28px;
            box-shadow: 0 15px 35px rgba(92, 101, 60, 0.25);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .card-title {
            color: #F8EFDA;
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 20px;
            text-align: center;
        }
        .metric-box {
            background-color: #F8EFDA;
            border-radius: 14px;
            padding: 18px 20px;
            margin-bottom: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .metric-box h2 {
            margin: 0;
            color: #5C653C;
            font-size: 15px;
            font-weight: 700;
        }
        .metric-box p {
            margin: 0;
            color: #2c3e2d;
            font-size: 24px;
            font-weight: bold;
        }
        .status-alert {
            background-color: rgba(248, 239, 218, 0.15);
            color: #F8EFDA;
            padding: 12px 16px;
            border-radius: 12px;
            margin-top: 20px;
            font-size: 14px;
            text-align: center;
            border: 1px solid rgba(248, 239, 218, 0.3);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="badge">App 2</div>
            <h1>System Dashboard</h1>
        </div>

        <div class="card">
            <div class="card-title">Live Metrics Overview</div>

            <div class="metric-box">
                <h2>Total Visits</h2>
                <p>{{ $visits }}</p>
            </div>

            <div class="metric-box">
                <h2>Total Messages</h2>
                <p>{{ $messages }}</p>
            </div>

            <div class="status-alert">
                Status: {{ $status }}
            </div>
        </div>
    </div>
</body>
</html>