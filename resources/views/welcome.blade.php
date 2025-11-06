<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Recipes</title>

  <style>
    /* 全体の基本設定 */
    body {
      background: #fffaf0;
      font-family: "Hiragino Maru Gothic Pro", sans-serif;
      margin: 0;
    }

    /* タイトルだけ中央 */
    .title-area {
      text-align: center;
      margin-top: 40px;
    }

    /* カードを並べる“場”だけにレイアウト＆共通スタイルを持たせる */
    .board {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 40px;
      padding: 40px;
      justify-items: center;
      justify-content: center;
      max-width: 800px;
      margin: 0 auto;
      text-align: center;
      color: #3b2f2f;
    }

    .card {     /* カードそのものの“箱”の見た目だけここで書く */
      background: #fff8dc;
      border: 2px solid #deb887;
      border-radius: 14px;
      box-shadow: 4px 4px 0 #d2b48c;
      width: 360px;
      padding: 30px;
      display: block; /* ← 全体をクリックできるように */
      text-decoration: none; /* 下線消す */
      color: inherit; /* 文字色を保つ */
      transition: transform 0.2s ease, box-shadow 0.2s ease; /* ← ふわっと動く滑らかさ */
    }

    .card:hover {
      transform: translateY(-6px); /* ← 上にふわっと浮く */
      box-shadow: 8px 8px 0 #caa472; /* ← 影を少し濃くして立体感アップ */
    }

    .card h2 {
      margin-bottom: 12px;
      font-size: 25px;
      color: #4b2e05;
    }

    .card p {
      font-size: 18px;
      line-height: 1.8;
    }

    .card img {
     width: 100%;
     height: 180px;
     object-fit: cover; /* ← 枠に合わせて自然にトリミング */
     border-radius: 10px;
     margin-bottom: 10px;
    }

  </style>

</head>


<body>
    <div class="title-area">
        <h1>🍝 My Recipes 🍮</h1>
        <p>好きな喫茶店の味！</P>
    </div>

    <div class="board">
     <a href="/recipe" class="card">
        <img src="/images/napolitan.png" alt="喫茶店のナポリタン">
        <h2>☕️喫茶店のナポリタン🍅</h2>
        <p>✴︎奥行きのある味わいに仕上げました</p>
     </a>
     <a href="/recipe2" class="card">
        <img src="/images/omelet-rice.png" alt="ふわとろオムライス">
        <h2>🍳ふわとろオムライス🥚</h2>
        <p>✴︎優しい卵の香りとバターの風味。喫茶店の定番の味に癒されます。</p>
     </a>
     <a href="/recipe3" class="card">
        <img src="/images/potato-salad.png" alt="ポテトサラダ">
        <h2>🥗ポテトサラダ🥔</h2>
        <p>✴︎マヨ控えめ、素材の甘みを活かしたシンプルな味わい。</p>
     </a>
     <a href="/recipe4" class="card">
        <img src="/images/tiramisu.png" alt="夜ふかしティラミス">
        <h2>🍰夜ふかしティラミス☕️</h2>
        <p>✴︎ほろ苦さと甘さのバランスが夜にぴったり。疲れた日に食べたいデザート。</p>
     </a>
    </div>

</body>
</html>