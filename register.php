<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #53687e;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-register {
            background-color: #4CAF50;
            color: white;
            border: none;
        }

        .btn-register:hover {
            background-color: #45a049;
        }

        .form-check-label a {
            color: #4CAF50;
            text-decoration: none;
        }

        .form-check-label a:hover {
            text-decoration: underline;
        }

        .small-text {
            color: #bbb;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>
    <div class="card bg-light">
        <h3 class="text-center mb-4">Register</h3>
        <p class="text-center small-text"></p>
        <form>
            <div class="row mb-3">
                <div class="col">
                    <input type="text" class="form-control" placeholder="ชื่อ" required>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="นามสกุล" required>
                </div>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="เบอร์ติดต่อ" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="เลขบัตรประจำตัวประชาชน" required>
            </div>
            <div class="mb-3">
                <label>เพศ</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
                    <label class="form-check-label" for="male">ชาย</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="female" required>
                    <label class="form-check-label" for="female">หญิง</label>
                </div>
            </div>
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="terms" required>
                <label class="form-check-label" for="terms">
                    ยินยอม <a href="#">ให้เก็บข้อมูล</a><a href="#">ส่วนบุคคล</a>
                </label>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-register">Register Now</button>
            </div>
        </form>
        <p class="text-center mt-3 small-text">
            Already have an account? <a href="#">Sign in</a>
        </p>
    </div>

</html>