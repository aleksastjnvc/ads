<?php $this->view("header",$data, $ad_data); ?>

<p>My ads will be displayed here.</p>

<?php foreach ($ads as $ad) : ?>
    <h3><?php echo $ad->heading; ?></h3>
    <p><?php echo $ad->description; ?></p>
    <p>Location: <?php echo $ad->location; ?></p>
    <!-- Display other ad details as needed -->
    <br>
<?php endforeach; ?>


<?php $this->view("footer", $data, $ad_data); ?>