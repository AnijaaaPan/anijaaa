<!DOCTYPE html>
<html>

<head>
  <title>From Laravel Mail</title>
</head>

<body>
  <h1>{{ $details['title'] }}</h1>
  <h3 style="margin: 0;">会社・団体名：</h3>
  <p style="margin: 0;padding-left:1em;">{{ $details['company'] ?? '※データ無し' }}</p>
  <br>
  <h3 style="margin: 0;">お名前：</h3>
  <p style="margin: 0;padding-left:1em;">{{ $details['name'] ?? '※データ無し' }}</p>
  <br>
  <h3 style="margin: 0;">フリガナ：</h3>
  <p style="margin: 0;padding-left:1em;">{{ $details['nameKana'] ?? '※データ無し' }}</p>
  <br>
  <h3 style="margin: 0;">メールアドレス：</h3>
  <p style="margin: 0;padding-left:1em;">{{ $details['address'] ?? '※データ無し' }}</p>
  <br>
  <h3 style="margin: 0;">所属部署名：</h3>
  <p style="margin: 0;padding-left:1em;">{{ $details['department'] ?? '※データ無し' }}</p>
  <br>
  <h3 style="margin: 0;">電話番号：</h3>
  <p style="margin: 0;padding-left:1em;">{{ $details['phone'] ?? '※データ無し' }}</p>
  <br>
  <h3 style="margin: 0;">URL：</h3>
  <p style="margin: 0;padding-left:1em;">{{ $details['url'] ?? '※データ無し' }}</p>
  <br>
  <h3 style="margin: 0;">お問い合わせ内容：</h3>
  <p style="margin: 0;padding-left:1em;">{{ $details['message'] ?? '※データ無し' }}</p>
</body>

</html>