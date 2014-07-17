<?php defined('APP_PATH') OR die('Access denied'); ?>

<form class="form-horizontal gora" role="form" action="index.php/send" method="POST">
    <div class="form-group">
        <div class="col-sm-10">
            <input
                type="text"
                name="address"
                class="form-control input-lg"
                id="inputEmail3"
                placeholder="Input Defcoin Wallet Address And Get Free Defcoins"
            />
        </div>
        <div class="col-sm-2">
            <button type="submit" class="btn btn-default btn-lg">Send me some free DFC!</button>
        </div>
    </div>
</form>

<p class="center">
    <?php if (1 == $status): ?>
        You gained <?php echo $DFC; ?> <strong>DFC</strong>.
        <br>
        Please donate us so there will be water in our bowl so we can give you <strong>DFC</strong>.
        <br>
    <?php elseif (2 == $status): ?>
        Sorry but we are out of money T_T.
        <br>
        Please donate us so there will be water in our bowl so we can give you <strong>DFC</strong>.
        <br>
    <?php elseif (3 == $status): ?>
        Sorry but you were using this faucet today. Please come back tommorrow.
        <br>
        Please donate us so there will be water in our bowl so we can give you <strong>DFC</strong>.
        <br>
    <?php else: ?>
        This water bowl (aka "<strong>faucet</strong>") is a service
        that allows you to receive free <strong>Defcoins</strong> by simply inputing your address.
        <br>
        Please donate us so there will be water in our bowl so we can give you <strong>DFC</strong>.
        <br>
    <?php endif; ?>

    <?php echo $account_address; ?>
</p>

<div class="row gora2">
    <div class="col-sm-4 center">
        Average Payout:
        <br>
        <strong><?php echo sprintf('%.8f',(float) ($payout_average)); ?></strong>
    </div>

    <div class="col-sm-4 center">
        Daily Payout:
        <br>
        <strong><?php echo sprintf('%.8f',(float) ($payout_daily)); ?></strong>
    </div>

    <div class="col-sm-4 center">
        Total Payout:
        <br>
        <strong><?php echo sprintf('%.8f',(float) ($payout_total)); ?></strong>
    </div>
</div>
