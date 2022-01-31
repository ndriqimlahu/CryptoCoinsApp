<?php
  require "./api_coins.php";

  function statsDataFromApiCoins($statsData) {
  ?>
    <br><br>
    <div class="container border border-dark bg-secondary rounded-3 mb-3 px-5" style="position:sticky;top:0">
      <div class="table-responsive">
        <table class="table table-borderless">
          <colgroup>
            <col style="width: 6%;min-width:auto;max-width:auto;">
            <col style="width: 12%;min-width:auto;max-width:auto;">
            <col style="width: 12%;min-width:auto;max-width:auto;">
            <col style="width: 10%;min-width:auto;max-width:auto;">
            <col style="width: 10%;min-width:auto;max-width:auto;">
            <col style="width: 12%;min-width:auto;max-width:auto;">
            <col style="width: 2%;min-width:auto;max-width:auto;">
            <col style="width: 2%;min-width:auto;max-width:auto;">
            <col style="width: 2%;min-width:auto;max-width:auto;">
          <thead>
            <tr class="h6 text-white text-center align-middle">
              <th class="header" scope="col">Rank</th>
              <th class="header" scope="col">Name</th>
              <th class="header" scope="col">Price</th>
              <th class="header" scope="col">Volume</th>
              <th class="header" scope="col">Market Cap</th>
              <th class="header" scope="col">Available Supply</th>
              <th class="header" scope="col">1hour %</th>
              <th class="header" scope="col">1day %</th>
              <th class="header" scope="col">1week %</th>
            </tr><br>
          </thead>
          </colgroup>
        </table>
      </div>
    </div>
    <?php
    foreach ($statsData as $stats) {
    ?>
      <div class="container border border-dark rounded-3 px-5 overlay-element">
        <div class="table-responsive">
          <table class="table table-borderless">
            <colgroup>
              <col style="width: 6%;min-width:auto;max-width:auto;">
              <col style="width: 16%;min-width:auto;max-width:auto;">
              <col style="width: 12%;min-width:auto;max-width:auto;">
              <col style="width: 10%;min-width:auto;max-width:auto;">
              <col style="width: 12%;min-width:auto;max-width:auto;">
              <col style="width: 14%;min-width:auto;max-width:auto;">
              <col style="width: 4%;min-width:auto;max-width:auto;">
              <col style="width: 4%;min-width:auto;max-width:auto;">
              <col style="width: 4%;min-width:auto;max-width:auto;">
            <tbody>
              <tr class="h6 small text-white text-center align-middle">
                <td><?php echo $stats->rank ?></td><br>
                <td><a href="<?php echo $stats->websiteUrl ?>" target="_blank">
                    <img src="<?php echo $stats->icon ?>" width="25" height="25">
                    <?php echo $stats->name ?> (<?php echo $stats->symbol ?>)</a></td>
                <td>$<?php echo $stats->price ?></td>
                <td>$<?php echo $stats->volume ?></td>
                <td>$<?php echo $stats->marketCap ?></td>
                <td><?php echo $stats->availableSupply ?> <?php echo $stats->symbol ?></td>
                <td><?php echo $stats->priceChange1h ?>%</td>
                <td><?php echo $stats->priceChange1d ?>%</td>
                <td><?php echo $stats->priceChange1w ?>%</td>
              </tr>
            </tbody>
            </colgroup>
          </table>
        </div>
      </div>
  <?php
    }
    ?>
  <br><br><br><br>
  <?php
  }

  function statsEmptyFromApiCoins($statsData) {
    ?>
    <br><br>
    <div class="container border border-dark bg-secondary rounded-3 mb-3 px-5" style="position:sticky;top:0">
      <div class="table-responsive">
        <table class="table table-borderless">
          <colgroup>
            <col style="width: 6%;min-width:auto;max-width:auto;">
            <col style="width: 12%;min-width:auto;max-width:auto;">
            <col style="width: 12%;min-width:auto;max-width:auto;">
            <col style="width: 10%;min-width:auto;max-width:auto;">
            <col style="width: 10%;min-width:auto;max-width:auto;">
            <col style="width: 12%;min-width:auto;max-width:auto;">
            <col style="width: 2%;min-width:auto;max-width:auto;">
            <col style="width: 2%;min-width:auto;max-width:auto;">
            <col style="width: 2%;min-width:auto;max-width:auto;">
          <thead>
            <tr class="h6 text-white text-center align-middle">
              <th class="header" scope="col">Rank</th>
              <th class="header" scope="col">Name</th>
              <th class="header" scope="col">Price</th>
              <th class="header" scope="col">Volume</th>
              <th class="header" scope="col">Market Cap</th>
              <th class="header" scope="col">Available Supply</th>
              <th class="header" scope="col">1hour %</th>
              <th class="header" scope="col">1day %</th>
              <th class="header" scope="col">1week %</th>
            </tr><br>
          </thead>
          </colgroup>
        </table>
      </div>
    </div>
    <?php
    if (empty($statsData)) {
    ?>
      <div class="container border border-dark rounded-3 mb-5 px-5 overlay-element">
        <div class="table-responsive">
          <table class="table table-borderless">
            <tbody>
              <tr class="h5 text-white text-center align-middle">
                <td>No statistics data has been found!</td><br>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
  <?php
    }
  }
?>