<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App 1 - Message Collector</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style> 
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        body {
            background-color: #F8EFDA; 
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
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
        }
        .header h1 {
            color: #4E5630;
            font-size: 24px;
            font-weight: 700;
            margin-top: 8px;
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
        .alert-success {
            background-color: rgba(248, 239, 218, 0.15);
            color: #F8EFDA;
            padding: 12px 16px;
            border-radius: 12px;
            margin-bottom: 20px;
            font-size: 14px;
            text-align: center;
            border: 1px solid rgba(248, 239, 218, 0.3);
        }
        .form-group {
            margin-bottom: 20px;
        }
        textarea {
            width: 100%;
            height: 120px;
            padding: 14px 16px;
            background-color: #F8EFDA;
            border: 2px solid transparent;
            border-radius: 14px;
            color: #333;
            font-size: 15px;
            resize: none;
            outline: none;
            transition: all 0.3s ease;
        }
        textarea:focus {
            border-color: #A3AF74;
            box-shadow: 0 0 0 4px rgba(248, 239, 218, 0.2);
        }
        .btn-submit {
            width: 100%;
            padding: 14px;
            background-color: #7A8450;
            color: #F8EFDA;
            border: none;
            border-radius: 14px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }
        .btn-submit:hover {
            background-color: #697243;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
        }
        .btn-submit:active {
            transform: translateY(0);
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header">
            <span class="badge">APP 1</span>
            <h1>Message Collector</h1>
        </div>

        <div class="card">
            <h2 class="card-title">Submit Your Message</h2>

            @if(session('success'))
                <div class="alert-success">
                    <i class="fa-solid fa-circle-check"></i> {{ session('success') }}
                </div>
            @endif

            <form action="/messages" method="POST">
                @csrf
                <div class="form-group">
                    <textarea name="message" placeholder="Write your message here..." required></textarea>
                </div>
                <button type="submit" class="btn-submit">
                    Send Message <i class="fa-solid fa-paw"></i>
                </button>
            </form>
        </div>
    </div>

</body>
</html>