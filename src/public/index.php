<!-- <!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>予約ページ</title>
    </head>
    <body>
        <form action="complete.php" method="post">
            予約者名
            <input type="text" name="name" value="" /><br />

            Email
            <input type="text" name="email" value="" /><br />

            電話番号
            <input type="text" name="phone_number" value="" ><br />

            <br />

            <input type="submit" value="  送信" />
        </form>
    </body>
</html> -->

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>トップページ</title>
    <!-- Tailwind CSS を読み込む -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mx-auto py-10">
        <form action="complete.php" method="post" class="mt-6">
            <div class="mb-4">
                <label for="name" class="block text-sm text-gray-600">予約者名</label>
                <input type="text" class="form-input border border-gray-300" name="name" id="name">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm text-gray-600">Email</label>
                <input type="email" class="form-input border border-gray-300" name="email" id="email">
            </div>
            <div class="mb-6">
                <label for="phone_number" class="block text-sm text-gray-600">電話番号</label>
                <textarea class="form-textarea border border-gray-300" name="phone_number" id="phone_number" rows="6"></textarea>
            </div>
            <button class="bg-blue-500 text-white py-2 px-6 rounded hover:bg-blue-600" type="submit">送信</button>
        </form>
    </div>
</body>
</html>
