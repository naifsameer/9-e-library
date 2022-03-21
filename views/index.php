<?php include 'includes/nav.php'; ?>

<?php
// echo
// "<pre>";
// var_dump($params);
// echo "</pre>";
// // exit;
?>

<!-- posts list -->
<?php if (isset($params)) { ?>
    <div class="mt-8 container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        <?php foreach ($params as $key) {    ?>
            <div class="overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
                <img class="object-cover w-full h-64" src="images/<?php echo $key['image'] ?>" alt="Article">

                <div class="p-6">
                    <span class="text-xs font-medium text-blue-600 uppercase dark:text-blue-400"><?php echo $key['category']; ?></span>

                    <a href="/post?id=<?php echo $key['postsID']; ?>" class="block mt-2 text-2xl font-semibold text-gray-800 transition-colors duration-200 transform dark:text-white hover:text-gray-600 hover:underline">
                        <?php echo $key['title'] ?>
                    </a>

                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                        <?php echo $key["content"]; ?>
                    </p>
                </div>
            </div>
        <?php } ?>

    </div>
<?php } ?>