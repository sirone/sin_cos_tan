<html>
  <head>
    <title>正弦・余弦・正接テーブル</title>
    <?php $version = time(); ?>
    <?php $data = array( 'sin' => array(), 'cos'=>array(), 'tan'=>array() ); ?>
    <link rel="stylesheet" href="css/default.css?v=<?php echo $version; ?>">
  </head>
  <body>
    <?php // _/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/ ?>
    <?php // ページ上部メニュー ?>
    <?php // _/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/ ?>
    <div class="menu" id="menu">
      <div class="menu-title">
        コンテンツメニュー
      </div>
      <div class="menu-indexes">
        <a href="#all-table">正弦・余弦・正接テーブル</a><br />
        <a href="#sin-table">正弦テーブル</a><br />
        <a href="#cos-table">余弦テーブル</a><br />
        <a href="#tan-table">正接テーブル</a><br />
      </div>
    </div>

    <?php // _/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/ ?>
    <?php // 正弦・余弦・正接 ?>
    <?php // _/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/ ?>
    <div>
      <h1 id="all-table">正弦・余弦・正接</h1>
      <a href="#menu">メニューに戻る</a>
    </div>
    <table>
      <thead>
        <tr>
          <td>度</td>
          <td>正弦</td>
          <td>余弦</td>
          <td>正接</td>
        </tr>
      </thead>
      <tbody>
<?php for( $i=0; $i<=180; $i++ ) : ?>
        <tr>
          <td><?php echo sprintf('%d°',$i); ?></td>
          <td><pre><?php echo $data['sin'][$i]=sprintf("%' 9.6f",sin(deg2rad($i))); ?></pre></td>
          <td><pre><?php echo $data['cos'][$i]=sprintf("%' 9.6f",cos(deg2rad($i))); ?></pre></td>
          <td><pre><?php echo $data['tan'][$i]=sprintf("%' 9.4f",tan(deg2rad($i))); ?></pre></td>
        </tr>
        <?php // JSON 用に型キャスト. ?>
        <?php $data['sin'][$i] = (float)$data['sin'][$i]; ?>
        <?php $data['cos'][$i] = (float)$data['cos'][$i]; ?>
        <?php $data['tan'][$i] = (float)$data['tan'][$i]; ?>
<?php endfor; ?>
      </tbody>
    </table>
    <br class="clearfix" />

    <?php // _/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/ ?>
    <?php // 正弦 ?>
    <?php // _/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/ ?>
    <div>
      <h1 id="sin-table">正弦</h1>
      <a href="#menu">メニューに戻る</a>
    </div>
    <table>
      <thead>
        <tr>
          <td>正弦</td>
        </tr>
      </thead>
      <tbody>
<?php for( $i=0; $i<=180; $i++ ) : ?>
        <tr>
          <td><pre><?php echo sprintf("%' 9.6f",sin(deg2rad($i))); ?></pre></td>
        </tr>
<?php endfor; ?>
      </tbody>
    </table>
    <?php // _/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/ ?>
    <?php // 正弦 JSON 配列 ?>
    <?php // _/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/ ?>
    <textarea cols="55" rows="30"><?php echo json_encode( $data['sin'] ); ?></textarea>
    <br class="clearfix" />

    <?php // _/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/ ?>
    <?php // 余弦 ?>
    <?php // _/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/ ?>
    <div>
      <h1 id="cos-table">余弦</h1>
      <a href="#menu">メニューに戻る</a>
    </div>
    <table>
      <thead>
        <tr>
          <td>余弦</td>
        </tr>
      </thead>
      <tbody>
<?php for( $i=0; $i<=180; $i++ ) : ?>
        <tr>
          <td><pre><?php echo sprintf("%' 9.6f",cos(deg2rad($i))); ?></pre></td>
        </tr>
<?php endfor; ?>
      </tbody>
    </table>
    <?php // _/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/ ?>
    <?php // 余弦 JSON 配列 ?>
    <?php // _/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/ ?>
    <textarea cols="55" rows="30"><?php echo json_encode( $data['cos'] ); ?></textarea>
    <br class="clearfix" />

    <?php // _/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/ ?>
    <?php // 正接 ?>
    <?php // _/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/ ?>
    <div>
      <h1 id="tan-table">正接</h1>
      <a href="#menu">メニューに戻る</a>
    </div>
    <table>
      <thead>
        <tr>
          <td>正接</td>
        </tr>
      </thead>
      <tbody>
<?php for( $i=0; $i<=180; $i++ ) : ?>
        <tr>
          <td><pre><?php echo sprintf("%' 9.4f",tan(deg2rad($i))); ?></pre></td>
        </tr>
<?php endfor; ?>
      </tbody>
    </table>
    <?php // _/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/ ?>
    <?php // 正接 JSON 配列 ?>
    <?php // _/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/ ?>
    <textarea cols="55" rows="30"><?php echo json_encode( $data['tan'] ); ?></textarea>
    <br class="clearfix" />
  </body>
</html>