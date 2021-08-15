<!DOCTYPE html>
<!-- <html lang="ja"> -->

<!-- <head>
  <meta charset="utf-8">
  <title>header_footer読み込み</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="ヘッダーとフッターを切り離して読み込ませる">
  <link rel="stylesheet" href="header_footer.css">
  <link rel="shortcut icon" href="favicon.ico">
</head> -->

<!-- <body> -->
<?php include('header.php') ?>
<!-- <header>New Webpage ヘッダ</header> -->

<main>
   <section>
     <h1>ヘッダーとフッターを切り離して読み込ませる</h1>
     <h2>全体のファイルを用意</h2>
     <p>.phpファイルを用意して全体をかく</P>
     <h2>ヘッダーの切り離し</h2>
     <p>.phpファイルでヘッダー用のファイルを用意。</P>
      <p>全体で描いたヘッダー部分をかく。</P>
      <p>全体のヘッダー部分を include()を使用してヘッダーファイルを読み込む</P>
      <h2>フッターの切り離し</h2>
     <p>.phpファイルでフッター用のファイルを用意。</p>
      <p> 全体で描いたフッター部分をかく。</P>
      <p>全体のフッター部分を include()を使用してフッターファイルを読み込む</P>
    </section>
   
</main>

<?php include('footer.php') ?>
<!-- <footer>New Webpage フッタ</footer> -->

</body>

</html>