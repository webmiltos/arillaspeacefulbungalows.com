<?php /* Template Name: Template - Fleet */ ?>

<?php get_header(); ?>


<?php
$lang = 1;
$db_id = 485;
$cars_arr = getAllGcCarModels($lang, $db_id);
$models_arr = getGcCarModels($lang, $db_id);
// Fetch unique categories from the cars array
$categories = array();
foreach ($cars_arr as $car) {
    $categories[$car->type_name] = $car->type_name;
}
// Sort the categories alphabetically
asort($categories);

$total_vehicles = count($cars_arr);


// Check if a category is selected
if (isset($_POST['category'])) {
    $selected_category = $_POST['category'];
} else {
    $selected_category = 'All'; // Default to showing all cars
}
?>


<main class="site-content fleet-archive-page">

    <?php
    $image = get_field('intro_image');
    if (!empty($image)) : ?>
        <section class="intro-section" style="background-image: url(<?php echo $image['url']; ?>); background-size: cover;  background-repeat: no-repeat; filter: background-position: 35% 75%;">
            <div class="container show-on-scroll slide-left">
                <span class="pretitle"><?php the_field('intro_pretitle'); ?></span>
                <h1 class="title white extra-large bold"><?php the_field('intro_title'); ?></h1>
                <h2 class="no-font">Our Fleet</h2>
                <h3 class="no-font">Our Fleet</h3>
                <p class="content white"><?php the_field('intro_text'); ?></p>
            </div>

            <!-- <div class="fleet-page-intro-social-wrap">
                <p class="text white">Follow Panavia Trust:</p>
                <?php if (get_field('facebook', 'options')) : ?>
                    <a href="<?php the_field('facebook', 'options') ?>" class="text white" target="_blank">
                        <div class="icon-facebook-icon"></div>
                    </a>
                <?php endif; ?>

                <?php if (get_field('instagram', 'options')) : ?>
                    <a href="<?php the_field('instagram', 'options') ?>" class="text white" target="_blank">
                        <div class="icon-intagram-icon"></div>
                    </a>
                <?php endif; ?>
            </div> -->
        </section>
    <?php endif; ?>


    <div class="search-form-wrapper container full center show-on-scroll slide-up" style="transition-delay: 0.3s;">
        <?php echo do_shortcode('[search_form id="655"]'); ?>
    </div>




    <section class="fleet-section">
        <?php echo do_shortcode('[fleet id="652"]'); ?>

        <!-- <div class="container filter-wrap">
            <?php
            $total_vehicles = count($cars_arr);

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $selected_category = $_POST['category'];

                if ($selected_category != 'All') {
                    $total_vehicles = 0;
                    foreach ($cars_arr as $car) {
                        if ($car->type_name == $selected_category) {
                            $total_vehicles++;
                        }
                    }
                }
            }
            ?>
            <p class="text medium bold main-color"><?php echo ($total_vehicles == 1) ? '1 Vehicle' : $total_vehicles . ' Vehicles'; ?></p>
            <form method="post" action="">
                <div class="select-wrap">
                    <select name="category" id="category" onchange="this.form.submit()">
                        <option value="All" <?php echo ($selected_category == 'All') ? 'selected' : ''; ?>>All</option>
                        <?php
                        foreach ($categories as $category) {
                            echo "<option value='$category'";
                            echo ($selected_category == $category) ? ' selected' : '';
                            echo ">$category</option>";
                        }
                        ?>
                    </select>
                </div>
            </form>
        </div> -->


        <!-- <ul class="fleet-collection-wrap container flex">
            <?php
            $cars_found = false;

            foreach ($cars_arr as $car) {
                if ($selected_category == 'All' || $car->type_name == $selected_category) {
                    $cars_found = true;
            ?>
                    <li class="single-fleet-wrap single-item">
                        <a href="<?php the_field('reservations_link', 'options'); ?>" class="gc-car_search">
                            <div class="gc-image-wrap">
                                <?php if (!empty($car->thumb_path)) : ?>
                                    <img class="contain" src="<?php echo $car->thumb_path; ?>" alt="<?php echo $car->make_name . ' ' . $car->model_name; ?>">
                                <?php endif; ?>
                            </div>
                            <p class="gc-car_category">
                                <?php echo $car->type_name; ?>
                            </p>
                            <p class="gc-car_name">
                                <span>
                                    <?php echo $car->make_name . ' ' . $car->model_name; ?>
                                </span>
                            </p>
                            <p class="gc-car_description"><?php echo $car->model_description; ?></p>
                            <ul class="gc-car_features" style="order:5">
                                <li class="">
                                    <span class="icon-handbag"></span>
                                    <p><?php echo $car->doors; ?></p>
                                </li>
                                <li data-feature="passengers">
                                    <span class="icon-seats-alt"></span>
                                    <p> <?php echo $car->passengers; ?></p>
                                </li>
                                <li class="luggages">
                                    <span class="icon-luggage-alt"></span>
                                    <p> <?php echo $car->luggages; ?></p>
                                </li>
                                <li class="handbags">
                                    <span class="icon-handbag"></span>
                                    <p> <?php echo $car->handbags; ?></p>
                                </li>
                                <li class="transmission">
                                    <span class="icon-manual"></span>
                                    <p> <?php echo $car->transmission; ?></p>
                                </li>
                                <li class="air_condition">
                                    <span class="icon-ac"></span>
                                    <p> <?php echo $car->air_condition; ?></p>
                                </li>
                                <!-- Add more details as needed -->
        </ul>


        <div class="gc-car_price" style="order:6">
            <span>from</span>
            <p class="price"><?php echo number_format($car->lowest_price, 2); ?><span>€</span></p>
            <span class="rent-type">/day</span>
        </div>

        <button class="gc-car_button button solid arrow" style="order:7">
            Book Now
        </button>
        </a>
        </li>
<?php
                }
            }

            // If no cars are found, display "No cars" message
            if (!$cars_found) {
                echo "No cars";
            }
?>
</ul> -->
    </section>



</main>

<?php get_footer(); ?>